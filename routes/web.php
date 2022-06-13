<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=> "About",
        "name"=> "Dzikri Syairozi",
        "email"=>"dzikrisyairozi@gmail.com",
        "image"=>"dzikri.jpg"

    ]);
});

$blog_posts = [
    [
        "title" => "Gabriella Natasya",
        "author" => "Dzikri Syairozi",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
        dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum!"
    ],
    [
        "title" => "Dzikri Syairozi",
        "author" => "Gabriella Natasya",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
        dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum<3"
    ],
];

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Gabriella Natasya",
            "slug"=> "gabriella-natasya",
            "author" => "Dzikri Syairozi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
            dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum!"
        ],
        [
            "title" => "Dzikri Syairozi",
            "slug"=>"dzikri-syairozi",
            "author" => "Gabriella Natasya",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
            dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum<3"
        ],
    ];
    return view('blog', [
        "title"=> "Blog",
        "posts"=> $blog_posts
    ]);
});

//single blog post page

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Gabriella Natasya",
            "slug"=> "gabriella-natasya",
            "author" => "Dzikri Syairozi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
            dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum!"
        ],
        [
            "title" => "Dzikri Syairozi",
            "slug"=>"dzikri-syairozi",
            "author" => "Gabriella Natasya",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
            dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum<3"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title"=>"Post",
        "post"=> $new_post,
    ]);
});