<style type="text/css">
    @font-face {
    font-family: 'PSLDISPLAYPRO';
    src: url('<?=base_url()?>assets_2021_theme_1/font/PSL029pro.ttf');
    font-weight: normal;
    font-style: normal;
  }
  
@CHARSET "ISO-8859-1";
/* Reset CSS
 * --------------------------------------- */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,
form,fieldset,input,textarea,p,blockquote,th,td {
    padding: 0;
    margin: 0;
}
a{
    text-decoration:none;
}
table {
    border-spacing: 0;
}
fieldset,img {
    border: 0;
}
address,caption,cite,code,dfn,em,strong,th,var {
    font-weight: normal;
    font-style: normal;
}
strong{
    font-weight: bold;
}
ol,ul {
    list-style: none;
    margin:0;
    padding:0;
}
caption,th {
    text-align: left;

}
h1,h2,h3,h4,h5,h6 {
    font-weight: normal;
    font-size: 100%;
    margin:0;
    padding:0;
    color:#444;
}
q:before,q:after {
    content:'';
}
abbr,acronym { border: 0;
}


/* Custom CSS
 * --------------------------------------- */
body{
    color: #333;
    color: rgba(0,0,0,0.5);
}
.wrap{
    margin-left: auto;
    margin-right: auto;
    width: 960px;
    position: relative;
}
h1{
    font-size: 6em;
}
p{
    font-size: 2em;
}
.intro p{
    width: 50%;
    margin: 0 auto;
    font-size: 1.5em;
}
.section{
    text-align:center;
}
#menu li {
    display:inline-block;
    margin: 10px;
    color: #000;
    background:#fff;
    background: rgba(255,255,255, 0.5);
    -webkit-border-radius: 10px;
            border-radius: 10px;
}
#menu li.active{
    background:#666;
    background: rgba(0,0,0, 0.5);
    color: #fff;
}
#menu li a{
    text-decoration:none;
    color: #000;
}
#menu li.active a:hover{
    color: #000;
}
#menu li:hover{
    background: rgba(255,255,255, 0.8);
}
#menu li a,
#menu li.active a{
    padding: 9px 18px;
    display:block;
}
#menu li.active a{
    color: #fff;
}
#menu{
    position:fixed;
    top:0;
    left:0;
    height: 40px;
    z-index: 70;
    width: 100%;
    padding: 0;
    margin:0;
}
.twitter-share-button{
    position: fixed;
    z-index: 99;
    right: 149px;
    top: 9px;
}
#download{
    margin: 10px 0 0 0;
    padding: 15px 10px;
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
    background-color: #49afcd;
    background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
    background-image: -ms-linear-gradient(top, #5bc0de, #2f96b4);
    background-image: -webkit-gradient(linear,0 0,0 100%,from( #5bc0de),to( #2f96b4));
    background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
    background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
    background-image: linear-gradient(top, #5bc0de, #2f96b4);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#2f96b4', GradientType=0);
    border-color: #2f96b4 #2f96b4 #1f6377;
    border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);

    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    vertical-align: middle;
    cursor: pointer;
    display: inline-block;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
}
#download a{
    text-decoration:none;
    color:#fff;
}
#download:hover{
    text-shadow: 0 -1px 0 rgba(0,0,0,.25);
    background-color: #2F96B4;
    background-position: 0 -15px;
    -webkit-transition: background-position .1s linear;
    -moz-transition: background-position .1s linear;
    -ms-transition: background-position .1s linear;
    -o-transition: background-position .1s linear;
    transition: background-position .1s linear;
}
#infoMenu{
    height: 20px;
    color: #f2f2f2;
    position:fixed;
    z-index:70;
    bottom:0;
    width:100%;
    text-align:right;
    font-size:0.9em;
    padding:8px 0 8px 0;
}
#infoMenu ul{
    padding: 0 40px;
}
#infoMenu li a{
    display: block;
    margin: 0 22px 0 0;
    color: #333;
}
#infoMenu li a:hover{
    text-decoration:underline;
}
#infoMenu li{
    display:inline-block;
    position:relative;
}
#examplesList{
    display:none;
    background: #282828;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    padding: 20px;
    float: left;
    position: absolute;
    bottom: 29px;
    right: 0;
    width:638px;
    text-align:left;
}
#examplesList ul{
    padding:0;
}
#examplesList ul li{
    display:block;
    margin: 5px 0;
}
#examplesList ul li a{
    color: #BDBDBD;
    margin:0;
}
#examplesList ul li a:hover{
    color: #f2f2f2;
}
#examplesList .column{
    float: left;
    margin: 0 20px 0 0;
}
#examplesList h3{
    color: #f2f2f2;
    font-size: 1.2em;
    margin: 0 0 15px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.1);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
    padding: 0 0 5px 0;
}



