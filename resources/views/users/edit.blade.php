@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2">
    <input type="email" name="email" value="{{ $user->email }}" class="form-control mb-2">

    <button class="btn btn-primary">Update</button>
</form>
@endsection