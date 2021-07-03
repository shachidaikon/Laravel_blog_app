<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{$post->id}}" id="form_delete", method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="delete" type="button" onclick="return deletePost(this);">delete</button>
        </form>
        <div class="post">
            
            <h2 class='title'>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>    
            <p class='updated_at'>{{$post->updated_at}}</p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
        'use strict'
            const deletePost = e => {
                if(confirm('本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>