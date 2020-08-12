<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\user ;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index(Request $request){

       if(auth()->attempt(['phone_number'=>$request->input('phone_number') , 
                            'password'=>$request->input('password')
                            ])){
                                    $user = auth()->user();
                                    $user->api_token = Str::random(60);
                                    $user->save();
                                    return $user;  
                            }else{
                                return "NO";
                            }

    }

    public function logout(){
        if(auth()->user()){
            $user = auth()->user();
            $user->api_token = null; 
            $user->save();
        }
    }

    public function changePassword(Request $request , $id){
            $user = user::find($id);

            if($user){
                if(Hash::check($request['oldPassword'] , $user->password)){
                    $user->password = Hash::make($request['password']);

                    $user->save();
                    return $user ; 
                }
                else{
                    return "Password you entered is incorrect";
                }
            }
    }
}
