<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register','registerController@register');
Route::post('/login' , 'loginController@index') ; 
Route::middleware('auth:api')->post('/logout' , 'loginController@logout') ; 
Route::get('/items' , 'itemsController@getItems');
Route::post('/orderinsert' , 'orderController@orderInsert');
Route::get('userfromorder' , 'userOrderController@getOrderRelation');
Route::post('/insertrelation' , 'userOrderController@insertRelation');
Route::put('/updateuser/{id}' , 'profileController@updateUser');
Route::post('/changepassword/{id}' , 'loginController@changePassword');
