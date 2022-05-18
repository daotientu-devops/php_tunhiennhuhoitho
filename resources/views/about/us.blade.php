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
$banner = DB::table('banners')->select('title', 'file')->where('position', '=', 'about')->first();
if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$banner))
    $header_banner = array('banner' => env('STATIC_IMAGES') . $banner->file, 'title' => $banner->title);
else
    $header_banner = array('banner' => env('FOLDER_PUBLIC') . 'images/graphics/Mask_Group_49.png', 'title' => 'Gắn kết cộng đồng,<br/>
                        chia sẻ yêu thương', 'page_type' => 'other');
?>
@extends('layouts.default', $header_banner)
@section('content')
<style>
    #content1 .container {
        padding: 60px 0;
    }

    #content1 h2 {
        font-size: 54px;
        color: rgba(88,88,88,1);
        margin-bottom: 40px;
        line-height: 64px;
        border-left: 5px solid #ff3434;
        padding-left: 10px;
    }

    .Rectangle_244 {
        height: 110px;
        width: 10px;
        float: left;
        margin-right: 10px;
        margin-top: 10px;
    }

    .Rectangle_244_Class {
        fill: rgba(255,52,52,1);
        height: 110px;
    }

    #content1 p {
        line-height: 30px;
        font-size: 18px;
        color: rgba(54,54,54,1);
        font-family: Montserrat;
    }

    #content1 .col-right {
        background: url({{env('FOLDER_PUBLIC').'images/graphics/Asset_12.png'}}) no-repeat top left;
        background-size: 92%;
        padding: 10px 20px;
        height: 600px;
        line-height: 56px;
        font-weight: bold;
        font-size: 40px;
        color: rgba(255,255,255,1);
        letter-spacing: 0.64px;
        text-transform: uppercase;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #content1 .container {
            padding: 60px 10px;
        }

        #content1 .container img {
            width: 100% !important;
            margin-left: 0 !important;
            margin-bottom: 10px;
        }

        #content1 .col-right {
            margin: 15px 15px 0 15px;
            height: 555px;
        }

        #content1 small {
            font-size: 73%;
        }
    }
</style>
<?php
$aboutus_content1 = DB::table('widgets')->select('content')->where('key', '=', 'widget.aboutus.content1')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$aboutus_content1))
    <?php echo html_entity_decode($aboutus_content1->content); ?>
@else
<section id="content1">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pr-3">
                <h2>
                    <span>Tự nhiên<br/>
                        như hơi thở</span></h2>
                <p>
                    CVV Việt Nam là công ty công nghệ được sáng lập bởi Tiến sĩ, Doanh nhân Đỗ Ngọc Chung và các đồng sự. Với kinh nghiệm 10 năm làm việc tại viện Hàn lâm khoa học Việt Nam, 07 năm là Giảng viên Đại học Công nghệ ĐHQGHN, và rất nhiều sản phẩm nghiên cứu khoa học đã được thương mại hóa thành công, TS Đỗ Ngọc Chung mong muốn xây dựng một điểm hội tụ các chuyên gia về công nghệ để biến những công trình nghiên cứu khoa học sớm đi vào thực tiễn, phục vụ cộng đồng.
                    Một trong những giá trị cốt lõi lớn nhất và xuyên suốt tại CVV là giá trị hướng tới cộng đồng, ứng dụng công nghệ để giải quyết các vấn đề của xã hội, đem đến hạnh phúc cho con người và sự thịnh vượng cho quốc gia.
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right">
                ĐI VỚI NGƯỜI TIÊN PHONG BẠN SẼ LÀ NGƯỜI DẪN ĐẦU
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img style="width:39%" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_51.png')}}"
                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_51.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_51@2x.png')}} 2x" alt="">
                <img style="width:59%;margin-left:1%" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Batchao.png')}}"
                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Batchao.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Batchao@2x.png')}} 2x" alt="">
            </div>
        </div>
    </div>
