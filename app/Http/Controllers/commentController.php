<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class commentController extends Controller
{

    public function create()
    {
        $users = User::all();

        return view('comments.create',[
            'users' => $users
        ]);
    }
    public function store(CommentsStoreRequest $request)
    {
       
        Comment::create([
            'comment' => $request->comment,
            'name' => $request->name
        ]);
        
       return redirect('posts'); 
    }

    public function myfunc(){
        $post= Post::find(1);
        return view('comments.show',['post'=>$post]);
        }
}
