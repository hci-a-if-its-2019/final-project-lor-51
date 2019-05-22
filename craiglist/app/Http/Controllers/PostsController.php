<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function storePost(Request $request)
    {
        $path = $request->file('img_location')->store('public/posts');
        $path = str_replace("public/", "", $path);
        Post::create([
            'title'  => $request->title,
            'body' => $request->body,
            'user_id' => Auth::user()->id,
            'rating' => 0,
            'flag' => 0,
            'category' => $request->category,
            'img_location' => $path,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->back();
    }

    public function viewPost($id) {
        $post = Post::find($id);
        $comments = $post->comments;
        return view('thread', ['post' => $post, 'comments' => $comments]);
    }

    public function search(Request $request) {
        if($request->category != 'All')
            $posts = Post::where('title', 'like', '%'.$request->search.'%')
                    ->orWhere('category', 'like', '%'.$request->category.'%')
                    ->orWhere('body', 'like', '%'.$request->search.'%')
                    ->orWhere('category', 'like', '%'.$request->category.'%')->paginate(5);
        else
            $posts = Post::where('title', 'like', '%'.$request->search.'%')
            ->orWhere('body', 'like', '%'.$request->search.'%')->paginate(5);

        return view('posts', ['posts' => $posts, 'name' => $request->category]);
    }

    public function filter(Request $request) {
        $cover = Post::first();
        if ($request->filter == 'nf')
            $posts = Post::limit(5)->orderBy('created_at', 'asc')->paginate(5);
        else
            $posts = Post::limit(5)->orderBy('created_at', 'desc')->paginate(5);
        return view('forums', ['cover' => $cover, 'posts' => $posts]);
    }
}
