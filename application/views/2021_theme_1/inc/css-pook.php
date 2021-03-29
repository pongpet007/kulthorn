<style type="text/css">
	.nav-link-new{
		color: #FFF !important;
		font-size: 28px;
	}

	.navbar-light .navbar-toggler {
		background-color: #FFF;
	}
	.button-color {
		font-size: 20px;
	}

	.nav-1 , .nav-2 , .nav-3 , .nav-4 , .nav-5 , .nav-6 ,  .nav-8  {
		position: relative;
	}
	.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
		content: '';
		height: 60%;
		width: 2px;
		position: absolute;
		right: 0;
		top: 10px;
		background-color: #FFF;

	}
	.nav-color {
		/*padding-left: 340px;*/
		/*float: right;*/
		text-align: center;
	}
	.changlang {
		padding-top: 5px;
		padding-right: 15px;
	}
	.nav-link-new:hover {
		color: #a6acb1 !important;
		transition: all 0.4s;
	}
	.drop-new {
		font-size: 20px;
	}
	#section3 {
		background : url(<?= base_url()?>assets/img/bg-know.png) center center;
		background-size: cover
	}	
	.detail-know {
		margin-bottom: 40px;
	}
	.detail-know h2{
		font-size: 35px;
		color: #FFF;
	}
	.know h2 {
		font-size: 30px;
		color: #FFF;
		padding-top: 20px;
	}
	.know span {
		font-size: 26px;
		color: #FFF;
		margin-bottom: 20px;
	}
	.know a h2:hover {
		color: #EEE000;
	}
	.know a img:hover {
		opacity: 0.8;
		transition: 0.5s ;
	}


	#section4 {
		background : url(<?=base_url()?>/assets/img/bg-news.png) center center;
		background-size: cover;
	}
	.detail-news h2{
		font-size: 35px;
		color: #FFF;
		/*padding-top: 100px;*/
	}
	.intro p.p-news-detail {
		font-size: 24px;
		width: 100%;
		line-height: 28.8px;
		padding-top: 45px;
	}
	.detail-contact h2 {
		font-size: 35px;
		color: #FFF;
	}
	.intro p.p-contact {
		font-size: 24px;
		width: 100%;
		padding-bottom: 20px;
	}
	.news {
		padding-top: 42px;
	}
	.news  h2 {
		font-size: 30px;
		color: #FFF;
		padding-top: 20px; 
	}
	.news span {
		font-size: 26px;
		color: #FFF;
		/*padding-top: 20px;*/
	}
	.owl-theme .owl-dots .owl-dot span {
		width: 66px;

	}
	.owl-theme .owl-nav.disabled+.owl-dots {
		/*margin-top: 30px !important;*/
	}
	.owl-theme .owl-dots .owl-dot.active span {
		background-color: #4030F0;
	}
	.scrollbar {

	}
	.img-logo img {
		width: 40%;
	}
	#section6 {
		background : url(<?=base_url()?>assets/img/bg-contact.png) center center;
		background-size: cover;
	}
	.text-contact h2{
		text-align: left;
	}
	.text-contact ul li {
		display: -webkit-box;
		color: #FFF;
		font-size: 26px;
	}
	.ul-contact h3 {
		line-height: 1.5;
		font-weight: bold;
	}
	.ul-contact li a {
		color: #FFF;
	}
	button.btn-sent-email {
		background-color: #140F4A;
		padding: 5px 100px;
		color: #FFF;
		border-radius: 5px;
		float: left;
		font-family: 'PSLDISPLAYPRO';
		font-size: 25px;
	}
	.copyright {
		position: absolute;
		bottom: 0;
		background-color: #1B1464;
		padding: 15px 0;
	}
	footer {
		text-align: center; 

	}
	.detail-copy {
		color: #FFF;
		font-size: 28px;
	}
	button.btn-sent-email:hover {
		color: #EEE; 
	}
	#section5 {
		background : url(<?= base_url()?>assets/img/bg-join.png) center center;
		background-size: cover;
	}
	.detail-join h2 {
		font-size: 35px;
		color: #FFF;
		font-weight: bold;
	}
	.detail-join  p {
		font-size: 30px;
	}
	.top-table {
		max-width: 100%;
	}
	.text-position h3{
		text-align: center;
		font-size: 28px;
		color: #FFF;
		font-weight: bold
	}
	.text-count h3{
		text-align: center;
		font-size: 28px;
		color: #FFF;
		font-weight: bold
	}
	.text-detail h3{
		text-align: right;
		padding-right: 20px;
		font-size: 28px;
		color: #FFF;
		font-weight: bold
	}
	.head-join td{
		background-color: #00000082;
	}
	
	table.table-join thead tr td {
		padding: 1.5rem 0.625rem 1.5rem;
	}
	table.table-join {
		background : none;
		border: none;
	}
	table.table-join thead {
		background: none;
	}
	.name-job h3{
		text-align: center;
		font-size: 25px;
		color: #FFF;
	}
	.count-job h3{
		text-align: center;
		font-size: 25px;
		color: #FFF;
	}
	.detail-job h3 a{
		color: #FFF;
	}
	.detail-job h3{
		text-align: right;
		padding-right: 20px;
		font-size: 25px;
		color: #FFF;
		text-decoration: underline;
	}
	table tr.job-detail-tr-1 {
		background : #6a6b6da6;
	}
	table tr.job-detail-tr-2 {
		background-color: #00000082;
	}
	.navbar-expand-lg .navbar-nav .nav-link-new {
		padding: 25px;
	}

	/* ------------------------------------         Products       ---------------------------------------  */
	


	/* ////////////////////////// Responsive ////////////////////////// */
	@media only screen and (max-device-width: 480px) {
		/*.nav-color-toggle {
			background-color: #FFF;
		}
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new  {
			background-color : #1d256da3;
			
			height: 100%;
			}*/
			
		/*.copyright {
			
			position: relative;
		}
		
		.width33 {
			width: 100%;
			margin-bottom: 10px;
		}
		.fp-tableCell {
			padding: 10% 0px 0px;
			vertical-align: none;
		}
		
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 10px;
			font-size: 60px;
			}*/
			.img-logo img {
				width: 100%;
			}
			.navbar-expand-lg .navbar-nav .nav-link-new {
				padding: 5px;
				font-size: 60px;
			}
			
			.detail-join h2 {
				font-size: 60px;
				margin-top : 80px;
			}

			.detail-join p {
				font-size: 55px;
			}
			.text-position h3 {
				font-size: 55px;
			}
			.text-count h3 {
				font-size: 55px;
			}
			.text-detail h3 {
				font-size: 55px;
			}
			.name-job h3 {
				font-size: 50px;
			}
			.count-job h3 {
				font-size: 50px;
			}
			.detail-job h3 a {
				font-size: 50px;
			}

		} 

		@media (max-width: 1023px)  and  (min-width: 768px) {
			.navbar-expand-lg .navbar-nav .nav-link-new {
				padding: 10px;
				font-size: 30px;
			}
			


			.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
				width: 0;
			}
			
			.navbar-nav-new {
				background-color : #0d176feb;
			}
			.scrollbar {
				overflow-y: auto;
				max-height: 250px;
			}
			#navbarNav::-webkit-scrollbar {
				width: 4px;
				margin-right: -15px;
			}
			#navbarNav::-webkit-scrollbar-thumb {
				background-color: #4367dae0;
			}
			#navbarNav::-webkit-scrollbar-track {
				background-color: #EEE;
			}
			.img-logo img {
				width: 100%;
			}
			.fp-tableCell {
				padding: 10% 0px 0px;
				vertical-align: unset;
			}
			.width33 {
				width: 100% !important;
				margin-bottom: 10px;
			}

		}
		@media (max-width: 1359px) and (min-width: 1024px) {
			p.aboutnew span {
				font-size: 28px;
			}

			.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
				width: 0;
			}
			.button-color {
				font-size: 18px;
			}
			.navbar-expand-lg .navbar-nav .nav-link-new {
				padding: 3px;
				font-size: 20px !important;
			}
		}

		@media (max-width: 1400px) and (min-width: 1360px) {

			.navbar-expand-lg .navbar-nav .nav-link-new {
				padding: 10px !important;
				font-size: 25px !important;
			}
			.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
				width: 1px;
			}
			.nav-link-new {
				font-size: 25px;
			}

		}
		@media (min-width: 1401px) {
			
		}

	</style>