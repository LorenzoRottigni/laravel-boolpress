@extends('layouts.admin')

@section('title', 'Users list')

@section('main')
    <div class="posts-container">
        @foreach ($postsList as $post)
            <div class="post-card py-3">
                <h2>{{$post->id}} | {{$post->title}}</h2>
                <p>{{$post->content}}</p>
                <h4 class="my-3">
                    tags:
                    @foreach ($post->tag as $tag)
                        <span class="badge text-white" style="background-color: {{$tag->color}}">
                            {{$tag->name}}
                        </span>
                    @endforeach
                </h4>
                <div class="post-footer d-flex justify-content-between mt-3">
                    <h5 class="text-decoration-underline">About {{$post->topic->name}}</h5>
                    <h4 class="text-info">Created by {{$post->user->name}}</h4>
                    <h5>At {{$post->created_at}}</h5>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center py-4">
            {!! $postsList->links() !!}
        </div>
    </div>

@endsection
