<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;


class ContactsController extends Controller
{
    public function view_contact (){
        $user_id_current = Auth::id();
        $user = User::all();

        $page_contacts = Contacts::paginate(5);
        return view('backend.contacts',['contacts'=>$page_contacts,'page'=>$page_contacts, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_contact (Request $request){
        $contact = new Contacts;

        $contact->email = $request['email'];
        $contact->content = $request['content'];

        $contact->save();
        $quantity_cart = Cart::count();
        return view('fontend.contact', ['quantity_cart' => $quantity_cart]);
    }

    public function delete_contact ($id){
        $contact = Contacts::find($id);
        $contact->delete();

        $successs = 'Delete successfully.';
        return redirect('/contacts')->with('success', $successs);
    }
}
