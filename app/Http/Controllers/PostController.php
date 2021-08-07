<?php
use Illuminate\Support\Facades\Auth;

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\User;

use Auth;
//
class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    }   
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function edit(Post $post)
    {
        return view('edit')->with(['post' => $post]);
    }
    
    
    
    public function store(PostRequest $request, Post $post, User $user)
    {
        $input = $request['post'];
        $input += ['user_id' => Auth::id()];
        $post->fill($input)->save();
        return redirect('/posts/'.$post->id);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => Auth::id()];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

}
