<style>
    #header {
        height: 706px;
        padding-top: 0 !important;
        background: url({{$banner}}) no-repeat top left;
        background-position-x: 60%;
        background-size: cover;
    }

    #header .top{
        width: 90%;
        margin: 0 auto !important;
    }

    #header.{{$page_type??''}}  {
        height: 706px;
    }

    #header ul {
        margin-top: 20px;
        margin-left: 20px;
        list-style: none;
    }

    #header ul.menu li {
        float: left;
        margin-right: 40px;
    }

    #header ul.menu li.active {
        position: relative;
    }

    #header ul.menu li.active:after {
        content: "";
        display: block;
        width: 90%;
        height: 1px;
        background: #D60F0F;
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
    }

    #header ul.menu li a {
        color: #FFF;
        font-size: 14px;
    }

    #header ul.contact li {
        float: right;
        margin-right: 3%;
    }

    #header ul.contact li.first {
        background-color: #FFF;
        border-radius: 20px;
        padding: 2px 18px;
        font-weight: bold;
    }

    #header ul.contact li.first a {
        color: #DA0404;
    }

    #navigation ul.contact li.first {
        background-color: #DA0404;
    }

    #navigation ul.contact li.first a {
        color: #FFF;
    }

    #header ul.contact img {
        height: 25px;
    }

    .homev2 .hero-content__name {
        width: auto;
        margin: 5px 0;
    }

    .TNG_i_t_vn_min_ph_be_Class {
        text-align: center;
        font-style: normal;
        font-weight: bold;
        font-size: 13px;
        color: #2F318C;
        text-transform: uppercase;
        line-height: 70px;
        margin-right: 15px;
    }

    .btn_call_247 {
        width: 200px;
        height: 44px;
        line-height: 39px;
        border-radius: 25px;
        border: 2px solid #2F318C;
        background-color: #2F318C;
        margin-top: 10px;
        font-size: 21px;
        color: #FFF !important;
        font-weight: bold;
        margin-right: 15px;
    }

    .ic_call_24px_fe {
        margin: 10px 7px 10px 15px;
    }

    .Group_677_i {
        padding: 10px 35px;
        border-radius: 25px;
        background-color: #c70000;
        margin-top: 10px;
        width: 235px;
        text-align: center;
    }

    .Group_677_i a {
        font-size: 21px;
        color: #FFF;
        font-weight: bold;
    }

    .Group_677_i a:hover {
        color: #FFF;
    }

    .Rectangle_178 {
        margin: auto;
        margin-top: 100px;
        margin-bottom: 20px;
        overflow: visible;
        width: 129px;
        height: 9px;
        left: 896px;
        top: 169px;
    }

    .Rectangle_178_Class {
        fill: rgba(255, 52, 52, 1);
    }

    #header h2 {
        color: #FFF;
        font-size: 45px;
        line-height: 57px;
        font-family: Montserrat;
        font-weight: normal;
    }

    #header h2#{{$page_type??''}} {
        text-align: left !important;
        margin-top: 190px;
        font-size: 65px;
        line-height: 80px;
        position: relative;
        font-family: Montserrat;
    }

    #header h2#solution {
        border-left: 10px solid #ff3434;
        padding-left: 10px;
    }

    #header h2#{{$page_type??''}}:after {
        content: "";
        display: block;
        width: 129px;
        height: 9px;
        background: #D60F0F;
        position: absolute;
        top: -35px;
        left: 8%;
        transform: translateX(-50%);
    }

    #header h2#solution:after {
        display: none;
    }

    .Rectangle_193 {
        height: 160px;
        width: 10px;
        margin-right: 10px;
        float: left;
        margin-top: 150px;
    }

    .Rectangle_193_Class {
        fill: rgba(255, 52, 52, 1);
        height: 160px;
        width: 8px;
    }

    .Rectangle_193.solution {
        height: 220px;
        margin-top: 195px;
    }

    .Rectangle_193_Class.solution {
        height: 220px;
    }

    #navigation {
        width: 90%;
        margin: auto !important;
        z-index: 2;
        transition: top .3s; /* Transition effect when sliding down (and up) */
    }

    /* The sticky class is added to the header with JS when it reaches its scroll position */
    .sticky {
        position: fixed;
        top: 0;
        width: 100% !important;
        padding: 0 5%;
        background-color: #FFF;
        z-index: 1;
    }

    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
    .sticky + .content {
        padding-top: 102px;
    }

    #navigation ul.menu li a {
        color: #393939;
    }

    #overlay:after {
        display: none;
    }

    input[type=checkbox]:checked ~ #overlay-button:hover span, input[type=checkbox]:checked ~ #overlay-button span {
        background: transparent !important;
    }

    #overlay-button {
        position: absolute;
        left: 90%;
        padding: 26px 0;
        z-index: 5;
        cursor: pointer;
        user-select: none;
        margin-top: 7px;
    }
    #overlay-button span {
        height: 2px;
        width: 35px;
        border-radius: 2px;
        background-color: #FFF;
        position: relative;
        display: block;
        transition: all 0.2s ease-in-out;
    }
    #overlay-button span:before {
        top: -10px;
        visibility: visible;
    }
    #overlay-button span:after {
        top: 10px;
    }
    #overlay-button span:before, #overlay-button span:after {
        height: 2px;
        width: 35px;
        border-radius: 2px;
        background-color: #FFF;
        position: absolute;
        content: "";
        transition: all 0.2s ease-in-out;
    }
    #overlay-button:hover span, #overlay-button:hover span:before, #overlay-button:hover span:after {
        background: #FF0000;
    }
    input[type=checkbox] {
        display: none;
    }
    input[type=checkbox]:checked ~ #overlay {
        visibility: visible;
    }
    input[type=checkbox]:checked ~ #overlay-button:hover span, input[type=checkbox]:checked ~ #overlay-button span {
        background: transparent;
    }
    input[type=checkbox]:checked ~ #overlay-button span:before {
        transform: rotate(45deg) translate(7px, 7px);
        opacity: 1;
    }
    input[type=checkbox]:checked ~ #overlay-button span:after {
        transform: rotate(-45deg) translate(7px, -7px);
    }
    #overlay {
        height: 100vh;
        width: 100vw;
        z-index: 2;
        visibility: hidden;
        position: fixed;
        opacity: 1;
        background-color: #FF1717;
        padding-bottom: 11px;
    }

    #overlay .inline {
        background: #FFF;
        height: 100%;
    }

    #main_nav .Rectangle_252 {
        height: 2px;
        width: 61px;
        overflow: auto;
        margin: 50px 0 0 50px;
    }

    #main_nav ul {
        margin: 10px 0 0 50px;
        height: 146px;
    }

    #main_nav ul.menu li {
        width: 100%;
        margin: 20px 0;
    }

    #main_nav ul li a {
        color: #070707 !important;
        font-size: 17px !important;
        line-height: 22px;
    }

    #main_nav ul.contact li {
        float: left;
    }

    #main_nav ul.contact img {
        height: auto;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        .homev2 {
            overflow-x: hidden;
        }

        .homev2 .header {
            background-color: rgba(38, 40, 144, 1) !important;
            height: auto;
            padding: 0;
        }

        .homev2 .heading-mobile__in .hero-content__name {
            margin-right: 0;
        }

        .homev2 .header .hotline__icon {
            width: 100%;
            margin: 15px;
        }

        .homev2 .heading-mobile__in .hero-content__name {
            width: 50% !important;
        }

        .hero-content__name {
            padding: 10px 0;
        }

        #header ul.menu li {
            margin-bottom: 10px;
        }

        #header ul.contact li.first {
            margin-right: 40px;
        }

        #navigation {
            width: 100%;
        }

        #header h2 {
            font-size: 15px;
            line-height: 21px;
            margin-top: 40px;
        }

        #header {
            height: 390px !important;
            background-size: cover;
            background-position-x: 53%;
        }

        #main_nav ul.menu li.active:after {
            background: none;
        }
    }
    .offcanvas-header{ display:none; }

    @media (max-width: 992px) {
        .offcanvas-header{ display:block; }
        .navbar-collapse {
            position: fixed;
            top:0;
            bottom: 0;
            left: 100%;
            width: 100%;
            /*padding-right: 1rem;*/
            /*padding-left: 1rem;*/
            overflow-y: auto;
            visibility: hidden;
            transition: visibility .2s ease-in-out, -webkit-transform .2s ease-in-out;
            z-index: 1;
            background-color: #FFF;
        }
        .navbar-collapse.show {
            visibility: visible;
            transform: translateX(-100%);
        }
        .navbar-dark .navbar-toggler {
            border: none;
            margin-bottom: 10px;
        }
    }
