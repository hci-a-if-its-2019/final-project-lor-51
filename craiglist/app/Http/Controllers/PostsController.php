<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function storePost(Request $request)
    {
        // return $request->all();
        Post::create([
            'title'  => $request->title,
            'body' => $request->body,
            'rating' => 0,
            'flag' => 0,
            'category' => $request->category
        ]);
        return redirect()->back();
    }
}
