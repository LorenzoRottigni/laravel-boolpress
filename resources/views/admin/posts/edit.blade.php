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
    <div class="form-group">
        <label for="tags" class="form-label text-center">(Hold CTRL) Tags:</label>
        <select name="tags[]" id="tags" size="6" class="form-control w-50 text-center text-white" multiple aria-label="multiple select example">
            @foreach ($tags as $tag)
                <option style="background-color: {{$tag->color}};"
                    @if ($post->tag->contains($tag)) selected @endif
                value="{{$tag->id}}">
                    {{$tag->name}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="form-label">Topic</label>
        <select name="topic_id" class="form-control">
          @foreach($topics as $topic)
            <option value="{{$topic->id}}"
                @if($topic->id == $post->topic_id)
                    selected
                @endif>
                {{$topic->name}}
            </option>
          @endforeach
        </select>
    </div>

    <button type="submit" class="btn bg-blue d-block mx-auto mt-4">Submit</button>
</form>
<form action="{{ route('admin.posts.destroy', $post) }}" method="post">
    @csrf
    @method('delete')

    <button type="submit" class="btn btn-outline-danger d-block mx-auto mt-3">Delete post</button>
</form>
@endsection




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
    <!--<div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Topics</span>
        <input id="topics" name="topics" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>-->
    <div class="form-group">
        <label class="form-label">Topic</label>
        <select name="topic_id" class="form-control">
          @foreach($topics as $topic)
            <option value="{{$topic->id}}">{{$topic->name}}</option>
          @endforeach
        </select>
      </div>
    <button type="submit" class="btn bg-blue d-block mx-auto mt-3">Submit</button>
</form>
@endsection
