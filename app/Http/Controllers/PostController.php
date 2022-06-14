<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        return view('blog', [
            "title"=> "All Posts",
            "active"=>'blog',
            "posts"=> Post::latest()->filter(request(['search', 'category']))->get()
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
