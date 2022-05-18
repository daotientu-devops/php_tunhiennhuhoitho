<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct() {
        $layout = 'layouts.default';
        view()->composer($layout, function ($view) {
            // Info
            $info = DB::table('settings')->where('key', '=', 'footer_info')->first();
            if (isset($info))
                $info = json_decode($info->value, true);
            else
                $info = array();
            $view->with(array('info' => $info));
        });
    }
}
