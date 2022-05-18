<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();
// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['uses' => 'Auth\LoginController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'uses' => 'Auth\RegisterController@register'
]);
Route::group(['middleware' => 'auth'], function () {
    // Trang dashboard
    Route::get('/', 'DashboardController@index');
    // Trang quản trị category
    Route::group(['prefix' => 'category', 'as' => 'category'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CategoryController@index']);
        Route::get('/{id?}', ['as' => 'index', 'uses' => 'CategoryController@index']);
        Route::post('/store', ['uses' => 'CategoryController@store']);
        Route::get('/show/{id?}', ['uses' => 'CategoryController@show']);
        Route::get('/edit/{id?}', ['uses' => 'CategoryController@edit']);
        Route::post('/update/{id?}', ['uses' => 'CategoryController@update']);
        Route::get('/delete/{id?}', ['uses' => 'CategoryController@destroy']);
        Route::post('/adddiease/{id?}', ['uses' => 'CategoryController@addDisease']);
    });
    // QUẢN TRỊ TAGS
    Route::group(['prefix' => 'tags',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'TagsController@index']);
        Route::post('/store', ['uses' => 'TagsController@store']);
        Route::get('/show/{id?}', ['uses' => 'TagsController@show']);
        Route::get('/edit/{id?}', ['uses' => 'TagsController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'TagsController@update']);
        Route::get('/delete/{id?}', ['uses' => 'TagsController@destroy']);
        Route::get('/search', ['uses' => 'TagsController@begin_search']);
        Route::post('/search', ['uses' => 'TagsController@ajax_search']);
        Route::post('/addtags', ['uses' => 'TagsController@add_tags']);
    });
    // Các trang tin tức
    // Route cũ
    Route::group(['prefix' => 'posts', 'as' => 'posts', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PostsController@index']);
        Route::get('/create/{type}', ['as' => 'create', 'uses' => 'PostsController@create']);
        Route::post('/store/{type}', ['as' => 'store', 'uses' => 'PostsController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'PostsController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'PostsController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'PostsController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'PostsController@destroy']);
        Route::get('/preview/{id}', ['as' => 'preview', 'uses' => 'PostsController@preview']);
        Route::get('/search', ['as' => 'search', 'uses' => 'PostsController@search']);
    });
    // Route mới
    Route::group(['prefix' => 'category/{categoryId?}/posts', 'as' => 'posts', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PostsController@index']);
        Route::get('/create/{type}', ['as' => 'create', 'uses' => 'PostsController@create']);
        Route::post('/store/{type}', ['as' => 'store', 'uses' => 'PostsController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'PostsController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'PostsController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'PostsController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'PostsController@destroy']);
        Route::get('/preview/{id}', ['as' => 'preview', 'uses' => 'PostsController@preview']);
        Route::get('/search', ['as' => 'search', 'uses' => 'PostsController@search']);
        // Quản trị tin nổi bật
        Route::get('/highlight/{id?}', ['uses' => 'PostsController@highlight']);
        Route::post('/addHighlight', ['uses' => 'PostsController@addHighlight']);
        Route::post('/removeHighlight', ['uses' => 'PostsController@removeHighlight']);
        Route::post('/orderHighlight', ['uses' => 'PostsController@orderHighlight']);
    });
    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
    // Trang quản trị role
    Route::group(['prefix' => 'roles', 'as' => 'role', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'RoleController@index']);
        Route::get('/create', ['uses' => 'RoleController@create']);
        Route::post('/store', ['uses' => 'RoleController@store']);
        Route::get('/show/{id?}', ['uses' => 'RoleController@show']);
        Route::get('/edit/{id?}', ['uses' => 'RoleController@edit']);
        Route::post('/update/{id?}', ['uses' => 'RoleController@update']);
        Route::get('/delete/{id?}', ['uses' => 'RoleController@destroy']);
    });
    // Trang quản trị user
    Route::group(['prefix' => 'users', 'as' => 'user', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('/create', ['uses' => 'UserController@create']);
        Route::post('/store', ['uses' => 'UserController@store']);
        Route::get('/show/{id?}', ['uses' => 'UserController@show']);
        Route::get('/edit/{id?}', ['uses' => 'UserController@edit']);
        Route::post('/update/{id?}', ['uses' => 'UserController@update']);
        Route::get('/delete/{id?}', ['uses' => 'UserController@destroy']);
    });
    // Cấu hình website
    Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'SettingController@index']);
        Route::post('/allowGetDynamicContent', ['uses' => 'SettingController@allowGetDynamicContent']);
    });
    // Quản trị thông tin website
    Route::group(['prefix' => 'contact', 'as' => 'settings', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'SettingController@contact']);
        Route::post('/store', ['uses' => 'SettingController@storeContact']);
    });
    Route::post('/html/update', ['uses' => 'SettingController@updateHTML']);
    // QUẢN TRỊ BANNER
    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'BannersController@index']);
        Route::get('/top', ['as' => 'index', 'uses' => 'BannersController@index']);
        Route::post('/store', ['uses' => 'BannersController@store']);
        Route::get('/show/{id?}', ['uses' => 'BannersController@show']);
        Route::get('/edit/{id?}', ['uses' => 'BannersController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'BannersController@update']);
        Route::get('/delete/{id?}', ['uses' => 'BannersController@destroy']);
        Route::get('/search', ['uses' => 'BannersController@search_form']);
        Route::post('/search', ['uses' => 'BannersController@search_submit']);
    });
    Route::group(['prefix' => 'category-banner',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CategoryHasBannerController@index']);
        Route::get('/show/{id?}', ['uses' => 'CategoryHasBannerController@show']);
        Route::get('/edit/{id?}', ['uses' => 'CategoryHasBannerController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'CategoryHasBannerController@update']);

        Route::match(['get', 'post'], '/bannertop', ['uses' => 'TemplateController@banner_top_categories']);
        Route::match(['get', 'post'], '/bannerleft', ['uses' => 'TemplateController@banner_left_categories']);
    });
    // Tài khoản của tôi
    Route::group(['prefix' => 'account'], function () {
        Route::match(array('GET', 'POST'), '/profile', ['uses' => 'MyAccountController@profile']);
    });
    // Trang quản trị widget
    Route::group(['prefix' => 'widgets'], function () {
        Route::get('/{page}/{position}/{id?}', ['uses' => 'WidgetController@getPosition']);
        Route::post('/{page}/{position}', ['uses' => 'WidgetController@postPosition']); // Vì sao nên mua
    });
    // Quản lý đối tác
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PartnersController@index']);
        Route::post('/store', ['uses' => 'PartnersController@store']);
        Route::get('/show/{id?}', ['uses' => 'PartnersController@show']);
        Route::get('/edit/{id?}', ['uses' => 'PartnersController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'PartnersController@update']);
        Route::get('/delete/{id?}', ['uses' => 'PartnersController@destroy']);
    });
    // Quản lý comment (Đối tác nói về chúng tôi)
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CommentController@index']);
        Route::post('/store', ['uses' => 'CommentController@store']);
        Route::get('/edit/{id?}', ['uses' => 'CommentController@edit']);
        Route::post('/update/{id?}', ['uses' => 'CommentController@update']);
        Route::get('/delete/{id?}', ['uses' => 'CommentController@destroy']);
    });
    // Quản lý tác giả mô hình
    Route::group(['prefix' => 'founder'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'AuthorController@index']);
        Route::post('/store', ['uses' => 'AuthorController@store']);
        Route::get('/edit/{id?}', ['uses' => 'AuthorController@edit']);
        Route::post('/update/{id?}', ['uses' => 'AuthorController@update']);
        Route::get('/delete/{id?}', ['uses' => 'AuthorController@destroy']);
    });
    // Quản lý giải pháp
    Route::group(['prefix' => 'solution'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'SolutionController@index']);
        Route::post('/store', ['uses' => 'SolutionController@store']);
        Route::get('/edit/{id?}', ['uses' => 'SolutionController@edit']);
        Route::post('/update/{id?}', ['uses' => 'SolutionController@update']);
        Route::get('/delete/{id?}', ['uses' => 'SolutionController@destroy']);
    });
    // Quản lý banner
    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'BannerController@index']);
        Route::post('/store', ['uses' => 'BannerController@store']);
        Route::get('/edit/{id?}', ['uses' => 'BannerController@edit']);
        Route::post('/update/{id?}', ['uses' => 'BannerController@update']);
        Route::get('/delete/{id?}', ['uses' => 'BannerController@destroy']);
    });
    // Quản lý người dùng đăng ký
    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CustomerController@index']);
    });
});
