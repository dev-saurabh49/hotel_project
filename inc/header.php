<style>
    /* Logo styling */
    .logo img {
        max-height: 60px;
        width: auto;
    }

    /* Book Now Button - Enhanced for Desktop */
    .book-now-btn {
        background: linear-gradient(135deg, #d70f18 0%, #b80d14 100%);
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 8px;
        padding: 8px 25px;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(215, 15, 24, 0.3);
        white-space: nowrap;
        display: inline-flex;
        align-items: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Add gap only on mobile when icon is visible */
    @media (max-width: 767px) {
        .book-now-btn {
            gap: 8px;
        }
    }

    .book-now-btn:hover,
    .book-now-btn:focus {
        background: linear-gradient(135deg, #b80d14 0%, #9a0a10 100%);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(215, 15, 24, 0.4);
    }

    .book-now-btn i {
        font-size: 15px;
    }

    /* Desktop - Full width button */
    @media (min-width: 992px) {
        .book-now-wrapper {
            min-width: 100px;
        }

        .book-now-btn {
            width: 100%;
            justify-content: center;
        }
    }

    /* Tablet View */
    @media (min-width: 768px) and (max-width: 991px) {
        .book-now-btn {
            padding: 10px 20px;
            font-size: 14px;
        }

        .book-now-wrapper {
            min-width: 150px;
        }
    }

    /* Mobile View - Between Logo and Toggle */
    @media (max-width: 767px) {
        .book-now-btn {
            padding: 8px 16px;
            font-size: 13px;
        }

        .book-now-btn i {
            font-size: 14px;
        }

        .book-now-wrapper {
            flex: 1;
            text-align: center;
            margin: 0 10px;
        }
    }

    /* Very small screens */
    @media (max-width: 380px) {
        .book-now-btn {
            padding: 6px 12px;
            font-size: 12px;
            letter-spacing: 0;
            margin-bottom: 20px!important;
        }

        .book-now-btn i {
            font-size: 12px;
        }

        .logo img {
            max-height: 50px;
        }
    }

    /* Header alignment */
    .navbar {
        display: flex;
        align-items: center;
    }

    .navbar-brand {
        margin-right: 0;
    }
</style>

<header class="mb-3">
    <div class="header">
        <div class="container">
            <nav class="navigation navbar navbar-expand-md navbar-dark px-0">
                <div class="d-flex align-items-center justify-content-between w-100">

                    <!-- Logo -->
                    <a class="navbar-brand logo m-0 mr-5" href="index.php">
                        <img src="../images/hotel/logogg.jpeg" alt="Hotel Logo">
                    </a>

                    <!-- Book Now Button (Always Visible - Between Logo & Toggle) -->
                    <div class="book-now-wrapper">
                        <button class="book-now-btn" data-toggle="modal" data-target="#bookNowModal">
                            <i class="fa-solid fa-calendar-check "></i> Book Now
                        </button>
                    </div>

                    <!-- Toggle Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarsExample04" aria-controls="navbarsExample04"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-5"></span>
                    </button>
                </div>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse mt-2 mt-md-0" id="navbarsExample04">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../rooms.php">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="bookNowModal" tabindex="-1" role="dialog" aria-labelledby="bookNowModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="bookNowModalLabel">
                        <i class="fa-solid fa-hotel"></i> Book Your Room
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post" action="../Admin/code/booking.php">
                        <div class="form-group">
                            <label for="name"><i class="fa-solid fa-user"></i> Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="checkin"><i class="fa-solid fa-calendar-day"></i> Check-in Date</label>
                            <input type="date" class="form-control" name="checkin" id="checkin" required>
                        </div>

                        <div class="form-group">
                            <label for="roomType"><i class="fa-solid fa-bed"></i> Select Room Type</label>
                            <select class="form-control" id="roomType" name="roomType" required>
                                <option value="" disabled selected>-- Choose Room Type --</option>
                                <option>Single Person - ₹1200</option>
                                <option>Double Person - ₹1500</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="requests"><i class="fa-solid fa-pen"></i> Special Requests</label>
                            <textarea class="form-control" name="requests"  id="requests" rows="3"
                                placeholder="Any additional requests?"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger btn-block">
                            <i class="fa-solid fa-check"></i> Confirm Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>