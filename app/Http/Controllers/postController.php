<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    //
    public function index()
    {
    	$posts = DB::table('posts')->get();
    	return view('posts',compact('posts'));
    }
}
