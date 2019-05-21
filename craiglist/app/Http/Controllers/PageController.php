<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class PageController extends Controller
{

	public function index() {
		$posts1 = Post::limit(3)->get();
		$posts2 = Post::offset(3)->limit(3)->get();
		return view('welcome', ['posts1' => $posts1, 'posts2' => $posts2]);
	}
	
    public function forumsList(){
		$cover = Post::first();		
		$posts = Post::limit(10)->get();
    	return view('forums', ['cover' => $cover, 'posts' => $posts]);
    }

    public function threadPost(){
    	$comments = Comment::all();
    	return view('thread', compact('comments'));
    }
    
    public function addComment(Request $request){
    	Comment::create([
          	'parent' => 0,
          	'name' => $request->name,
			'message' => $request->message,
			'post_id' => $request->post_id
      	]);
      	return redirect()->back();
    }

    public function addreply(Request $request){
    	Comment::create([
          	'parent' => $request->parent,
          	'name' => Auth::user()->name,
          	'message' => $request->message,
      	]);
    	return redirect()->back();
	}
	
	public function viewPostCategories($name) {
		$posts = Post::where('category','like', '%'.$name.'%')->get();
		return view('posts', ['name' => $name, 'posts' => $posts]);
	}
}
