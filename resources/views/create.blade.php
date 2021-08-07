@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-2">
            <form action="/posts" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-2">
                        <h4 class="form-label">Title</h4>
                        <input type="text" class="form-control" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}" />
                        <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
                    </div>
                    <div class="mb-2">
                        <h4 class="form-label">Body</h4>
                        <textarea class="form-control" name="post[body]" placeholder="今日も1日お疲れさまでした。" value="{{old('post.body')}}"></textarea>
                        <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
                    </div>
                    <button class="btn btn-outline-secondary mb-2">保存</button>
                </div>
                
            </form>
        </div>

        <button class="btn btn-outline-primary" onclick="location.href='/'">戻る</button>
    </div>

@endsection