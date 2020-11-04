<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\postController;

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

Route::get('/',[ProductController::class,'index'])->name('product.index');

Route::get('/home',[homeController::class,'index']);
//parameter passing
Route::get('/about/{name}',[homeController::class,'para'])->name('about.para');
//optional parameter passing
Route::get('/blog/{name?}',[homeController::class,'blog'])->name('blog.blog');
//for single data
Route::get('/user',[userController::class,'index'])->name('user.index');

//get request---to see all post
Route::get('/posts',[ClientController::class,'getAllpost'])->name('posts.getAllpost');
//get request--to see individual post
Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getPostById');
//post request
Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.add');
//put request (to update)
Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.updatePost');
//delete post
Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.delete');
///to http get method 
Route::get('/sample',[SampleController::class,'sample'])->name('sample.sample');

Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkUser');
Route::post('/login',[LoginController::class,'loginsubmit'])->name('login.submit');

Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');
Route::get('/session/delete',[SessionController::class,'deleteSessionData'])->name('session.remove');
//to see all post
Route::get('/posts',[postController::class,'allPost'])->name('Posts.allPost');
//to add a single post
Route::get('/add-post',[postController::class,'addPost'])->name('Posts.add');

Route::post('/add-post',[postController::class,'addPostSubmit'])->name('post.addsubmit');
//to see single post
Route::get('/posts/{id}',[postController::class,'getPostById'])->name('post.getPostById');
//to delete post
Route::get('/delete-post/{id}',[postController::class,'deletePost'])->name('post.delete');
//to edit 
Route::get('/edit-post/{id}',[postController::class,'editPost'])->name('post.edit');
//to update
Route::post('/update-post',[postController::class,'updatePost'])->name('post.update');