</section>
@endif
<style>
    #author {
        background-color: rgba(240,240,240,1);
        margin-bottom: 0;
    }

    #author .container {
        padding: 60px 0;
    }

    #author .container h2 {
        font-size: 40px;
    }

    #author .col-left {
        background-color: #FF3434;
        height: 650px;
        color: #FFF;
        padding: 25px 20px;
        z-index: 1;
    }

    .Rectangle_216_bn {
        height: 20px;
    }

    .Rectangle_216_bn_Class {
        fill: rgba(255,255,255,1);
    }

    #author .col-left p {
        line-height: 41px;
        font-size: 30px;
    }

    #author .col-left p img {
        width: 97%;
        position: absolute;
        right: 0;
        top: 224px;
    }

    #author .col-right {
        background-color: #FFF;
        color: rgba(73,73,73,1);
        padding: 50px 40px 45px 280px;
        position: absolute;
        right: 0;
    }

    #author .col-right .year {
        font-weight: bold;
        font-size: 30px;
        line-height: 40px;
        color: rgba(255,52,52,1);
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #author .container {
            padding: 60px 10px 0 10px;
        }

        #author .container .row {
            height: auto !important;
        }

        #author .col-right {
            position: relative !important;
            padding: 20px !important;
        }

        #author .col-left p {
            margin-bottom: 20px !important;
        }

        #author .col-left p img {
            position: relative;
            top: 0;
            margin-top: 20px;
        }
    }
</style>
<?php
$aboutus_author = DB::table('widgets')->select('content')->where('key', '=', 'widget.aboutus.author')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$aboutus_author))
    <?php echo html_entity_decode($aboutus_author->content); ?>
@else
<section id="author">
    <div class="container">
        <div class="row position-relative" style="height:1000px">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-left position-relative">
                <svg data-type="Rectangle" data-name="Rectangle 216" class="Rectangle_216_bn">
                    <rect class="Rectangle_216_bn_Class" rx="0" ry="0" x="0" y="0" width="118" height="5">
                    </rect>
                </svg>
                <h2>TÁC GIẢ MÔ HÌNH</h2>
                <p class="mb-0">
                    Về Doanh nhân Tiến sĩ <br/><strong>Đỗ Ngọc Chung</strong>
                </p>
                <p>
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_50.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_50.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_50@2x.png')}} 2x" alt="">
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-right">
                <p class="mt-2 font-weight-bold" style="font-size:20px;line-height:29px;color:#727272">
                    TS ĐỖ NGỌC CHUNG SINH NĂM 1980<br/>
                    TẠI ĐAN PHƯỢNG
                </p>
                <p>
                    <span class="year">2002</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Tốt nghiệp Đại học KHTN, ĐHQGHN<br/>
                        Nghiên cứu viên tại Viện Khoa học Vật liệu – Viện Hàn lâm Khoa học và công nghệ Việt Nam</span>
                </p>
                <p>
                    <span class="year">2006</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Tốt nghiệp thạc sĩ chuyên ngành Vật liệu<br/>
                        và Linh kiện Nano- Trường Đại học Công nghệ, ĐHQGHN</span>
                </p>
                <p>
                    <span class="year">2009</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Giảng viên Trường Đại học Công nghệ - Đại học<br/>
                    Quốc Gia Hà Nội</span>
                </p>
                <p>
                    <span class="year">2015</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Hoàn thành Luận án Tiến sĩ chuyên ngành Vật liệu và Linh kiện Nano- Trường Đại học Công nghệ, ĐHQGHN<br/>
                    Sáng lập Công ty TNHH Giải pháp Năng lượng Toàn Diện<br/>
                    Đạt giải thưởng Techmart Quốc Tế</span>
                </p>
                <p>
                    <span class="year">2016</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Phó giám đốc Trung tâm Dịch vụ và truyền thông công nghệ - Trung tâm Phát triển công nghệ cao, Viện Hàn lâm KH&CN Việt Nam<br/>
                    Phó giám đốc Xưởng cơ khí điện tử, Viện Hàn lâm KH&CN Việt Nam</span>
                </p>
                <p>
                    <span class="year">2016 - 2019</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Nhận bằng sáng chế cho Thiết bị làm rau giá đỗ<br/>
                    Nhận bằng sáng chế Cơ cấu nén dùng cho dụng cụ làm rau giá đỗ<br/>
                    Nhận bằng sáng chế về Máy ủ giá công nghiệp<br/>
                    Nhận bằng sáng chế Áo dưỡng khí<br/>
                    Nhận bằng sáng chế Tăm nguyên sinh<br/>
                    Đạt giải thưởng Cuộc thi chứng minh ý tưởng Poc2,
                    Trung tâm đổi mới sáng tạo ứng phó với biến đổi khí hậu
                    Việt Nam (VCIC), Quỹ WorldBank tài trợ.</span>
                </p>
                <p>
                    <span class="year">2020</span><br/>
                    <span style="font-size:15px;line-height:22px;font-family:Montserrat">Sáng lập CVV PTE. Ltd, Singapore<br/>
                    Sáng lập Công ty cổ phần CVV Việt Nam</span>
                </p>
            </div>
        </div>
    </div>
