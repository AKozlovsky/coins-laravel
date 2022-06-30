<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    public function add()
    {
        $breadcrumbs = [
            ['link' => "", 'name' => __("locale." . "Home")],
            ['name' => __("locale." . "Action")],
            ['name' => __("locale." . "Add a record")]
        ];
        $pageConfigs = ['pageHeader' => true];

        $continents = DB::table('continents')->select('code', 'name')->get();

        return view('pages.action', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs, 'continents' => $continents]);
    }
}
