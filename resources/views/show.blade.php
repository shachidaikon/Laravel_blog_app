@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="card mb-2 ">
            <div class="card-header">
                <h4 class="card-title mb-2 text-primary">{{ $post->title }}</h2> 
            </div>
            
            <div class="card-body">
                <h5 class="card-text mb-2">{!! nl2br(e($post->body)) !!}</h5> 
                @if(Auth::id() === $post->user->id)
                <div class="text-right">
                    <button class="btn btn-outline-secondary mb-2 d-inline" onclick="location.href='/posts/{{ $post->id }}/edit' ">編集</button>
                    <form action="/posts/{{$post->id}}" id="form_delete" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-Danger mb-2 d-inline" type="button" onclick="return deletePost();">削除</button>
                    </form>
                    <p class="card-text d-inline"><small class="text-muted">{{$post->updated_at}}</p>
                </div>
                @endif
            </div>
        </div>
        
        <button class="btn btn-outline-primary" onclick="location.href='/'">戻る</button>
    </div>
    

@endsection

    <script>
    'use strict'
        const deletePost = e => {
            if(confirm('本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            }
        }
    </script>

<style lang="scss" scoped>
    .card-title {
        color: #fdfdfd;
    }
</style>