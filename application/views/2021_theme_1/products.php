<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">
    <?php $this->load->view('2021_theme_1/inc/css'); ?>
    <title>Products</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-6">
               
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">สินค้า</li>
                    </ol>
                    </nav>
               
            </div>
            <div class="search-product col-lg-5 col-sm-6 pt-2 pb-1">
               
                    <form class="form-inline">
                    <div class="form-group ">
                        <input type="search" class="form-control" id="search" placeholder="ค้นหาสินค้า...">
                    </div>
                    <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                    </form>
               
            </div>
        </div>
        
    </div><!--/////breadcrumb -->
    
    <div class="container mt-3 all-product">
        <div class="row">
            <div class="col-lg-3 order-2 order-md-1">
             <h3><b>หมวดสินค้าทั้งหมด</b></h3>
                <nav class="nav flex-column">
                <a class="nav-link active" href="#"><i class="fas fa-chevron-right icon-cate"></i>วาล์ว</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>คอมเพรสเซอร์</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>อุปกรณ์ทำความเย็น</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>รถตัดหญ้า</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>ปั๊มน้ำ</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>สปริงเกอร์</a>
                </nav>

            <h3 class="mt-5"><b>แบรนด์สินค้า</b></h3>
                <nav class="nav flex-column">
                <a class="nav-link active" href="#"><i class="fas fa-chevron-right icon-cate"></i>กุลธร</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>SECO</a>
                </nav>
            </div>

            <div class="col-lg-9 order-1 order-md-2 products-all mb-3">
                <div class="row">
                    <div class= "col-6 col-lg-4 ">
                        <
                        <div class ="picture-product">
                        <img src="image_new/p-1.jpg">
                        <div class="overlay-img">My Name is John</div>
                        </div>
                    </div>
                    <div class= "col-6 col-lg-4">
                        <img src="image_new/p-1.jpg">
                    </div>
                </div>
               
              
            </div>
        </div>
    </div>

</body>
</html>