<style type="text/css">
	.size-font-i {
		font-size: 18px;
	}
	.navbar-expand-lg .navbar-nav .nav-link-new{
		color: #000 !important;
		font-size: 28px;
	}
	.nav-link-new:hover {
		color: #555555;
	}
	.navbar-light .navbar-toggler {
		background-color: #FFF;
	}
	.button-color {
		font-size: 20px;
		background-color: #545b6200 !important;
		color : #000 !important;
		border :none !important;
	}

	.nav-1 , .nav-2 , .nav-3 , .nav-4 , .nav-5 , .nav-6 ,  .nav-8  {
		position: relative;
	}
	.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
		content: '';
		height: 50%;
		width: 2px;
		position: absolute;
		right: 0;
		top: 15px;
		background-color: #000;

	}
	.nav-color {
		text-align: center;
		float: right;
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
	.navbar-expand-lg .navbar-nav .nav-link-new {
		padding-right: 1.5rem;
		padding-left: 1.5rem;
	}
	.img-logo img {
		width: 50%;
	}
	.img-flag img {
		/*width: 70%;*/
	}
	/* ////////////////////////// Responsive ////////////////////////// */
	@media only screen and (max-device-width: 480px) {
		.img-logo img {
			width: 55%;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 23px !important;
		}

		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
	}

	@media (max-device-width: 1023px)  and  (min-device-width: 768px) {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 25px;
		}
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		.navbar-nav-new {
			/*background-color : #0d176feb;*/
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
			width: 60%;
		}
		.nav-color {
			float: none;
		}
	}
	@media (max-width: 1359px) and (min-width: 1024px) {
		.img-logo img {
			width: 100%;
		}
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		.button-color {
			font-size: 18px;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 20px !important;
		}
		a.button-color {
			padding: .2rem .3rem;
		}
		.drop-new {
			font-size: 18px;
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
	@media (min-width: 1401px)  {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 10px !important;
			font-size: 25px !important;
		}
	}






</style>