<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user ; 
use App\order ;
use App\userOrder ;  

class userOrderController extends Controller
{
    public function getOrderRelation(){

        $user = user::find(3); 
        return $user->orders ;
     }

     public function insertRelation(Request $request){

        $userOrder = userOrder::create($request->all());
        return response()->json($userOrder , 201) ; 


     }
}
