<style type="text/css">
	.navbar-nav .nav-link-new {
		font-family: 'PSLDISPLAYPRO';
	}
	.display-header {
		visibility: hidden;
	}
	#view-code{
		color:#4183d7; 
		font-size:13px;
		text-transform:uppercase;
		font-weight:700;
		text-decoration:none;
		position:absolute;top:640px; left:50%;margin-left:-35px;
	}
	div.screen{
		width: 100%;
		height:55px;	
		overflow:hidden;
		position : absolute; 
		top : 0; 
		left: 0;
		margin-left: 0;
		/*background:#31558a;*/
	}

	.list { 
		margin-top:36px; 
		text-align:left;
	}
	div.burger {
		height: 40px; 
		width: 40px;
		position: absolute;
		top: 11px; 
		left: 21px;
		cursor: pointer;	
	}
	div.x,
	div.y,
	div.z {
		position: absolute; margin: auto;
		top: 0px; bottom: 0px;		
		background: #fff;
		border-radius:2px;
		-webkit-transition: all 200ms ease-out;
		-moz-transition: all 200ms ease-out;
		-ms-transition: all 200ms ease-out;
		-o-transition: all 200ms ease-out;
		transition: all 200ms ease-out;
	}		
	div.x, div.y, div.z { height: 3px; width: 26px; }
	div.y{top: 18px;}
	div.z{top: 37px;}
	div.collapse2{
		top: 20px;
		background:#4a89dc;
		-webkit-transition: all 70ms ease-out;
		-moz-transition: all 70ms ease-out;
		-ms-transition: all 70ms ease-out;
		-o-transition: all 70ms ease-out;
		transition: all 70ms ease-out;
	}
	div.rotate30{
		-ms-transform: rotate(30deg); 
		-webkit-transform: rotate(30deg); 
		transform: rotate(30deg);	
		-webkit-transition: all 50ms ease-out;
		-moz-transition: all 50ms ease-out;
		-ms-transition: all 50ms ease-out;
		-o-transition: all 50ms ease-out;
		transition: all 50ms ease-out;					
	}
	div.rotate150{
		-ms-transform: rotate(150deg); 
		-webkit-transform: rotate(150deg); 
		transform: rotate(150deg);	
		-webkit-transition: all 50ms ease-out;
		-moz-transition: all 50ms ease-out;
		-ms-transition: all 50ms ease-out;
		-o-transition: all 50ms ease-out;
		transition: all 50ms ease-out;					
	}
	
	div.rotate45{
		-ms-transform: rotate(45deg); 
		-webkit-transform: rotate(45deg); 
		transform: rotate(45deg);	
		-webkit-transition: all 100ms ease-out;
		-moz-transition: all 100ms ease-out;
		-ms-transition: all 100ms ease-out;
		-o-transition: all 100ms ease-out;
		transition: all 100ms ease-out;					
	}
	div.rotate135{
		-ms-transform: rotate(135deg); 
		-webkit-transform: rotate(135deg); 
		transform: rotate(135deg);	
		-webkit-transition: all 100ms ease-out;
		-moz-transition: all 100ms ease-out;
		-ms-transition: all 100ms ease-out;
		-o-transition: all 100ms ease-out;
		transition: all 100ms ease-out;					
	}

	div.navbar {
		height:73px;
		/*background:#385e97;*/
	}
	.detail-news  {
		padding-top: 50px;
	}

	div.circle{	
		border-radius: 50%;
		width: 0px;
		height: 0px; 
		position:absolute;
		top: 35px;
		left: 36px;
		/*background:#000;*/
		opacity:1;
		-webkit-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);	
	}
	div.circle.expand{
		width:1200px;
		height:1200px;
		top: -560px;
		left: -565px; 	
		-webkit-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);					

	}
	div.menu {
		height: 10px; 
		width: 100%;
		position: fixed;
		top: 0px; left: 0px;
	}
	div.menu ul li {
		list-style: none;
		position:absolute;
		visibility: hidden;
		top:50px;;
		left:0;
		opacity:0;
		width:320px;
		text-align:center;
		font-size:0px;
		-webkit-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	}
	div.menu ul li a {
		color:#4a89dc;
		text-transform:uppercase;
		text-decoration:none;	
		letter-spacing:3px;			
	}

	div.menu li.animate{
		font-size:21px;
		opacity:1;
		-webkit-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		display: contents;
	}

	/* end Header mobile*/
	
	.animate__animated.animate__bounce {
		--animate-duration: 2s;
	}
	.nav-link-new{
		color: #FFF !important;
		font-size: 28px;
	}

	.fp-controlArrow.fp-prev {
		left: 60px;
	}
	.fp-controlArrow.fp-next {
		right: 60px;
	}
	.chcolor .nav-link-new {
		color: #000 !important ;

	}
	.fp-controlArrow.fp-prev {
		border-width: 15.5px 30px 15.5px 0 !important;
	}
	.fp-controlArrow.fp-next {
		border-width: 15.5px 0 15.5px 30px !important;
	}

	.before-color {
		position: relative;
	}
	.before-color:before {
		content: '';
		height: 50%;
		width: 2px;
		position: absolute;
		right: 0;
		top: 10px;
		background-color: #000 !important;
	}

	.border-header {
		border-bottom: 1px solid #EEE;
	}
	.changlang-color .button-color {
		color: #000 !important ;
	}
	.navbar-light .navbar-toggler {
		background-color: #FFF;
	}
	.button-color {
		font-size: 24px;
		background-color: #545b6200 !important;
		border: none;
		margin-top: -5px;
	}
	img.img-flag {
		width: 20px;
	}
	.icon-header {
		font-size: 20px;
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
		top: 10px;
		background-color: #FFF;
	}
	.header-thirdPage {
		background-color: #2151ffe3;
		width: 100%;
		height: 60px;
		position: absolute;
		top: 10px;

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
	}
	.intro p.p-news-detail {
		font-size: 24px;
		width: 100%;
		line-height: 28.8px;
		padding-top: 45px;
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 6;
		-webkit-box-orient: vertical;
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
	}
	.owl-theme .owl-dots .owl-dot span {
		width: 66px;

	}
	.owl-theme .owl-dots .owl-dot.active span {
		background-color: #4030F0;
	}
	.scrollbar {

	}
	.img-logo img {
		width: 50%;
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
		text-align: left;
	}
	.ul-contact h3 {
		line-height: 1.5;
		font-weight: bold;
		letter-spacing: .8px;
	}

	textarea.input-contact {
		padding-left: 20px;
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
		letter-spacing: .5px;
	}
	.detail-join  p {
		font-size: 30px;
		letter-spacing: .5px;
	}
	.top-table {
		max-width: 100%;
	}
	.text-position h3{
		text-align: center;
		font-size: 28px;
		color: #FFF;
		letter-spacing: .5px;
		font-weight: bold;
	}
	.text-count h3{
		text-align: center;
		font-size: 28px;
		color: #FFF;
		font-weight: bold;
		letter-spacing: .5px;
	}
	.text-detail h3{
		text-align: right;
		padding-right: 20px;
		font-size: 28px;
		color: #FFF;
		font-weight: bold;
		letter-spacing: .5px;
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
		letter-spacing: .5px;
	}
	.count-job h3{
		text-align: center;
		font-size: 25px;
		color: #FFF;
		letter-spacing: .5px;
	}
	.detail-job h3 a{
		color: #FFF;
		letter-spacing: .5px;
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
		padding: 0 20px;
	}
	li.address-text {
		font-size: 26px;
	}
	input[type="text"].input-contact {
		font-size: 25px;
		padding: 1.5rem;
	}
	input[type="tel"].input-contact {
		font-size: 25px;
		padding: 1.5rem;
	}
	input[type="email"].input-contact {
		font-size: 25px;
		padding: 1.5rem;
	}
	textarea.input-contact {
		font-size: 25px;
		padding-bottom: 20px;

	}
	button.btn-sent-email {
		font-size: 25px;
	}
	ul.ul-contact {
		margin-left: 0;
	}
	h2.form-contact {
		text-align: left;
	}
	img.img-headerslide-1 {
		margin-top: 220px;
		width: 100%;
	}
	img.img-headerslid {
		width: 100%;
	}
	img.img-flag.button-color {
		width: 20px;
	}


	/* ------------------------------------         Products       ---------------------------------------  */



	/* ////////////////////////// Responsive ////////////////////////// */
	@media (max-width: 480px) {
		/*header nobile*/
		.nav-link-new {
			font-size: 25px;
		}
		#header {
			padding: 0 !important;
		}
		.display-header {
			visibility: visible;
		}
		div.y,div.x,div.z {
			background-color: #EEE;
		}
		
		/* end header nobile*/

		.chcolor .nav-link-new {
			color: #FFF !important ;
		}
		.before-color:before {
			width: 0px;
		}
		.changlang-color .button-color {
			color: #FFF !important;
		}
		#fp-nav {
			top: 60%;
		}
		img.img-headerslide-1 {
			margin-top: 0;
			width: 100%;
		}
		.img-logo img {
			width: 100%;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 23px;
		}

		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}

		.navbar-nav-new {
			background-color : #0d176feb;
		}

		.width33 {
			width: 100% !important;
			margin-bottom: 10px;
		}

		.detail-join h2 {
			font-size: 30px;
			margin-top : 40px;
			letter-spacing: .5px;
		}

		.detail-join p {
			font-size: 20px;
			letter-spacing: .5px;
		}
		.text-position h3 {
			font-size: 20px;
			letter-spacing: .5px;
		}
		.text-count h3 {
			font-size: 20px;
			letter-spacing: .5px;
		}
		.text-detail h3 {
			font-size: 20px;
			letter-spacing: .5px;
		}
		.name-job h3 {
			font-size: 20px;
			letter-spacing: .5px;
		}
		.count-job h3 {
			font-size: 20px;
			letter-spacing: .5px;
		}
		.detail-job h3 a {
			font-size: 20px;
			letter-spacing: .5px;
		}

		.fp-tableCell {
			padding: 20% 0px 0px;
			vertical-align: unset;
		}

		.space-his {
			/*margin-top: 20px;*/
		}
		.pt-mobile {
			padding-top: 0 !important;
		}
		.tab .nav-tabs li a {
			font-size: 20px !important;
			padding: 5px 20px !important;
		}
		
		.tab .nav-tabs li a.active:before {
			content: "" !important;
		}
		p.aboutnew span {
			font-size: 20px !important;
		}
		p.about-year {
			font-size: 20px !important;
		}
		.MISSIONH1 {
			font-size: 35px !important;
		}
		.MISSIONP  {
			font-size: 20px !important;
			line-height: 25px !important;
			letter-spacing: .5px;
		}
		p.aboutnew-2 {
			font-size: 20px !important;
			line-height: 25px !important;
			letter-spacing: 0.5px;
		}
		h1.section-products {
			font-size: 35px !important;
			margin-top: 0 !important;
		}

		p.section-products {
			font-size: 25px !important;
			line-height: 20px;
			letter-spacing: .5px;
		}
		.products-catagory-bt.active .products-catagory-name h1 {
			font-size: 25px !important;
		}
		.products-catagory-bt.active .products-catagory-name h2 {
			font-size: 25px !important;
		}
		.products-catagory-bt .products-catagory-name h1 {
			font-size: 25px !important;
		}
		.products-catagory-bt .products-catagory-name h2 {
			font-size: 25px !important;
		}
		.detail-know {
			margin-bottom: 0;
		}
		.detail-know h2 {
			font-size: 35px;
		}
		.intro p {
			font-size: 20px;
			line-height: 25px;
			padding-bottom: 20px;
		}
		.know h2 {
			font-size: 30px;
		}
		.know span {
			font-size: 25px;
		}
		.intro p.p-news-detail {
			font-size: 23px;
			line-height: 18px;
			padding-top: 20px;
		}

		.detail-news h2 {
			font-size: 35px;
		}
		.news {
			padding-top: 0;
		}
		.news h2 {
			font-size: 30px; 
		}
		.news span {
			font-size: 23px;
		}
		.detail-contact h2 {
			font-size: 30px;
		}
		.intro p.p-contact {
			font-size: 20px;
		}
		ul li.address-text {
			font-size: 50px;
			line-height: 40px;
			text-align: left;
		}
		.text-contact ul li {
			font-size: 20px;
			letter-spacing: .5px;
		}

		.detail-copy {
			font-size: 25px;
		}

		#fp-nav ul li .fp-tooltip {
			font-size: 30px;
			font-family: 'PSLDISPLAYPRO';
		}
		input[type="text"].input-contact {
			font-size: 25px;
			padding: 1rem;
		}
		input[type="tel"].input-contact {
			font-size: 25px;
			padding: 1rem;
		}
		input[type="email"].input-contact {
			font-size: 25px;
			padding: 1rem;
		}
		textarea.input-contact {
			font-size: 25px;
			padding-bottom: 20px;
			min-height: 100px !important;
			padding: .8rem;
		}
		button.btn-sent-email {
			margin-bottom: 100px;
			font-size: 25px;
		}
		.copyright {
			position: absolute;
			bottom: 30px;
			padding: 10px 0; 
		}
		p.p-news-detail {
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;
			-webkit-line-clamp: 5;
			-webkit-box-orient: vertical;
			letter-spacing: .5px;
		}
		.fp-controlArrow {
			top: 55%;
		}
		img.img-slide-2 {
			text-align: center;
			margin-top: 300px;
		}
		.tab .tab-content {
			padding: 0px 20px 20px !important;
		}
		.nav-color {
			float: none;
			padding: 0;
		}
		.row-mobile {
			padding: 0;
		}
		ul.navbar-nav-new {
			margin-left: 0;
		}
		p.aboutnew {
			margin-top: 0;
			margin-bottom: 0;
		}
		.detail-news  {
			padding-top: 0;
		}

	} 

	@media (max-width: 1023px)  and  (min-width: 768px) {
		/*header nobile*/
		#header {
			padding: 0 !important;
		}
		.display-header {
			visibility: visible;
		}
		div.y,div.x,div.z {
			background-color: #EEE;
		}
		.navbar-nav-new {
			margin :0;
		}
		/* end header nobile*/
		.chcolor .nav-link-new {
			color: #FFF !important ;
		}
		.before-color:before {
			width: 0px;
		}
		.changlang-color .button-color {
			color: #FFF !important;
		}
		.fp-controlArrow {
			top: 40%;
		}
		img.img-headerslide-1 {
			width: 100%;
			margin-top: 0;
		}
		img.img-headerslide {
			width: 100%;
		}

		.nav-color {
			float: none;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 25px;
		}

		.tab .nav-tabs li a {
			padding: 10px 5px;
			font-size: 25px; 
		}

		p.aboutnew span {
			font-size: 25px !important;
			letter-spacing: .5px !important;
		}

		input[type="text"].input-contact {
			font-size: 25px;
			padding: 1.5rem;
		}
		input[type="tel"].input-contact {
			font-size: 25px;
			padding: 1.5rem;
		}
		input[type="email"].input-contact {
			font-size: 25px;
			padding: 1.5rem;
		}
		textarea.input-contact {
			font-size: 25px;
			padding-bottom: 20px;

		}
		button.btn-sent-email {
			padding: 5px 100px; 
			font-size: 30px;
			margin-bottom: 180px;
		}
		.copyright {
			bottom: 75px;
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
			width: 50%;
		}
		.fp-tableCell {
			padding: 10% 0px 0px;
			vertical-align: unset;
		}
		.width33 {
			width: 100% ;
			margin-bottom: 10px;
		}

	}
	@media (max-width: 1359px) and (min-width: 1024px) {
		.fp-tableCell {
			padding: 10% 0px 0px;
			vertical-align: unset;
		}
		input[type="text"].input-contact {
			font-size: 25px;
			padding: 1.3rem;
		}
		input[type="tel"].input-contact {
			font-size: 25px;
			padding: 1.3rem;
		}
		input[type="email"].input-contact {
			font-size: 25px;
			padding: 1.3rem;
		}
		textarea.input-contact {
			font-size: 25px;
			padding-bottom: 20px;

		}
		button.btn-sent-email {
			font-size: 25px;
			margin-bottom: 80px;
		}
		p.aboutnew span {
			font-size: 28px;
		}
		.copyright {
			bottom: 20px;
			position: relative;
			padding: 10px 0;
		}
		.img-logo img {
			width: 100%;
		}

		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		.button-color {
			font-size: 18px;					
		}
		.show>.btn-secondary.dropdown-toggle {

		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 3px;
			font-size: 20px !important;
		}
		.detail-contact h2 {
			font-size: 35px;
		}
		.intro p.p-news-detail {
			padding-top: 25px;
		}
		p.section-products {
			margin-top: 5px;
			margin-bottom: 5px;
			font-size: 25px !important;
			letter-spacing: .5px;
		}
		.products-catagory-bt.active .products-catagory-name h1 {
			font-size: 30px !important;
		}
		.products-catagory-bt.active .products-catagory-name h2 {
			font-size: 28px !important;
		}
		.products-catagory-bt .products-catagory-name h1 {
			font-size: 30px !important;
		}
		.products-catagory-bt .products-catagory-name h2 {
			font-size: 28px !important;
		}
		.fp-controlArrow {
			top: 30%;
		}
	}

	@media (max-width: 1400px) and (min-width: 1360px) {
		.fp-controlArrow.fp-prev {
			left: 50px;
		}
		.detail-know h2 {
			margin-top: 60px;
		}
		.detail-news h2 {
			margin-top: 60px;
		}
		.fp-controlArrow.fp-next {
			right: 50px;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 10px !important;
			font-size: 25px !important;
		}
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 1px;
			height: 40%;
			top: 15px;
		}
		.nav-link-new {
			font-size: 25px;
		}

	}
	@media (min-width: 1401px) {

	}
	@media (max-width: 1700px) and (min-width: 1500px) {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 0 10px;
		}
		.section-2-space {
			margin-top: 50px;
		}
		.detail-news h2 {
			margin-top: 40px;
		}
	}

</style>