<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Iphones;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class iphonesController extends Controller
{
    public function view_iphone (){
        $user_id_current = Auth::id();
        $user = User::all();

        $page_iphones = Iphones::paginate(5);
        return view('backend.iphones',['iphones'=>$page_iphones,'page'=>$page_iphones, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_iphone (Request $request){
        $iphone = new Iphones;

        $iphone->name = $request['name'];
        $iphone->price = $request['price'];
        $img_temp = pathinfo($request->picture->getClientOriginalName());
        $request->picture->storeAs('public/upload_iphones/',$img_temp['basename']);
        $iphone->picture = $img_temp['basename'];

        $iphone->description = $request['description'];
        $iphone->type = $request['type'];

        $iphone->save();
        $successs = 'Create successfully.';
        return redirect('/iphones')->with('success', $successs);
    }

    public function edit_iphone (Request $request, $id){
        $iphone = Iphones::find($id);

        $iphone->name = $request['name'];
        $iphone->price = $request['price'];

        $iphone->description = $request['description'];

        $iphone->save();
        $successs = 'Update successfully.';
        return redirect('/iphones')->with('success', $successs);
    }

    public function delete_iphone ($id){
        $iphone = Iphones::find($id);
        $iphone->picture!=""?Storage::delete('public/upload_iphones/'.$iphone->picture):"";
        $iphone->delete();

        $successs = 'Delete successfully.';
        return redirect('/iphones')->with('success', $successs);
    }
}