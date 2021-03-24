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
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fullpage/examples.css" /> -->
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/docs.theme.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.theme.default.min.css">
    <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/owlcarousel/owl.carousel.js"></script>
    <style type="text/css">
    @font-face {
      font-family: 'PSLDISPLAYPRO';
      src: url('<?=base_url()?>assets_2021_theme_1/font/PSL029pro.ttf');
      font-weight: normal;
      font-style: normal;
    }
  </style>
    <style>
      body {
        font-family: PSLDISPLAYPRO;
      }
      /* Style for our header texts
      * --------------------------------------- */
      h1{
      font-size: 5em;
      font-family: PSLDISPLAYPRO;
      color: #fff;
      margin:0;
      padding:0;
      }
      .intro p{
      color: #fff;
      }
      /* Centered texts in each section
      * --------------------------------------- */
      .section{
      text-align:center;
      }
      /* Fixed header and footer.
      * --------------------------------------- */
      #header, #footer{
      position:fixed;
      height: 50px;
      display:block;
      width: 100%;
      z-index:9;
      text-align:center;
      color: #f2f2f2;
      padding: 20px 0 0 0;
      }
      #header{
      top:0px;
      }
      #footer{
      bottom:0px;
      }
      /* Bottom menu
      * --------------------------------------- */
      #infoMenu {
      bottom: 80px;
      }
      #infoMenu li a {
      color: #fff;
      z-index: 999;
      }
      a:hover,a:focus{
      outline: none;
      text-decoration: none;
      }
      .tab .nav-tabs{ border-bottom: 0px solid #e8e8e8; }
      .tab .nav-tabs li a{
        letter-spacing : 1px;
        display: block;
        padding: 10px 20px;
        margin: 0 5px 1px 0;
        background: #2f23b0;
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        text-align: center;
        border: none;
        border-radius: 0;
        z-index: 2;
        position: relative;
        transition:all 0.3s ease 0s;
      }
      .tab .nav-tabs li a:hover {
        background: #4030f0;
        color: #ffffff;
        border: none;
      }
      .tab .nav-tabs li a.active{
        background: #4030f0;
        color: #ffffff;
        border: none;
      }
      .tab .nav-tabs li a.active:before{
      content: "\f0d7";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      font-size: 50px;
      font-weight: 700;
      color: #4030f0;
      margin: 0 auto;
      position: absolute;
      bottom: -45px;
      left: 0;
      right: 0;
      }
      .tab .nav-tabs li a.active:after{
      content: "";
      width: 100%;
      height: 3px;
      background: #4030f0;
      position: absolute;
      bottom: -1px;
      left: 0;
      z-index: -1;
      transition: all 0.3s ease 0s;
      }
      .tab .tab-content{
      padding: 30px 20px 20px;
      margin-top: 0;
      font-size: 15px;
      color: #7a9181;
      line-height: 30px;
      border-radius: 0 0 5px 5px;
      }
      .tab .tab-content h3{
      font-size: 24px;
      margin-top: 0;
      }
      @media only screen and (max-width: 479px){
      .tab .nav-tabs li{
      width: 100%;
      text-align: center;
      }
      .tab .nav-tabs li a.active:before{
      content: "\f105";
      bottom: 15%;
      left: 0;
      right: auto;
      }
      }
      @media (min-width:1400px) {
        .container {
          max-width: 1360px
        }
      }
      .pt-60 {
        padding-top: 60px;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <ul id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">01.กุลธร</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">02.เกี่ยวกับเรา</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">03.สินค้าและบริการ</a></li>
        <li data-menuanchor="fourthPage" class=""><a href="#fourthPage">04.เกร็ดความรู้</a></li>
        <li data-menuanchor="fifthPage"><a href="#fifthPage">05.ข่าวสารและกิจกรรม</a></li>
        <li data-menuanchor="sixthPage"><a href="#sixthPage">06.ร่วมงานกับเรา</a></li>
        <li data-menuanchor="seventhPage"><a href="#seventhPage">07.ติดต่อเรา</a></li>
      </ul>
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
            <div id="demos" class="large-12 columns">
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
                        items: 3
                      },
                      1000: {
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
                              items: 3
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
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4">
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
                <div class="col-lg-8">
                  <div class="product-hide-1">
                    <img style="padding-top: 70px;" src="<?=base_url()?>image_new/product1.jpg">
                  </div>
                  <div class="product-hide-2">
                    <img style="padding-top: 70px;" src="<?=base_url()?>image_new/product2.jpg">
                  </div>
                  <div class="product-hide-2">
                    <img style="padding-top: 70px;" src="<?=base_url()?>image_new/product3.jpg">
                  </div>
                  <div class="product-hide-4">
                    <img style="padding-top: 70px;" src="<?=base_url()?>image_new/product4.jpg">
                  </div>
                  <div class="product-hide-5">
                    <img style="padding-top: 70px;" src="<?=base_url()?>image_new/product5.jpg">
                  </div>
                  <div class="product-hide-6">
                    <img style="padding-top: 70px;" src="<?=base_url()?>image_new/product6.jpg">
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
          <h1>Enjoy it</h1>
        </div>
      </div>
      <div class="section" id="section4">
        <div class="intro">
          <h1>Enjoy it</h1>
        </div>
      </div>
      <div class="section" id="section5">
        <div class="intro">
          <h1>Enjoy it</h1>
        </div>
      </div>
      <div class="section" id="section6">
        <div class="intro">
          <h1>Enjoy it</h1>
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