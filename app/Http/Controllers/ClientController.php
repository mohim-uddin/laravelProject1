<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //get request--to see all post
    public function getAllpost(){
    	$response = Http::get('https://jsonplaceholder.typicode.com/posts');
		return $response->json();

    }
    //get request---to see individual post
    public function getPostById($id)
		{
			$post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
			return $post->json();
		}
	//post request
		 public function addPost()
			{
				$post = Http::post('https://jsonplaceholder.typicode.com/posts',[
				'userId'=> '1',
				'title' => 'New post Title',
				'body' => 'New post description'
				]);
				return $post->json();
			}
	//put request
			public function updatePost()
			{
			$response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
			'title'=> 'Update Title',
			'body' => 'Update description'
			]);
				return $response->json();
			}
	//delete post
			public function deletePost($id)
			{
			$delete = Http::delete('https://jsonplaceholder.typicode.com/posts'.$id
			);
				return $delete->json();
			}


}
