<?php
include "inc/head.php";
include "code/db_connection.php";
?>

<div class="section-card">
    <div class="section-header mb-3">
        <h2 class="section-title">
            <i class="fas fa-address-book"></i> Contact Data
        </h2>
    </div>

    <div class="table-responsive">
        <table id="contactTable" class="table table-hover table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Contact ID</th>
                    <th>Name</th>
                    <th class="d-none d-md-table-cell">Email</th>
                    <th class="d-none d-lg-table-cell">Phone</th>
                    <th class="d-none d-lg-table-cell">Message</th>
                    <th class="d-none d-sm-table-cell">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, name, email, phone, message, created_at FROM contact_requests ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>CT" . str_pad($row['id'], 2, '0', STR_PAD_LEFT) . "</td>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td class='d-none d-md-table-cell'>" . htmlspecialchars($row['email']) . "</td>
                                <td class='d-none d-lg-table-cell'>" . htmlspecialchars($row['phone']) . "</td>
                                <td class='d-none d-lg-table-cell'>" . htmlspecialchars($row['message']) . "</td>
                                <td class='d-none d-sm-table-cell'>" . date('M d, Y', strtotime($row['created_at'])) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No contacts found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "inc/foot.php"; ?>
<?php $conn->close(); ?>

<!-- jQuery (required for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS & JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#contactTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "order": [
                [0, "desc"]
            ], // Sort by Contact ID descending
            "responsive": true,
            "columnDefs": [{
                    "orderable": false,
                    "targets": [4]
                } // Disable sorting on 'Message' column
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
    });
</script>