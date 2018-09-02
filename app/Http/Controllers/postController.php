<?php

namespace App\Http\Controllers;
use App\Post;


use Illuminate\Http\Request;

class postController extends Controller
{
    public function show()
    {


        $posts = Post::all();
        return view('posts.show',[
        'posts' => $posts
        ]);
        }
      
    
}
