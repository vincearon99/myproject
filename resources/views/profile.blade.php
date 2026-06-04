@extends('layouts.app')

@section('content')

<div class="card shadow p-4" style="max-width:500px; margin:auto;">

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="text-center">

            <img src="{{ auth()->user()->profile_picture 
                ? asset('storage/' . auth()->user()->profile_picture) 
                : asset('images/default.png') }}"
                class="rounded-circle mb-3"
                width="100" height="100">

            <h5>{{ auth()->user()->name }}</h5>
            <p>{{ auth()->user()->email }}</p>
        </div>

        <input type="text"
            name="name"
            class="form-control mb-2"
            value="{{ auth()->user()->name }}"
            placeholder="Full Name">

        <input type="email"
            name="email"
            class="form-control mb-2"
            value="{{ auth()->user()->email }}"
            placeholder="Email">

        <input type="file"
            name="profile_picture"
            class="form-control mb-3">

        <button type="submit" class="btn btn-primary w-100">
            Update Profile
        </button>

    </form>

</div>

@endsection
