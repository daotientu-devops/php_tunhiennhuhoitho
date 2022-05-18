<?php
$banner = DB::table('banners')->select('title', 'file')->where('position', '=', 'homepage')->first();
if(isset($setting['allow_get_dynamic_content']) && $setting['allow_get_dynamic_content'] == 1 && !empty((array)$banner))
    $header_banner = array('banner' => env('STATIC_IMAGES') . $banner->file, 'title' => $banner->title);
else
    $header_banner = array('banner' => env('FOLDER_PUBLIC') . 'images/graphics/Banner_TNNHT222@2x.png', 'title' => 'Chỉ khi bạn đánh thức được nội lực,<br/>
                        thì mới có được sức sống dẻo dai.');
?>
@extends('layouts.default', $header_banner)
@section('content')
    @include('homepage.slogan_text')
    @include('homepage.solution')
    @include('homepage.partner')
    @include('homepage.founder')
    @include('homepage.author')
    @include('layouts.common.css_inpage')
    @include('homepage.slogan_banner')
    @include('homepage.form_register')
@endsection
