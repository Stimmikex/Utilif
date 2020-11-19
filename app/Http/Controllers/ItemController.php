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
        $items = DB::select('select * from item');
        $types = DB::select('select * from types');
        return view ('storePages.utivist', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types]);
    }

    public function skis() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 1');
        $types = DB::select('select * from types where name = "Skis"');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types]);
    }

    public function repair() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 2');
        $types = DB::select('select * from types where name = "Repair"');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types]);
    }

    public function outdoors() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 3');
        $types = DB::select('select * from types where name = "Outdoors"');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types]);
    }

    public function bikes() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 4');
        $types = DB::select('select * from types where name = "Bikes"');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types]);
    }

    public function index() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item');
        $types = DB::select('select * from types');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types]);
    }
}