<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
    	
    	return view('Login');
    }
        /*public function loginsubmit()
    {
    	return "Form Submitted";
    }*/
    //to request all
        /*public function loginsubmit(Request $request)
    {
    
    	return $request->all();
    }*/
    //to create individual request
/*        public function loginsubmit(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');
    	return 'Email : '.$email .'<br> Password : '.$password;
    }*/
    //validated Form
          public function loginsubmit(Request $request)
    {
    	$validatedData = $request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:6|max:12'
    	]);
    	$email = $request->input('email');
    	$password = $request->input('password');
    	return 'Email : '.$email .'<br>Password : '.$password;
    }

}