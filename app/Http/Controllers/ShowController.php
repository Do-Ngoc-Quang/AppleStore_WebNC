<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Macs;
use App\Models\Ipads;
use App\Models\Iphones;

use App\Models\Cart;
use App\Models\Visits;


class ShowController extends Controller
{
    public function show_index (){
        $visits = new Visits;
        $visits->save();
        
        $quantity_cart = Cart::count();
        return view('fontend.index',['quantity_cart' => $quantity_cart]);
    }
    public function show_contact (){
        $quantity_cart = Cart::count();
        return view('fontend.contact',['quantity_cart' => $quantity_cart]);
    }

    public function get_mac (){
        $macs = Macs::all();
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.mac',['macs'=>$macs, 'carts'=>$carts, 'quantity_cart' => $quantity_cart]);
    }
    public function get_ipad (){
        $ipads = Ipads::all();
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.ipad',['ipads'=>$ipads, 'carts'=>$carts, 'quantity_cart' => $quantity_cart]);
    }
    public function get_iphone (){
        $iphones = Iphones::all();
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.iphone',['iphones'=>$iphones, 'carts'=>$carts, 'quantity_cart' => $quantity_cart]);
    }

    public function show_mac ($id){
        $product = Macs::find($id);
        $product_picture = 'upload_macs/' . $product->picture;
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.product-detail',['product'=>$product, 'product_picture'=>$product_picture, 'carts'=>$carts, 'quantity_cart' => $quantity_cart]);
    }
    public function show_ipad ($id){
        $product = Ipads::find($id);
        $product_picture = 'upload_ipads/' . $product->picture;
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.product-detail',['product'=>$product, 'product_picture'=>$product_picture, 'carts'=>$carts, 'quantity_cart' => $quantity_cart]);
    }
    public function show_iphone ($id){
        $product = Iphones::find($id);
        $product_picture = 'upload_iphones/' . $product->picture;
        $carts = Cart::all();
        $quantity_cart = Cart::count();
        return view('fontend.product-detail',['product'=>$product, 'product_picture'=>$product_picture, 'carts'=>$carts, 'quantity_cart' => $quantity_cart]);
    }
}
