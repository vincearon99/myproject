@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h5><i class="fa fa-plus"></i> Add Vehicle</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('vehicles.store') }}">
            @csrf

            <input type="text" name="owner_name" class="form-control mb-2" placeholder="Owner Name">
            <input type="text" name="type" class="form-control mb-2" placeholder="Vehicle Type">
            <input type="text" name="plate_number" class="form-control mb-2" placeholder="Plate Number">

            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection