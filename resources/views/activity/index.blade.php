<style>
    /** Mobile **/
    @media (max-width: 991.98px) {
        #header h2#other {
            margin-top: 220px !important;
            font-size: 30px !important;
            line-height: 57px !important;
            font-weight: bold;
        }

        #header h2#other:after {
            left: 17% !important;
        }
    }
</style>
<?php
$banner = DB::table('banners')->select('title', 'file')->where('position', '=', 'activity')->first();
if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$banner))
    $header_banner = array('banner' => env('STATIC_IMAGES') . $banner->file, 'title' => $banner->title);
else
    $header_banner = array('banner' => env('FOLDER_PUBLIC') . 'images/graphics/Mask_Group_70.png', 'title' => 'Gắn kết cộng đồng<br/>
                    chia sẻ yêu thương', 'page_type' => 'other');
?>
@extends('layouts.default', $header_banner)
@section('content')
<style>
    #highlight {
        background-color: #000;
        color: #FFF;
    }

    .list .container {
        padding: 70px 0;
    }

    .list h2 {
        margin-bottom: 50px;
        font-size: 40px;
        font-family: Montserrat;
    }

    .Rectangle_148 {
        width: 5px;
        height: 40px;
        left: 360px;
        top: 972px;
        margin-right: 10px;
    }

    .Rectangle_148_Class {
        fill: rgba(255,52,52,1);
    }

    .list .col-left {
        height: 535px;
    }

    .list .col-left h3 {
        position: absolute;
        bottom: 70px;
        left: 30px;
        font-size: 35px;
        width: 60%;
    }

    .list .col-left h3 a, .list .col-left .view-more {
        color: #FFF;
    }

    .list .col-left p {
        position: absolute;
        bottom: 20px;
        left: 30px;
    }

    .list .col-right h3 {
        font-size: 18px;
        margin: 10px 0;
    }

    #highlight .col-right h3 a {
        color: #FFF;
    }

    .list .col-right h3 a {
        color: rgba(52,52,52,1);
    }

    .list .col-right p {
        font-size: 13px;
    }

    .list .col-bottom .box {
        background-color: #FFF;
        color: rgba(52,52,52,1);
    }

    .list .col-bottom .box h3 {
        font-size: 18px;
        margin: 20px 10px 0;
    }

    .list .col-bottom .box h3 a, .list .col-bottom .view-more {
        color: rgba(52,52,52,1);
    }

    .list .col-bottom .box p {
        font-size: 13px;
        padding: 10px;
    }

    #highlight .owl-theme .owl-nav {
        text-align: right;
    }

    .list .owl-theme .owl-nav {
        text-align: left;
        margin-top: 5px;
    }

    .list .owl-carousel .owl-nav button.owl-next, .list .owl-carousel .owl-nav button.owl-prev {
        font-size: 55px;
        color: #FF3939;
        margin: 0 20px 0 0;
    }

    #highlight .owl-carousel .owl-nav button.owl-next, #highlight .owl-carousel .owl-nav button.owl-prev {
        margin: 0 0 0 20px;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        .list .container {
            padding: 70px 10px;
        }

        .list .container .col-bottom {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .list .container .col-right {
            padding-right: 10px !important;
            padding-left: 10px !important;
        }
    }
