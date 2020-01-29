<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BaseController extends Controller
{
    public function __construct() {
      $this->share('stores', $this->getData());
      // View::share('stores', $stores);
    }
    protected function getData() {
      return DB::select('select * from stores');
    }
    protected function share($key, $data) {
      view($key, $data);
    }
}
