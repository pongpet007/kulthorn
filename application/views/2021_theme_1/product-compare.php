<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">

    <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>

    <link href="<?=base_url()?>assets/aos-master/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <?php $this->load->view('2021_theme_1/inc/css-peck'); ?>
    <?php $this->load->view('2021_theme_1/inc/css-products'); ?>
    <?php $this->load->view('2021_theme_1/inc/css'); ?>
    <title>Products Compare</title>
</head>
<body>
   <?
   $this->load->view('2021_theme_1/inc/header1/header3')
   ?>
   <div class="container header-top">
    <div class="row">
        <div class="col-lg-7 col-sm-6" data-aos="fade-down" data-aos-duration="1000">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item color-menu"><a href="<?=base_url()?>">หน้าแรก</a></li>
                    <li class="breadcrumb-item color-menu" aria-current="page"><a href="<?= base_url('Products')?>">สินค้าและบริการ</a></li>
                    <li class="breadcrumb-item  color-menu-active active" aria-current="page">เปรียบเทียบผลิตภัณฑ์</li>
                </ol>
            </nav>

        </div>
        <div class="search-product col-lg-5 col-sm-6 pt-2 pb-1">


        </div>
    </div>
    
</div><!--/////breadcrumb -->

<!-- Button Compare -->
<div class="compare" data-aos="fade-right"  data-aos-offset="400"  data-aos-easing="ease-in-sine">
  <button type="button" onclick="window.location.href='<?= base_url()?>Products/compare';" class="btn btn-secondary btn-compare" data-toggle="tooltip" data-placement="right" title="เปรียบเทียบผลิตภัณฑ์">
    <i class="fas fa-sync-alt"></i>
    <span class="count-compare">
      2
  </span>
</button>
</div>





<div class="container mt-3" style="margin-bottom: 30px;">
    <div class="row">

        <div class="col-lg-3 col-6 animate__animated animate__bounceInUp" style="animation-duration: 1.8s">
            <div class ="picture-product">
                <a href=""><img src="<?= base_url()?>assets/img/pro-about-1.png" style="width: 100%;"></a>
                <div class="overlay-img-4 product-compare">
                    <h3>
                        <a href="#" style="color: #FFFFFF;">ชมรายละเอียดสินค้า</a>
                    </h3>
                </div>
            </div>

            <div class="compare-product-new">
                <h3>
                    <a href="#" style="color: #000000;">เครื่องทำความเย็น / CONDENSING UNIT</a>
                </h3>
                <p>
                    บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
                <h4>
                    รายละเอียด :
                </h4>
                <p class="compare-detail">
                    จำหน่ายฟิลเตอร์ไดเออร์ อุปกรณ์ทำความเย็น หัวจ่ายน้ำยา เครื่องมือทำความเย็นสำหรับช่างคอยด์เย็น อะไหล่คอยด์เย็น
                </p>
            </div>

            <ul class="compare-detail-pro">
                <li>
                    <div class="quotation-compare">
                        <a href="">
                            <i class="fas fa-th-list list-color"></i>
                            &nbsp;
                            <span>ขอใบเสนอราคา</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="delete-compare">
                        <a href="">
                            <i class="fas fa-times-circle circle-color"></i>&nbsp;&nbsp;
                            <span>
                                ลบ
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-lg-3 col-6 animate__animated animate__bounceInUp" style="animation-duration: 1.8s">
            <div class ="picture-product">
                <a href=""><img src="<?= base_url()?>assets/img/pro-about-1.png" style="width: 100%;"></a>
                <div class="overlay-img-4 product-compare">
                    <h3>
                        <a href="#" style="color: #FFFFFF;">ชมรายละเอียดสินค้า</a>
                    </h3>
                </div>
            </div>

            <div class="compare-product-new">
                <h3>
                    <a href="#" style="color: #000000;">เครื่องทำความเย็น / CONDENSING UNIT</a>
                </h3>
                <p>
                    บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
                <h4>
                    รายละเอียด :
                </h4>
                <p class="compare-detail">
                    จำหน่ายฟิลเตอร์ไดเออร์ อุปกรณ์ทำความเย็น หัวจ่ายน้ำยา เครื่องมือทำความเย็นสำหรับช่างคอยด์เย็น อะไหล่คอยด์เย็น
                </p>
            </div>

            <ul class="compare-detail-pro">
                <li>
                    <div class="quotation-compare">
                        <a href="">
                            <i class="fas fa-th-list list-color"></i>
                            &nbsp;
                            <span>ขอใบเสนอราคา</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="delete-compare">
                        <a href="">
                            <i class="fas fa-times-circle circle-color"></i>&nbsp;&nbsp;
                            <span>
                                ลบ
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="col-lg-3 col-6 animate__animated animate__bounceInUp" style="animation-duration: 1.8s">
            <div class ="picture-product">
                <a href=""><img src="<?= base_url()?>assets/img/pro-about-1.png" style="width: 100%;"></a>
                <div class="overlay-img-4 product-compare">
                    <h3>
                        <a href="#" style="color: #FFFFFF;">ชมรายละเอียดสินค้า</a>
                    </h3>
                </div>
            </div>

            <div class="compare-product-new">
                <h3>
                    <a href="#" style="color: #000000;">เครื่องทำความเย็น / CONDENSING UNIT</a>
                </h3>
                <p>
                    บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
                <h4>
                    รายละเอียด :
                </h4>
                <p class="compare-detail">
                    จำหน่ายฟิลเตอร์ไดเออร์ อุปกรณ์ทำความเย็น หัวจ่ายน้ำยา เครื่องมือทำความเย็นสำหรับช่างคอยด์เย็น อะไหล่คอยด์เย็น
                </p>
            </div>

            <ul class="compare-detail-pro">
                <li>
                    <div class="quotation-compare">
                        <a href="">
                            <i class="fas fa-th-list list-color"></i>
                            &nbsp;
                            <span>ขอใบเสนอราคา</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="delete-compare">
                        <a href="">
                            <i class="fas fa-times-circle circle-color"></i>&nbsp;&nbsp;
                            <span>
                                ลบ
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="col-lg-3 col-6 animate__animated animate__bounceInUp" style="animation-duration: 1.8s">
            <div class ="picture-product">
                <a href=""><img src="<?= base_url()?>assets/img/pro-about-1.png" style="width: 100%;"></a>
                <div class="overlay-img-4 product-compare">
                    <h3>
                        <a href="#" style="color: #FFFFFF;">ชมรายละเอียดสินค้า</a>
                    </h3>
                </div>
            </div>

            <div class="compare-product-new">
                <h3>
                    <a href="#" style="color: #000000;">เครื่องทำความเย็น / CONDENSING UNIT</a>
                </h3>
                <p>
                    บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                </p>
                <h4>
                    รายละเอียด :
                </h4>
                <p class="compare-detail">
                    จำหน่ายฟิลเตอร์ไดเออร์ อุปกรณ์ทำความเย็น หัวจ่ายน้ำยา เครื่องมือทำความเย็นสำหรับช่างคอยด์เย็น อะไหล่คอยด์เย็น
                </p>
            </div>

            <ul class="compare-detail-pro">
                <li>
                    <div class="quotation-compare">
                        <a href="">
                            <i class="fas fa-th-list list-color"></i>
                            &nbsp;
                            <span>ขอใบเสนอราคา</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="delete-compare">
                        <a href="">
                            <i class="fas fa-times-circle circle-color"></i>&nbsp;&nbsp;
                            <span>
                                ลบ
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>





    </div>
</div>

<?
$this->load->view('2021_theme_1/inc/footer1/footer2')
?>



<script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>