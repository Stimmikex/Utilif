<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class openHController extends Controller
{
    public function __invoke() {
        $stores = DB::select('select * from stores');
        $opens = DB::select('select * from opens');
        return view('inc.footer', ['stores' => $stores, 'opens' => $opens]);
    }

    // public function store() {
    //     $stores = DB::select('select * from stores');
    //     return view('inc.footer', ['stores' => $stores]);
    // }

    // public function open() {
    //     $opens = DB::select('select * from opens');
    //     return view('inc.footer', ['opens' => $opens]);
    // }

    // public function footer() {
    //     return view('inc.footer');
    // }
}
