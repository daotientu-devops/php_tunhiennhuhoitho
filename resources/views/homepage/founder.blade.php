<style>
    #founder {
        background-color: #323232;
        margin-bottom: 0;
        padding: 60px 0 40px;
        color: #FFF;
    }

    #founder h2 {
        font-size: 40px;
        line-height: 55px;
        padding-bottom: 20px;
        position: relative;
    }

    #founder h2:after {
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

    #founder .item {
        padding: 10px;
    }

    #founder .item p {
        margin: 40px 0;
        position: relative;
        padding: 10px 0;
        font-size: 15px;
    }

    #founder .item p:after {
        content: "";
        display: block;
        width: 30%;
        height: 2px;
        background: rgba(255,255,255,1);
        position: absolute;
        top: -5px;
        left: 50%;
        transform: translateX(-50%);
    }

    .Rectangle_244 {
        height: 40px;
        width: 10px;
        margin-right: 5px;
    }

    .Rectangle_244_Class {
        fill: rgba(255,52,52,1);
    }

    .owl-carousel .owl-item img {
        display: block;
        width: auto !important;
        margin: 0 auto;
    }

    #owl-carousel2 .owl-item img {
        height: 230px;
    }

    #owl-carousel2.owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: 0 !important;
    }

    .owl-dot.active span {
        background: #E31F26 !important;
    }
</style>
<section id="founder">
    <div class="container">
        <h2 class="text-center">SÁNG LẬP DỰ ÁN</h2>
        <div class="row mt-6 owl-carousel owl-theme" id="owl-carousel2">
            @if (isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && $authors->count() > 0)
                @foreach($authors as $author)
                    <div class="text-center">
                        <div class="item">
                            <img src="{{asset(env('STATIC_IMAGES').$author->avatar)}}" alt="{{$author->name}}">
                            <p>{{$author->name}}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <div class="item">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_63.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_63.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_63@2x.png')}} 2x" alt="">
                    <p>
                        Ông Đỗ Ngọc Chung
                    </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_64.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_64.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_64@2x.png')}} 2x" alt="">
                    <p>
                        Bà Nguyễn Thị Hồng Minh
                    </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_65.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_65.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_65@2x.png')}} 2x" alt="">
                    <p>
                        Ông Phạm Quang Vinh
                    </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                    <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_67.png')}}"
                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_67.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_67@2x.png')}} 2x" alt="">
                    <p>
                        Ông Nguyễn Văn Nhị
                    </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_63.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_63.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_63@2x.png')}} 2x" alt="">
                        <p>
                            Ông Đỗ Ngọc Chung
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_64.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_64.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_64@2x.png')}} 2x" alt="">
                        <p>
                            Bà Nguyễn Thị Hồng Minh
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_65.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_65.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_65@2x.png')}} 2x" alt="">
                        <p>
                            Ông Phạm Quang Vinh
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_67.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_67.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_67@2x.png')}} 2x" alt="">
                        <p>
                            Ông Nguyễn Văn Nhị
                        </p>
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
        var owl = $('#owl-carousel2');
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
                    items: 4
                }
            }
        })
    });
</script>
