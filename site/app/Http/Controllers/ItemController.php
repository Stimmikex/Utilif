<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function img() {
        $itemImages = DB::select('select * from item_images');
        return view ('storePages.utivist', ['item' => $itemImages]);
    }

    public function brand() {
        $brands = DB::select('select * from brands');
        return view ('storePages.utivist', ['brands' => $brands]);
    }
}