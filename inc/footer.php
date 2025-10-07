 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <style>
     footer {
         background: #1b1b1b;
         color: #ddd;
         font-family: 'Segoe UI', Arial, sans-serif;
     }

     footer .footer {
         padding: 50px 0 20px;
     }

     footer h3 {
         font-size: 20px;
         font-weight: 600;
         margin-bottom: 20px;
         color: #fff;
     }

     /* Contact Section */
     .conta {
         list-style: none;
         padding: 0;
         margin: 0;
     }

     .conta li {
         margin-bottom: 12px;
         font-size: 15px;
         display: flex;
         align-items: center;
         gap: 10px;
     }

     .conta li a {
         color: #ddd;
         text-decoration: none;
         transition: color 0.3s ease;
     }

     .conta li a:hover {
         color: #ddd;
     }

     .conta i {
         font-size: 16px;
         color: #fe0000;
     }


     .link_menu li {
         margin-bottom: 10px;
     }

     .link_menu a {
         color: #ddd;
         text-decoration: none;
         font-size: 15px;
         transition: color 0.3s ease;
     }

     .link_menu a:hover,
     .link_menu li.active a {
         color: #ddd;
     }

     .bottom_form {
         display: flex;
         margin-bottom: 20px;
     }

     .bottom_form .enter {
         width: 70%;
         padding: 10px;
         border: none;
         border-radius: 4px 0 0 4px;
         outline: none;
         font-size: 14px;
     }

     .bottom_form .sub_btn {
         width: 30%;
         background: #fe0000;
         color: #1b1b1b;
         border: none;
         font-weight: bold;
         border-radius: 0 4px 4px 0;
         cursor: pointer;
         transition: background 0.3s ease;
     }

     .bottom_form .sub_btn:hover {
         background: #fa2e2eff;
     }


     .social_icon {
         list-style: none;
         display: flex;
         gap: 12px;
         padding: 0;
         margin: 0;
     }

     .social_icon li a {
         display: inline-block;
         width: 38px;
         height: 38px;
         line-height: 38px;
         text-align: center;
         border-radius: 50%;
         background: #333;
         color: #fe0000;
         font-size: 14px;
         transition: all 0.3s ease;
     }

     .social_icon li a:hover {
         background: #ddd;
         color: #1b1b1b;
     }


     /* Responsive */
     @media (max-width: 768px) {
         footer .footer {
             text-align: center;
         }

         .bottom_form {
             flex-direction: column;
         }

         .bottom_form .enter,
         .bottom_form .sub_btn {
             width: 100%;
             border-radius: 4px;
             margin-bottom: 10px;
         }

         .social_icon {
             justify-content: center;
         }
     }

     .copyright {
         background: #111;
         padding: 20px 0;
         margin-top: 0;
         border: none;
         border-top: none;
     }

     footer .footer {
         border-bottom: none;
     }

     .copyright p {
         margin: 0;
         color: #ddd;
         font-size: 14px;
     }

     .copyright a {
         color: #fe0000;
         text-decoration: none;
         transition: color 0.3s ease;
     }

     .copyright a:hover {
         color: #fff;
     }

     @media (max-width: 576px) {
         .copyright p {
             font-size: 12px;
             line-height: 1.6;
         }
     }

     .designer {
         font-style: italic;
     }

     /* WhatsApp Floating Button */
     .whatsapp_float {
         position: fixed;
         width: 60px;
         height: 60px;
         bottom: 20px;
         right: 20px;
         /* background-color: #25d366; */
         border-radius: 50%;
         text-align: center;
         box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
         z-index: 9999;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: all 0.3s ease;
         animation: bounce 2s infinite;
     }

     .whatsapp_float::before,
     .whatsapp_float::after {
         content: '';
         position: absolute;
         width: 100%;
         height: 100%;
         border-radius: 50%;
         border: 2px solid #25d366;
         opacity: 0;
         animation: ripple 2.5s infinite;
     }

     .whatsapp_float::after {
         animation-delay: 1.25s;
     }

     .whatsapp_float:hover {
         transform: scale(1.15);
         box-shadow: 0 6px 30px rgba(37, 211, 102, 0.6);
         animation: none;
     }

     .whatsapp_icon {
         width: 48px;
         height: 48px;
         animation: wiggle 1s ease-in-out infinite;
     }

     .whatsapp_float:hover .whatsapp_icon {
         animation: 0.6s ease-in-out;
     }

     /* Tooltip for WhatsApp */
     /* .whatsapp_float::before {
         content: 'Chat with us';
         position: absolute;
         right: 70px;
         top: 50%;
         transform: translateY(-50%);
         background: #333;
         color: white;
         padding: 8px 15px;
         border-radius: 8px;
         white-space: nowrap;
         font-size: 14px;
         font-weight: 500;
         opacity: 0;
         visibility: hidden;
         transition: all 0.3s ease;
         box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
         z-index: 1;
         border: none;
         animation: none;
     } */

     /* .whatsapp_float:hover::before {
         opacity: 1;
         visibility: visible;
         right: 75px;
     } */

     /* Floating Call Button */
     .floating-call-btn {
         position: fixed;
         bottom: 100px;
         right: 20px;
         z-index: 9999;
     }

     .call-button {
         width: 60px;
         height: 60px;
         background: linear-gradient(135deg, #d70f18 0%, #b80d14 100%);
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;
         font-size: 28px;
         cursor: pointer;
         box-shadow: 0 4px 20px rgba(215, 15, 24, 0.4);
         transition: all 0.3s ease;
         animation: pulse 2s infinite;
         text-decoration: none;
     }

     .call-button:hover {
         transform: scale(1.15);
         box-shadow: 0 6px 30px rgba(215, 15, 24, 0.6);
         animation: none;
         color: white;
     }

     .call-button::before,
     .call-button::after {
         content: '';
         position: absolute;
         width: 100%;
         height: 100%;
         border-radius: 50%;
         border: 2px solid #d70f18;
         opacity: 0;
         animation: ripple 2.5s infinite;
     }

     .call-button::after {
         animation-delay: 1.25s;
     }

     .call-button i {
         animation: ring 1.5s infinite;
     }

     .call-button:hover i {
         animation: shake 0.5s ease-in-out;
     }

     /* Call Button Tooltip */
     .call-tooltip {
         position: absolute;
         right: 70px;
         top: 50%;
         transform: translateY(-50%);
         background: #333;
         color: white;
         padding: 8px 15px;
         border-radius: 8px;
         white-space: nowrap;
         font-size: 14px;
         font-weight: 500;
         opacity: 0;
         visibility: hidden;
         transition: all 0.3s ease;
         box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
     }

     .call-tooltip::after {
         content: '';
         position: absolute;
         right: -8px;
         top: 50%;
         transform: translateY(-50%);
         width: 0;
         height: 0;
         border-top: 8px solid transparent;
         border-bottom: 8px solid transparent;
         border-left: 8px solid #333;
     }

     .floating-call-btn:hover .call-tooltip {
         opacity: 1;
         visibility: visible;
         right: 75px;
     }

     /* Keyframe Animations */
     @keyframes bounce {

         0%,
         20%,
         50%,
         80%,
         100% {
             transform: translateY(0);
         }

         40% {
             transform: translateY(-10px);
         }

         60% {
             transform: translateY(-5px);
         }
     }

     @keyframes ripple {
         0% {
             width: 100%;
             height: 100%;
             opacity: 0.6;
         }

         100% {
             width: 170%;
             height: 170%;
             opacity: 0;
         }
     }

     @keyframes wiggle {

         0%,
         100% {
             transform: rotate(0deg);
         }

         25% {
             transform: rotate(-10deg);
         }

         75% {
             transform: rotate(10deg);
         }
     }

     @keyframes rotate {
         0% {
             transform: rotate(0deg);
         }

         100% {
             transform: rotate(360deg);
         }
     }

     @keyframes pulse {

         0%,
         100% {
             box-shadow: 0 4px 20px rgba(215, 15, 24, 0.4);
         }

         50% {
             box-shadow: 0 4px 30px rgba(215, 15, 24, 0.7);
         }
     }

     @keyframes ring {

         0%,
         100% {
             transform: rotate(0deg);
         }

         10%,
         30% {
             transform: rotate(-15deg);
         }

         20%,
         40% {
             transform: rotate(15deg);
         }
     }

     @keyframes shake {

         0%,
         100% {
             transform: rotate(0deg);
         }

         25% {
             transform: rotate(-20deg);
         }

         75% {
             transform: rotate(20deg);
         }
     }

     /* Mobile Responsive */
     @media (max-width: 768px) {

         .whatsapp_float,
         .call-button {
             width: 45px;
             height: 45px;
         }

         .whatsapp_icon {
             width: 42px;
             height: 42px;
         }

         .call-button {
             font-size: 14px;
         }

         .floating-call-btn {
             bottom: 90px;
             right: 20px;
         }

         .whatsapp_float::before,
         .call-tooltip {
             display: none;
         }
     }

     @media (max-width: 400px) {

         .whatsapp_float,
         .call-button {
             width: 40px;
             height: 40px;
         }

         .whatsapp_icon {
             width: 40px;
             height: 40px;
         }

         .call-button {
             font-size: 18px;
         }

         .floating-call-btn {
             bottom: 80px;
         }
     }
 </style>



 <footer>
     <div class="footer">
         <div class="container">
             <div class="row">

                 <!-- Contact Info -->
                 <div class="col-md-4">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                         <li><i class="fa fa-map-marker-alt"></i> HOTEL SETU SHARMA R10 CHARBAGH NERA MUSLIM MUSAFIRKHANA 226001</li>
                         <li><i class="fa fa-phone"></i><a href="tel:+919453018703">+919453018703</a></li>
                         <li><i class="fa fa-envelope"></i>
                             <a href="mailto:Hotelsslucknow@gmail.com"> hotelsslucknow@gmail.com</a>
                         </li>
                     </ul>
                 </div>

                 <!-- Menu Links -->
                 <div class="col-md-4">
                     <h3>Menu Links</h3>
                     <ul class="link_menu">
                         <li class="active"><a href="../index.php">Home</a></li>
                         <li><a href="about.php">About</a></li>
                         <li><a href="rooms.php">Rooms</a></li>
                         <li><a href="gallery.php">Gallery</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                         <li>
                             <a href="privacy.php">Privacy</a>
                         </li>
                     </ul>
                 </div>

                 <!-- Newsletter & Social -->
                 <div class="col-md-4">
                    <h3 class="ml-4">Map</h3>
                     <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.21008346875!2d80.92022447522146!3d26.833269576694697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdfbd02919e7%3A0xbfe9dcfeba253924!2sHotel%20setu%20sharna!5e0!3m2!1sen!2sin!4v1759142363053!5m2!1sen!2sin"
                         allowfullscreen=""
                         loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade">
                     </iframe>
                     <ul class="social_icon ml-3">
                         <li><a href="https://www.facebook.com/share/177GGYpJ8t/"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://www.instagram.com/hotelsetusharma?igsh=MWk2NmtnNW4xbWhyYQ=="><i class="fab fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     </ul>
                 </div>

             </div>


             <div class="copyright">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12 text-center">
                             <p style="margin: 0; font-size: 14px;">
                                 © 2025 Hotel SS. All Rights Reserved. |
                                 Designed by <a href="https://digicoders.in/" target="_blank">DigiCoders Technologies</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </div>
 </footer>


 <a href="https://wa.me/9453018703"
     class="whatsapp_float"
     target="_blank"
     aria-label="Chat on WhatsApp">
     <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png"
         alt="WhatsApp"
         class="whatsapp_icon">
 </a>

 <!-- Call Button -->
 <div class="floating-call-btn">
     <a href="tel:+919453018703" class="call-button">
         <i class="fas fa-phone-alt"></i>
     </a>
     <div class="call-tooltip">
         Call: +91 9453018703
     </div>
 </div>

 <!-- FOOTER END -->

 <!-- Auto Year JS -->
 <script>
     document.getElementById("year").textContent = new Date().getFullYear();
 </script>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/jquery-3.0.0.min.js"></script>

 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script src="js/custom.js"></script>
 </body>

 </html>