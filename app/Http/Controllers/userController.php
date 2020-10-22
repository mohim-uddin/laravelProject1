<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
    	$name = 'mohim';
    	$users = array(
    		"name" => "mohim",
    		"email" => "mohim@gmail.com",
    		"pass" => "021454"
    	);
    	return view('user',compact('name','users'));
    }
}
