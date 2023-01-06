<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        // $posts = Post::latest();
        $title = "";
        if(request("category")){
            $title = ' In ' . Category::firstWhere("slug", request("category"))->name;
        }
        if(request("author")){
            $title = ' By ' . User::firstWhere("username", request("author"))->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(["keyword", "category", "author"]))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view("post", [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
