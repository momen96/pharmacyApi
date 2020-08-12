<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\item ; 


class itemsController extends Controller
{
    public function getItems(){
          return response()->json(item::get() , 200) ;  
      }
}
