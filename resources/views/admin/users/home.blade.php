@extends('layouts.admin')

@section('title', 'Users list')

@section('main')
<ul class="list-unstyled px-1 mt-5 posts-container">
@foreach ($usersList as $user)
    <li class="d-flex justify-content-between align-items-center border-y-info py-3">
        <h5 class="mb-0">{{$user->id}} | {{$user->name}}</h3>
        <h5 class="mb-0">{{$user->email}}</h5>
        <h5 class="mb-0">
            <span class="role">Admin</span>
        </h5>
        <div class="icons-container d-flex">
            <i class="fas fa-edit fs-icon text-blue px-3"></i>
            <i class="fas fa-trash fs-icon text-danger"></i>
        </div>
    </li>
@endforeach
</ul>
@endsection