</style>
@if (isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && count($posts) >= 1)
<?php
$highlight = $posts->slice(0, 9);
$top_highlight = $highlight->slice(0, 1);
$bottom_highlight = $highlight->slice(1, 2);
$right1_highlight = $highlight->slice(3, 3);
$right2_highlight = $highlight->slice(6, 3);
?>
<section id="highlight" class="list">
    <div class="container">
        <h2><svg data-type="Rectangle" data-name="Rectangle 148" class="Rectangle_148">
                <rect class="Rectangle_148_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                </rect>
            </svg>HOẠT ĐỘNG CỦA CHÚNG TÔI</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="row">
                    @if(count($top_highlight) > 0)
                        @foreach($top_highlight as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-desktop" style="background:url({{asset(env('STATIC_IMAGES').$item->thumbnail_url)}});background-size:cover;background-position-x:60%">
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">
                                        {{$item->title}}</a></h3>
                                <p>
                                    <a href="{{url($item->share_url)}}" title="Xem thêm" class="view-more">
                                        <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="Xem thêm">
                                        <span>Xem thêm</span></a>
                                </p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-mobile" style="background:url({{asset(env('STATIC_IMAGES').$item->thumbnail_url)}});background-size:cover">
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">
                                        {{$item->title}}</a></h3>
                                <p>
                                    <a href="{{url($item->share_url)}}" title="Xem thêm" class="view-more">
                                        <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="Xem thêm">
                                        <span>Xem thêm</span></a>
                                </p>
                            </div>
                        @endforeach
                    @endif
                    @if(count($bottom_highlight) > 0)
                        @foreach($bottom_highlight as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2 pl-0 col-bottom">
                                <div class="box">
                                    <a href="{{url($item->share_url)}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                        <img class="w-100" src="{{asset(env('STATIC_IMAGES').$item->thumbnail_url)}}" alt="{{$item->title}}">
                                    </a>
                                    <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                    <p class="excerpt">{{$item->excerpt}}</p>
                                    <p class="pb-2">
                                        <a href="{{url($item->share_url)}}" title="Xem thêm" class="view-more">
                                            <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="Xem thêm">
                                            <span>Xem thêm</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right owl-carousel owl-theme">
                @if(count($right1_highlight) > 0)
                    <div class="row">
                        @foreach($right1_highlight as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <a href="{{url($item->share_url)}}" title="{{$item->title}}">
                                    <img class="w-100" src="{{asset(env('STATIC_IMAGES').$item->thumbnail_url)}}" alt="{{$item->title}}">
                                </a>
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                <p>{{$item->excerpt}}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(count($right2_highlight) > 0)
                    <div class="row">
                        @foreach($right1_highlight as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <a href="{{url($item->share_url)}}" title="{{$item->title}}">
                                    <img class="w-100" src="{{asset(env('STATIC_IMAGES').$item->thumbnail_url)}}" alt="{{$item->title}}">
                                </a>
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                <p>{{$item->excerpt}}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<?php
$list = $posts->slice(9, 9);
$top_list = $list->slice(9, 1);
$bottom_list = $list->slice(10, 2);
$right1_list = $list->slice(12, 3);
$right2_list = $list->slice(15, 3);
?>
<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right pl-0 mt-0 owl-carousel owl-theme">
                @if(count($right1_list) > 0)
                    <div class="row">
                        @foreach($right1_highlight as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <a href="{{url($item->share_url)}}" title="{{$item->title}}" class="view-more">
                                    <img class="w-100" src="{{asset(env('STATIC_IMAGES').$item->thumbnail_url)}}" alt="{{$item->title}}">
                                </a>
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                <p>{{$item->excerpt}}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(count($right2_list) > 0)
                    <div class="row">
                        @foreach($right2_list as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <a href="{{url($item->share_url)}}" title="{{$item->title}}" class="view-more">
                                    <img class="w-100" src="{{asset(env('STATIC_IMAGES').$item->thumbnail_url)}}" alt="{{$item->title}}">
                                </a>
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                <p>{{$item->excerpt}}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="row">
                    @if(count($top_list) > 0)
                        @foreach($top_list as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-desktop" style="background:url({{asset(env('STATIC_IMAGES').$item->thumbnail_url)}});background-size:cover;background-position-x:60%">
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                <p>
                                    <a href="{{url($item->share_url)}}" title="Xem thêm" class="view-more">
                                        <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="Xem thêm">
                                        <span>Xem thêm</span>
                                    </a>
                                </p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-mobile" style="background:url({{asset(env('STATIC_IMAGES').$item->thumbnail_url)}});background-size:cover">
                                <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                <p>
                                    <a href="{{url($item->share_url)}}" title="Xem thêm" class="view-more">
                                        <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="Xem thêm">
                                        <span>Xem thêm</span>
                                    </a>
                                </p>
                            </div>
                        @endforeach
                    @endif
                    @if(count($bottom_list) > 0)
                        @foreach($bottom_list as $item)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2 pl-0 col-bottom">
                                <div class="box">
                                    <a href="{{url($item->share_url)}}" title="{{$item->title}}" class="view-more">
                                        <img class="w-100" src="{{asset(env('STATIC_IMAGES').$item->thumbnail_url)}}" alt="{{$item->title}}">
                                    </a>
                                    <h3><a href="{{url($item->share_url)}}" title="{{$item->title}}">{{$item->title}}</a></h3>
                                    <p class="excerpt">{{$item->excerpt}}</p>
                                    <p class="pb-2">
                                        <a href="{{url($item->share_url)}}" title="Xem thêm" class="view-more">
                                            <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="Xem thêm">
                                            <span>Xem thêm</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section id="highlight" class="list">
    <div class="container">
        <h2><svg data-type="Rectangle" data-name="Rectangle 148" class="Rectangle_148">
                <rect class="Rectangle_148_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                </rect>
            </svg>HOẠT ĐỘNG CỦA CHÚNG TÔI</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-desktop" style="background:url({{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_29.png')}});background-size:cover;background-position-x:60%">
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="">
                                <span>Xem thêm</span></a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-mobile" style="background:url({{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_29.png')}});background-size:cover">
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="">
                                <span>Xem thêm</span></a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2 pl-0 col-bottom">
                        <div class="box">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                               <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33@2x.png')}} 2x" alt="">
                            </a>
                            <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                            <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                            <p class="pb-2">
                                <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2 pr-0 col-bottom">
                        <div class="box">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                            <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33@2x.png')}} 2x" alt="">
                            </a>
                            <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                            <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                            <p class="pb-2">
                                <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right owl-carousel owl-theme">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                                                                                                                                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                                                                                                                                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                                                                                                                                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right pl-0 mt-0 owl-carousel owl-theme">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                        <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                                                                                                                                                                   srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more"><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                                                                                                                                                                   srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                            <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_30@2x.png')}} 2x" alt="">
                        </a><h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-desktop" style="background:url({{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_29.png')}});background-size:cover;background-position-x:60%">
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="">
                                <span>Xem thêm</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-left position-relative hide-mobile" style="background:url({{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_29.png')}});background-size:cover">
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p>
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                            <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_10.png')}}" alt="">
                            <span>Xem thêm</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2 pl-0 col-bottom">
                        <div class="box">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                            <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33@2x.png')}} 2x" alt="">
                            </a>
                            <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                            <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                            <p class="pb-2">
                                <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2 pr-0 col-bottom">
                        <div class="box">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                            <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_33@2x.png')}} 2x" alt="">
                            </a>
                            <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                            <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                            <p class="pb-2">
                                <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp" class="view-more">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset(env('FOLDER_PUBLIC').'css/owl.carousel.min.css')}}">
<script>
    require(['jquery', 'owlcarousel'], function ($, owlcarousel) {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            nav: true,
            dots: false,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    });
</script>
@include('layouts.common.css_inpage')
<?php
$slogan_banner = DB::table('widgets')->select('content')->where('key', '=', 'widget.activity.slogan_banner')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$slogan_banner))
    <?php echo html_entity_decode($slogan_banner->content); ?>
@else
@include('homepage.slogan_banner')
@endif
@include('homepage.form_register')
@endsection
