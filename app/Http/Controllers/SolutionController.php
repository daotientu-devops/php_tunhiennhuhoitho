<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SolutionController extends Controller
{
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
        $solution = DB::table('solutions')->select('name', 'banner', 'content')->where('slug', $slug)->first();
        $partners = DB::table('partners')->select('name', 'logo', 'url')->where('type', '=', 2)->get();
        return view('solution.detail', compact('setting', 'info', 'solution', 'partners'));
    }
}
