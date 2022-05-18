<style>
    /** Mobile **/
    @media (max-width: 991.98px) {
        #header h2#solution {
            font-size: 25px !important;
            line-height: 57px !important;
            margin-top: 185px !important;
        }

        #header h2#solution:after {
            left: 17%;
        }

        .Rectangle_193.solution {
            height: 145px !important;
            margin-top: 200px !important;
        }
    }
</style>
<?php
if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty(((array)$solution)['banner']))
    $header_banner = array('banner' => env('STATIC_IMAGES') . $solution->banner, 'title' => $solution->name, 'page_type' => 'solution');
else
    $header_banner = array('banner' => env('FOLDER_PUBLIC') . 'images/graphics/Chia_kha.png', 'title' => 'MÔ HÌNH PHÁT HUY<br/>
                    SỨC MẠNH NỘI BỘ<br/>DOANH NGHIỆP', 'page_type' => 'solution');
?>
@extends('layouts.default', $header_banner)
@section('content')
<style>
    #content1 h2 {
        margin: 40px 0 20px;
        color: rgba(255,52,52,1);
        font-size: 35px;
    }

    #content1 ul {
        list-style: none;
        font-size: 17px;
        line-height: 29px;
        color: rgba(131,131,131,1);
        margin-bottom: 30px;
    }

    #content1 ul li {
        font-family: Montserrat;
    }

    #content1 .highlight {
        color: rgba(131,131,131,1);
        font-family: Montserrat;
    }

    #content1 hr {
        width: 15%;
        height: 3px;
        background-color: rgba(255,52,52,1);
    }

    #content1 .box1 h2 {
        color: #393939;
        margin: 10px 0 20px;
        padding: 10px;
        border-radius: 10px;
        line-height: 42px;
        font-size: 35px;
        font-weight: bold;
    }

    #slogan1 {
        background-color: rgba(235,235,235,1);
        margin-bottom: 0;
    }

    #slogan1 .container {
        padding: 30px 0 90px;
    }

    #slogan1 h2 {
        font-size: 58px;
        margin-right: 85px;
        margin-top: 60px;
        margin-bottom: 25px;
    }

    #slogan1 p {
        width: 70%;
        text-align: center;
        margin: auto;
        line-height: 35px;
        font-size: 25px;
        font-family: Montserrat;
    }

    .Rectangle_244 {
        height: 40px;
        width: 10px;
    }

    .Rectangle_244_Class {
        fill: rgba(255,52,52,1);
    }

    #slogan1 h2.last-child {
        font-size: 40px;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #slogan1 .container {
            padding: 30px 10px;
        }

        #slogan1 h2 {
            margin: 0;
        }

        #content2 .box2 {
            margin: 0 !important;
        }

        #slogan1 h2.last-child {
            margin: 40px 0 20px 0;
        }
    }

    #content2 {
        height: 631px;
        margin-bottom: 0;
        background-position-x: -85%;
    }

    #content2 .box2 {
        background-color: rgba(227,31,38,1);
        padding: 30px;
        color: #FFF;
        margin: 100px 0;
    }

    #content2 .box2 h2 {
        font-size: 49px;
        margin-bottom: 30px;
    }

    #content2 .box2 p {
        font-size: 16px;
        line-height: 24px;
        font-family: Montserrat;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #content2 {
            height: auto;
        }
    }
</style>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty(((array)$solution)['content']))
    <?php echo html_entity_decode($solution->content); ?>
