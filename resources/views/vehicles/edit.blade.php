@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h5><i class="fa fa-edit"></i> Edit Vehicle</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('vehicles.update', $vehicle->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="owner_name" value="{{ $vehicle->owner_name }}" class="form-control mb-2">
            <input type="text" name="type" value="{{ $vehicle->type }}" class="form-control mb-2">
            <input type="text" name="plate_number" value="{{ $vehicle->plate_number }}" class="form-control mb-2">

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection