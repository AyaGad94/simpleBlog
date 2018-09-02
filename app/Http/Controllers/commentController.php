<?php

namespace App\Http\Controllers;
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

    public function myfunc(){
        return view('comments.show');
        }
}
