<style type="text/css">
	div.tooltip-inner {
		font-family: PSLDISPLAYPRO;
		font-size: 23px;
	}
	span.count-compare {
		background-color: #FF0000;
		border-radius: 100%;
		position: fixed;
		font-size: 12px;
		font-weight: 400;
		height: 26px;
		left: 30px;
		line-height: 26px;
		position: absolute;
		top: -13px;
		width: 26px;
		color: #FFF;
	}

	.compare{
		position: fixed;
		left: 10px;
		top: 300px;
	}
	.btn-compare {
		background-color: #1B1464;
		border: none;
		font-size: 20px;
	}
	button.btn-compare:hover {
		background-color: #56549B;
	}
	
	.find-pro .form-control{
		font-size: 21.56px;
	}
	.color-menu , .color-menu a {
		color: #000;
	}
	.breadcrumb .color-menu-active {
		color: #000000;
		font-weight: bold;
	}
	/* New */
	.overlay-img-2 h3 {
		font-size: 24px;
	}
	.detail-product {
		text-align: center;
		margin-top: 20px;
	}
	.detail-product h3{
		font-size: 26px;
		font-weight: bold;
	}
	.detail-product p {
		font-size: 26px;
	}
	.scrollbar-search {
		max-height: 226px;
		overflow-y: auto;
	}
	.tags-a {
		padding: 2px 2px;
		display: inline-block;
	}
	.tags-a a {
		padding: 5px 5px;
		background-color: #1B1464;
		color: #FFF;
		border-radius: 15px;
		font-size: 19px;
	}
	.tags-a a:hover {
		background-color: #403E7F;
	}
	.detail-product-pro h3{
		font-size: 46px;
	}
	.breadcrumb-detail-pro {
		display: flex;
	}
	.breadcrumb-detail:after {
		content: ':';
		display: inline-block;
	}
	.breadcrumb-detail {
		display: flex;
	}
	.menu-pro-detail {
		font-size: 28px;
		font-weight: bold;
		line-height: 35px;
	}
	.category-menu-detail {
		font-size: 28px;
		line-height: 35px;
		color: #666666;
	}

	/*Share Face*/
	.face-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-face {
		padding: 0 5px;
		background-color: #2D4376;
		border-radius: 5px; 
	}
	.share-face a {
		padding: 0px 10px;
	}
	.share-face a span {
		color: #FFF;
		font-size: 23px;
		margin-top: -10px;
	}

	/* Share Line */
	.line-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-line {
		padding: 0 5px;
		background-color: #3E8E43;
		border-radius: 5px; 
	}
	.share-line a {
		padding: 0px 10px;
	}
	.share-line a span {
		color: #FFF;
		font-size: 23px;
		margin-top: -10px;
	}

	/* Share Twitter */
	.twitter-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-twitter {
		padding: 0 5px;
		background-color: #3D94B5;
		border-radius: 5px; 
	}
	.share-twitter a {
		padding: 0px 10px;
	}
	.share-twitter a span {
		color: #FFF;
		font-size: 23px;
		margin-top: -10px;
	}

	/* Share mail */
	.mail-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-mail {
		padding: 0 5px;
		background-color: #03877B;
		border-radius: 5px; 
	}
	.share-mail a {
		padding: 0px 10px;
	}
	.share-mail a span {
		color: #FFF;
		font-size: 23px;
		margin-top: -10px;
	}

	/* Share print */
	.print-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-print {
		padding: 0 5px;
		background-color: #D27928;
		border-radius: 5px; 
	}
	.share-print a {
		padding: 0px 10px;
	}
	.share-print a span {
		color: #FFF;
		font-size: 23px;
		margin-top: -10px;
	}
	.category-menu-detail a {
		color: #666666;
	}
	.category-menu-detail a:hover {
		color: #2F23B0;
	}

	img.hr-product {
		
		left: 0;
		width: 70px;
		height: 6px;
		background-image: url(<?=base_url()?>assets/img/line.png);
	}
	.about-product p {
		font-size: 28px;
		color: #666666;
	}
	.about-tools {
		display: flex;
		margin-top: 30px;
	}
	.quotation {
		margin-right: 10px;
	}
	.quotation a {
		padding : 10px 10px;
		background-color: #2F23B0;
		border-radius: 5px;
		color: #FFF;
		font-size: 20px;	
	}
	.compare-product {
		margin-right: 10px;
	}
	.compare-product a {
		padding : 10px 10px;
		background-color: #1B1464;
		border-radius: 5px;
		color: #FFF;
		font-size: 20px;	
	}
	.button-contact {
		padding: 10px 10px;
		display: inline;
		font-size: 20px;
		background-color: #009245 !important;
		border: none;
	}
	.drop-contact a {
		font-size: 20px;
	}
	.drop-contact a:hover {
		background-color: #009245;
		color: #FFF;
	}
	.foot-detail a {
		border-bottom: 2px solid #1d1d1f;
	}
	
	.picture-product .overlay-img-3 {
		position: absolute;
		bottom: 98px;
		background: #4030F0;
		color: #f1f1f1;
		left: 15px;
		right: 15px;
		transition: .5s ease;
		opacity: 0;
		color: white;
		font-size: 20px;
		padding: 5px;
		text-align: center;
	}
	.pro-about h3 {
		font-size: 25px;
	}

	.picture-product:hover .overlay-img-3 {
		opacity: 1;
	}

	.owl-carousel-pro-about {
		margin-top: 30px;
	}
	.compare-product-new h3 {
		margin-top: 20px;
		font-size: 26px;
		font-weight: bold;
	}
	.compare-product-new p {
		font-size: 26px;
		margin-top: -10px;

	}
	.compare-product-new h4 {
		font-size: 26px;
		font-weight: bold;
		color: #000;
	}
	p.compare-detail{
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		line-height: 25px;
		font-size: 26px;
		
	}

	.picture-product .overlay-img-4 {
		position: absolute;
		bottom: 280px;
		background: #4030F0;
		color: #f1f1f1;
		left: 15px;
		right: 15px;
		transition: .5s ease;
		opacity: 0;
		color: white;
		font-size: 20px;
		padding: 5px;
		text-align: center;
	}
	.picture-product:hover .overlay-img-4 {
		opacity: 1;
	}

	.product-compare {

	}

	.compare-detail-pro {
		display: flex;
		margin-top: 40px;
	}
	.quotation-compare a {
		padding : 10px 30px;
		background-color: #2F23B0;
		border-radius: 5px;
		color: #FFF;
		font-size: 20px;
		transition: all 0.5s ease;
	}
	.quotation-compare a:hover {
		background-color: #56549B;
		transition: all 0.5s ease;
	}
	.delete-compare a:hover {
		background-color: #424247;
		transition: all 0.5s ease;
	}
	.quotation-compare {
		margin-right: 20px;
	}
	.delete-compare a {
		padding: 10px 20px;
		background-color: #1A1A1A;
		border-radius: 5px;
		color: #FFF;
		font-size: 20px;
		color: #FFF;
		transition: all 0.5s ease;
	}


	@media (min-width: 415px) {
		.picture-product .product-overlay {
			bottom: 185px;
		}
		
	}
	@media (max-width: 500px) {
		.quotation a {
			padding: 10px 5px;
			font-size: 18px;
		}
		.compare-product a {
			padding: 10px 5px;
			font-size: 18px;
		}
		.button-contact {
			padding: 10px 5px;
			font-size: 18px;
		}
	}
	@media (min-width: 768px) {
		.picture-product .product-overlay {
			bottom: 115px;
		}
	}
	@media (min-width: 992px) {
		.picture-product .product-overlay {
			bottom: 185px;
		}
		.share-face a , .share-line a , .share-twitter a , .share-mail a , .share-print a  {
			padding: 0px 2px;
		}
		.share-face , .share-line , .share-twitter , .share-mail , .share-print  {
			padding: 0 0;
		}

	}
	@media (max-width: 767px) and (min-width: 300px) {
		.picture-product .overlay-img-3 {
			bottom: 170px;
		}
		.picture-product .overlay-img-4 {
			bottom: 380px;	
		}
	}
	@media (max-width: 992px) and (min-width: 768px) {
		.picture-product .overlay-img-3 {
			bottom: 98px;
		}

	}
	@media (max-width: 1399px) and (min-width: 993px) {
		.picture-product .overlay-img-3 {
			bottom: 170px;
		}
		.picture-product .overlay-img-4 {
			bottom: 380px;	
		}
	}
	@media (min-width: 1400px) {
		.picture-product .product-overlay {
			bottom: 115px; 
		}
		.share-face a , .share-line a , .share-twitter a , .share-mail a , .share-print a  {
			padding: 0px 20px;
		}
		.share-face , .share-line , .share-twitter , .share-mail , .share-print  {
			padding: 0 0;
		}

	}
</style>