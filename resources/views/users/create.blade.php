@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <input type="text" name="name" class="form-control mb-2" placeholder="Name">
    <input type="email" name="email" class="form-control mb-2" placeholder="Email">
    <input type="password" name="password" class="form-control mb-2" placeholder="Password">

    <button class="btn btn-success">Save</button>
</form>
@endsection