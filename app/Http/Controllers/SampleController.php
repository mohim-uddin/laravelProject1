<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function sample(Request $request)
    {
     	//to see http get request
     	//return $request->method();
     	//return $request->path();
     	return $request->url();
    }
}
