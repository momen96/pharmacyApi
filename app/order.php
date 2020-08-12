<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User ;

class order extends Model
{
   protected $table = 'order';
   protected $fillable = ['id' , 'order_name' , 'order_company' , 'order_count' , 'order_note']; 
   protected $timestamp = true ; 

}
