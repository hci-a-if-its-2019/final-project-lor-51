<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function storePost(Request $request)
    {
        $path = $request->file('img_location')->store('posts');
        // $path = str_replace("public", "", $path);
        Post::create([
            'title'  => $request->title,
            'body' => $request->body,
            'rating' => 0,
            'flag' => 0,
            'category' => $request->category,
            'img_location' => $path
        ]);
        return redirect()->back();
    }

    public function viewPost($id) {
        $post = Post::find($id);
        $comments = $post->comments;
        return view('thread', ['post' => $post, 'comments' => $comments]);
    }
}
