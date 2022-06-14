<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest();

        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('blog', [
            "title"=> "All Posts",
            "active"=>'blog',
            "posts"=> $posts->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title"=>"Post",
            "active"=>'posts',
            "post"=> $post
        ]);
    }
}
