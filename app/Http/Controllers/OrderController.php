<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create_order (Request $request){
        $order = new Order;

        $order->name = $request['name'];
        $order->email = $request['email'];
        $order->content = $request['content'];

        $order->save();

        // Delete all product in cart
        Cart::truncate();

        // $carts = Cart::all();
        // $quantity_cart = Cart::count();

        $successs = 'Your order has been sent successfully.';
        return redirect('/cart')->with('success', $successs);
        // return view('fontend.cart', ['carts' => $carts, 'quantity_cart' => $quantity_cart, $successs]);
    }

    public function view_order (){
        $user_id_current = Auth::id();
        $user = User::all();

        $page_orders = Order::paginate(5);
        return view('backend.orders',['orders'=>$page_orders,'page'=>$page_orders, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function delete_order ($id){
        $order = Order::find($id);
        $order->delete();

        $successs = 'Delete successfully.';
        return redirect('/orders')->with('success', $successs);
    }
}
