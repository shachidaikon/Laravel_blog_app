<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {   
        return view('User.index')->with(['posts' => $user->getOwnPaginateByLimit()]);
    }   
}
