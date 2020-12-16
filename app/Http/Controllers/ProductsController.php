<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductsController extends Controller{
    public function index() {
        $item = DB::select('select * from item');
        return view('products', compact('products'));
    }

    public function cart() {
        $itemImages = DB::select('select * from item_images');
        return view('storePages.cart', ['itemImages' => $itemImages]);
    }

    public function addToCart($id) {
        $items = DB::select('select * from item where id = '.$id);
        foreach ($items as $item) {
            if(!$item) {
                abort(404);
            }
            $cart = session()->get('cart');
            // if cart is empty then this the first product
            if(!$cart) {
                $cart = [
                        $id => [
                            "id" => $item->id,
                            "name" => $item->name,
                            "quantity" => 1,
                            "price" => $item->price
                        ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "id" => $item->id,
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }

    public function update(Request $request) {
        if($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request) {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
