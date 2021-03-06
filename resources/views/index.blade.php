@extends('layouts.app') {{--app.blade.phpの継承--}}

@section('content')
@if(Auth::check())
    <div class="container">
        <button type="button" class="btn btn-outline-primary mb-2" onclick="location.href= '/posts/create'">create</button>
        
        @foreach($posts as $post)
            <div class="card mb-2">
                    <h4 class='card-header d-flex'>
                        <div class="mr-auto"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
                        <small class="text-muted pt-1 mb-0">{{ $post->user->name }}</small>
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

