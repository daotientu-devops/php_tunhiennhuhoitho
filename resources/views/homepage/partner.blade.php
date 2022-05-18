<style>
    #strategic_partnership {
        margin-bottom: 0;
    }

    #strategic_partnership .container {
        padding: 60px 0;
    }

    #strategic_partnership h2 {
        padding-bottom: 30px;
        font-size: 40px;
        line-height: 55px;
    }

    #strategic_partnership h2:after {
        content: "";
        display: block;
        width: 134px;
        height: 4px;
        background: #D60F0F;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    #strategic_partnership .item {
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
</style>
<section id="strategic_partnership">
    <div class="container">
        <h2 class="text-center position-relative">ĐỐI TÁC CHIẾN LƯỢC</h2>
        <div class="row mt-5 owl-carousel owl-theme" id="owl-carousel1">
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
<style>
    #partners_talk_about_us {
        margin-bottom: 0;
    }

    #partners_talk_about_us .container {
        padding: 20px 0;
    }

    #partners_talk_about_us h2 {
        font-size: 40px;
        line-height: 114px;
        padding-bottom: 20px;
    }

    #partners_talk_about_us h2:after {
        content: "";
        display: block;
        width: 134px;
        height: 4px;
        background: #D60F0F;
        position: absolute;
        top: -5px;
        left: 50%;
        transform: translateX(-50%);
    }

    #partners_talk_about_us .item {
        padding: 0 40px;
    }

    #partners_talk_about_us img {
        padding-left: 15px;
    }

    #partners_talk_about_us p {
        background-color: rgba(218,4,4,1);
        color: #FFF;
        border-radius: 15px;
        padding: 20px;
        font-size: 16px;
        line-height: 20px;
        font-family: Montserrat;
        margin-top: 30px;
        position: relative;
    }

    .arrow-up {
        position: absolute;
        top: -33px;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #partners_talk_about_us h2 {
            line-height: 54px;
        }

        #partners_talk_about_us h2:after {
            top: -40px;
        }
    }
</style>
<section id="partners_talk_about_us">
    <div class="container">
        <h2 class="text-center position-relative">ĐỐI TÁC NÓI VỀ CHÚNG TÔI</h2>
        <div class="row">
            @if (isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $comments->count() > 0)
                @foreach($comments as $comment)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 item text-left">
                        <img src="{{asset(env('STATIC_IMAGES').$comment->author_avatar)}}" alt="{{$comment->author_name}}">
                        <p class="position-relative">
                            <span class="arrow-up"><img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}}"
                                                        srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}} 1x" alt=""></span>
                            {{$comment->content}}
                        </p>
                    </div>
                @endforeach
            @else
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 item text-left">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_55.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_55.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_55@2x.png')}} 2x" alt="">
                    <p class="position-relative">
                        <span class="arrow-up"><img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}}"
                                                    srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}} 1x" alt=""></span>
                        Scott Haas, Design Director, Arthurcourt.com & Vagabondhouse.com
                        “Great! Our retail sales are up 30% over last Christmas. It’s not a big part of our company but good margins and growing!. ”
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 item text-left">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_57.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_57.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_57@2x.png')}} 2x" alt="">
                    <p>
                        <span class="arrow-up"><img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}}"
                                                    srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}} 1x" alt=""></span>
                        Scott Haas, Design Director, Arthurcourt.com & Vagabondhouse.com
                        “Great! Our retail sales are up 30% over last Christmas. It’s not a big part of our company but good margins and growing!. ”
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 item text-left">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_58.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_58.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_58@2x.png')}} 2x" alt="">
                    <p>
                        <span class="arrow-up"><img src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}}"
                                                    srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_15.png')}} 1x" alt=""></span>
                        Scott Haas, Design Director, Arthurcourt.com & Vagabondhouse.com
                        “Great! Our retail sales are up 30% over last Christmas. It’s not a big part of our company but good margins and growing!. ”
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset(env('FOLDER_PUBLIC').'css/owl.carousel.min.css')}}">
<script>
    require(['jquery', 'owlcarousel'], function ($, owlcarousel) {
        var owl = $('#owl-carousel1');
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
