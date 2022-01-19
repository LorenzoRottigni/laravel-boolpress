@extends('layouts.admin')

@section('title', 'Users list')

@section('main')

    @foreach ($postsList as $post)
        <h2>{{$post->id}} | {{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <div class="post-footer d-flex justify-content-between">
            <span>{{$post->topic}}</span>
            <span>{{$post->creator_id}}</span>
            <span>{{$post->created_at}}</span>
        </div>
    @endforeach

@endsection
