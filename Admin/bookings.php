
<?php include "inc/head.php"; ?>
<div class="content-area">
    <!-- Booking Data Section -->
    <div class="section-card">
        <div class="section-header mb-3">
            <h2 class="section-title">
                <i class="fas fa-calendar-check"></i> Booking Data
            </h2>
        </div>

        <div class="table-responsive">
            <table id="bookingTable" class="table table-hover table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Booking ID</th>
                        <th>Full Name</th>
                        <th class="d-none d-md-table-cell">Email</th>
                        <th class="d-none d-lg-table-cell">Check-in</th>
                        <th class="d-none d-lg-table-cell">Room Type</th>
                        <th class="d-none d-lg-table-cell">Special Requests</th>
                        <th class="d-none d-sm-table-cell">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'code/db_connection.php';

                    $sql = "SELECT * FROM bookings ORDER BY id DESC";
                    $result = $conn->query($sql);

                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                    <td>BK' . str_pad($row['id'], 3, '0', STR_PAD_LEFT) . '</td>
                                    <td>' . htmlspecialchars($row['full_name']) . '</td>
                                    <td class="d-none d-md-table-cell">' . htmlspecialchars($row['email']) . '</td>
                                    <td class="d-none d-lg-table-cell">' . htmlspecialchars(date("M d, Y", strtotime($row['checkin_date']))) . '</td>
                                    <td class="d-none d-lg-table-cell">' . htmlspecialchars($row['room_type']) . '</td>
                                    <td class="d-none d-lg-table-cell">' . htmlspecialchars($row['special_requests']) . '</td>
                                    <td class="d-none d-sm-table-cell">' . htmlspecialchars(date("M d, Y", strtotime($row['created_at']))) . '</td>
                                  </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="7" class="text-center">No bookings found</td></tr>';
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ("inc/foot.php"); ?>

<!-- jQuery (required for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS & JS (Bootstrap 5 integration) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Initialize DataTables -->
<script>
$(document).ready(function() {
    $('#bookingTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "order": [[0, "desc"]], // Sort by Booking ID descending
        "responsive": true,
        "columnDefs": [
            { "orderable": false, "targets": [5] } // Disable sorting on 'Special Requests'
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
});
</script>
