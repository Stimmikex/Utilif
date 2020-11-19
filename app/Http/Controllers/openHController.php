<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;

class openHController extends Controller
{
    public function __invoke() {
        store();
        open();
    }

    public function store() {
        $stores = DB::select('select * from stores');
        return view('inc.footer', ['stores' => $stores]);
    }

    public function open() {
        $opens = DB::select('select * from opens');
        return view('inc.footer', ['opens' => $opens]);
    }

    public function footer() {
        return view('inc.footer');
    }
}