/* Demos Menu
 * --------------------------------------- */
 #demosMenu{
    position:fixed;
    bottom: 10px;
    right:10px;
    z-index: 999;
 }

/*!
 * fullPage 3.1.0
 * https://github.com/alvarotrigo/fullPage.js
 *
 * @license GPLv3 for open source use only
 * or Fullpage Commercial License for commercial use
 * http://alvarotrigo.com/fullPage/pricing/
 *
 * Copyright (C) 2018 http://alvarotrigo.com/fullPage - A project by Alvaro Trigo
 */
 html.fp-enabled,
 .fp-enabled body {
     margin: 0;
     padding: 0;
     overflow:hidden;
 
     /*Avoid flicker on slides transitions for mobile phones #336 */
     -webkit-tap-highlight-color: rgba(0,0,0,0);
 }
 .fp-section {
     position: relative;
     -webkit-box-sizing: border-box; /* Safari<=5 Android<=3 */
     -moz-box-sizing: border-box; /* <=28 */
     box-sizing: border-box;
 }
 .fp-slide {
     float: left;
 }
 .fp-slide, .fp-slidesContainer {
     height: 100%;
     display: block;
 }
 .fp-slides {
     z-index:1;
     height: 100%;
     overflow: hidden;
     position: relative;
     -webkit-transition: all 0.3s ease-out; /* Safari<=6 Android<=4.3 */
     transition: all 0.3s ease-out;
 }
 .fp-section.fp-table, .fp-slide.fp-table {
     display: table;
     table-layout:fixed;
     width: 100%;
 }
 .fp-tableCell {
     vertical-align: middle;
     display: table-cell;
     width: 100%;
     
 }
 .fp-slidesContainer {
     float: left;
     position: relative;
 }
 .fp-controlArrow {
     -webkit-user-select: none; /* webkit (safari, chrome) browsers */
     -moz-user-select: none; /* mozilla browsers */
     -khtml-user-select: none; /* webkit (konqueror) browsers */
     -ms-user-select: none; /* IE10+ */
     position: absolute;
     z-index: 4;
     top: 50%;
     cursor: pointer;
     width: 0;
     height: 0;
     border-style: solid;
     margin-top: -38px;
     -webkit-transform: translate3d(0,0,0);
     -ms-transform: translate3d(0,0,0);
     transform: translate3d(0,0,0);
 }
 .fp-controlArrow.fp-prev {
     left: 15px;
     width: 0;
     border-width: 38.5px 34px 38.5px 0;
     border-color: transparent #fff transparent transparent;
 }
 .fp-controlArrow.fp-next {
     right: 15px;
     border-width: 38.5px 0 38.5px 34px;
     border-color: transparent transparent transparent #fff;
 }
 .fp-scrollable {
     overflow: hidden;
     position: relative;
 }
 .fp-scroller{
     overflow: hidden;
 }
 .iScrollIndicator{
     border: 0 !important;
 }
 .fp-notransition {
     -webkit-transition: none !important;
     transition: none !important;
 }
 #fp-nav {
     position: fixed;
     z-index: 100;
     top: 50%;
     opacity: 1;
     transform: translateY(-50%);
     -ms-transform: translateY(-50%);
     -webkit-transform: translate3d(0,-50%,0);
 }
 #fp-nav.fp-right {
     right: 17px;
 }
 #fp-nav.fp-left {
     left: 17px;
 }
 .fp-slidesNav{
     position: absolute;
     z-index: 4;
     opacity: 1;
     -webkit-transform: translate3d(0,0,0);
     -ms-transform: translate3d(0,0,0);
     transform: translate3d(0,0,0);
     left: 0 !important;
     right: 0;
     margin: 0 auto !important;
 }
 .fp-slidesNav.fp-bottom {
     bottom: 17px;
 }
 .fp-slidesNav.fp-top {
     top: 17px;
 }
 #fp-nav ul {
     margin: 0;
     padding: 1px;
     background-color: #ddd;
     border-radius: 50px;
 }
 .fp-slidesNav ul {
     margin: 0;
     padding: 0px;
     
 }
 #fp-nav ul li,
 .fp-slidesNav ul li {
     display: block;
     width: 14px;
     height: 13px;
     margin: 7px;
     position:relative;
 }
 .fp-slidesNav ul li {
     display: inline-block;
 }
 #fp-nav ul li a,
 .fp-slidesNav ul li a {
     display: block;
     position: relative;
     z-index: 1;
     width: 100%;
     height: 100%;
     cursor: pointer;
     text-decoration: none;
 }
 #fp-nav ul li a.active span,
 .fp-slidesNav ul li a.active span,
 #fp-nav ul li:hover a.active span,
 .fp-slidesNav ul li:hover a.active span{
     height: 12px;
     width: 12px;
     margin: -6px 0 0 -6px;
     border-radius: 100%;
  }
 #fp-nav ul li a span,
 .fp-slidesNav ul li a span {
     border-radius: 50%;
     position: absolute;
     z-index: 1;
     height: 4px;
     width: 4px;
     border: 0;
     background: #333;
     left: 50%;
     top: 50%;
     margin: -2px 0 0 -2px;
     -webkit-transition: all 0.1s ease-in-out;
     -moz-transition: all 0.1s ease-in-out;
     -o-transition: all 0.1s ease-in-out;
     transition: all 0.1s ease-in-out;
 }
 #fp-nav ul li:hover a span,
 .fp-slidesNav ul li:hover a span{
     width: 10px;
     height: 10px;
     margin: -5px 0px 0px -5px;
 }
 #fp-nav ul li .fp-tooltip {
     position: absolute;
     top: -2px;
     color: #fff;
     font-size: 14px;
     font-family: arial, helvetica, sans-serif;
     white-space: nowrap;
     max-width: 220px;
     overflow: hidden;
     display: block;
     opacity: 0;
     width: 0;
     cursor: pointer;
 }
 #fp-nav ul li:hover .fp-tooltip,
 #fp-nav.fp-show-active a.active + .fp-tooltip {
     -webkit-transition: opacity 0.2s ease-in;
     transition: opacity 0.2s ease-in;
     width: auto;
     opacity: 1;
 }
 #fp-nav ul li .fp-tooltip.fp-right {
     right: 35px;
 }
 #fp-nav ul li .fp-tooltip.fp-left {
     left: 20px;
 }
 .fp-auto-height.fp-section,
 .fp-auto-height .fp-slide,
 .fp-auto-height .fp-tableCell{
     height: auto !important;
 }
 
 .fp-responsive .fp-auto-height-responsive.fp-section,
 .fp-responsive .fp-auto-height-responsive .fp-slide,
 .fp-responsive .fp-auto-height-responsive .fp-tableCell {
     height: auto !important;
 }
 
 /*Only display content to screen readers*/
 .fp-sr-only{
     position: absolute;
     width: 1px;
     height: 1px;
     padding: 0;
     overflow: hidden;
     clip: rect(0, 0, 0, 0);
     white-space: nowrap;
     border: 0;
 }
 
</style>