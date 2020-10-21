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
//Required Parameters
Route::get('/admin/{name}',function(){
	return 'hi!!i am mohim';
});
// Optional Parameters
Route::get('/users/{name?}',function($name = null){
	return 'hi '. $name;
});
// Regular Expression Constraints
Route::get('product/{id}', function ($id) {
    return 'product id is ' . $id;
})->where('id', '[0-9]+');
///any method
Route::any('posts',function(Request $req){
	return 'Request method is '. $req->method();
});