@else
    <?php
    $content1 = DB::table('widgets')->select('content')->where('key', '=', 'widget.solution.content1')->first();
    ?>
    @if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$content1))
        <?php echo html_entity_decode($content1->content); ?>
    @else
    <section id="content1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2>MONG MUỐN</h2>
                    <ul>
                        <li>1: Đáp ứng nhu cầu của CBNV</li>
                        <li>2: Tăng thêm các hoạt động phúc lợi cho CBNV</li>
                        <li>3: Cùng CBNV thực hiện các giá trị cho cộng đồng, xã hội</li>
                    </ul>
                    <span class="highlight"><strong>Từ đó:</strong></span>
                    <ul>
                        <li>1: Tăng cường hiệu suất làm việc CBNV</li>
                        <li>2: Gia tăng sự gắn bó, trung thành của người lao động</li>
                        <li>3: Khẳng định danh tiếng của tổ chức</li>
                    </ul>
                    <hr/>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2>THỰC TRẠNG</h2>
                    <span class="highlight"><strong>Nguồn tiền chi tiêu cho các hoạt động chủ yếu từ:</strong></span>
                    <ul>
                        <li>1: Quỹ công đoàn</li>
                        <li>2: Quỹ phúc lợi Doanh nghiệp</li>
                        <li>3: Nguồn tài trợ từ mạnh thường quân</li>
                        <li>4: Nguồn từ chính chủ doanh nghiệp</li>
                    </ul>
                    <span class="highlight"><strong>Đặc điểm nguồn tiền:</strong></span>
                    <ul>
                        <li>1: Phụ thuộc</li>
                        <li>2: Biến động</li>
                        <li>3: Không bền vững</li>
                        <li>4: Chưa thỏa mãn hết các nhu cầu phúc lợi của NLĐ</li>
                    </ul>
                    <hr/>
                </div>
            </div>
            <div class="row mt-1">
                <div class="box1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                    <h2>
                        <span><img width="10%" class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_14.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_14.png')}} 1x" alt=""></span>
                        Nút thắt là vấn đề tài chính</h2>
                </div>
            </div>
        </div>
    </section>
    @endif
    <?php
    $slogan1 = DB::table('widgets')->select('content')->where('key', '=', 'widget.solution.slogan1')->first();
    ?>
    @if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$slogan1))
        <?php echo html_entity_decode($slogan1->content); ?>
    @else
    <section id="slogan1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="text-center mt-2">
                        <img class="mr-2 pb-3" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_8.png')}}" alt="">
                        PHI THƯƠNG BẤT PHÚ</h2>
                    <p>Làm sao để hưởng lợi ích từ thương mại nhưng không làm thay đổi bất kể hoạt động thông thường nào của doanh nghiệp?
                        <img class="ml-3 pt-2" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_9.png')}}" alt=""></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="last-child"><svg data-type="Rectangle" data-name="Rectangle 244" class="Rectangle_244">
                            <rect class="Rectangle_244_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                            </rect>
                        </svg>
                        VỀ MÔ HÌNH</h2>
                    <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27@2x.png')}} 2x" alt="">
                </div>
            </div>
        </div>
    </section>
    @endif
    <?php
    $content2 = DB::table('widgets')->select('content')->where('key', '=', 'widget.solution.content2')->first();
    ?>
    @if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$content2))
        <?php echo html_entity_decode($content2->content); ?>
    @else
    <section id="content2" style='background: url("{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_60.png')}}") no-repeat top left;'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                <div class="box2 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2>5 GIÁ TRỊ CỐT LÕI
                        CỦA MÔ HÌNH</h2>
                    <p>
                        Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                    </p>
                    <p>
                        Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                    </p>
                    <p>
                        Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endif
@endif
<style>
    #partner {
        margin-bottom: 0;
    }

    #partner .container {
        padding: 80px 0;
    }

    #partner h2 {
        padding-bottom: 20px;
        font-size: 40px;
    }

    #partner .item {
        background-color: #FFF;
        line-height: 105px;
        height: 105px;
        overflow: hidden;
    }

    .owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: 60px !important;
    }

    .owl-carousel .owl-item img {
        display: block;
        width: auto !important;
        height: 103px;
        margin: 0 auto;
    }

    .owl-dot.active span {
        background: #E31F26 !important;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #partner .container {
            padding: 20px 0;
        }

        #partner h2 {
            padding-top: 20px;
        }
    }
</style>
<section id="partner">
    <div class="container">
        <h2 class="text-center position-relative">CÁC ĐƠN VỊ TIÊU BIỂU<br/> ĐÃ ÁP DỤNG MÔ HÌNH</h2>
        <div class="row mt-4 owl-carousel owl-theme">
            @if (isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $partners->count() > 0)
                @foreach($partners as $partner)
                    <div class="text-center">
                        <div class="item">
                            <img src="{{asset(env('STATIC_IMAGES').$partner->logo)}}" alt="{{$partner->name}}">
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_13.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_13.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_13@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_12.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_12.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_12@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_13.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_13.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_13@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_12.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_12.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_12@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_15@2x.png')}} 2x" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_14@2x.png')}} 2x" alt="">
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset(env('FOLDER_PUBLIC').'css/owl.carousel.min.css')}}">
<script>
    require(['jquery', 'owlcarousel'], function ($, owlcarousel) {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 6
                }
            }
        })
    });
</script>
@include('homepage.form_register_v2')
@include('layouts.common.css_inpage')
<?php
$slogan_banner = DB::table('widgets')->select('content')->where('key', '=', 'widget.solution.slogan_banner')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$slogan_banner))
    <?php echo html_entity_decode($slogan_banner->content); ?>
@else
@include('homepage.slogan_banner')
@endif
@endsection
