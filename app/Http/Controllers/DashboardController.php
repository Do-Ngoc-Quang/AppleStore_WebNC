<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Macs;
use App\Models\Ipads;
use App\Models\Iphones;
use App\Models\Contacts;
use App\Models\Order;
use App\Models\Visits;


class DashboardController extends Controller
{
    // public function view_user(){
    //     $user_id_current = Auth::id();
    //     $user = User::all();
    //     return view('',['users'=>$user], ['user_id_current'=>$user_id_current]);
    // }
    public function view_dashboard(){
        $user_id_current = Auth::id();
        $user = User::all();

        $total_mac = Macs::count();
        $total_ipad = Ipads::count();
        $total_iphone = Iphones::count();
        $total_visit = Visits::count();
        $total_contact = Contacts::count();
        $total_order = Order::count();
        return view('backend.index',['users'=>$user, 'user_id_current'=>$user_id_current, 
            'total_mac'=>$total_mac,
            'total_ipad'=>$total_ipad,
            'total_iphone'=>$total_iphone,
            'total_visit'=>$total_visit,
            'total_contact'=>$total_contact,
            'total_order'=>$total_order
        ]);
    }
}
