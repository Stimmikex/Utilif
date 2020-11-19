<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storePagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function utivist() {
        return view('storePages.utivist');
    }

    public function sund() {
        return view('storePages.sund');
    }

    public function skor() {
        return view('storePages.skor');
    }

    public function ithrottir() {
        return view('storePages.ithrottir');
    }

    public function skidi() {
        return view('storePages.skidi');
    }

    public function tilbod() {
        return view('storePages.tilbod');
    }
}
