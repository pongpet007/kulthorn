<style type="text/css">
    @font-face {
      font-family: 'PSLDISPLAYPRO';
      src: url('<?=base_url()?>assets_2021_theme_1/font/PSL029pro.ttf');
      font-weight: normal;
      font-style: normal;
    }
    body {
        font-family: PSLDISPLAYPRO;
      }
      /* Style for our header texts
      * --------------------------------------- */
      h1{
      font-size: 5em;
      font-family: PSLDISPLAYPRO;
      color: #fff;
      margin:0;
      padding:0;
      }
      .intro p{
      color: #fff;
      }
      /* Centered texts in each section
      * --------------------------------------- */
      .section{
      text-align:center;
      }
      /* Fixed header and footer.
      * --------------------------------------- */
      #header, #footer{
      position:fixed;
      height: 50px;
      display:block;
      width: 100%;
      z-index:9;
      text-align:center;
      color: #f2f2f2;
      padding: 20px 0 0 0;
      }
      #header{
      top:0px;
      }
      #footer{
      bottom:0px;
      }
      /* Bottom menu
      * --------------------------------------- */
      #infoMenu {
      bottom: 80px;
      }
      #infoMenu li a {
      color: #fff;
      z-index: 999;
      }
      a:hover,a:focus{
      outline: none;
      text-decoration: none;
      }
      .tab .nav-tabs{ border-bottom: 0px solid #e8e8e8; }
      .tab .nav-tabs li a{
        letter-spacing : 1px;
        display: block;
        padding: 10px 20px;
        margin: 0 5px 1px 0;
        background: #2f23b0;
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        text-align: center;
        border: none;
        border-radius: 0;
        z-index: 2;
        position: relative;
        transition:all 0.3s ease 0s;
      }
      .tab .nav-tabs li a:hover {
        background: #4030f0;
        color: #ffffff;
        border: none;
      }
      .tab .nav-tabs li a.active{
        background: #4030f0;
        color: #ffffff;
        border: none;
      }
      .tab .nav-tabs li a.active:before{
      content: "\f0d7";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      font-size: 50px;
      font-weight: 700;
      color: #4030f0;
      margin: 0 auto;
      position: absolute;
      bottom: -45px;
      left: 0;
      right: 0;
      }
      .tab .nav-tabs li a.active:after{
      content: "";
      width: 100%;
      height: 3px;
      background: #4030f0;
      position: absolute;
      bottom: -1px;
      left: 0;
      z-index: -1;
      transition: all 0.3s ease 0s;
      }
      .tab .tab-content{
      padding: 30px 20px 20px;
      margin-top: 0;
      font-size: 15px;
      color: #7a9181;
      line-height: 30px;
      border-radius: 0 0 5px 5px;
      }
      .tab .tab-content h3{
      font-size: 24px;
      margin-top: 0;
      }
      .breadcrumb {
        background-color:white;
        font-size:24px;
        padding: .75rem 0rem;
      }
      .btn-search{
        background-color:#312C82;
        border-radius:0px;
        padding:7px 20px;
        border:none;
        color:white;
      }
      .search-product .form-inline{
       float:right;
      }
      .search-product .form-control{
        border-radius:0px;
        width:270px;
      }
      
      .search-product .form-group{
        margin-bottom: 0rem;
      }
      
      .all-product .nav-link{
        border-bottom: dotted 2px #d7d7d7;
        padding: .5rem 0rem;
        font-size:24px;
        color:#4D4D4D;
      }
      .all-product .icon-cate{
        font-size:13px;
        padding-right:5px;
      }
      .products-all img{
        display: block;
        width: 100%;
        height: auto;
      }

      .picture-product .overlay-img {
      position: absolute; 
      bottom: 0; 
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5); /* Black see-through */
      color: #f1f1f1; 
      left:0;
      right:0;
      transition: .5s ease;
      opacity:1;
      color: white;
      font-size: 20px;
      padding: 20px;
      text-align: center;
    }
    .picture-product:hover .overlay-img {
      opacity: 1;
    }

      
      @media (max-width: 414px){
        .products-all{
          order: 1;
        }
        .search-product .form-inline{
         float:left;
        }
        .breadcrumb{
          margin-bottom:0rem;
        }
      }
      @media only screen and (max-width: 479px){
      .tab .nav-tabs li{
      width: 100%;
      text-align: center;
      }
      .tab .nav-tabs li a.active:before{
      content: "\f105";
      bottom: 15%;
      left: 0;
      right: auto;
      }
      }
      @media (min-width:1400px) {
        .container {
          max-width: 1360px
        }
      }
      .pt-60 {
        padding-top: 60px;
      }
</style>