</style>
<header id="header" class="{{$page_type??''}}">
    <div id="navigation" class="row hide-mobile" style="display:none">
        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 pl-0">
            <h1 class="hero-content__name">
                <a href="{{url('/')}}" title="Tự nhiên như hơi thở">
                    <img width="152px" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}} 1x" alt="Tự nhiên như hơi thở">
                </a>
            </h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 hide-mobile">
            <ul class="menu">
                <li <?php echo request()->route()->getName() === 'aboutus' ? ' class="active"' : '' ?>><a href="{{url('/ve-chung-toi')}}" title="Về chúng tôi">Về chúng tôi</a></li>
                <li <?php echo request()->route()->getName() === 'activity' ? ' class="active"' : '' ?>><a href="{{url('/hoat-dong')}}" title="Hoạt động">Hoạt động</a></li>
                <li <?php echo request()->route()->getName() === 'solution' ? ' class="active"' : '' ?>><a href="{{url('#form_register')}}" title="Liên hệ">Liên hệ</a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 hide-mobile pr-0">
            <ul class="contact">
                <li class="ml-2 first">
                    <a href="tel:{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964783913'}}" title="Hotline">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/btn_call_247_s.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/btn_call_247_s.png')}} 1x" alt="Hotline">
                        {{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964 783 913'}}
                    </a>
                </li>
                <li>
                    <a href="{{!empty($info['instagram'])?$info['instagram']:'https://www.instagram.com'}}" title="Instagram" target="_blank">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram_s.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram_s.png')}} 1x" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="{{!empty($info['youtube'])?$info['youtube']:'https://www.youtube.com'}}" title="Youtube" target="_blank">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube_s.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube_s.png')}} 1x" alt="Youtube">
                    </a>
                </li>
                <li>
                    <a href="{{!empty($info['facebook'])?$info['facebook']:'https://www.facebook.com'}}" title="Facebook" target="_blank">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook_s.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook_s.png')}} 1x" alt="Facebook">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="navbar" class="row top">
        <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 pl-0 hide-mobile">
            <h1 class="hero-content__name">
                <a href="{{url('/')}}" title="Tự nhiên như hơi thở">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc.png')}} 1x" alt="Tự nhiên như hơi thở">
                </a>
            </h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 hide-desktop p-0 position-relative">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <h1 class="hero-content__name" style="float:left;width:50%">
                    <a href="{{url('/')}}" title="Tự nhiên như hơi thở">
                        <img id="logo_pc" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc.png')}} 1x" alt="Tự nhiên như hơi thở">
                        <img id="logo_pc_s" style="display:none" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}} 1x" alt="Tự nhiên như hơi thở">
                    </a>
                </h1>
                <button class="navbar-toggler p-0" type="button" data-trigger="#main_nav">
                    <span id="navbar_toggler_icon" class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse" id="main_nav">
                    <div class="offcanvas-header">
                        <button class="btn-close float-right" style="color:#FF0000;
    font-size: 56px;
    background: none;    margin-right: 20px;
