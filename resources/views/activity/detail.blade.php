<style>
    /** Mobile **/
    @media (max-width: 991.98px) {
        #header {
            background-position-x: 74% !important;
        }

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
$banner = DB::table('banners')->select('title', 'file')->where('position', '=', 'activity_detail')->first();
if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$banner))
    $header_banner = array('banner' => env('STATIC_IMAGES') . $banner->file, 'title' => $banner->title);
else
    $header_banner = array('banner' => env('FOLDER_PUBLIC') . 'images/graphics/Treungthu.png', 'title' => 'Chúng ta sống bởi những gì mình có được còn tạo nên cuộc đời bằng những thứ cho đi', 'page_type' => 'other');
?>
@extends('layouts.default', $header_banner)
@section('content')
<style>
    .Rectangle_166 {
        width: 129px;
        height: 9px;
        left: 360px;
        top: 975px;
        margin: 60px 0 20px;
    }

    .Rectangle_166_Class {
        fill: rgba(255,52,52,1);
    }

    #detail {
        margin-bottom: 0;
    }

    #detail h2 {
        line-height: 67px;
        font-size: 54px;
        color: rgba(88,88,88,1);
        font-family: Montserrat-SemiBold;
        margin-bottom: 25px;
    }

    #detail p {
        font-size: 18px;
        line-height: 32px;
        color: rgba(54,54,54,1);
        font-family: Montserrat-Regular;
    }

    #detail .view-more {
        padding: 10px;
        background-color: rgba(218,4,4,1);
        margin-top: 50px !important;
    }

    #detail .view-more a {
        color: #FFF;
        font-size: 20px;
    }
    /** Mobile **/
    @media (max-width: 991.98px) {
        #detail img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        #detail .pl-0 {
            padding-left: 10px !important;
        }

        #detail .mt-1 {
            margin-top: 0 !important;
        }
    }
</style>
<section id="detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <svg data-type="Rectangle" data-name="Rectangle 166" class="Rectangle_166">
                    <rect class="Rectangle_166_Class" rx="0" ry="0" x="0" y="0" width="129" height="9"></rect>
                </svg>
                @if (!empty($post))
                    <h2>{{$post->title}}</h2>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <?php echo html_entity_decode($post->content); ?>
                        </div>
                    </div>
                @else
                    <h2>Lớp học yêu thương<br/>
                        trên đỉnh Tà Xua</h2>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <p>
                                CVV Việt Nam là công ty công nghệ được sáng lập bởi Tiến sĩ, Doanh nhân Đỗ Ngọc Chung và các đồng sự. Với kinh nghiệm 10 năm làm việc tại viện Hàn lâm khoa học Việt Nam, 07 năm là Giảng viên Đại học Công nghệ ĐHQGHN, và rất nhiều sản phẩm nghiên cứu khoa học đã được thương mại hóa thành công, TS Đỗ Ngọc Chung mong muốn xây dựng một điểm hội tụ các chuyên gia về công nghệ để biến những công trình nghiên cứu khoa học sớm đi vào thực tiễn, phục vụ cộng đồng.
                                Một trong những giá trị cốt lõi lớn nhất và xuyên suốt tại CVV là giá trị hướng tới cộng đồng, ứng dụng công nghệ để giải quyết các vấn đề của xã hội, đem đến hạnh phúc cho con người và sự thịnh vượng cho quốc gia.
                            </p>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <img height="541px" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_43.png')}}"
                                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_43.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_43@2x.png')}} 2x" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pl-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_44.png')}}"
                                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_44.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_44@2x.png')}} 2x" alt="">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1">
                                            <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_44.png')}}"
                                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_44.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_44@2x.png')}} 2x" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                CVV Việt Nam là công ty công nghệ được sáng lập bởi Tiến sĩ, Doanh nhân Đỗ Ngọc Chung và các đồng sự. Với kinh nghiệm 10 năm làm việc tại viện Hàn lâm khoa học Việt Nam, 07 năm là Giảng viên Đại học Công nghệ ĐHQGHN, và rất nhiều sản phẩm nghiên cứu khoa học đã được thương mại hóa thành công, TS Đỗ Ngọc Chung mong muốn xây dựng một điểm hội tụ các chuyên gia về công nghệ để biến những công trình nghiên cứu khoa học sớm đi vào thực tiễn, phục vụ cộng đồng.
                                Một trong những giá trị cốt lõi lớn nhất và xuyên suốt tại CVV là giá trị hướng tới cộng đồng, ứng dụng công nghệ để giải quyết các vấn đề của xã hội, đem đến hạnh phúc cho con người và sự thịnh vượng cho quốc gia.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5 view-more m-auto text-center">
                            <a href="" title="Xem thêm về chúng tôi">Xem thêm về chúng tôi</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<style>
    #partner .container {
        padding: 50px 10px 20px;
    }

    #partner h2 {
        line-height: 67px;
        font-size: 54px;
        color: rgba(88,88,88,1);
        font-family: Montserrat-Bold;
        margin-bottom: 30px;
    }

    #partner .col-bottom .box {
        background-color: #FFF;
        color: rgba(52,52,52,1);
    }

    #partner .col-bottom .box h3 {
        font-size: 20px;
        margin: 30px 0 10px;
        line-height: 26px;
    }

    #partner .col-bottom .box p.excerpt {
        font-size: 14px;
        padding: 10px 0 0;
        line-height: 19px;
        font-family: Montserrat;
    }

    #partner .col-bottom .box p.view-more {
        font-size: 17px;
        line-height: 25px;
    }

    #partner .col-bottom .box a {
        color: #505050;
    }
