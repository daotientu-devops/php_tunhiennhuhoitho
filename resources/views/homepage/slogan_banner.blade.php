<?php
$slogan_banner = DB::table('widgets')->select('content')->where('key', '=', 'widget.homepage.slogan_banner')->first();
?>
@if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$slogan_banner))
    <?php echo html_entity_decode($slogan_banner->content); ?>
@else
<section id="slogan_banner" style="background-image: url('{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_61.png')}}')">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center font-weight-bold">
                <h2>Đi với người tiên phong<br/>
                    bạn sẽ là người dẫn đầu</h2>
            </div>
        </div>
    </div>
</section>
@endif
