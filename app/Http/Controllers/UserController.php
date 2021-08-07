<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user_posts = Post::with('user')->where('user_id', Auth::id())->orderBy('updated_at', 'DESC')->paginate(5);
        return view('User.index')->with(['posts' => $user_posts]);
    }   
}
