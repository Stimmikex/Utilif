<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function __invoke() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $item = DB::select('select * from item');
        return view ('storePages.utivist', ['itemImages' => $itemImages], ['brands' => $brands], ['item' => $item]);
    }
}