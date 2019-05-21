<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Post;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {

        $lifeStyleCount = Post::where('category', 'like', '%lifestyle%')->count();
        $fashionCount = Post::where('category', 'like', '%fashion%')->count();
        $technologyCount = Post::where('category', 'like', '%technology%')->count();
        $travelCount = Post::where('category', 'like', '%travel%')->count();
        $healthCount = Post::where('category', 'like', '%health%')->count();

        View::share('lifestyleCount', $lifeStyleCount);
        View::share('fashionCount', $fashionCount);
        View::share('technologyCount', $technologyCount);
        View::share('travelCount', $travelCount);
        View::share('healthCount', $healthCount);
    }
}
