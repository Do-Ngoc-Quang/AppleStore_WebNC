<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Macs;
use App\Models\Ipads;
use App\Models\Iphones;

class CartController extends Controller
{
    public function show()
    {
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.cart', ['carts' => $carts, 'quantity_cart' => $quantity_cart]);
    }

    public function add_cart_mac(Request $request)
    {

        $cart_id =  Cart::find($request['id']);
        if ($cart_id) {
            $cart = Cart::find($request['id']);
            $cart->quantity = (int)$request['quantity'] + (int)$cart->quantity;
        } else {
            $cart = new Cart;
            $cart->id = $request['id'];
            $cart->name = $request['name'];
            $cart->price = $request['price'];
            $cart->quantity = $request['quantity'];
            $cart->picture = "upload_macs/" . $request['picture'];
        }

        $cart->save();

        $macs = Macs::all();
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.mac', ['macs' => $macs, 'carts' => $carts, 'quantity_cart' => $quantity_cart]);
    }

    public function add_cart_ipad(Request $request)
    {
        $cart_id =  Cart::find($request['id']);
        if ($cart_id) {
            $cart = Cart::find($request['id']);
            $cart->quantity = (int)$request['quantity'] + (int)$cart->quantity;
        } else {
            $cart = new Cart;
            $cart->id = $request['id'];
            $cart->name = $request['name'];
            $cart->price = $request['price'];
            $cart->quantity = $request['quantity'];
            $cart->picture = "upload_ipads/" . $request['picture'];
        }

        $cart->save();

        $ipads = Ipads::all();
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.ipad', ['ipads' => $ipads, 'carts' => $carts, 'quantity_cart' => $quantity_cart]);
    }

    public function add_cart_iphone(Request $request)
    {
        $cart_id =  Cart::find($request['id']);
        if ($cart_id) {
            $cart = Cart::find($request['id']);
            $cart->quantity = (int)$request['quantity'] + (int)$cart->quantity;
        } else {
            $cart = new Cart;
            $cart->id = $request['id'];
            $cart->name = $request['name'];
            $cart->price = $request['price'];
            $cart->quantity = $request['quantity'];
            $cart->picture = "upload_iphones/" . $request['picture'];
        }

        $cart->save();

        $iphones = Iphones::all();
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.iphone', ['iphones' => $iphones, 'carts' => $carts, 'quantity_cart' => $quantity_cart]);
    }

    public function delete_object ($id){
        $cart = Cart::find($id);
        $cart->delete();

        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.cart', ['carts' => $carts, 'quantity_cart' => $quantity_cart]);
    }
}
