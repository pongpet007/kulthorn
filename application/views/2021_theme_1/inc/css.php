<style type="text/css">
  @font-face {
    font-family: 'PSLDISPLAYPRO';
    src: url('<?=base_url()?>assets_2021_theme_1/font/PSL029pro.ttf');
    font-weight: normal;
    font-style: normal;
  }
  body {
    font-family: PSLDISPLAYPRO;
  }      /* Style for our header texts
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
  }/* Centered texts in each section
  * --------------------------------------- */
  .section{
    text-align:center;
  }/* Fixed header and footer.
  * --------------------------------------- */
  #footer{
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
    position:fixed;
    height: 50px;
    display:block;
    width: 100%;
    z-index:9;
    text-align:center;
    color: #f2f2f2;
  }
  #fullpage {
    /*margin-top: 55px;*/
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    font-size: 25px ;
    padding-right: 1.3rem;
    padding-left: 1.3rem;
  }

  #footer{
    bottom:0px;
  }
  .changlang {
    padding-top: 5px;
    padding-right: 20px;

  }
  .navbar-nav {
    padding-left: 560px;

  }
  .navbar-light .navbar-nav .nav-link {
    color: #FFF ;
  }
  /* Bottom menu     * --------------------------------------- */
  #infoMenu {
    bottom: 80px;
  }
  .navbar-light .navbar-nav .nav-link-new:hover {
    color: #EEE;
  }
  .navbar-nav .nav-1{
    /*border-right: 2px solid #7f849a;*/
  }

  .nav-1  , .nav-2 , .nav-3 , .nav-4 ,.nav-5 ,.nav-6 ,.nav-8 {
    position: relative;
  }

  .nav-color-toggle {
    background : #FFF ;
  }

  .img-flag img{
    width: 50%;
  }

  .nav-1{
    font-size: 50px !important;
  }

  @media (max-width: 414px) {
    .navbar-expand-lg .navbar-nav .nav-link {
      font-size: 50px ;
      padding-right: 1.3rem;
      padding-left: 1.3rem;
    }
  } 
  @media (max-width: 768px) and (min-width: 501px) {
    .nav-link-new{
      font-size: 45px;
    }
    .img-flag img{
      width: 10%;
    }
    .nav-1:after , .nav-2:after , .nav-3:after , .nav-4:after ,.nav-5:after ,.nav-6:after ,.nav-8:before    {
      width:  0;
    }
  }

  @media (max-width: 1024px) and (min-width: 769px) {
    .navbar-expand-lg .navbar-nav .nav-link {

      padding-left: .2rem;
      padding-right: 0.3rem; 
    }
    .navbar-nav {
      padding-left: 0;
    }
    .img-flag img{
      width: 10%;

    }
  }

  @media (max-width: 1440px) and (min-width: 1025px) {
    .navbar-expand-lg .navbar-nav .nav-link {
      font-size: 23px;
      padding-left: .7rem;
      padding-right: .7rem; 
    }
    .navbar-nav {
      padding-left: 200px;
    }
  }

  @media (min-width: 1024px) {
    .nav-1:after , .nav-2:after , .nav-3:after , .nav-4:after ,.nav-5:after ,.nav-6:after ,.nav-8:before    {
      content: '';
      height: 50%; 
      width: 1px;
      position: absolute;
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
</style>