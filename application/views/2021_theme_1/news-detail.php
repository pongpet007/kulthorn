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


	<?php $this->load->view('2021_theme_1/inc/css-peck'); ?>
	<?php $this->load->view('2021_theme_1/inc/css-products'); ?>
	<?php $this->load->view('2021_theme_1/inc/css'); ?>

	<title>News detail</title>
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
						<li class="breadcrumb-item color-menu" aria-current="page"><a href="#">ข่าวสารและกิจกรรม</a></li>
						<li class="breadcrumb-item  color-menu-active active" aria-current="page">หัวข้อเนื้อหาข่าวสาร</li>
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



	<div class="container">
		<div class="row">
			<div class="col-lg-8"> 
				<h2>หัวข้อเนื้อหาข่าวสาร</h2>
				<ul class="ul-knowledge ">
					<li>
						โดย : <span style="color: #808080;">ADMIN</span>
					</li>
					<li>
						วันที่โพส : <span style="color: #808080;">9/2/2564</span>
					</li>
					<li>
						จำนวนผู้เข้าชม : <span style="color: #808080;">1200 คน</span>
					</li>
				</ul>
				<div class="img-knowledge">
					<img src="<?=base_url()?>assets/img/news-detail.png">
				</div>
				
				<div class="detail-knowledge">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet porta nulla. Nullam accumsan quam felis, in sodales ligula pharetra id. Duis volutpat dui non auctor feugiat. Quisque viverra a urna at hendrerit. Praesent sit amet nisi eget ante imperdiet tempus. Sed tristique lacus nec dolor hendrerit rhoncus. Cras ante mauris, tempus vel ante sed, vulputate laoreet ipsum. Suspendisse vel consectetur arcu, at fermentum sem. Donec semper ante et lectus commodo posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ultricies hendrerit ante, condimentum bibendum augue venenatis nec. Morbi posuere dolor lectus, vitae mollis nunc luctus in. Fusce dictum sapien at ex tempor, id feugiat felis elementum.
					</p>
				</div>

				<ul class="ul-share ul-knowledge-share">
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

				<h3 style="font-weight: bold; ">เนื้อหาแนะนำที่เกี่ยวข้อง</h3 style="font-weight: bold; ">

					<div class="line-know-about"></div>

					<div class="container">
						<div class="row">

							<div class="owl-carousel owl-theme owl-carousel-news-about">
								<div class="item">
									<div class="knowledge-about">
										<a href="#">
											<img class="news-detail-img" src="<?=base_url()?>assets/img/knowledge-detail-1.png">
										</a>
										<a href="#">
											<h3>
												หัวข้อเนื้อหาเกร็ดความรู้
											</h3>
										</a>
										<p>เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ</p>
									</div>
								</div>

								<div class="item">
									<div class="knowledge-about">
										<a href="#">
											<img src="<?=base_url()?>assets/img/knowledge-detail-1.png">
										</a>
										<a href="#">
											<h3>
												หัวข้อเนื้อหาเกร็ดความรู้
											</h3>
										</a>
										<p>เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ</p>
									</div>
								</div>

								<div class="item">
									<div class="knowledge-about">
										<a href="#">
											<img src="<?=base_url()?>assets/img/knowledge-detail-1.png">
										</a>
										<a href="#">
											<h3>
												หัวข้อเนื้อหาเกร็ดความรู้
											</h3>
										</a>
										<p>เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ</p>
									</div>
								</div>

								<div class="item">
									<div class="knowledge-about">
										<a href="#">
											<img src="<?=base_url()?>assets/img/knowledge-detail-1.png">
										</a>
										<a href="#">
											<h3>
												หัวข้อเนื้อหาเกร็ดความรู้
											</h3>
										</a>
										<p>เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ</p>
									</div>
								</div>

								<div class="item">
									<div class="knowledge-about">
										<a href="#">
											<img src="<?=base_url()?>assets/img/knowledge-detail-1.png">
										</a>
										<a href="#">
											<h3>
												หัวข้อเนื้อหาเกร็ดความรู้
											</h3>
										</a>
										<p>เกร็ดความรู้และบทความน่าสนใจที่ทางกุลธรแนะนำ</p>
									</div>
								</div>
							</div>






						</div>
					</div>

				</div>

				<div class="col-lg-4"> 

					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active tab-select" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
								เนื้อหายอดนิยม
							</a>
						</li>

					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="container">
								<div class="row border-tab">

									<div class="col-lg-12 margin-top">
										<div class="row">
											<div class="col-md-4">
												<a href="#">
													<img class="news-detail-img"  src="<?=base_url()?>assets/img/tab-1.png">
												</a>
											</div>
											<div class="col-md-8">
												<div class="knowledge-advice">
													<a href="">
														<h4>หัวข้อเกร็ดความรู้การดูแลเครื่องทำความเย็น</h4>
													</a>
													<div class="date-knowledge">
														<span>วันที่โพส : </span><span>9/2/2564</span>
													</div>
												</div>
											</div>
										</div>
										<div class="dot-border"></div>
									</div>

									<div class="col-lg-12 margin-top">
										<div class="row">
											<div class="col-md-4">
												<a href="#">
													<img class="news-detail-img"  src="<?=base_url()?>assets/img/tab-1.png">
												</a>
											</div>
											<div class="col-md-8">
												<div class="knowledge-advice">
													<a href="">
														<h4>หัวข้อเกร็ดความรู้การดูแลเครื่องทำความเย็น</h4>
													</a>
													<div class="date-knowledge">
														<span>วันที่โพส : </span><span>9/2/2564</span>
													</div>
												</div>
											</div>
										</div>
										<div class="dot-border"></div>
									</div>

									<div class="col-lg-12 margin-top">
										<div class="row">
											<div class="col-md-4">
												<a href="#">
													<img class="news-detail-img"  src="<?=base_url()?>assets/img/tab-1.png">
												</a>
											</div>
											<div class="col-md-8">
												<div class="knowledge-advice">
													<a href="">
														<h4>หัวข้อเกร็ดความรู้การดูแลเครื่องทำความเย็น</h4>
													</a>
													<div class="date-knowledge">
														<span>วันที่โพส : </span><span>9/2/2564</span>
													</div>
												</div>
											</div>
										</div>
										<div class="dot-border"></div>
									</div>








								</div>
							</div>
							<div class="face-follow">
								<h3>
									ติดตาม Facebook
								</h3>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>




		<script>
			$(document).ready(function() {
				var owl = $('.owl-carousel-news-about');
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