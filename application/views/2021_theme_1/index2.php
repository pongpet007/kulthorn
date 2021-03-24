<!DOCTYPE html>
<html class="">
  <head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Porto - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/examples.css" />

    <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>

    <?php $this->load->view('2021_theme_1/inc/css'); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <nav id="navigation">
          <a href="#" class="logo">
          <img src="" alt="">
          </a>
          <a aria-label="mobile menu" class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
          </a>
          <ul class="menu-left">
            <li><a href="#fullpage">01.กุลธร</a></li>
            <li><a href="#firstPage">02.เกี่ยวกับเรา</a></li>
            <li><a href="#secondPage">03.สินค้าและบริการ</a></li>
            <li><a href="#3rdPage">04.เกร็ดความรู้</a></li>
            <li><a href="#projects">05.ข่าวสารและกิจกรรม</a></li>
            <li><a href="#contact">06.ร่วมงานกับเรา</a></li>
            <li><a href="#contact">07.ติดต่อเรา</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div id="fullpage">
      <div class="section">
        <div class="slide" style="background-image: url('assets/img/bg-banner-1.jpg');">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <img src="<?=base_url()?>assets/img/baanner-1-1.png" style="width: 100%;margin-top: 220px;">
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/baanner-1-2.png" style="width: 100%;">
                  </div>
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/baanner-1-3.png" style="width: 100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide" style="background-image: url('assets/img/bg-banner-2.jpg');">
          <div class="container">
            <div class="row">
              <div class="col-lg-7" style="margin-top: 40px;">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/baanner-2-1.png" style="width: 100%;">
                  </div>
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/baanner-2-2.png" style="width: 100%;">
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <img src="<?=base_url()?>assets/img/baanner-2-3.png" style="width: 100%;">
              </div>
            </div>
          </div>
        </div>
        <div class="slide" style="background-image: url('assets/img/bg-banner-3.jpg');">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/baanner-3-1.png" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="firstPage" >
         
      </div>
      <div class="section" id="secondPage">
        <h1>Section 3</h1>
      </div>
      <div class="section" id="3rdPage">
        <h1>Section 4</h1>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="<?=base_url()?>assets/fullpage.js"></script>
    
    <script type="text/javascript">
      //using document ready...
      $(document).ready(function(){
      
          //initialising fullpage.js in the jQuery way
          $('#fullpage').fullpage({
              navigation: true,
              slidesNavigation: true,
          });
      
          // calling fullpage.js methods using jQuery
          $('#moveSectionUp').click(function(e){
              e.preventDefault();
              $.fn.fullpage.moveSectionUp();
          });
      
          $('#moveSectionDown').click(function(e){
              e.preventDefault();
              $.fn.fullpage.moveSectionDown();
          });
      });
    </script>
  <script type="text/javascript" src="<?=base_url()?>assets/examples.js"></script>
  <!-- Vendor -->
  <script src="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/js/bootstrap.min.js"></script>
</html>