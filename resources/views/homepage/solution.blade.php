<style>
    #solution {
        background-color: rgba(67, 67, 67, 1);
        margin-bottom: 0;
    }

    #solution .container {
        padding: 90px 0;
    }

    #solution h2 {
        color: #FFF;
        font-size: 40px;
        line-height: 53px;
    }

    #solution .box {
        background-color: #FFF;
        padding: 10px 15px;
    }

    #solution .box {
        transition: box-shadow .3s;
    }

    #solution .box:hover {
        box-shadow: 0 0 11px #F1F1F1;
    }

    #solution .box img.first {
        margin: 30px 0;
        height: 107px;
    }

    #solution .box h3 {
        font-size: 20px;
        line-height: 25px;
        height: 45px;
        overflow: hidden;
    }

    #solution .box h3 a {
        color: rgba(92, 92, 92, 1);
    }

    #solution .box .excerpt {
        margin: 5px 10px;
        font-size: 17px;
        line-height: 24px;
        height: 215px;
        overflow: hidden;
        font-family: Montserrat;
    }

    #solution .box p {
        margin: 40px 0 30px;
        font-size: 17px;
        line-height: 25px;
    }

    #solution .box .view-more a {
        color: #e10404;
        margin-left: 10px;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #solution .row.last {
            margin-top: 0 !important;
        }

        #solution .container {
            padding: 90px 0 0;
        }
    }
</style>
<section id="solution">
    <div class="container">
        <h2 class="text-center">BẠN ĐANG MONG MUỐN CÓ GIẢI PHÁP</h2>
        @if (isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $solutions->count() > 0)
            <div class="row mt-7">
                @foreach($solutions as $solution)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mb-2">
                        <div class="box">
                            <img class="first" src="{{asset(env('STATIC_IMAGES').$solution->icon)}}" alt="{{$solution->name}}">
                            <h3><a href="{{url($solution->share_url)}}" title="{{$solution->name}}">{{$solution->name}}</a></h3>
                            <div class="excerpt"><?php echo html_entity_decode($solution->excerpt); ?></div>
                            <p>
                                <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="Xem thêm">
                                <span class="view-more"><a href="{{url($solution->share_url)}}" title="Xem thêm">Xem thêm</a></span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row mt-7">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                    <div class="box">
                        <img class="first" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_1.png')}}" alt="">
                        <h3><a href="{{url('/giai-phap')}}" title="ÁP DỤNG CHO DOANH NGHIỆP">ÁP DỤNG CHO DOANH NGHIỆP</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>
                        <p>
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="">
                            <span class="view-more"><a href="{{url('/giai-phap')}}" title="Xem thêm">Xem thêm</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                    <div class="box">
                        <img class="first" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_3.png')}}" alt="">
                        <h3><a href="{{url('/giai-phap')}}" title="ÁP DỤNG CHO TRƯỜNG HỌC">ÁP DỤNG CHO TRƯỜNG HỌC</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>
                        <p>
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="">
                            <span class="view-more"><a href="{{url('/giai-phap')}}" title="Xem thêm">Xem thêm</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                    <div class="box">
                        <img class="first" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_4.png')}}" alt="">
                        <h3><a href="{{url('/giai-phap')}}" title="ÁP DỤNG CHO CHUNG CƯ">ÁP DỤNG CHO CHUNG CƯ</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>
                        <p>
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="">
                            <span class="view-more"><a href="{{url('/giai-phap')}}" title="Xem thêm">Xem thêm</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-6 last">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                    <div class="box">
                        <img class="first" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_5.png')}}" alt="">
                        <h3><a href="{{url('/giai-phap')}}" title="ÁP DỤNG CHO TỔ CHỨC TỪ THIỆN">ÁP DỤNG CHO TỔ CHỨC TỪ THIỆN</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>
                        <p>
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="">
                            <span class="view-more"><a href="{{url('/giai-phap')}}" title="Xem thêm">Xem thêm</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                    <div class="box">
                        <img class="first" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_6.png')}}" alt="">
                        <h3><a href="{{url('/giai-phap')}}" title="ÁP DUNG CHO CÁC
                            TỔ CHỨC CROWFUNDING">ÁP DUNG CHO CÁC
                                TỔ CHỨC CROWFUNDING</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>
                        <p>
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="">
                            <span class="view-more"><a href="{{url('/giai-phap')}}" title="Xem thêm">Xem thêm</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
                    <div class="box">
                        <img class="first" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_7.png')}}" alt="">
                        <h3><a href="{{url('/giai-phap')}}" title="ÁP DỤNG
                            CHO CÁC DÒNG HỌ">ÁP DỤNG
                                CHO CÁC DÒNG HỌ</a></h3>
                        <p class="excerpt">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>
                        <p>
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_2.png')}}" alt="">
                            <span class="view-more"><a href="{{url('/giai-phap')}}" title="Xem thêm">Xem thêm</a></span>
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
