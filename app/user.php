<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class user extends Model  implements Authenticatable
{
    use AuthenticableTrait;
    
    protected $fillable = ['id' , 'name' , 'phone_number' , 'password' , 'address' , 'api_token']; 
    protected $timestamp = true ;

    public function orders(){
    return $this -> belongsToMany('App\order' , 'user_order' , 'user_id' , 'order_id');
    
} 
}
