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

    <?php $this->load->view('2021_theme_1/inc/css-peck'); ?>
    <?php $this->load->view('2021_theme_1/inc/css-products'); ?>
    <?php $this->load->view('2021_theme_1/inc/css'); ?>
    <title>Products</title>

    <meta name="description" content="Kulthorn" />
    <meta name="keywords"  content="Kulthorn" />

</head>
<body>

    <?
    $this->load->view('2021_theme_1/inc/header1/header3')
    ?>

    <!-- Button Compare -->
    <div class="compare" data-aos="flip-right" data-aos-duration="1000">
        <button type="button" onclick="window.location.href='<?= base_url()?>Products/compare';" class="btn btn-secondary btn-compare" data-toggle="tooltip" data-placement="right" title="เปรียบเทียบผลิตภัณฑ์">
            <i class="fas fa-sync-alt"></i>
            <span class="count-compare">
                2
            </span>
        </button>
    </div>


    <div class="container header-top">
        <div class="row">
            <div class="col-lg-7 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1000">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item color-menu"><a href="#" class="menu-home">หน้าแรก</a></li>
                        <li class="breadcrumb-item color-menu" aria-current="page"><a href="#" class="menu-products">สินค้าและบริการ</a></li>
                        <li class="breadcrumb-item  color-menu-active active" aria-current="page">ชื่อหมวดสินค้า</li>
                    </ol>
                </nav>
            </div>
            <div class="search-product col-lg-5 col-sm-6 pt-2 pb-1" data-aos="zoom-in-left" data-aos-duration="1000">

                <form class="form-inline">
                    <div class="form-group find-pro">
                        <input type="search" class="form-control" id="search" placeholder="ค้นหาสินค้า...">
                    </div>
                    <button type="submit" class="btn-search" name="search-product"><i class="fas fa-search"></i></button>
                </form>

            </div>
        </div>

    </div><!--/////breadcrumb -->



    <div class="container mt-3 all-product" data-aos="fade-up"
    data-aos-duration="1500">
    <div class="row">
        <div class="col-lg-3 order-2 order-md-1 category-menu">
           <h3><b>หมวดสินค้าทั้งหมด</b></h3>
           <nav class="nav flex-column">
            <a href="#" class="nav-link active" ><i class="fas fa-chevron-right icon-cate"></i>วาล์ว</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>คอมเพรสเซอร์</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>อุปกรณ์ทำความเย็น</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>รถตัดหญ้า</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>ปั๊มน้ำ</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>สปริงเกอร์</a>
        </nav>

        <h3 class="mt-5"><b>แบรนด์สินค้า</b></h3>
        <nav class="nav flex-column">
            <a class="nav-link active" href="#"><i class="fas fa-chevron-right icon-cate"></i>กุลธร</a>
            <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>SECO</a>
        </nav>
        <h3 class="mt-5"><b>คำค้นหายอดนิยม</b></h3>
        <div class="scrollbar-search">
            <div class="tags-a">
                <a href="#">เครื่องตัดหญ้าแบบเข็น</a>
            </div>

            <div class="tags-a">
                <a href="#">เครื่องตัดหญ้า</a>
            </div>
        </div>
    </div>

    <div class="col-lg-9 order-1 order-md-2 products-all mb-3">
        <div class="row">

            <div class= "col-6 col-lg-4 ">
                <div class ="picture-product">
                    <img src="image_new/p-1.jpg" alt="kulthorn">
                    <div class="overlay-img-2 product-overlay">
                        <a href="<?=base_url()?>Products/detail" class="goto-productdetail">
                            <h3>
                                ชมรายละเอียดสินค้า
                            </h3>
                        </a>
                    </div>
                </div>

                <div class="detail-product">
                    <a href="<?=base_url()?>Products/detail" class="goto-productdetail-2">
                        <h3>
                            เครื่องทำความเย็น / CONDENSING UNIT
                        </h3>
                    </a>
                    <p>
                        บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                    </p>
                </div>
            </div>

            <div class= "col-6 col-lg-4 ">
                <div class ="picture-product">
                    <img src="image_new/p-1.jpg" alt="kulthorn">
                    <div class="overlay-img-2 product-overlay">
                        <a href="<?=base_url()?>Products/detail" class="goto-productdetail">
                            <h3>
                                ชมรายละเอียดสินค้า
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="detail-product">
                    <a href="<?=base_url()?>Products/detail" class="goto-productdetail-2">
                        <h3>
                            เครื่องทำความเย็น / CONDENSING UNIT
                        </h3>
                    </a>
                    <p>
                        บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                    </p>
                </div>
            </div>

            <div class= "col-6 col-lg-4 ">
                <div class ="picture-product">
                    <img src="image_new/p-1.jpg" alt="kulthorn"> 
                    <div class="overlay-img-2 product-overlay">
                        <a href="<?=base_url()?>Products/detail" class="goto-productdetail">
                            <h3>
                                ชมรายละเอียดสินค้า
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="detail-product">
                    <a href="<?=base_url()?>Products/detail" class="goto-productdetail-2">
                        <h3>
                            เครื่องทำความเย็น / CONDENSING UNIT
                        </h3>
                    </a>
                    <p>
                        บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                    </p>
                </div>
            </div>

            <div class= "col-6 col-lg-4 ">
                <div class ="picture-product">
                    <img src="image_new/p-1.jpg"alt="kulthorn">
                    <div class="overlay-img-2 product-overlay">
                        <a href="<?=base_url()?>Products/detail" class="goto-productdetail">
                            <h3>
                                ชมรายละเอียดสินค้า
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="detail-product">
                    <a href="<?=base_url()?>Products/detail" class="goto-productdetail-2">
                        <h3>
                            เครื่องทำความเย็น / CONDENSING UNIT
                        </h3>
                    </a>
                    <p>
                        บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                    </p>
                </div>
            </div>


            <div class= "col-6 col-lg-4 ">
                <div class ="picture-product">
                    <img src="image_new/p-1.jpg" alt="kulthorn">
                    <div class="overlay-img-2 product-overlay">
                        <a href="<?=base_url()?>Products/detail" class="goto-productdetail">
                            <h3>
                                ชมรายละเอียดสินค้า
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="detail-product">
                    <a href="<?=base_url()?>Products/detail" class="goto-productdetail-2">
                        <h3>
                            เครื่องทำความเย็น / CONDENSING UNIT
                        </h3>
                    </a>
                    <p>
                        บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                    </p>
                </div>
            </div>


            <div class= "col-6 col-lg-4 ">
                <div class ="picture-product">
                    <img src="image_new/p-1.jpg" alt="kulthorn">
                    <div class="overlay-img-2 product-overlay">
                        <a href="<?=base_url()?>Products/detail" class="goto-productdetail">
                            <h3>
                                ชมรายละเอียดสินค้า
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="detail-product">
                    <a href="<?=base_url()?>Products/detail" class="goto-productdetail-2">
                        <h3>
                            เครื่องทำความเย็น / CONDENSING UNIT
                        </h3>
                    </a>
                    <p>
                        บิทเซอร์คอนเดนซิ่งยูนิท เครื่องทำความเย็น
                    </p>
                </div>
            </div>







        </div>


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