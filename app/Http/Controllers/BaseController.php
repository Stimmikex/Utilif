<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BaseController extends Controller
{
    public function __construct() {
      $this->share('stores', $this->getStores());
      $this->share('itemImages', $this->getItemImages());
      $this->share('item', $this->getItem());
    }
    protected function getStores() {
      return DB::select('select * from stores');
    }
    protected function getItemImages() {
      return DB::select('select * from item_images');
    }
    protected function getItem() {
      return DB::select('select * from item');
    }
    protected function share($key, $data) {
      view($key, $data);
    }
}
