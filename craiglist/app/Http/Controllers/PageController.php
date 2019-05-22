<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;

class PageController extends Controller
{

	public function index() {
		$posts1 = Post::limit(3)->get()->shuffle();
		$posts2 = Post::offset(3)->limit(3)->get()->shuffle();
		return view('welcome', ['posts1' => $posts1, 'posts2' => $posts2]);
	}
	
    public function forumsList(){
			$cover = Post::first();
			$posts = Post::limit(5)->inRandomOrder()->paginate(5);
    	return view('forums', ['cover' => $cover, 'posts' => $posts]);
    }

    public function threadPost(){
    	$comments = Comment::all();
    	return view('thread', compact('comments'));
    }
    
    public function addComment(Request $request){
    	Comment::create([
					'parent' => 0,
					'name' => Auth::user()->name,
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
			'post_id' => $request->post_id
      	]);
    	return redirect()->back();
	}
	
	public function viewPostCategories($name) {
		$posts = Post::where('category','like', '%'.$name.'%')->paginate(5);
		return view('posts', ['name' => $name, 'posts' => $posts]);
	}
}
