<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BaseController extends Controller
{
    public function __construct()
    {
      $stores = DB::select('select * from stores');
  
      // Sharing is caring
      View::share('stores', $stores);
    }
}
