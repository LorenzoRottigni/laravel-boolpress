@extends('layouts.admin')

@section('title', 'Users list')

@section('main')
    <div class="posts-container">
        @foreach ($postsList as $post)
            <div class="post-card py-5">
                <h2>{{$post->id}} | {{$post->title}}</h2>
                <p>{{$post->content}}</p>
                <div class="post-footer d-flex justify-content-between mt-5">
                    <h5 class="text-decoration-underline">About {{$post->topic}}</h5>
                    <h4 class="text-info">Created by {{$post->user_name}}</h4>
                    <h5>{{$post->created_at}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <h2 class="mt-3 text-center">Scroll down !</h2>
@endsection
