<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function skis() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 1');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function repair() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 2');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function outdoors() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 3');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function bikes() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where type_id = 4');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function index() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function item() {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.itemTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function category($category) {
        $subtypesfinder = DB::select('select id from subtypes where name = "'.$category.'"');
        $finder = $subtypesfinder[0]->id;
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where subtype_id =  "'.$finder.'"');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }

    public function findItem($itemName) {
        $itemImages = DB::select('select * from item_images');
        $brands = DB::select('select * from brands');
        $items = DB::select('select * from item where name Like "%'.$itemName.'%"');
        $types = DB::select('select * from types');
        $subtypes = DB::select('select * from subtypes');
        return view ('storePages.storeTemp', ['itemImages' => $itemImages, 'brands' => $brands, 'items' => $items, 'types' => $types, 'subtypes' => $subtypes]);
    }
}