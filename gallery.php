<style>
  .gallery .gallery_img {
    flex: 1 1 calc(25% - 15px);
    cursor: pointer;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    height: 200px;
    /* fixed height for all images */
  }

  .gallery .gallery_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* makes images fill container without distortion */
    display: block;
    transition: transform 0.3s ease;
  }

  .gallery .gallery_img:hover img {
    transform: scale(1.05);
  }

  /* Responsive Breakpoints */
  @media (max-width: 1200px) {
    .gallery .gallery_img {
      flex: 1 1 calc(33.33% - 15px);
      height: 180px;
    }
  }

  @media (max-width: 768px) {
    .gallery .gallery_img {
      flex: 1 1 calc(50% - 15px);
      height: 160px;
    }
  }

  @media (max-width: 480px) {
    .gallery .gallery_img {
      flex: 1 1 100%;
      height: 200px;
    }
  }


  /* Responsive Breakpoints */
  @media (max-width: 1200px) {
    .gallery .gallery_img {
      flex: 1 1 calc(33.33% - 15px);
      /* 3 per row */
    }
  }

  @media (max-width: 768px) {
    .gallery .gallery_img {
      flex: 1 1 calc(50% - 15px);
      /* 2 per row */
    }
  }

  @media (max-width: 480px) {
    .gallery .gallery_img {
      flex: 1 1 100%;
      /* 1 per row */
    }
  }

  /* Lightbox (same as before) */
  .lightbox {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
  }

  .lightbox img {
    max-width: 90%;
    max-height: 80%;
    border-radius: 10px;
  }

  .lightbox .close-btn {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 2rem;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
  }

  .lightbox:target {
    display: flex;
  }
</style>
<?php include "inc/links.php" ?>
<!-- body -->

<body class="main-layout inner_page">



  <?php include "inc/loader.php" ?>
  <?php include "inc/header.php" ?>
  <!-- end header inner -->
  <!-- end header -->
  <div class="back_re">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>gallery</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- gallery -->
  <div class="gallery">
    <div class="container">
      <div class="row">
        <div class="gallery_img">
          <a href="#img1">
            <figure><img src="images/hotel/AC Room interior.jpg" alt="Gallery 1" /></figure>
          </a>
        </div>
        <div class="gallery_img">
          <a href="#img2">
            <figure><img src="images/hotel/AC Room(1).jpg" alt="Gallery 2" /></figure>
          </a>
        </div>

        <div class="gallery_img">
          <a href="#img4">
            <figure><img src="images/hotel/Hotel Entrance.jpg" alt="Gallery 4" /></figure>
          </a>
        </div>
        <div class="gallery_img">
          <a href="#img5">
            <figure><img src="images/gallery5.jpg" alt="Gallery 5" /></figure>
          </a>
        </div>
        <div class="gallery_img">
          <a href="#img6">
            <figure><img src="images/hotel/Reception Area.jpg" alt="Gallery 6" /></figure>
          </a>
        </div>
        <div class="gallery_img">
          <a href="#img7">
            <figure><img src="images/hotel/Main Office.jpg" alt="Gallery 7" /></figure>
          </a>
        </div>
        <div class="gallery_img">
          <a href="#img8">
            <figure><img src="images/hotel/Reception Waiting Area.jpg" alt="Gallery 8" /></figure>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Lightbox for each image -->
  <div id="img1" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/AC Room interior.jpg" alt="" />
  </div>
  <div id="img2" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/AC Room(1).jpg" alt="" />
  </div>
  <div id="img3" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/Lobby 1st floor.jpg" alt="" />
  </div>
  <div id="img4" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/Hotel Entrance.jpg" alt="" />
  </div>
  <div id="img5" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/gallery5.jpg" alt="" />
  </div>
  <div id="img6" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/Reception Area.jpg" alt="" />
  </div>
  <div id="img7" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/Main Office.jpg" alt="" />
  </div>
  <div id="img8" class="lightbox">
    <a href="#" class="close-btn">&times;</a>
    <img src="images/hotel/Reception Waiting Area.jpg" alt="" />
  </div>
  <!-- end gallery -->

  <?php include "inc/footer.php" ?>