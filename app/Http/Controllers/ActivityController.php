<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Setting
        $setting = DB::table('settings')->where('key', '=', 'website.config')->first();
        if (isset($setting))
            $setting = json_decode($setting->value, true);
        else
            $setting = array();
        // Info
        $info = DB::table('settings')->where('key', '=', 'footer_info')->first();
        if (isset($info))
            $info = json_decode($info->value, true);
        else
            $info = array();
        $posts = DB::table('posts')->where([
            ['status', 'publish'],
            ['category_id', 4] // 4: Hoạt động
        ])->orderBy('id', 'DESC')->get();
        return view('activity.index', compact('setting', 'info', 'posts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        // Setting
        $setting = DB::table('settings')->where('key', '=', 'website.config')->first();
        if (isset($setting))
            $setting = json_decode($setting->value, true);
        else
            $setting = array();
        // Info
        $info = DB::table('settings')->where('key', '=', 'footer_info')->first();
        if (isset($info))
            $info = json_decode($info->value, true);
        else
            $info = array();
        $post = DB::table('posts')->where('slug', '=', $slug)->first();
        $other_posts = DB::table('posts')->where('slug', '!=', $slug)->get();
        return view('activity.detail', compact('setting', 'info', 'post', 'other_posts'));
    }
}
