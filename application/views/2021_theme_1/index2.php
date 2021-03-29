<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Fixed headers - fullPage.js</title>
  <meta name="author" content="Alvaro Trigo Lopez" />
  <meta name="description" content="fullPage fixed header and footer." />
  <meta name="keywords"  content="fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css" />
  <meta name="Resource-type" content="Document" />
  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fullpage/fullpage.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fullpage/examples.css" />
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/docs.theme.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.theme.default.min.css">
  <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/owlcarousel/owl.carousel.js"></script>

  <?php $this->load->view('2021_theme_1/inc/css'); ?>
  <?php $this->load->view('2021_theme_1/inc/css-pook'); ?>

</head>
<body>
    <?php print_r(($this->uri->segment(2)))?>
  <div id="header">
      <!-- <ul id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">01.กุลธร</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">02.เกี่ยวกับเรา</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">03.สินค้าและบริการ</a></li>
        <li data-menuanchor="fourthPage" class=""><a href="#fourthPage">04.เกร็ดความรู้</a></li>
        <li data-menuanchor="fifthPage"><a href="#fifthPage">05.ข่าวสารและกิจกรรม</a></li>
        <li data-menuanchor="sixthPage"><a href="#sixthPage">06.ร่วมงานกับเรา</a></li>
        <li data-menuanchor="seventhPage"><a href="#seventhPage">07.ติดต่อเรา</a></li>
      </ul> -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1 col-sm-4 col-4">
            <div class="img-logo">
              <img src="<?= base_url()?>/assets/img/logo-kul.png">
            </div>

          </div>

          <div class="col-md-11 col-sm-8 col-8">
            <nav class="navbar navbar-expand-lg navbar-light /*bg-light*/ nav-color">
              <a class="navbar-brand" href="#"> </a>
              <button class="navbar-toggler nav-color-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav navbar-nav-new">
                  <li class="nav-item nav-item-new nav-1">
                    <a class="nav-link nav-link-new" href="#firstPage"><span class="number-page-1">01.</span>หน้าหลัก</a>
                  </li>
                  <li class="nav-item  nav-item-new nav-2">
                    <a class="nav-link nav-link-new" href="#secondPage"><span class="number-page-2">02.</span>เกี่ยวกับเรา</a>
                  </li>
                  <li class="nav-item nav-item-new nav-3">
                    <a class="nav-link nav-link-new" href="#thirdPage"><span class="number-page-3">03.</span>สินค้าและบริการ</a>
                  </li>
                  <li class="nav-item nav-item-new nav-4">
                    <a class="nav-link nav-link-new" href="#fourthPage"><span class="number-page-4">04.</span>เกร็ดความรู้</a>
                  </li>
                  <li class="nav-item nav-item-new nav-5">
                    <a class="nav-link nav-link-new" href="#fifthPage"><span class="number-page-5">05.</span>ข่าวสารและกิจกรรม</a>
                  </li>
                  <li class="nav-item nav-item-new nav-6">
                    <a class="nav-link nav-link-new" href="#sixthPage"><span class="number-page-6">06.</span>ร่วมงานกับเรา</a>
                  </li>
                  <li class="nav-item nav-item-new nav-6">
                    <a class="nav-link nav-link-new" href="#seventhPage"><span class="number-page-6">07.</span>ติดต่อเรา</a>
                  </li>
                  <li class="nav-item nav-item-new nav-7">
                    <a class="nav-link nav-link-new img-flag" style="cursor: default;">
                      <img src="<?= base_url()?>assets/img/thai-flag.png" style="margin-top: -5px;">
                    </a>
                  </li>
                  <li class="nav-item  nav-8">
                    <div class="dropdown nav-link-new show changlang">
                      <a class="btn btn-secondary dropdown-toggle button-color" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ภาษาไทย
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item drop-new" href="#">Action</a>
                        <a class="dropdown-item drop-new" href="#">Another action</a>
                        <a class="dropdown-item drop-new" href="#">Something else here</a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item nav-item-new nav-9">  
                    <a class="nav-link nav-link-new" href=""><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="nav-item nav-item-new nav-9">  
                    <a class="nav-link nav-link-new" href=""><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="nav-item nav-item-new nav-9">  
                    <a class="nav-link nav-link-new" href=""><i class="fab fa-instagram"></i></a>
                  </li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div id="fullpage">
      <div class="section " id="section0">
        <div class="slide" id="slide1" style="background-image: url('assets/img/bg-banner-1.jpg');">
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
        <div class="slide" id="slide2" style="background-image: url('assets/img/bg-banner-2.jpg');">
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
        <div class="slide" id="slide3" style="background-image: url('assets/img/bg-banner-3.jpg');">
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
      <div class="section" id="section1" style="background-image: url('assets/img/bg-banner-3.jpg');">
        <div class="container">
          <div class="row">
            <div id="demos" class="large-12 columns space-his">
              <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <style type="text/css">
                  .item {
                    text-align: left;
                  }
                  p.about-year span::before {
                    background-color: #eeeeee;
                    content: "";
                    height: 1px;
                    right: 0;
                    position: absolute;
                    bottom: 180px;
                    transition: all 0.4s ease 0s;
                    width: 88%;
                    z-index: 1;
                  }
                  p{
                    color: #fff;
                    font-size: 46px;
                    margin-bottom: 15px;
                    margin-top: 15px;
                  }
                  p.aboutnew{
                    color: #fff;
                    font-size: 28px;
                    height: 134px;
                  }
                  p.aboutnew span {
                    color: #fff;
                    font-size: 34px;

                  }
                  .width33 {
                    width: 33.33%;
                  }
                  .MISSIONH1 {
                    font-size: 46px;
                    text-align: left;
                  }
                  .MISSIONP {
                    font-size: 28px;
                    text-align: left;
                    line-height: 25px;
                  }
                  p.aboutnew-2 {
                    font-size: 28px;
                    line-height: 30px;
                  }


                </style>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="width33"><a class="active" href="#Section1" aria-controls="home" role="tab" data-toggle="tab">ประวัติความเป็นมาของ กุลธร</a></li>
                  <li role="presentation" class="width33"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">วิสัยทัศน์และพันธกิจ</a></li>
                  <li role="presentation" class="width33"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">บริษัทในเครือของ กุลธร</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                  <div role="tabpanel" class="tab-pane fade in active show" id="Section1">
                    <div class="owl-carousel owl-theme owl-carousel-1">
                      <div class="item">
                        <img src="<?=base_url()?>/image_new/About1.jpg">
                        <p class="about-year">2508<span>
                        </span></p>
                        <p class="aboutnew">
                          <span>ก่อนเปิดร้านกุลธร คุณสุเมธ ทำงานขายอะไหล่เครื่องเย็น  และมอเตอร์ไซค์ อยู่ที่ร้านในเยาวราช มีความรู้ในเรื่องเครื่องกลดี  เพราะเคยฝึกงานในโรงกลึงมาก่อน เมื่ออายุราว 27 ปี ตัดสินใจที่จะมีกิจการของตัวเอง จัดตั้ง กุลธรเอนจิเนียริ่ง ในปี 2508</span>
                        </p>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>/image_new/About2.jpg">
                        <p class="about-year">2510<span>
                        </span></p>
                        <p class="aboutnew">
                          <span>กุลธร เมื่อตอนเริิิ่มต้น ประมาณก่อนปี 2510 </span>
                        </p>
                      </div>
                    </div>
                    <script>
                      $(document).ready(function() {
                        var owl = $('.owl-carousel-1');
                        owl.owlCarousel({
                          margin: 10,
                          loop: true,
                          responsive: {
                            0: {
                              items: 1
                            },
                            600: {
                              items: 1
                            },
                            1000: {
                              items: 2
                            },
                            1300: {
                              items: 2
                            }
                          }
                        })
                      })
                    </script>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Section2">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="<?=base_url()?>/image_new/About3.jpg">
                          </div>
                          <div class="col-lg-6 pt-60">
                            <h1 class="MISSIONH1">OUR MISSION</h1>
                            <p class="MISSIONP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row" style="margin-top: 30px;">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-6 pt-60">
                            <h1 class="MISSIONH1">OUR VISION</h1>
                            <p class="MISSIONP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                          </div>
                          <div class="col-lg-6">
                            <img src="<?=base_url()?>/image_new/About4.jpg">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Section3">
                    <div class="owl-carousel owl-theme owl-carousel-2">
                      <div class="item">
                        <img src="<?=base_url()?>/image_new/About5.jpg">
                        <img src="<?=base_url()?>/image_new/About6.png">
                        <p class="aboutnew-2">
                          <span>Kulthorn International Co., Ltd.กุลธรเริ่มเปิดตลาดต่างประเทศ ในปี ๒๕๒๓ จึงได้ตั้งบริษัท กุลธรอินเตอร์เนชั่นแนล เพื่อดูแลงานขายต่างประเทศ ควบคู่กับการขายสินค้าหมวดเครื่องยนต์ ปั๊มน้ำ รถตัดหญ้าบริษัท กุลธรอินเตอร์เนชั่นแนล จำกัด</span>
                        </p>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>/image_new/About7.jpg">
                        <img src="<?=base_url()?>/image_new/About8.png">
                        <p class="aboutnew-2">
                          <span>บริษัท กุลธรเคอร์บี้เฟาน์ดรี้ จำกัดปี ๒๕๓๒ กุลธรจัดตั้งโรงหล่อเหล็ก เพื่อผลิตชิ้นงานเหล็กหล่อคุณภาพป้อนโรงงานในเครือ และส่งขายให้ลูกค้าอื่นๆในอุตสาหกรรมเดียวกัน  การที่มีโรงงานผลิตวัตถุดิบคุณภาพนี้ เป็นปัจจัยสำคัญปัจจัยหนึ่ง ที่ทำให้ผู้ผลิตคอมเพรสเซอร์รายอื่นๆ ตัดสินใจมาลงทุนตั้งโรงงานในเมืองไทยแทนที่จไปประเทศอื่น</span>
                        </p>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>/image_new/About9.jpg">
                        <img src="<?=base_url()?>/image_new/About10.png">
                        <p class="aboutnew-2">
                          <span>ในปี ๒๕๓๐ กุลธรได้ลงทุนร่วมกับบริษัทผู้ผลิตมอเตอร์ไฟฟ้าที่เชี่ยวชาญมอเตอร์ที่ใช้ในอุตสาหกรรมเครื่องปรับอากาศ เครื่องทำความเย็นชั้นนำของสหรัฐตั้งโรงงาน กุลธรยูนิเวอร์แซลอีเล็คทริค เพื่อผลิตมอเตอร์ไฟฟ้าต่อมาเกิดการเปลี่ยนแปลงผู้ถือหุ้นในบริษัทฝรั่ง กุลธรจึงเข้าถือหุ้นทั้งหมดเปลี่ยนชื่อเป็น กุลธรอิเล็คทริค</span>
                        </p>
                      </div>
                    </div>
                    <script>
                      $(document).ready(function() {
                        var owl = $('.owl-carousel-2');
                        owl.owlCarousel({
                          margin: 10,
                          loop: true,
                          responsive: {
                            0: {
                              items: 1
                            },
                            600: {
                              items: 1
                            },
                            1000: {
                              items: 3
                            }
                          }
                        })
                      })
                    </script>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      <style type="text/css">
        h1.section-products {
          color: #000000;
          font-size: 46px;
        }
        p.section-products {
          color: #000000;
          font-size: 28px;
        }

        .products-catagory-bt .products-catagory-name h1 {
          color: #000000;
          font-size: 36px;
          text-align: left;
        }
        .products-catagory-bt .products-catagory-name h2 {
          color: #1E1670;
          font-size: 36px;
          text-align: left;
          font-weight: bold;
        }
        .products-catagory-name {
          border-left: 5px solid #000000;
        }
        .products-catagory-bt.active .products-catagory-name h1 {
          color: #000000;
          font-size: 36px;
          text-align: left;
        }
        .products-catagory-bt.active .products-catagory-name h2 {
          color: #2F23B0;
          font-size: 36px;
          text-align: left;
          font-weight: bold;
        }
        .active>.products-catagory-name {
          border-left: 5px solid #2F23B0;
        }
        .products-catagory-bt:after{
          content: "";
          width: 100%;
          height: 1px;
          background: #eeeeee;
          position: absolute;
          bottom: 15px;
          left: 0;
          z-index: -1;
          transition: all 0.3s ease 0s;
        }

      </style>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#products-catagory-1").on('click', function(){
            console.log("click!!!");
          });
        });
      </script>
      <div class="section" id="section2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 ">
              <h1 class="section-products">
                สินค้าและบริการ
              </h1>
              <p class="section-products">Kulthorn Compressors Sold All Over the World Since 1981</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="row">
                    <div class="col-lg-12 products-catagory-bt active" onclick="" id="products-catagory-1" style="padding-bottom: 30px;">
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <h1>คอมเพรสเซอร์</h1>
                          <h2>Compressors</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 products-catagory-bt" id="products-catagory-2" style="padding-bottom: 30px;">
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <h1>วาล์ว</h1>
                          <h2>VALVE</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 products-catagory-bt" id="products-catagory-3" style="padding-bottom: 30px;">
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <h1>อุปกรณ์ทำความเย็น</h1>
                          <h2>Cooling equipment</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 products-catagory-bt" id="products-catagory-4" style="padding-bottom: 30px;">
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <h1>รถตัดหญ้า</h1>
                          <h2>Lawn mower</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 products-catagory-bt" id="products-catagory-5" style="padding-bottom: 30px;">
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <h1>ปั๊มน้ำ</h1>
                          <h2>Pumps</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 products-catagory-bt" id="products-catagory-6" style="padding-bottom: 30px;">
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <h1>สปริงเกอร์</h1>
                          <h2>Springer</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8">
                  <div class="product-hide-1">
                    <img style="" src="<?=base_url()?>image_new/product1.jpg">
                  </div>
                  <div class="product-hide-2">
                    <img style="" src="<?=base_url()?>image_new/product2.jpg">
                  </div>
                  <div class="product-hide-3">
                    <img style="" src="<?=base_url()?>image_new/product3.jpg">
                  </div>
                  <div class="product-hide-4">
                    <img style="" src="<?=base_url()?>image_new/product4.jpg">
                  </div>
                  <div class="product-hide-5">
                    <img style="" src="<?=base_url()?>image_new/product5.jpg">
                  </div>
                  <div class="product-hide-6">
                    <img style="" src="<?=base_url()?>image_new/product6.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function(){
          $("#products-catagory-1").mouseover(function(){
            $(".product-hide-1").css("display", "block");
          });
          $("#products-catagory-1").mouseout(function(){
            $(".product-hide-1").css("display", "none");
          });
          $("#products-catagory-2").mouseover(function(){
            $(".product-hide-2").css("display", "block");
          });
          $("#products-catagory-2").mouseout(function(){
            $(".product-hide-2").css("display", "none");
          });
          $("#products-catagory-3").mouseover(function(){
            $(".product-hide-3").css("display", "block");
          });
          $("#products-catagory-3").mouseout(function(){
            $(".product-hide-3").css("display", "none");
          });
          $("#products-catagory-4").mouseover(function(){
            $(".product-hide-4").css("display", "block");
          });
          $("#products-catagory-4").mouseout(function(){
            $(".product-hide-4").css("display", "none");
          });
          $("#products-catagory-5").mouseover(function(){
            $(".product-hide-5").css("display", "block");
          });
          $("#products-catagory-5").mouseout(function(){
            $(".product-hide-5").css("display", "none");
          });
          $("#products-catagory-6").mouseover(function(){
            $(".product-hide-6").css("display", "block");
          });
          $("#products-catagory-6").mouseout(function(){
            $(".product-hide-6").css("display", "none");
          });
        });

      </script>
      <style type="text/css">
        .product-hide-1 {
          display: none;
        }
        .product-hide-2 {
          display: none;
        }
        .product-hide-3 {
          display: none;
        }
        .product-hide-4 {
          display: none;
        }
        .product-hide-5 {
          display: none;
        }
        .product-hide-6 {
          display: none;
        }
      </style>
      <div class="section" id="section3">
        <div class="intro">
          <div class="detail-know">
            <h2>เกร็ดความรู้</h2>
            <p>เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรทำ</p>
          </div>
          <div class="container">
            <div class="row">

              <div class="col-md-12">
                <div class="owl-carousel owl-theme owl-carousel-3">

                  <div class="item">
                    <div class="know">
                      <a href="#"><img src="<?= base_url()?>assets/img/know-1.png"></a>
                      <a href="#"><h2>หัวข้อเนื้อหาเกร็ดความรู้</h2></a>
                      <span>
                        เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                      </span>
                      <p class="p-news-detail">
                        Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                      </p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="know">
                      <a href="#"><img src="<?= base_url()?>assets/img/know-2.png"></a>
                      <a href="#"><h2>หัวข้อเนื้อหาเกร็ดความรู้</h2></a>
                      <span>
                        เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                      </span>
                      <p class="p-news-detail">
                        Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                      </p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="know">
                      <a href="#"><img src="<?= base_url()?>assets/img/know-3.png"></a>
                      <a href="#"><h2>หัวข้อเนื้อหาเกร็ดความรู้</h2></a>
                      <span>
                        เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                      </span>
                      <p class="p-news-detail">
                        Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                      </p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="know">
                      <a href="#"><img src="<?= base_url()?>assets/img/know-4.png"></a>
                      <a href="#"><h2>หัวข้อเนื้อหาเกร็ดความรู้</h2></a>
                      <span>
                        เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                      </span>
                      <p class="p-news-detail">
                        Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                      </p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="know">
                      <a href="#"><img src="<?= base_url()?>assets/img/know-2.png"></a>
                      <a href="#"><h2>หัวข้อเนื้อหาเกร็ดความรู้</h2></a>
                      <span>
                        เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                      </span>
                      <p class="p-news-detail">
                        Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
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
          var owl = $('.owl-carousel-3');
          owl.owlCarousel({
            margin: 10,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              500: {
                items: 1
              },
              700: {
                items: 1
              },
              1000: {
                items: 4
              }
            }
          })
        })
      </script>


      <div class="section" id="section4">
        <div class="intro">
          <div class="detail-news">
            <h2>ข่าวสารและกิจกรรม</h3>
              <p>ข่าวสารน่าสนใจและกิจกรรมภายในของ บริษัท กุลธร จำกัด</p>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-md-12">

                  <div class="owl-carousel owl-theme owl-carousel-4">
                    <div class="item">
                      <div class="news">
                        <a href="#"><img src="<?= base_url()?>assets/img/news-1.png"></a>
                        <a href="#"><h2>หัวข้อเนื้อหาข่าวสาร</h2></a>
                        <span>
                          เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                        </span>
                        <p class="p-news-detail">
                          Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <div class="news">
                        <a href="#"><img src="<?= base_url()?>assets/img/news-2.png"></a>
                        <a href="#"><h2>หัวข้อเนื้อหาข่าวสาร</h2></a>
                        <span>
                          เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                        </span>
                        <p class="p-news-detail">
                          Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <div class="news">
                        <a href="#"><img src="<?= base_url()?>assets/img/news-3.png"></a>
                        <a href="#"><h2>หัวข้อเนื้อหาข่าวสาร</h2></a>
                        <span>
                          เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                        </span>
                        <p class="p-news-detail">
                          Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <div class="news">
                        <a href="#"><img src="<?= base_url()?>assets/img/news-4.png"></a>
                        <a href="#"><h2>หัวข้อเนื้อหาข่าวสาร</h2></a>
                        <span>
                          เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                        </span>
                        <p class="p-news-detail">
                          Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <div class="news">
                        <a href="#"><img src="<?= base_url()?>assets/img/news-4.png"></a>
                        <a href="#"><h2>หัวข้อเนื้อหาข่าวสาร</h2></a>
                        <span>
                          เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ
                        </span>
                        <p class="p-news-detail">
                          Lorem ipsum dolor sit amet, consectetuer adipi-scing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor- 
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
            var owl = $('.owl-carousel-4');
            owl.owlCarousel({
              margin: 10,
              loop: true,
              responsive: {
                0: {
                  items: 1
                },
                400: {
                  items: 1
                },
                600: {
                  items: 1
                },
                700: {
                  items: 2
                },
                1000: {
                  items: 4
                }
              }
            })
          })
        </script>


        <div class="section" id="section5">
          <div class="intro">
            <div class="detail-join">
              <h2>ร่วมงานกับเรา</h2>
              <p>ร่วมงานกับเรา สามารถส่ง Email มาได้ที่  info@kulthorn.com</p>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="top-table">
                    <table class="table-join"  width="100%">
                      <thead>
                        <tr class="head-join">
                          <td class="text-position"><h3>ตำแหน่ง</h3></td>
                          <td class="text-count"><h3>จำนวน</h3></td>
                          <td class="text-detail"><h3>รายละเอียด</h3></td>
                        </tr>


                        <!-- Wait code Loop -->
                        <tr class="job-detail-tr-1">
                          <td class="name-job">
                            <h3>คอมพิวเตอร์กราฟฟิก</h3>
                          </td>
                          <td class="count-job">
                            <h3> 2 อัตรา</h3>
                          </td>
                          <td class="detail-job">
                            <h3><a href="#">คุณสมบัติ</a></h3>
                          </td>
                        </tr>
                        <tr class="job-detail-tr-2">
                          <td class="name-job">
                            <h3>ผู้จัดการโตรงการ</h3>
                          </td>
                          <td class="count-job">
                            <h3>2 อัตรา</h3>
                          </td>
                          <td class="detail-job">
                            <h3><a href="#">คุณสมบัติ</a></h3>
                          </td>
                        </tr>
                        <!-- End Loop -->

                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>




        <div class="section" id="section6">
          <div class="intro">
            <div class="detail-contact">
              <h2>
                ติดต่อเรา
              </h2>
              <p class="p-contact">
                ท่านสามารถสอบถามสินค้าเพิ่มเติมได้ที่
              </p>

              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1918.8728020035055!2d100.51097352290495!3d13.756599299480568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2993f1660da53%3A0x3875632c3e996850!2z4LiB4Li44Lil4LiY4Lij!5e0!3m2!1sth!2sth!4v1616649400590!5m2!1sth!2sth" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="text-contact">
                      <h2>
                        บริษัท กุลธร จำกัด
                      </h2>
                      <ul class="ul-contact">
                        <li class="address-text">
                         237-237/1-4 ถนน หลานหลวง แขวงวัดโสมนัส เขตป้อมปราบศัตรูพ่าย กรุงเทพมหานคร 10100
                       </li>
                       <li>
                        <h3 style="color: #FFF;">เบอร์โทรศัพท์ : &nbsp;</h3> <a href="tel:+662-282-2151"> +662-282-2151</a>
                      </li>
                      <li>
                        <h3 style="color: #FFF;">อีเมล : &nbsp;</h3>bkksales@kulthorn.com , kcsales@kulthorn.co.th 
                      </li>
                    </ul>
                    <hr style="border :2px dashed #FFF;">


                  </div>
                  <h2>แบบฟอร์มติดต่อ</h2><br>
                  <form>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                       <input name="name" placeholder="ชื่อผู้ติดต่อ" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; font-size: 24px;">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                      <input name="lastname" placeholder="นามสกุล" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; font-size: 24px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                     <input name="tel" placeholder="เบอร์โทรศัพท์" type="tel" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; font-size: 24px;">
                   </div>
                   <div class="col-lg-6 col-md-6 col-12">
                    <input name="email" placeholder="อีเมล" type="email" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; font-size: 24px;">
                  </div>
                  <div class="col-md-12">
                    <textarea name="email" placeholder="ข้อความ" type="email" style="background: #ffffff;border: 1px solid #ebebeb; min-height: 50px; font-size: 24px;"></textarea>
                  </div>
                </div>
                <button class="btn-sent-email" type="submit">ส่งข้อความ</button>
              </form>

            </div>

          </div>
        </div>

        <footer>
          <div class="col-md-12 copyright">
            <div class="detail-copy">
              © Copyright 2020. All Rights Reserved.
            </div>
          </div>
        </footer>


      </div>


    </div>
  </div>
</div>
<script src="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/fullpage/scrolloverflow.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/fullpage/fullpage.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/fullpage/examples.js"></script>
<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>
<script type="text/javascript">
  var myFullpage = new fullpage('#fullpage', {
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixthPage', 'seventhPage'],
    navigation: true,
    verticalCentered: true,
    slidesNavigation: true,
    navigationTooltips: ['01.กุลธร', '02.เกี่ยวกับเรา', '03.สินค้าและบริการ', '04.เกร็ดความรู้', '05.ข่าวสารและกิจกรรม', '06.ร่วมงานกับเรา', '07.ติดต่อเรา'],
    showActiveTooltip: true,
    menu: '#menu',
    scrollOverflow: true
  });
</script>
</body>
</html>