<?php 

// include "code/db_connection.php";

// Default name if not logged in
$adminName = "Admin";

// Fetch full name from DB if session exists
if (isset($_SESSION['admin_id'])) {
    $admin_id = $_SESSION['admin_id'];
    $stmt = $conn->prepare("SELECT full_name FROM admin WHERE id = ?");
    $stmt->bind_param("i", $admin_id);
    $stmt->execute();
    $stmt->bind_result($full_name);
    if ($stmt->fetch()) {
        $adminName = htmlspecialchars($full_name);
    }
    $stmt->close();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #667eea;
            --secondary-color: #764ba2;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            height: 100vh;
            width: var(--sidebar-width);
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 20px 0;
            z-index: 1050;
            overflow-y: auto;
            transition: left 0.3s ease;
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar-brand {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 20px;
        }

        .sidebar-brand h4 {
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.25rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }

        .nav-link:hover,
        .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: white;
        }

        .nav-link i {
            width: 20px;
            margin-right: 10px;
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            display: none;
        }

        .sidebar-overlay.show {
            display: block;
        }

        /* Main Content */
        .main-content {
            margin-left: 0;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }

        /* Topbar */
        .topbar {
            background: white;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .menu-toggle {
            font-size: 1.5rem;
            color: var(--primary-color);
            cursor: pointer;
            display: block;
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .topbar-title h5 {
            margin: 0;
            font-size: 1rem;
        }

        .topbar-title small {
            font-size: 0.75rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info {
            display: none;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Content Area */
        .content-area {
            padding: 20px 15px;
        }

        .section-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: var(--primary-color);
        }

        .btn-add {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 0.875rem;
            transition: transform 0.2s;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            color: white;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            font-size: 0.875rem;
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #f8f9fa;
            color: #666;
            font-weight: 600;
            border-bottom: 2px solid #dee2e6;
            padding: 12px;
        }

        .table tbody td {
            padding: 12px;
            vertical-align: middle;
        }

        .badge-status {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 11px;
            white-space: nowrap;
            font-weight: 500;
        }

        .action-btn {
            padding: 5px 10px;
            font-size: 0.875rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-view {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .btn-view:hover {
            background-color: #1976d2;
            color: white;
        }

        .btn-edit {
            background-color: #fff3e0;
            color: #f57c00;
        }

        .btn-edit:hover {
            background-color: #f57c00;
            color: white;
        }

        .btn-delete {
            background-color: #ffebee;
            color: #c62828;
        }

        .btn-delete:hover {
            background-color: #c62828;
            color: white;
        }

        /* Desktop Styles */
        @media (min-width: 992px) {
            .sidebar {
                left: 0;
            }

            .main-content {
                margin-left: var(--sidebar-width);
            }

            .menu-toggle {
                display: none;
            }

            .user-info {
                display: block;
                text-align: right;
            }

            .user-info .fw-bold {
                font-size: 0.9rem;
            }

            .user-info small {
                font-size: 0.75rem;
            }

            .topbar-title h5 {
                font-size: 1.25rem;
            }

            .topbar-title small {
                font-size: 0.875rem;
            }

            .content-area {
                padding: 30px;
            }

            .section-card {
                padding: 30px;
            }

            .section-title {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .table {
                font-size: 0.9rem;
            }

            .action-btn {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <h4><i class="fas fa-hotel"></i> Hotel Admin</h4>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link active" href="../../Admin/dashboard.php"><i class="fas fa-th-large"></i> Dashboard</a>

            <a class="nav-link" href="../../Admin/bookings.php"><i class="fas fa-calendar-check"></i> Bookings</a>
            <a class="nav-link" href="../../Admin/contact.php"><i class="fas fa-users"></i> Contacts</a>
            <!-- <a class="nav-link" href="#"><i class="fas fa-concierge-bell"></i> Services</a>
             <a class="nav-link" href="#"><i class="fas fa-bed"></i> Rooms</a>
            <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Reports</a>
            <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>-->
            <a class="nav-link" href="code/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <div class="topbar">
            <div class="topbar-left">
                <i class="fas fa-bars menu-toggle" id="menuToggle"></i>
                <div class="topbar-title">
                    <h5 class="mb-0">Welcome back, <?php echo $adminName; ?>!</h5>
                    <small class="text-muted">Manage your bookings and contacts</small>
                </div>
            </div>
            <div class="user-profile">
                <div class="user-info">
                    <div class="fw-bold">Hotel SS</div>
                    <small class="text-muted">Administrator</small>
                </div>
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>