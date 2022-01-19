@extends('layouts.admin')

@section('title', 'Edit a post')

@section('main')

<form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="mt-5">
    @csrf

    @method('put')

    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-1">Title</span>
        <input value="{{ $post->title }}"id="title" name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Content</span>
        <textarea id="content" name="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 100px">
            {{ $post->content }}
        </textarea>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Topics</span>
        <input value="{{ $post->topics }}"id="topics" name="topics" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>


    <button type="submit" class="btn bg-blue d-block mx-auto mt-4">Submit</button>
</form>
<form action="{{ route('admin.posts.destroy', $post) }}" method="post">
    @csrf
    @method('delete')

    <button type="submit" class="btn btn-outline-danger d-block mx-auto mt-3">Delete post</button>
</form>
@endsection
