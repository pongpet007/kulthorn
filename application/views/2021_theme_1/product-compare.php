<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">

    <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>


    <?php $this->load->view('2021_theme_1/inc/css-peck'); ?>
    <?php $this->load->view('2021_theme_1/inc/css-products'); ?>
    <?php $this->load->view('2021_theme_1/inc/css'); ?>
    <title>Products Compare</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-6">

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
    <div class="compare">
        <button type="button" class="btn btn-secondary btn-compare" data-toggle="tooltip" data-placement="right" title="เปรียบเทียบผลิตภัณฑ์">
            <i class="fas fa-sync-alt"></i>
        </button>
    </div>
    



    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3 col-6">
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

            <div class="compare-detail-pro">
                <div class="quotation-compare">
                    <a href="">
                        <i class="fas fa-th-list list-color"></i>
                        &nbsp;
                        <span>ขอใบเสนอราคา</span>
                    </a>
                </div>

                <div class="delete-compare">
                    <a href="">
                        <i class="fas fa-times-circle circle-color"></i>&nbsp;&nbsp;
                        <span>
                            ลบ
                        </span>
                    </a>
                </div>
            </div>


        </div>

    </div>
</div>

<script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>