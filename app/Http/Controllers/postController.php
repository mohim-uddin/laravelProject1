<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    //To see all post
    public function allPost()
    {
    	$posts = DB::table('posts')->get();
    	return view('posts',compact('posts'));
    }
   //To insert data
    public function addPost()
    {
    	return view('add-post');
    }
    public function addPostSubmit(Request $request)
    {
    	DB::table('posts')->insert([
    		'title' => $request->title,
    		'body' => $request->body
    	]);
    	return back()->with('post_created','post has been created successfully');
    }

    //single post
    public function getPostById($id)
    {
    	$post = DB::table('posts')->where('id',$id)->first();
    	return view('single-post',compact('post'));
    }
    //to delete post
    public function deletePost($id)
    {
    	$post = DB::table('posts')->where('id',$id)->delete();
    	return back()->with('post_deleted','post has been deleted');
    }
    ///to edit post
    public function editPost($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }
    //ti update post

    public function updatePost(Request $request)
    {
        $post = DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        //return back('edit-post',compact('post'));
        return back()->with('post_updated','post has been updated successfully');
    }
}
