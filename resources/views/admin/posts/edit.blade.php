@extends('layouts.admin')

@section('title', 'Edit a post')

@section('main')

<form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="mt-5">
    @csrf

    @method('put')

    <!------------------------------------>
    <!----- TITLE ----->
    <!------------------------------------>

    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-1">Title</span>
        <input id="title" name="title" type="text"
        class="form-control @error('title') is-invalid @enderror"
        value="
            @if(old('title'))
                {{ old('title') }}
            @else
                {{ $post->title }}
            @endif "
        required>
    </div>

    @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Content</span>
        <textarea id="content" name="content" placeholder="Leave a comment here"
        class="form-control @error('content') is-invalid @enderror" style="height: 300px">
            @if(old('content'))
                {{ old('content') }}
            @else
                {{$post->content}}
            @endif
        </textarea>
    </div>

    @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <div class="form-group">
        <label for="tags" class="form-label text-center">(Hold CTRL) Tags:</label>
        <select name="tags[]" id="tags" size="6" class="form-control w-25 text-center" multiple aria-label="multiple select example">
            @foreach ($tags as $tag)
            <option style="
            border: solid 1px {{$tag->color}};
            border-top: none;"
            @if($post->tag->contains($tag))
             selected
            @endif
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