</section>
@endif
<style>
    .Rectangle_166 {
        width: 118px;
        height: 5px;
        left: 360px;
        top: 975px;
        margin: 60px 0 20px;
    }

    .Rectangle_166_Class {
        fill: rgba(255,52,52,1);
    }

    #newspaper {
        background-color: rgba(240,240,240,1);
        margin-bottom: 0;
    }

    #newspaper h2 {
        font-size: 30px;
        line-height: 34px;
        margin-bottom: 30px;
    }

    .col-bottom .box {
        background-color: #FFF;
        color: rgba(52,52,52,1);
    }

    .col-bottom .box h3 {
        font-size: 18px;
        margin: 20px 10px 0;
    }

    .col-bottom .box p {
        font-size: 16px;
        padding: 25px 20px;
        line-height: 22px;
        font-family: Montserrat;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #newspaper {
            margin-top: 0;
        }

        #newspaper .container {
            padding-top: 0 !important;
        }
    }
</style>
<section id="newspaper">
    <div class="container pt-9">
        <svg data-type="Rectangle" data-name="Rectangle 166" class="Rectangle_166">
            <rect class="Rectangle_166_Class" rx="0" ry="0" x="0" y="0" width="129" height="9"></rect>
        </svg>
        <h2>BÁO CHÍ</h2>
        <div class="row owl-carousel owl-theme">
            @if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $news->count() > 0)
                @foreach($news as $new)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                        <div class="box">
                            <div class="frame">
                                <a href="{{url($new->share_url)}}" title="{{$new->title}}">
                                    <img class="w-100" src="{{asset(env('STATIC_IMAGES').$new->thumbnail_url)}}" alt="{{$new->title}}">
                                </a>
                            </div>
                            <p>{{$new->excerpt}}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                    <div class="box">
                        <div class="frame">
                            <a href="javascript:void(0)" title=""><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/e8e64a2cde6f37316e7e.png')}}"
                                                                       srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/e8e64a2cde6f37316e7e.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/e8e64a2cde6f37316e7e@2x.png')}} 2x" alt=""></a>
                        </div>
                        <p>Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                    <div class="box">
                        <div class="frame">
                            <a href="javascript:void(0)" title=""><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ts-do-ngoc-chung.png')}}"
                                                                       srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ts-do-ngoc-chung.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/ts-do-ngoc-chung.png')}} 2x" alt=""></a>
                        </div>
                        <p>Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                    <div class="box">
                        <div class="frame">
                            <a href="javascript:void(0)" title=""><img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/e8e64a2cde6f37316e7e_bc.png')}}"
                                                                       srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/e8e64a2cde6f37316e7e_bc.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/e8e64a2cde6f37316e7e_bc.png')}} 2x" alt=""></a>
                        </div>
                        <p>Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<style>
    #television {
        background-color: rgba(240,240,240,1);
        margin-bottom: 0;
    }

    #television .container {
        padding: 0 0 60px;
    }

    #television h2 {
        font-size: 30px;
        margin-bottom: 30px;
    }

    #television .view-more {
        padding: 10px;
        background-color: rgba(218,4,4,1);
    }

    #television .view-more a {
        display: block;
        color: #FFF;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #television .container {
            padding: 0 10px 60px;
        }
    }