</style>
<section id="partner">
    <div class="container">
        <svg data-type="Rectangle" data-name="Rectangle 166" class="Rectangle_166">
            <rect class="Rectangle_166_Class" rx="0" ry="0" x="0" y="0" width="129" height="9"></rect>
        </svg>
        <h2>Bài viết liên quan</h2>
        <div class="row owl-carousel owl-theme">
            @if (isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && count($other_posts) > 0)
                @foreach($other_posts as $post)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                        <div class="box">
                            <div class="frame">
                                <a href="{{url($post->share_url)}}" title="{{$post->title}}">
                                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}" alt="">
                                </a>
                            </div>
                            <h3><a href="{{url($post->share_url)}}" title="{{$post->title}}">{{$post->title}}</a></h3>
                            <p class="excerpt">{{$post->excerpt}}</p>
                            <p class="view-more pb-2">
                                <a href="{{url($post->share_url)}}" title="Xem thêm">
                                    <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="Xem thêm">
                                    <span>Xem thêm</span></a>
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                <div class="box">
                    <div class="frame">
                        <a href="javascript:void(0)" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}"
                                                                                                        srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40@2x.png')}} 2x" alt="">
                        </a>
                    </div>
                    <h3><a href="javascript:void(0)" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                    <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                    <p class="view-more pb-2">
                        <a href="javascript:void(0)" title="Xem thêm"><img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                            <span>Xem thêm</span></a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                <div class="box">
                    <div class="frame">
                        <a href="javascript:void(0)" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}"
                                                                                                        srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40@2x.png')}} 2x" alt="">
                        </a>
                    </div>
                    <h3><a href="javascript:void(0)" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                    <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                    <p class="view-more pb-2">
                        <a href="javascript:void(0)" title="Xem thêm"><img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                            <span>Xem thêm</span></a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                <div class="box">
                    <div class="frame">
                        <a href="javascript:void(0)" title="Phát huy sức mạnh nội bộ doanh nghiệp"><img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}"
                                                                                                        srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40@2x.png')}} 2x" alt="">
                        </a>
                    </div>
                    <h3><a href="javascript:void(0)" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                    <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                    <p class="view-more pb-2">
                        <a href="javascript:void(0)" title="Xem thêm"><img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                            <span>Xem thêm</span></a>
                    </p>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@include('layouts.common.css_inpage')
<?php
$slogan_banner = DB::table('widgets')->select('content')->where('key', '=', 'widget.activity.detail.slogan_banner')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$slogan_banner))
    <?php echo html_entity_decode($slogan_banner->content); ?>
@else
@include('homepage.slogan_banner')
@endif
@include('homepage.form_register')
@endsection
