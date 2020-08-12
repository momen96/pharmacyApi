<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\user;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function register(Request $request){
        
        $data = user::create([
        'name'=>$request->name , 
        'password'=>Hash::make($request->password),
        'address'=>$request->address,
        'phone_number'=>$request->phone_number,
        'api_token'=>Str::random(60),
        ]);
        return $data; 

    }
}