">&times</button>
                        <h1 class="hero-content__name pl-2" style="box-shadow: 0 0 11px #F1F1F1;">
                            <a href="{{url('/')}}" title="Tự nhiên như hơi thở">
                                <img width="152px" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}} 1x" alt="Tự nhiên như hơi thở">
                            </a>
                        </h1>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252">
                                <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                            </svg>
                            <ul class="menu">
                                <li <?php echo request()->route()->getName() === 'aboutus' ? ' class="active"' : '' ?>><a href="{{url('/ve-chung-toi')}}" title="Về chúng tôi">Về chúng tôi</a></li>
                                <li <?php echo request()->route()->getName() === 'activity' ? ' class="active"' : '' ?>><a href="{{url('/hoat-dong')}}" title="Hoạt động">Hoạt động</a></li>
                                <li <?php echo request()->route()->getName() === 'solution' ? ' class="active"' : '' ?>><a href="{{url('/#form_register')}}" title="Liên hệ">Liên hệ</a></li>
                            </ul>
                            <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252" style="margin:10px 0 0 50px">
                                <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                            </svg>
                            <ul class="contact" style="margin-top:30px;height:50px">
                                <li style="margin-right:20px">
                                    <a href="{{!empty($info['facebook'])?$info['facebook']:'https://www.facebook.com'}}" title="Facebook" target="_blank">
                                        <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook_s.png')}}"
                                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook_s.png')}} 1x" alt="Facebook">
                                    </a>
                                </li>
                                <li style="margin-right:20px">
                                    <a href="{{!empty($info['youtube'])?$info['youtube']:'https://www.youtube.com'}}" title="Youtube" target="_blank">
                                        <img class="w-100"src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube_s.png')}}"
                                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube_s.png')}} 1x" alt="Youtube">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{!empty($info['instagram'])?$info['instagram']:'https://www.instagram.com'}}" title="Instagram" target="_blank">
                                        <img class="w-100"src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram_s.png')}}"
                                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram_s.png')}} 1x" alt="Instagram">
                                    </a>
                                </li>
                            </ul>
                            <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252" style="margin:10px 0 0 50px">
                                <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                            </svg>
                            <ul class="contact" style="margin-top:30px">
                                <li style="min-width: 190px;
    padding: 2px 10px 2px 0px;
    background-color: #FF1717;
    border-radius: 30px;
    text-align: center;
    line-height: 40px;">
                                    <a style="color: #FFF !important;
    font-weight: bold;" href="tel:{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964783913'}}" title="Hotline">
                                        <img style="    width: 20%;
    margin-left: -20px;
    margin-bottom: 0px;" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Group_275.png')}}"
                                             srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Group_275.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/icons/Group_275@2x.png')}} 2x" alt="Hotline">
                                        {{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964 783 913'}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- navbar-collapse.// -->
            </nav>
            <input type="checkbox" id="overlay-input"/>
            <label for="overlay-input" id="overlay-button" class="d-none"><span></span></label>
            <div id="overlay">
                <div class="inline">
                <h1 class="hero-content__name pl-2" style="box-shadow: 0 0 11px #F1F1F1;">
                    <a href="{{url('/')}}" title="Tự nhiên như hơi thở">
                        <img width="152px" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_pc_s.png')}} 1x" alt="Tự nhiên như hơi thở">
                    </a>
                </h1>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252">
                        <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                    </svg>
                    <ul class="menu">
                        <li <?php echo request()->route()->getName() === 'aboutus' ? ' class="active"' : '' ?>><a href="{{url('/ve-chung-toi')}}" title="Về chúng tôi">Về chúng tôi</a></li>
                        <li <?php echo request()->route()->getName() === 'activity' ? ' class="active"' : '' ?>><a href="{{url('/hoat-dong')}}" title="Hoạt động">Hoạt động</a></li>
                        <li <?php echo request()->route()->getName() === 'solution' ? ' class="active"' : '' ?>><a href="{{url('#form_register')}}" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                    <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252" style="margin:10px 0 0 50px">
                        <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                    </svg>
                    <ul class="contact" style="margin-top:30px;height:50px">
                        <li style="margin-right:20px">
                            <a href="{{!empty($info['facebook'])?$info['facebook']:'https://www.facebook.com'}}" title="Facebook" target="_blank">
                                <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook_s.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook_s.png')}} 1x" alt="Facebook">
                            </a>
                        </li>
                        <li style="margin-right:20px">
                            <a href="{{!empty($info['youtube'])?$info['youtube']:'https://www.youtube.com'}}" title="Youtube" target="_blank">
                                <img class="w-100"src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube_s.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube_s.png')}} 1x" alt="Youtube">
                            </a>
                        </li>
                        <li>
                            <a href="{{!empty($info['instagram'])?$info['instagram']:'https://www.instagram.com'}}" title="Instagram" target="_blank">
                                <img class="w-100"src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram_s.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram_s.png')}} 1x" alt="Instagram">
                            </a>
                        </li>
                    </ul>
                    <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252" style="margin:10px 0 0 50px">
                        <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                    </svg>
                    <ul class="contact" style="margin-top:30px">
                        <li style="min-width: 190px;
    padding: 2px 10px 2px 0px;
    background-color: #FF1717;
    border-radius: 30px;
    text-align: center;
    line-height: 40px;">
                            <a style="color: #FFF !important;
    font-weight: bold;" href="tel:{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964783913'}}" title="Hotline">
                                <img style="    width: 20%;
    margin-left: -20px;
    margin-bottom: 0px;" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Group_275.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Group_275.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/icons/Group_275@2x.png')}} 2x" alt="Hotline">
                                {{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964 783 913'}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 hide-mobile">
            <ul class="menu">
                <li <?php echo request()->route()->getName() === 'aboutus' ? ' class="active"' : '' ?>><a href="{{url('/ve-chung-toi')}}" title="Về chúng tôi">Về chúng tôi</a></li>
                <li <?php echo request()->route()->getName() === 'activity' ? ' class="active"' : '' ?>><a href="{{url('/hoat-dong')}}" title="Hoạt động">Hoạt động</a></li>
                <li <?php echo request()->route()->getName() === 'solution' ? ' class="active"' : '' ?>><a href="{{url('#form_register')}}" title="Liên hệ">Liên hệ</a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 hide-mobile pr-0">
            <ul class="contact w-100">
                <li class="ml-2 first">
                    <a href="tel:{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964783913'}}" title="Hotline">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/btn_call_247.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/btn_call_247.png')}} 1x" alt="Hotline">
                        {{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964 783 913'}}
                    </a>
                </li>
                <li>
                    <a href="{{!empty($info['instagram'])?$info['instagram']:'https://www.instagram.com'}}" title="Instagram" target="_blank">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram.png')}} 1x" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="{{!empty($info['youtube'])?$info['youtube']:'https://www.youtube.com'}}" title="Youtube" target="_blank">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube.png')}} 1x" alt="Youtube">
                    </a>
                </li>
                <li>
                    <a href="{{!empty($info['facebook'])?$info['facebook']:'https://www.facebook.com'}}" title="Facebook" target="_blank">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook.png')}} 1x" alt="Facebook">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if (!isset($page_type))
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 m-auto text-center">
            @else
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 text-center">
            @endif
                @if (isset($page_type) && $page_type == 'other')
                    <h2 id="{{$page_type??''}}">
                        <?php echo html_entity_decode($title) ?></h2>
                @elseif (isset($page_type) && $page_type == 'solution')
                    <h2 id="{{$page_type??''}}">
                    <?php echo html_entity_decode($title) ?></h2>
                @else
                    <svg data-type="Rectangle" data-name="Rectangle 178" class="Rectangle_178 hide-mobile">
                        <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="129" height="9"></rect>
                    </svg>
                    <h2><?php echo html_entity_decode($title) ?></h2>
                @endif
            </div>
        </div>
    </div>
</header>
<script>
    require(['jquery'], function ($) {
        $("[data-trigger]").on("click", function(){
            var trigger_id =  $(this).attr('data-trigger');
            $(trigger_id).toggleClass("show");
            $('body').toggleClass("offcanvas-active");
        });

        // close button
        $(".btn-close").click(function(e){
            $(".navbar-collapse").removeClass("show");
            $("body").removeClass("offcanvas-active");
        });
        $(window).scroll(function(){
            var aTop = $('#main_nav .hero-content__name').height();
            if($(this).scrollTop()>=aTop){
                //$('#main_nav .hero-content__name').css({'margin-top': '10px'});
                // instead of alert you can use to show your ad
                // something like $('#footAd').slideup();
            } else {
                //$('#main_nav .hero-content__name').css({'margin-top': '0'});
            }
        });
    });
</script>
