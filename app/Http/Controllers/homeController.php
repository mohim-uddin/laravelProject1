<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
    	return 'hi i am home controller';
    }
    public function para($name){
    	return 'about me, Name :'.$name;
    }
    public function blog($name = null){
    	return 'blog page, Name :'.$name;
    }    
}
