<!-- foot.php -->
<footer class="admin-footer bg-dark text-light py-3 mt-auto">
    <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-center">
        <!-- Left: Copyright -->
        <div class="mb-2 mb-md-0">
            <p style="margin: 0; font-size: 14px;">
                © <?php echo date("Y"); ?> Hotel SS. All Rights Reserved. |
                Designed by <a href="https://digicoders.in/" target="_blank">DigiCoders Technologies</a>
            </p>
        </div>



    </div>
</footer>

<!-- Optional: Scroll to Top Button -->
<a href="#" id="scrollTopBtn" class="btn btn-primary rounded-circle shadow position-fixed"
    style="bottom: 20px; right: 20px; display: none; width: 40px; height: 40px; text-align:center;">
    <i class="fas fa-arrow-up"></i>
</a>

<!-- jQuery (required by DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Scripts -->
<script>
    // Scroll to top button
    const scrollBtn = document.getElementById("scrollTopBtn");
    window.onscroll = () => {
        scrollBtn.style.display = (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) ? "block" : "none";
    };
    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

<style>
    /* Footer Styles */
    .admin-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 0.9rem;
    }

    .admin-footer a:hover {
        text-decoration: underline;
    }

    /* Scroll to Top Button */
    #scrollTopBtn i {
        font-size: 1rem;
        color: #fff;
        line-height: 40px;
    }

    #scrollTopBtn:hover {
        transform: scale(1.1);
    }
</style>