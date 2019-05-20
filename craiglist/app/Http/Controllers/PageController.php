<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class PageController extends Controller
{
	
    public function forumsList(){
    	return view('forums');
    }

    public function threadPost(){
    	// return $thread;;
    	$comments = Comment::all();
    	return view('thread', compact('comments'));
    }
    
    public function addComment(Request $request){
    	Comment::create([
          	'parent' => 0,
          	'name' => $request->name,
          	'message' => $request->message,
      	]);
      	return redirect()->back();
    }

    public function addreply(Request $request){
    	// return $request;
    	Comment::create([
          	'parent' => $request->parent,
          	'name' => $request->name,
          	'message' => $request->message,
      	]);
    	return redirect()->back();
	}
	
	public function viewPostCategories($name, $amount) {
		$posts = Post::where('category', $name)->get();
		return view('posts', ['name' => $name, 'amount' => $amount, 'posts' => $posts]);
	}
}
