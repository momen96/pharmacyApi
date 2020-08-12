<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user ;

class profileController extends Controller
{
    public function updateUser(Request $request , $id){
        
        $user = user::find($id) ; 
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        
        $user->save();
        return response()->json($user);

    }
}
