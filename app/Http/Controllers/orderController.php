<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB ; 
use Illuminate\Support\Facades\Auth ; 
use App\order ; 
use App\userOrder ; 

class orderController extends Controller
{
    public function orderInsert(Request $request){

        $order = order::create($request->all());
        return response()->json($order , 201) ;  
    }
}
