<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[homeController::class,'index']);
//parameter passing
Route::get('/about/{name}',[homeController::class,'para'])->name('about.para');
//optional parameter passing
Route::get('/blog/{name?}',[homeController::class,'blog'])->name('blog.blog');