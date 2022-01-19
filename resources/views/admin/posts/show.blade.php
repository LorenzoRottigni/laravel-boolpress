@extends('layouts.admin')

@section('title', 'Users list')

@section('main')
<h2>{{$post["post"]->id}} | {{$post["post"]->title}}</h2>
<p>{{$post["post"]->content}}</p>
<div class="post-footer d-flex justify-content-between">
    <span>{{$post["post"]->topic}}</span>
    <span>{{$post["post"]->creator_id}}</span>
    <span>{{$post["post"]->created_at}}</span>
</div>
@endsection
