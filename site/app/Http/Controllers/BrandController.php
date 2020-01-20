<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function list() {
        $brands = DB::select('select * from brands');
        return view ('storePages.utivist', ['brands' => $brands]);
    }
}
