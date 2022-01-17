

@extends('layouts.guest')

@section('title', 'Welcome guest!')

@section('main')
    <div class="container-fluid" id="root">
        <div class="row">
            <div class="col-5">
                <img src="{{asset('img/hero-image.jpg')}}" alt="hero image" class="w-100">
            </div>
            <div class="col-7 text-right">
                <h1 class="section-title rounded p-3">This is an awesome blog !</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam labore veniam cupiditate, voluptatibus soluta corrupti vero eius iusto facilis vitae! Voluptatibus vel laboriosam quod, qui odio iste cumque corrupti consequatur!
                </p>
            </div>
        </div>
    </div>
@endsection