</style>
<section id="television">
    <div class="container">
        <svg data-type="Rectangle" data-name="Rectangle 166" class="Rectangle_166">
            <rect class="Rectangle_166_Class" rx="0" ry="0" x="0" y="0" width="129" height="9"></rect>
        </svg>
        <h2>TRUYỀN HÌNH</h2>
        <div class="row owl-carousel owl-theme">
            @if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $televisions->count() > 0)
                @foreach($televisions as $television)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-1" style="overflow:hidden">
                        {{--<a href="{{url($television->share_url)}}" title="{{$television->title}}">--}}
                            {{--<img class="w-100" src="{{asset(env('STATIC_IMAGES').$television->thumbnail_url)}}" alt="{{$television->title}}">--}}
                        {{--</a>--}}
                        <?php echo html_entity_decode($television->content); ?>
                    </div>
                @endforeach
            @else
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-1">
                    <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_52.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_52.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_52@2x.png')}} 2x" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-1">
                    <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_53.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_53.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_53@2x.png')}} 2x" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-1">
                    <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_54.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_54.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_54@2x.png')}} 2x" alt="">
                </div>
            @endif
        </div>
        <div class="row mt-5">
            <div class="col-11 col-sm-11 col-md-11 col-lg-5 col-xl-5 view-more m-auto text-center">
                <a href="#form_register" title="Xem thêm về chúng tôi">Đăng ký</a>
            </div>
        </div>
    </div>
</section>
<style>
    #project h2 {
        line-height: 67px;
        font-size: 54px;
        color: rgba(88,88,88,1);
        margin-bottom: 30px;
    }

    #project .Rectangle_166 {
        width: 129px;
        height: 9px;
        left: 360px;
        top: 975px;
        margin: 60px 0 20px;
    }

    #project .box h3 {
        margin: 20px 0 0;
        font-size: 20px;
        line-height: 26px;
    }

    #project .box h3 a {
        color: #5C5C5C;
    }

    #project .box p.excerpt {
        font-size: 14px;
        padding: 20px 0 0;
        line-height: 19px;
        font-family: Montserrat;
    }

    #project .box p.view-more {
        font-size: 17px;
        line-height: 25px;
        font-family: Montserrat;
        padding: 0 0 25px 0;
    }

    #project .box p.view-more a {
        color: #DA0404;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #project .container {
            padding: 0 0 0 10px;
        }
    }
</style>
<section id="project">
    <div class="container">
        <svg data-type="Rectangle" data-name="Rectangle 166" class="Rectangle_166">
            <rect class="Rectangle_166_Class" rx="0" ry="0" x="0" y="0" width="129" height="9"></rect>
        </svg>
        <h2>Dự án</h2>
        <div class="row owl-carousel owl-theme">
            @if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $projects->count() > 0)
                @foreach($projects as $project)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                        <div class="box">
                            <div class="frame">
                                <a href="{{url($project->share_url)}}" title="{{$project->title}}">
                                    <img class="w-100" src="{{asset(env('STATIC_IMAGES').$project->thumbnail_url)}}" alt="{{$project->title}}">
                                </a>
                            </div>
                            <h3><a href="{{url($project->share_url)}}" title="{{$project->title}}">{{$project->title}}</a></h3>
                            <p class="excerpt">{{$project->excerpt}}</p>
                            <p class="view-more pb-2">
                                <a href="{{url($project->share_url)}}" title="Xem thêm">
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
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40@2x.png')}} 2x" alt="">
                            </a>
                        </div>
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                        <p class="view-more pb-2">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                    <div class="box">
                        <div class="frame">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40@2x.png')}} 2x" alt="">
                            </a>
                        </div>
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                        <p class="view-more pb-2">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-bottom">
                    <div class="box">
                        <div class="frame">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}}"
                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_40@2x.png')}} 2x" alt="">
                            </a>
                        </div>
                        <h3><a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">Phát huy sức mạnh nội bộ doanh nghiệp</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, </p>
                        <p class="view-more pb-2">
                            <a href="{{url('/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html')}}" title="Phát huy sức mạnh nội bộ doanh nghiệp">
                                <img class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_11.png')}}" alt="">
                                <span>Xem thêm</span></a>
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@include('homepage.form_register')
@endsection
