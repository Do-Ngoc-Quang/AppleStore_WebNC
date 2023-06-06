<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Macs;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MacsController extends Controller
{
    public function view_mac (){
        $user_id_current = Auth::id();
        $user = User::all();

        $page_macs = Macs::paginate(5);
        return view('backend.macs',['macs'=>$page_macs,'page'=>$page_macs, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_mac (Request $request){
        $mac = new Macs;

        $mac->name = $request['name'];
        $mac->price = $request['price'];
        $img_temp = pathinfo($request->picture->getClientOriginalName());
        $request->picture->storeAs('public/upload_macs/',$img_temp['basename']);
        $mac->picture = $img_temp['basename'];

        $mac->description = $request['description'];
        $mac->type = $request['type'];

        $mac->save();
        $successs = 'Create successfully.';
        return redirect('/macs')->with('success', $successs);
    }

    public function edit_mac (Request $request, $id){
        $mac = Macs::find($id);

        $mac->name = $request['name'];
        $mac->price = $request['price'];

        $mac->description = $request['description'];

        $mac->save();
        $successs = 'Update successfully.';
        return redirect('/macs')->with('success', $successs);
    }

    public function delete_mac ($id){
        $mac = Macs::find($id);
        $mac->picture!=""?Storage::delete('public/upload_macs/'.$mac->picture):"";
        $mac->delete();

        $successs = 'Delete successfully.';
        return redirect('/macs')->with('success', $successs);
    }
}