<style>
  .map_main {
    margin: 20px 0;
  }

  .map-responsive {
    position: relative;
    overflow: hidden;
    padding-bottom: 56.25%;
    height: 0;
  }

  .map-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }
</style>



<?php include "inc/links.php" ?>

<body class="main-layout">
  <?php include "inc/loader.php" ?>

  <?php include "inc/header.php" ?>

  <div class="back_re">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <!-- ✅ Show Alert -->
          <?php if (!empty($alert)) echo $alert; ?>
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
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.21008346875!2d80.92022447522146!3d26.833269576694697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdfbd02919e7%3A0xbfe9dcfeba253924!2sHotel%20setu%20sharna!5e0!3m2!1sen!2sin!4v1759142363053!5m2!1sen!2sin"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>

          <div
            class="place-details"
            style="
                margin-top: 20px;
                padding: 15px;
                background: #f8f8f8;
                border-radius: 8px;
              ">
            <h3 style="margin-top: 0">HOTEL SETU SHARMA </h3>
            <p>
              <strong>Address:</strong> HOTEL SETU SHARMA R10 CHARBAGH NERA
              MUSLIM MUSAFIRKHANA 226001
            </p>
            <p><strong>Phone:</strong> 9453018703</p>
            <p>
              <strong>Email:</strong>
              <a href="mailto:Hotelsslucknow@gmail.com">hotelsslucknow@gmail.com</a>
            </p>
            <p><strong>Opening Hours:</strong> 24 x 7</p>
            <p>
              <strong>Website:</strong>
              <a href="https://Hotelsetusharma.com/en" target="_blank">Hotelsetusharma.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



  <?php include "inc/footer.php" ?>