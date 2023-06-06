<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ipads;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ipadsController extends Controller
{
    public function view_ipad (){
        $user_id_current = Auth::id();
        $user = User::all();

        $page_ipads = Ipads::paginate(5);
        return view('backend.ipads',['ipads'=>$page_ipads,'page'=>$page_ipads, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_ipad (Request $request){
        $ipad = new Ipads;

        $ipad->name = $request['name'];
        $ipad->price = $request['price'];
        $img_temp = pathinfo($request->picture->getClientOriginalName());
        $request->picture->storeAs('public/upload_ipads/',$img_temp['basename']);
        $ipad->picture = $img_temp['basename'];

        $ipad->description = $request['description'];
        $ipad->type = $request['type'];

        $ipad->save();
        $successs = 'Create successfully.';
        return redirect('/ipads')->with('success', $successs);
    }

    public function edit_ipad (Request $request, $id){
        $ipad = Ipads::find($id);

        $ipad->name = $request['name'];
        $ipad->price = $request['price'];

        $ipad->description = $request['description'];

        $ipad->save();
        $successs = 'Update successfully.';
        return redirect('/ipads')->with('success', $successs);
    }

    public function delete_ipad ($id){
        $ipad = Ipads::find($id);
        $ipad->picture!=""?Storage::delete('public/upload_ipads/'.$ipad->picture):"";
        $ipad->delete();

        $successs = 'Delete successfully.';
        return redirect('/ipads')->with('success', $successs);
    }
}