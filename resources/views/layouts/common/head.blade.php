<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <!-- SEO Google -->
    <title>{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SEO_TITLE') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : config()->get('constants.SEO_DESCRIPTION') }}"/>
    <meta name="keywords" content="{{ !empty($metaData['meta_keyword']) ? $metaData['meta_keyword'] : config()->get('constants.SEO_KEYWORD') }}">
    <!-- End SEO Google -->
    <!-- SEO Facebook -->
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:site_name" content="<?php echo config()->get('constants.SITE_NAME') ?>" />
    <meta property="og:url" content="{{ Request::fullUrl() }}" itemprop="url"/>
    <meta property="og:image" content="{{ !empty($metaData['meta_image']) ? $metaData['meta_image'] : '' }}" itemprop="thumbnailUrl"/>
    <meta property="og:title" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}" itemprop="headline"/>
    <meta property="og:description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : 'Tự nhiên như hơi thở' }}" itemprop="description"/>
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="{{ config()->get('constants.FB_APP_ID') }}"/>
    <!-- End SEO Facebook -->
    <!-- SEO Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="{{ Request::fullUrl() }}">
    <meta name="twitter:title" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}" />
    <meta name="twitter:description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : 'Tự nhiên như hơi thở' }}" />
    <meta name="twitter:image" content="{{ !empty($metaData['meta_image']) ? $metaData['meta_image'] : '' }}" />
    <!-- End SEO Twitter -->
    <meta name="robots" content="{{ config()->get('constants.ALLOW_ROBOTS') }}">
    <meta name="google-site-verification" content="{{ config()->get('constants.GOOGLE_SITE_VERIFICATION') }}"/>
    <link rel="canonical" href="{{ Request::fullUrl() }}"/>
    <link rel="alternate" href="{{ Request::fullUrl() }}" hreflang="vi-vn"/>
    <meta property="fb:admins" content="{{ config()->get('constants.FB_USER_ID') }}"/>
    <link type="image/x-icon" href="{{asset(env('FOLDER_PUBLIC').'images/icons/favicon.ico')}}" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{ asset(env('FOLDER_PUBLIC').'css/general.css') }}"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
            font-family: Montserrat, serif;
        }
        /** Mobile **/
        @media (max-width: 991.98px) {
            #header .top {
                position: fixed;
                padding: 0 20px;
                background-color: #4b4b4b;
                width: 100% !important;
                z-index: 2;
            }

            #header h2 {
                margin-top: 120px !important;
            }
        }
    </style>
    <script src="{{ asset(env('FOLDER_PUBLIC').'js/require.js') }}"></script>
    <script type="text/javascript">
        var INPUT_TELEPHONE_MAX_LENGTH = 10
            , INPUT_FULLNAME_MIN_LENGTH = 2
            , INPUT_FULLNAME_MAX_LENGTH = 50
            , SET_REGISTER_TIMEOUT = '{{ config()->get('constants.SET_REGISTER_TIMEOUT') }}'
            , ALLOW_CONSOLE_LOG_DATA = '{{ config()->get('constants.ALLOW_CONSOLE_LOG_DATA') == true ? 1 : 0 }}'
            , APP_ENV = '{{env('APP_ENV')}}';
        requirejs.config({
            paths: {
                'jquery': 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min',
                'owlcarousel': '{{ asset(env('FOLDER_PUBLIC').'js/owl.carousel.min') }}'
            },
            shim: {
                'owlcarousel': {
                    deps: ['jquery']
                }
            }
        });
    </script>
