<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/docs.theme.min.css"> -->

  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">
  

  <!-- Owl Stylesheets -->
  
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.theme.default.min.css">
  <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/owlcarousel/owl.carousel.js"></script>


  <?php 
  $this->load->view('2021_theme_1/inc/css-peck');
  ?>
  <?php 
  $this->load->view('2021_theme_1/inc/css-products');
  ?>
  <?php $this->load->view('2021_theme_1/inc/css'); ?>
  
  <title>Products detail</title>
</head>
<body>
  <?
  $this->load->view('2021_theme_1/inc/header1/header3')
  ?>
  <div class="container header-top">
    <div class="row">
      <div class="col-lg-7 col-sm-6">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item color-menu"><a href="#">หน้าแรก</a></li>
            <li class="breadcrumb-item color-menu" aria-current="page"><a href="#">สินค้าและบริการ</a></li>
            <li class="breadcrumb-item color-menu" aria-current="page"><a href="#">หมวดสินค้า</a></li>
            <li class="breadcrumb-item  color-menu-active active" aria-current="page">ฟิลเตอร์ ไดเออร์</li>
          </ol>
        </nav>

      </div>
      <div class="search-product col-lg-5 col-sm-6 pt-2 pb-1">



      </div>
    </div>

  </div><!--/////breadcrumb -->

  <!-- Button Compare -->
  <div class="compare">
      <button type="button" onclick="window.location.href='<?= base_url()?>Products/compare';" class="btn btn-secondary btn-compare" data-toggle="tooltip" data-placement="right" title="เปรียบเทียบผลิตภัณฑ์">
        <i class="fas fa-sync-alt"></i>
        <span class="count-compare">
          2
        </span>
      </button>
  </div>



  <div class="container mt-3 all-product">
    <div class="row">
      <div class="col-lg-5">
        <div>
          <img src="<?= base_url()?>assets/img/product-1.png" style="width: 100%;">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="detail-product-pro">
          <h3>
            ฟิลเตอร์ ไดเออร์
          </h3>
          <div class="breadcrumb-detail-pro">
            <div class="breadcrumb-detail menu-pro-detail">หมวดหมู่สินค้า&nbsp;</div>
            <div class="category-menu-detail">&nbsp;อุปกรณ์ทำความเย็น</div>
          </div>
          <div class="breadcrumb-detail-pro">
            <div class="breadcrumb-detail menu-pro-detail">แบรนด์&nbsp;</div>
            <div class="category-menu-detail">&nbsp;SEO</div>
          </div>

          <ul class="ul-share">
            <li>
              <div class="breadcrumb-detail menu-pro-detail">แชร์&nbsp;</div>
            </li>
            <li>
              <div class="share-face">
                <a href="#">
                  <i class="fab fa-facebook-square face-color"></i>&nbsp;&nbsp;<span>share</span>
                </a>
              </div>
            </li>
            <li>
              <div class="share-line">
                <a href="#">
                  <i class="fab fa-line line-color"></i>&nbsp;&nbsp;<span>share</span>
                </a>
              </div>
            </li>
            <li>
              <div class="share-twitter">
                <a href="#">
                  <i class="fab fa-twitter line-color"></i>&nbsp;&nbsp;<span>share</span>
                </a>
              </div>
            </li>
            <li>
              <div class="share-mail">
                <a href="#">
                  <i class="fas fa-envelope mail-color"></i>&nbsp;&nbsp;<span>share</span>
                </a>
              </div>
            </li>
            <li>
              <div class="share-print">
                <a href="#">
                  <i class="fas fa-print print-color"></i>&nbsp;&nbsp;<span>share</span>
                </a>
              </div>
            </li>
          </ul>

          <!-- <div class="row">
            <div class="col-lg-12">
              <div class="row">

                <div class="col-lg-2 col-md-3 col-sm-2 col-4">
                  <div class="breadcrumb-detail menu-pro-detail">แชร์&nbsp;</div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-2 col-4">

                  <div class="share-face">
                    <a href="#">
                      <i class="fab fa-facebook-square face-color"></i>&nbsp;&nbsp;<span>share</span>
                    </a>
                  </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-2 col-4">

                  <div class="share-line">
                    <a href="#">
                      <i class="fab fa-line line-color"></i>&nbsp;&nbsp;<span>share</span>
                    </a>
                  </div>
                </div>


                <div class="col-lg-2 col-md-3 col-sm-2 col-4">

                  <div class="share-twitter">
                    <a href="#">
                      <i class="fab fa-twitter line-color"></i>&nbsp;&nbsp;<span>share</span>
                    </a>
                  </div>
                </div>



                <div class="col-lg-2 col-md-3 col-sm-2 col-4">

                  <div class="share-mail">
                    <a href="#">
                      <i class="fas fa-envelope mail-color"></i>&nbsp;&nbsp;<span>share</span>
                    </a>
                  </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-2 col-4">

                  <div class="share-print">
                    <a href="#">
                      <i class="fas fa-print print-color"></i>&nbsp;&nbsp;<span>share</span>
                    </a>
                  </div>
                </div>


              </div>
            </div>
          </div> -->

          <div>
            <img  class="hr-product" src="<?=base_url()?>assets/img/line.png">
          </div>

          <div class="breadcrumb-detail-pro">
            <div class="breadcrumb-detail menu-pro-detail">ป้ายกำกับสินค้า&nbsp;</div>
            
            <div class="scrollbar">
              <div class="category-menu-detail">
                <a href="#">&nbsp;ฟิลเตอร์ ไดเออร์</a>
              </div>
            </div>


          </div>

          <hr>

          <div class="breadcrumb-detail-pro">
            <div class="breadcrumb-detail menu-pro-detail">รายละเอียด&nbsp;</div>
          </div>
          <div class="about-product">
            <p>จำหน่ายฟิลเตอร์ ไดเออร์ อุปกรณ์ทำความเย็น หัวจ่ายน้ำยา เครื่องมือทำความเย็นสำหรับช่าง คอยล์เย็น อะไหล่คอยล์เย็น</p>
          </div>

          <div class="about-tools">
            <div class="quotation">
              <a href="">
                <i class="fas fa-th-list list-color"></i>
                &nbsp;
                <span>ขอใบเสนอราคา</span>
              </a>
            </div>

            <div class="compare-product">
              <a href="">
                <i class="fas fa-sync-alt color-columns"></i>
                <span>เปรียบเทียบผลิตภัณฑ์</span>
              </a>
            </div>

            <div class="contact-we">
              <div class="dropdown nav-link-new show ">
                <a class="btn btn-secondary dropdown-toggle button-contact" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-comments color-comment"></i>&nbsp;ติดต่อเรา
                </a>

                <div class="dropdown-menu drop-contact" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item drop-new" href="#">แอดไลน์</a>
                  <a class="dropdown-item drop-new" href="#">โทรศัพย์</a>
                  <a class="dropdown-item drop-new" href="#">เฟสบุค</a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="foot-detail">
          <div class="nav">
            <a href="#" >
              <h3 style="color: #000000; font-weight: bold; font-size: 30px;">
                รายละเอียด
              </h3>
            </a>
          </div>

          <hr style="margin-top: -2px;">

          <div class="more-detail">
            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
          </div>

          <div class="nav">
            <a href="#" style="cursor: normal; ">
              <h3 style="color: #000000; font-weight: bold; font-size: 30px;">
                สินค้าที่เกียวข้อง
              </h3>
            </a>
          </div>
          <hr style="margin-top: -2px;">

          <div class= "owl-carousel owl-theme owl-carousel-pro-about">

            <div class="item">           
              <div class ="picture-product">
                <a href="#">
                  <img src="<?= base_url()?>assets/img/pro-about-1.png" style="width: 100%;">
                </a>
                <!-- <div class="overlay-img-3 pro-about">
                  <h3>
                    ชมรายละเอียดสินค้า
                  </h3>
                </div> -->
              </div>
              <div class="detail-product">
                <a href="#">
                  <h3 style="font-size: 26px; color: #1D1D1E; font-weight: bold;">
                    เครื่องทำความเย็น / CONDENSING UNIT
                  </h3>
                </a>

                <p style="color: #666666;">
                  บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
              </div>
            </div>

            <div class="item">           
              <div class ="picture-product">
                <a href="#">
                  <img src="<?= base_url()?>assets/img/pro-about-2.png" style="width: 100%;">
                </a>
                <!-- <div class="overlay-img-3 pro-about">
                  <h3>
                    ชมรายละเอียดสินค้า
                  </h3>
                </div> -->
              </div>
              <div class="detail-product">
                <a href="#">
                  <h3 style="font-size: 26px; color: #1D1D1E; font-weight: bold;">
                    เครื่องทำความเย็น / CONDENSING UNIT
                  </h3>
                </a>

                <p style="color: #666666;">
                  บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
              </div>
            </div>

            <div class="item">           
              <div class ="picture-product">
                <a href="#">
                  <img src="<?= base_url()?>assets/img/pro-about-3.png" style="width: 100%;">
                </a>
                <!-- <div class="overlay-img-3 pro-about">
                  <h3>
                    ชมรายละเอียดสินค้า
                  </h3>
                </div> -->
              </div>
              <div class="detail-product">
                <a href="#">
                  <h3 style="font-size: 26px; color: #1D1D1E; font-weight: bold;">
                    เครื่องทำความเย็น / CONDENSING UNIT
                  </h3>
                </a>

                <p style="color: #666666;">
                  บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
              </div>
            </div>

            <div class="item">           
              <div class ="picture-product">
                <a href="#">
                  <img src="<?= base_url()?>assets/img/pro-about-1.png" style="width: 100%;">
                </a>
                <!-- <div class="overlay-img-3 pro-about">
                  <h3>
                    ชมรายละเอียดสินค้า
                  </h3>
                </div> -->
              </div>
              <div class="detail-product">
                <a href="#">
                  <h3 style="font-size: 26px; color: #1D1D1E; font-weight: bold;">
                    เครื่องทำความเย็น / CONDENSING UNIT
                  </h3>
                </a>

                <p style="color: #666666;">
                  บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
              </div>
            </div>

            <div class="item">           
              <div class ="picture-product">
                <a href="#">
                  <img src="<?= base_url()?>assets/img/pro-about-3.png" style="width: 100%;">
                </a>
               <!--  <div class="overlay-img-3 pro-about">
                  <h3>
                    ชมรายละเอียดสินค้า
                  </h3>
                </div> -->
              </div>
              <div class="detail-product">
                <a href="#">
                  <h3 style="font-size: 26px; color: #1D1D1E; font-weight: bold;">
                    เครื่องทำความเย็น / CONDENSING UNIT
                  </h3>
                </a>

                <p style="color: #666666;">
                  บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
              </div>
            </div>



          </div>


        </div>
      </div>
    </div>
  </div>

</div>





<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel-pro-about');
    owl.owlCarousel({
      margin: 10,
      loop: true,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  })
</script>

<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>

<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>