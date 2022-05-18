<style>
    #author {
        background-color: #323232;
        margin-bottom: 0;
        padding: 20px 0;
        color: #FFF;
    }

    #author h2 {
        font-size: 40px;
        line-height: 54px;
    }

    #author .Rectangle_244 {
        height: 100px;
        float: left;
        margin-top: 5px;
        margin-right: 10px;
    }

    #author .Rectangle_244_Class {
        height: 100px;
    }

    #author .container {
        padding: 0 10px 80px;
    }

    #author h4 {
        font-size: 25px;
        line-height: 35px;
        margin-bottom: 20px;
    }

    #author p {
        font-size: 16px;
        font-family: Montserrat;
        line-height: 24px;
    }

    #author .view-more {
        padding: 10px 70px;
        background-color: rgba(218,4,4,1);
        color: #FFF;
    }
</style>
<?php
$author = DB::table('widgets')->select('content')->where('key', '=', 'widget.homepage.author')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$author))
    <?php echo html_entity_decode($author->content); ?>
@else
<section id="author">
    <div class="container">
        <h2 class="text-left mb-4">
            <svg data-type="Rectangle" data-name="Rectangle 244" class="Rectangle_244">
                <rect class="Rectangle_244_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                </rect>
            </svg>TÁC GIẢ MÔ HÌNH<br/>TỰ NHIÊN NHƯ HƠI THỞ</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 pr-4 text-center">
                <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}}"
                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27@2x.png')}} 2x" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <h4>
                    Về Doanh nhân<br/>
                    Tiến sĩ Đỗ Ngọc Chung
                </h4>
                <p>
                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                </p>
                <p>
                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                </p>
                <p class="mt-5">
                    <a href="{{url('/ve-chung-toi#author')}}" class="view-more" title="Xem thêm">Xem thêm</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endif
