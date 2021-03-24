<style type="text/css">
    #actions {
        position: fixed;
        top: 73px;
        left: 30px;
        z-index: 99999;
    }

    #actions a {
        background: rgba(0, 0, 0, 0.8);
        padding: 7px;
        margin: 2px;
        color: #ccc;
        display: inline-block;
    }

    #actions a:hover {
        color: #fff;
        background: #81A140;
    }
</style>
<style type="text/css">
    @font-face {
        font-family: 'PSLDISPLAYPRO';
        src: url('<?=base_url()?>assets_2021_theme_1/font/PSL029pro.ttf');
        font-weight: normal;
        font-style: normal;
    }

</style>
<style type="text/css">
    .menu-left a {
        display: inline-block;
        position: relative;
        padding-bottom: 0px;
        transition: color .35s ease;
    }

    .menu-left a:before {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
        height: 2px;
        width: 0;
        transition: width 0s ease, background .35s ease;
    }

    .menu-left a:after {
        content: '';
        display: block;
        position: absolute;
        right: 0;
        bottom: 0;
        height: 2px;
        width: 0;
        background: #000;
        transition: width .35s ease;
    }

    .menu-left a:hover:before {
        width: 100%;
        background: #000;
        transition: width .35s ease;
    }

    .menu-left a:hover:after {
        width: 100%;
        background: transparent;
        transition: all 0s ease;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: .5rem 0;
        z-index: 3;
        will-change: transform;
        transition: background 0.3s, -webkit-transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1);
        transition: transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1), background 0.3s;
        transition: transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1), background 0.3s, -webkit-transform 0.5s cubic-bezier(0.694, 0.048, 0.335, 1);
        transform: translateY(0);
        -webkit-transform: translateY(0);
    }

    header nav .logo {
        float: left;
        padding-top: .25rem;
        padding-bottom: .25rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        font-weight: 500;
        color: black;
    }

    header nav .logo:after {
        content: '';
        display: table;
        clear: both;
    }

    header nav ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    header nav ul li {
        float: none;
        margin-left: 0;
    }

    @media (min-width: 768px) {
        header nav ul li {
            float: left;
            margin-left: 1rem;
        }
    }

    header nav ul li a {
        display: block;
    }

    @media (min-width: 576px) {
        header nav ul li a {
            display: block;
            padding: .425rem 0rem;
        }
    }

    @media (max-width: 768px) {
        ul {
            clear: both;
        }
        ul li {
            padding: .5em 0;
        }
    }

    .hide-nav {
        transform: translateY(-120% !important);
        -webkit-transform: translateY(-120%) !important;
    }

    ul.menu-left {
        display: block;
        max-height: 0;
        overflow: hidden;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        z-index: 10;
    }

    @media (min-width: 768px) {
        ul.menu-left {
            display: block !important;
            float: right;
            max-height: none;
        }
    }

    ul.menu-left:before {
        content: '';
        display: table;
        clear: both;
    }

    .fp-controlArrow.fp-prev:before {
        border-color: #FFF !important;
        content: '';
        display: block;
        position: absolute;
        top: 50%;
        left: 1px;
        width: 1.3em;
        height: 1.3em;
        border-top: 2px solid #CCC;
        border-left: 2px solid #CCC;
        font-size: inherit;
        transform: translate3d(0, -50%, 0) rotate(-45deg);
    }

    .fp-controlArrow.fp-prev:after {
        border-color: #FFF !important;
        content: '';
        display: block;
        border-top: 3px solid #CCC;
        width: 2.5em;
        position: absolute;
        top: 50%;
        font-size: inherit;
        transform: translate3d(0, -50%, 0);
    }

    .fp-controlArrow.fp-next:before {
        border-color: #FFF !important;
        content: '';
        display: block;
        position: absolute;
        top: 50%;
        left: 1px;
        width: 1.3em;
        height: 1.3em;
        border-top: 2px solid #CCC;
        border-left: 2px solid #CCC;
        font-size: inherit;
        transform: translate3d(0, -50%, 0) rotate(-45deg);
    }

    .fp-controlArrow.fp-next:after {
        border-color: #FFF !important;
        content: '';
        display: block;
        border-top: 3px solid #CCC;
        width: 2.5em;
        position: absolute;
        top: 50%;
        font-size: inherit;
        transform: translate3d(0, -50%, 0);
    }

    .fp-controlArrow.fp-next {
        transform: rotate( 180deg) !important;
        transform-origin: 15px 8px;
    }

    <?
    /*----------*/

    ?>

    nav > .nav.nav-tabs{
        border: none;
        color:#fff;
        background:#272e38;
        border-radius:0;
    }

    nav > div a.nav-item.nav-link,
    nav > div a.nav-item.nav-link.active
    {
        border: none;
        padding: 18px 25px;
        color:#fff;
        background:#272e38;
        border-radius:0;
    }

    nav > div a.nav-item.nav-link.active:after
     {
        content: "";
        position: relative;
        bottom: -60px;
        left: -25%;
        border: 15px solid transparent;
        border-top-color: #e74c3c ;
    }

    .tab-content{
        /*background: #fdfdfd;*/
        line-height: 25px;
        /*border: 1px solid #ddd;
        border-top:5px solid #e74c3c;
        border-bottom:5px solid #e74c3c;*/
        padding:30px 25px;
    }

    nav > div a.nav-item.nav-link:hover,
    nav > div a.nav-item.nav-link:focus
    {
        border: none;
        background: #e74c3c;
        color:#fff;
        border-radius:0;
        transition:background 0.20s linear;
    }

</style>