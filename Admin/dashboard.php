        <?php
        // db.php (connection file)
        include("code/db_connection.php");
      
         if(!isset($_SESSION['admin_username']))
         {
            header("location:index.php");
         }


        // 🔹 Total bookings
        $result = $conn->query("SELECT COUNT(id) AS total FROM bookings");
        $row = $result->fetch_assoc();
        $totalBookings = $row['total'];

        // 🔹 Compare with last month (for growth %)
        $currentMonth = date("Y-m");
        $lastMonth = date("Y-m", strtotime("-1 month"));

        $currResult = $conn->query("SELECT COUNT(id) AS curr FROM bookings WHERE DATE_FORMAT(created_at, '%Y-%m') = '$currentMonth'");
        $lastResult = $conn->query("SELECT COUNT(id) AS prev FROM bookings WHERE DATE_FORMAT(created_at, '%Y-%m') = '$lastMonth'");

        $currCount = $currResult->fetch_assoc()['curr'];
        $prevCount = $lastResult->fetch_assoc()['prev'];

        $growth = ($prevCount > 0) ? round((($currCount - $prevCount) / $prevCount) * 100, 1) : 100;

        $result = $conn->query("SELECT COUNT(id) AS total FROM contact_requests");
        $row = $result->fetch_assoc();
        $totalContacts = $row['total'];

        // 🔹 Compare with last month
        $currentMonth = date("Y-m");
        $lastMonth = date("Y-m", strtotime("-1 month"));

        $currResult = $conn->query("SELECT COUNT(id) AS curr FROM contact_requests WHERE DATE_FORMAT(created_at, '%Y-%m') = '$currentMonth'");
        $lastResult = $conn->query("SELECT COUNT(id) AS prev FROM contact_requests WHERE DATE_FORMAT(created_at, '%Y-%m') = '$lastMonth'");

        $currCount = $currResult->fetch_assoc()['curr'];
        $prevCount = $lastResult->fetch_assoc()['prev'];

        $contactGrowth = ($prevCount > 0) ? round((($currCount - $prevCount) / $prevCount) * 100, 1) : 100;
        ?>

        <?php include "inc/head.php" ?>
        <style>
            .content-area {
                padding: 20px 15px;
            }

            .stat-card {
                background: white;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
                height: 100%;
            }

            .stat-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            }

            .stat-icon {
                width: 50px;
                height: 50px;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                color: white;
            }

            .stat-card h3 {
                font-size: 1.75rem;
            }

            .stat-card h6 {
                font-size: 0.875rem;
            }

            .stat-card small {
                font-size: 0.75rem;
            }

            .hover-card {
                transition: all 0.3s ease-in-out;
            }

            .hover-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            .icon-circle {
                width: 60px;
                height: 60px;
                border-radius: 50%;
            }
        </style>
        <!-- Content Area -->
        <div class="content-area">
            <!-- Stats Cards -->
            <div class="row g-3 g-lg-4 mb-3 mb-lg-4">
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="card shadow-lg border-0 rounded-4 p-4 hover-card">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="flex-grow-1">
                                        <h6 class="text-muted mb-2">
                                            <a href="./bookings.php" class="fs-5 text-decoration-none text-dark">Bookings</a>
                                        </h6>
                                        <h3 class="mb-1"><?php echo $totalBookings; ?></h3>
                                        <small class="<?php echo ($growth >= 0) ? 'text-success' : 'text-danger'; ?>">
                                            <i class="fas <?php echo ($growth >= 0) ? 'fa-arrow-up' : 'fa-arrow-down'; ?>"></i>
                                            <?php echo $growth; ?>%
                                        </small>
                                    </div>
                                    <div class="icon-circle bg-primary text-white d-flex align-items-center justify-content-center">
                                        <i class="fas fa-calendar-check fs-3"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="stat-icon bg-primary-gradient">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="card shadow-lg border-0 rounded-4 p-4 hover-card">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="flex-grow-1">
                                        <h6 class="text-muted mb-2">
                                            <a href="./contact.php" class="fs-5 text-decoration-none text-dark">Contacts</a>
                                        </h6>
                                        <h3 class="mb-1"><?php echo $totalContacts; ?></h3>
                                        <small class="<?php echo ($contactGrowth >= 0) ? 'text-success' : 'text-danger'; ?>">
                                            <i class="fas <?php echo ($contactGrowth >= 0) ? 'fa-arrow-up' : 'fa-arrow-down'; ?>"></i>
                                            <?php echo $contactGrowth; ?>%
                                        </small>
                                    </div>
                                    <div class="icon-circle bg-success text-white d-flex align-items-center justify-content-center">
                                        <i class="fas fa-address-book fs-3"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="stat-icon bg-success-gradient">
                                <i class="fas fa-address-book"></i>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Charts Row -->


        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script>
            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('show');
                sidebarOverlay.classList.toggle('show');
            });

            sidebarOverlay.addEventListener('click', () => {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
            });

            // Close sidebar when clicking a link on mobile
            document.querySelectorAll('.sidebar .nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 992) {
                        sidebar.classList.remove('show');
                        sidebarOverlay.classList.remove('show');
                    }
                });
            });

            // Action button alerts (for demonstration)
            document.querySelectorAll('.action-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const action = this.classList.contains('btn-view') ? 'View' :
                        this.classList.contains('btn-edit') ? 'Edit' : 'Delete';
                    const row = this.closest('tr');
                    const id = row.cells[0].textContent;
                    alert(`${action} action for ${id}`);
                });
            });

            // Add buttons (for demonstration)
            document.querySelectorAll('.btn-add').forEach(btn => {
                btn.addEventListener('click', function() {
                    const section = this.closest('.section-card').querySelector('.section-title').textContent.trim();
                    alert(`Add new entry for ${section}`);
                });
            });
        </script>
        <?php include("inc/foot.php"); ?>