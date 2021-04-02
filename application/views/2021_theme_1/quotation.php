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

	<link href="<?=base_url()?>assets/aos-master/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<?php 
	$this->load->view('2021_theme_1/inc/css-products');
	?>
	<?php $this->load->view('2021_theme_1/inc/css'); ?>

	<title>ขอใบเสนอราคา</title>
</head>
<body>
	<?
	$this->load->view('2021_theme_1/inc/header1/header3')
	?>

	<div class="container">
		<div class="row">
			<div class="col-12">

				<div class="container header-top">
					<div class="row">
						<div class="col-lg-12 " style="padding: 0;" data-aos="fade-down" data-aos-duration="1000">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item color-menu"><a href="<?=base_url()?>">หน้าแรก</a></li>
									<li class="breadcrumb-item  color-menu-active active" aria-current="page">ขอใบเสนอราคา</li>
								</ol>
							</nav>
						</div>
					</div>

				</div><!--/////breadcrumb -->

				<hr>

				<div class="quotation-head">
					<h3>
						ขอใบเสนอราคา
					</h3>
				</div>
				<table class="table-quotation " style="margin-top: 20px;" width="100%">
					<thead>
						<tr class="head-join ">
							<td class="text-position"><h3>รูปสินค้า</h3></td>
							<td class="text-count"><h3>สินค้า</h3></td>
							<td class="text-detail"><h3>จำนวน</h3></td>
							<td class="text-delete"><h3>ลบ</h3></td>
						</tr>
						<!-- Wait code Loop -->
						<tr class="quotation-detail-tr-1">
							<td class="img-products-quotation">
								<img src="<?=base_url()?>image_new/product1.jpg">
							</td>
							<td class="count-job">
								<h3> คอมเพรสเซอร์ Compressors</h3>
							</td>
							<td class="detail-job">
								<div class="quotation-count">
									<h3>จำนวน</h3>
									<input type="text" name="qty[]" value="1" class="pro-cart"> 
								</div>
							</td>
							<td class="detail-job">
								<a href="#"><h3>ลบ</h3></a>

							</td>
						</tr>
						<!-- End Loop -->

					</thead>
				</table>


				<div class="menu-quotation" style="text-align: left; margin-top: 20px;">
					<button type="submit" class="btn btn-warning">ปรับปรุงจำนวนสินค้า</button>
					<a href="https://www.adspackaginglab.com/TH/Products" class="btn btn-success">เลือกสินค้าเพิ่ม</a>
				</div>


				<div class="cart-tax">
					<div class="">
						<h4 class="cart-bottom-title section-bg-white">กรอกรายละเอียดผู้ติดต่อ</h4>
					</div>
					<div class="tax-wrapper">
						<div class="tax-select-wrapper">

							<div class="tax-select">
								<input type="text" name="fullname" placeholder="ชื่อ" value="" required=""> 
							</div>
							<div class="tax-select">
								<input type="text" name="company_name" placeholder="ชื่อบริษัท" value="" required=""> 
							</div>
							<div class="tax-select">
								<input type="email" name="email" placeholder="อีเมล" value="" required="">
							</div>
							<div class="tax-select">
								<input type="text" name="telephone" placeholder="โทร" value="" required=""> 
							</div>
							<div class="tax-select">
								<textarea name="detail" placeholder="รายละเอียด"></textarea>
							</div>
							<div class="g-recaptcha" data-sitekey="6LfudvkUAAAAAE8r05xmweDiQQVswvV6KmryzIKb" data-theme="light" data-type="image" data-size="normal"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfudvkUAAAAAE8r05xmweDiQQVswvV6KmryzIKb&amp;co=aHR0cHM6Ly93d3cuYWRzcGFja2FnaW5nbGFiLmNvbTo0NDM.&amp;hl=en&amp;type=image&amp;v=bfvuz6tShG5aoZp4K4zPVf5t&amp;theme=light&amp;size=normal&amp;cb=fsrgomjt595" width="304" height="78" role="presentation" name="a-rhcf7l2kgac9" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>                                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&amp;hl=en" async="" defer=""></script>                                        <br>
							<button class="cart-btn-2" type="submit" style="width: 100%;background-color: #174ea9;color: #fff; font-size: 20px; margin-right: 20px;">ส่งขอใบเสนอราคา</button>
						</div>
					</div>
				</div>




			</div>
		</div>
	</div>



	<?
	$this->load->view('2021_theme_1/inc/footer1/footer2')
	?>










	<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>


	<script>
		$(document).ready(function() {
			var owl = $('.owl-carousel-job-about');
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