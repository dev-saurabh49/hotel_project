<?php include "inc/links.php" ?>
<style>
   .carousel-item img {
      height: 550px;
      width: 100%;
      object-fit: cover;
   }

   @media (max-width: 400px) {
      .banner_main .carousel-item {
      height: 400px !important;
      width: 100%;
      object-fit: cover;
   }
      }
</style>

<body class="main-layout">
   <?php include "inc/loader.php" ?>

   <?php include "inc/header.php" ?>
   <section class="banner_main">
      <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item">
               <img class="first-slide" src="images/hotel/Main Office.jpg" alt="First slide">
               <div class="container">
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="images/hotel/Reception Waiting Area.jpg" alt="Second slide">
            </div>
            <div class="carousel-item active">
               <img class="third-slide" src="images/hotel/Reception Area.jpg" alt="Third slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="booking_ocline">
         <div class="container">
            <div class="row">
               <!-- <div class="col-md-5">
                     <div class="book_room">
                        <h1>Book a Room Online</h1>
                        <form class="book_now">
                           <div class="row">
                              <div class="col-md-12">
                                 <span>Name</span>
                                 
                                 <input class="online_book" placeholder="enter name" type="text" name="name">
                              </div>
                              <div class="col-md-12">
                                 <span>Email</span>
                                 
                                 <input class="online_book" placeholder="enter email" type="email" name="name">
                              </div>
                              <div class="col-md-12">
                                 <span>City</span>
                                 
                                 <input class="online_book" placeholder="enter city" type="text" name="name">
                              </div>
                              <div class="col-md-12">
                                 <button class="book_btn">Book Now</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div> -->
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2 style="color: #111; font-weight: 700; margin-bottom: 20px;">Welcome to Hotel SS Lucknow</h2>
                  <p class="margin_0" style="margin-top: 20px; text-align: justify; line-height: 1.8;">
                     Located in the heart of Lucknow, near the bustling Railway Station, Hotel SS offers a perfect blend of comfort, convenience, and affordability. Established with a vision to provide exceptional hospitality to travelers, we have been serving guests with warm smiles and personalized service.
                  </p>
                  <p style="margin-top: 15px; text-align: justify; line-height: 1.8;">
                     Whether you're visiting Lucknow for business, leisure, or transit, Hotel SS provides well-appointed rooms with modern amenities, ensuring a comfortable and memorable stay. Our strategic location makes it easy to explore the rich cultural heritage and historic landmarks of the city.
                  </p>
                  <a class="read_more" href="./about.php" style="background: #d70f18; color: #fff; padding: 10px 30px; display: inline; margin-top: 20px; border-radius: 5px; text-decoration: none; transition: 0.3s;">Read More</a>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="images/hotel/Main Office.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- our_room -->
   <div class="our_room">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Rooms</h2>
                  <p>Choose from our comfortable, well-equipped rooms designed to suit every traveller’s needs.</p>
               </div>
            </div>
         </div>

         <div class="row">
            <!-- AC Deluxe Room -->
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/hotel/AC Room interior.jpg" alt="AC Deluxe Room" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>AC Deluxe Room</h3>
                     <p>Spacious and comfortable, fully air-conditioned with a king-size bed.<br>

                     </p>
                  </div>
               </div>
            </div>

            <!-- Non-AC Standard Room -->
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/hotel/AC Room.jpg" alt="Non-AC Standard Room" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Non-AC Standard Room</h3>
                     <p>Cozy and budget-friendly room with all basic amenities for a pleasant stay.<br>

                     </p>
                  </div>
               </div>
            </div>

            <!-- AC Executive Room -->
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/hotel/AC Room interior.jpg" alt="AC Executive Room" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>AC Executive Room</h3>
                     <p>Modern interiors with air-conditioning, smart TV, and a comfortable queen-size bed.<br>

                     </p>
                  </div>
               </div>
            </div>

            <!-- Family Suite -->
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/hotel/AC Room(1).jpg" alt="Family Suite" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Family Suite</h3>
                     <p>Perfect for families: two interconnected rooms with AC and extra bedding.<br>

                     </p>
                  </div>
               </div>
            </div>

            <!-- Single Occupancy Room -->
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/hotel/AC Room(1).jpg" alt="Single Occupancy Room" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Single Occupancy Room</h3>
                     <p>Compact and affordable room ideal for solo travellers.<br>

                     </p>
                  </div>
               </div>
            </div>

            <!-- Luxury Suite -->
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/hotel/AC Room(1).jpg" alt="Luxury Suite" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Luxury Suite</h3>
                     <p>Premium suite with stylish décor, AC, minibar, and balcony view.<br>

                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- end our_room -->
   <!-- gallery -->
   <div class="gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>gallery</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/Reception Area.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/Hotel Entrance.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/Lobby 2nd Floor.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/Reception Waiting Area.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/AC Room(1).jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/IMG_20190310_150416.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/AC Room.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/hotel/Washroom.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end gallery -->

   <!--  contact -->
   <div class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Contact Us</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <form id="request" class="main_form" method="POST" action="./Admin/code/contact.php">
                  <div class="row">
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Name" type="text" name="name" required />
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="email" name="email" required />
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="text" name="phone" required />
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn" type="submit">Send</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="map_main">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.21008346875!2d80.92022447522146!3d26.833269576694697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdfbd02919e7%3A0xbfe9dcfeba253924!2sHotel%20setu%20sharna!5e0!3m2!1sen!2sin!4v1759142363053!5m2!1sen!2sin"" width=" 600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include "inc/footer.php" ?>