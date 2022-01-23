@extends('layouts.admin')

@section('title', 'Create new post')

@section('main')
<form action="{{ route('admin.posts.store')}}" method="POST" class="mt-5">
    @csrf

    <!------------------------------------>
    <!----- TITLE ----->
    <!------------------------------------>

    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-1">Title</span>
        <input id="title" name="title" type="text"
        class="form-control @error('title') is-invalid @enderror"
        value="{{ old("title") }}" required
        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <!------------------------------------>
    <!----- CONTENT ----->
    <!------------------------------------>

    <div class="input-group mb-3">
        <span class="input-group-text bg-blue" id="inputGroup-sizing-default-3">Content</span>
        <textarea id="content" name="content" placeholder="Leave a comment here"
        class="form-control @error('content') is-invalid @enderror" style="height: 300px">
            {{ old('content') }}
        </textarea>
    </div>

    @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <!------------------------------------>
    <!----- TAGS ----->
    <!------------------------------------>

    <div class="form-group">
        <label for="tags" class="form-label text-center">(Hold CTRL) Tags:</label>
        <select name="tags[]" id="tags" size="6"
        class="form-control w-50 text-center text-white"
        multiple>
            @foreach ($tags as $tag)
                <option style="background-color: {{$tag->color}};"
                value="{{$tag->id}}">
                    {{$tag->name}}
                </option>
            @endforeach
        </select>
    </div>


    <!------------------------------------>
    <!----- TOPIC ----->
    <!------------------------------------>

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
