<style>
    .Rectangle_252 {
        width: 134px;
        height: 10px;
        /*position: absolute;*/
        overflow: visible;
        transform: translate(-360px, -813px) matrix(1,0,0,1,360,813) rotate(
            180deg
        );
        transform-origin: center;
    }

    #slogan_text .content {
        font-size: 30px;
        line-height: 62px;
        margin: 60px 0;
        font-family: Montserrat-SemiBold;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #slogan_text .content {
            font-size: 18px;
            line-height: 37px;
        }
    }
</style>
<?php
$slogan_text = DB::table('widgets')->select('content')->where('key', '=', 'widget.homepage.slogan_text')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$slogan_text))
    <?php echo html_entity_decode($slogan_text->content); ?>
@else
<section id="slogan_text">
    <div class="container p-6">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-left">
                <svg data-type="Rectangle" data-name="Rectangle 252" class="Rectangle_252">
                    <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                </svg>
            </div>
        </div>
        <div class="row content">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                Đây là giải pháp, công cụ giúp các tổ chức phát huy sức mạnh cộng hưởng,
                đồng tâm, đồng lòng của tất cả các thành viên, từ đó giúp tổ chức
                phát triển thịnh vượng, thành viên đoàn kết, chia sẻ, yêu thương
                và có trách nhiệm với bản thân và xã hội.
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
                <svg data-type="Rectangle" data-name="Rectangle 129" class="Rectangle_252">
                    <rect class="Rectangle_178_Class" rx="0" ry="0" x="0" y="0" width="134" height="10"></rect>
                </svg>
            </div>
        </div>
    </div>
</section>
@endif
