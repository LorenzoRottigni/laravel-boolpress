@extends('layouts.admin')

@section('title', 'Create new post')

@section('main')
<form action="{{ route('admin.posts.store')}}" method="POST" class="mt-5">
    @csrf

    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-1">Title</span>
        <input id="title" name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Content</span>
        <textarea id="content" name="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 100px"></textarea>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Topics</span>
        <input id="topics" name="topics" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <button type="submit" class="btn bg-blue d-block mx-auto mt-3">Submit</button>
</form>
@endsection
