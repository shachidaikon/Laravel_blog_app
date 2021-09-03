@extends('layouts.app')

@section('title')
    {{Auth::user()->name . "'s Blog"}}
@endsection

@section('content')
@if(Auth::check())
    <div class="container">
        <button type="button" class="btn btn-outline-primary mb-2" onclick="location.href= '/posts/create'">create</button>
        
        @foreach($posts as $post)
            <div class="card mb-2">
                    <h4 class='card-header d-flex'>
                        <div class="mr-auto"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
                        <p class="mb-0"><small class="text-muted pt-1">{{ $post->user->name }}</small></p>
                    </h4>
                    
                    <p class='card-body'>{!! nl2br(e($post->body)) !!}</p>
            </div>
        @endforeach
   
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </div>
@else
    <div class="container">
        <p>ログインしてください</p>
    </div>
@endif
@endsection
