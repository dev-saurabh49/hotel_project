<?php include "inc/links.php"?>

<style>
    /* Services Section Styling */
    .services-amenities {
        padding: 60px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .services-amenities .titlepage {
        text-align: center;
        margin-bottom: 50px;
    }

    .services-amenities .titlepage h2 {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .services-amenities .titlepage h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #d70f18, #b80d14);
        border-radius: 2px;
    }

    .service-card {
        background: white;
        border-radius: 15px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        height: 100%;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #d70f18, #b80d14);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(215, 15, 24, 0.15);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, #d70f18 0%, #b80d14 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: white;
        transition: all 0.4s ease;
        position: relative;
    }

    .service-icon::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid #d70f18;
        opacity: 0;
        animation: pulse-ring 2s infinite;
    }

    .service-card:hover .service-icon {
        transform: rotateY(360deg);
        box-shadow: 0 10px 30px rgba(215, 15, 24, 0.3);
    }

    @keyframes pulse-ring {
        0% {
            transform: scale(1);
            opacity: 0.5;
        }
        100% {
            transform: scale(1.3);
            opacity: 0;
        }
    }

    .service-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #333;
        margin-bottom: 12px;
        transition: color 0.3s ease;
    }

    .service-card:hover h3 {
        color: #d70f18;
    }

    .service-card p {
        font-size: 14px;
        color: #666;
        line-height: 1.7;
        margin: 0;
    }

    @media (max-width: 768px) {
        .service-card {
            padding: 30px 20px;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
        }

        .service-card h3 {
            font-size: 20px;
        }
    }
</style>

<body class="main-layout">
<?php include "inc/loader.php"?>
<?php include "inc/header.php"?>

<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Our Rooms & Services</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Room -->
<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Rooms</h2>
                    <p class="margin_0">Comfortable and well-furnished rooms designed for your convenience</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="images/hotel/AC Room interior.jpg" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Deluxe Room</h3>
                        <p>Spacious room with modern amenities, comfortable bedding and attached bathroom facilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="images/hotel/AC Room.jpg" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Standard Room</h3>
                        <p>Cozy and affordable room perfect for solo travelers and budget-conscious guests.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="images/hotel/AC Room interior.jpg" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Executive Room</h3>
                        <p>Premium room with elegant interiors, ideal for business travelers and special occasions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="images/hotel/AC Room.jpg" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Family Room</h3>
                        <p>Spacious accommodation perfect for families with extra bedding and comfortable living space.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="images/room5.jpg" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Twin Sharing</h3>
                        <p>Comfortable twin bed setup ideal for friends traveling together or business colleagues.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="images/hotel/AC Room interior.jpg" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Premium Suite</h3>
                        <p>Luxurious suite with separate living area, premium amenities and personalized service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our Room -->

<!-- Services & Amenities -->
<div class="services-amenities">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Premium Services</h2>
                    <p class="margin_0">Experience comfort and convenience with our exclusive amenities</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Free WiFi -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Free WiFi</h3>
                    <p>Stay connected with high-speed complimentary WiFi available throughout the hotel premises.</p>
                </div>
            </div>

            <!-- RO Water -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>RO Water</h3>
                    <p>Clean and safe drinking water with our advanced RO purification system for your health.</p>
                </div>
            </div>

            <!-- Power Backup -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>24×7 Power Backup</h3>
                    <p>Uninterrupted power supply with our reliable backup system for a hassle-free stay.</p>
                </div>
            </div>

            <!-- TV -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h3>LED TV</h3>
                    <p>Entertainment at your fingertips with modern LED TVs in every room with cable connection.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services & Amenities -->

<!-- Footer -->
<?php include "inc/footer.php"?>