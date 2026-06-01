@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fa fa-list"></i> Vehicle List</h5>
        <a href="{{ route('vehicles.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</a>
    </div>

    <div class="card-body">
        <table class="table table-hover table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Type</th>
                    <th>Plate #</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->owner_name }}</td>
                    <td><span class="badge bg-info">{{ $vehicle->type }}</span></td>
                    <td><strong>{{ $vehicle->plate_number }}</strong></td>
                    <td>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection