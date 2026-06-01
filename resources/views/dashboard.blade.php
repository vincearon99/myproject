@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card shadow p-3">
            <h5>Total Vehicles</h5>
            <canvas id="vehicleChart" height="100"></canvas>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow p-3">
            <h5>Total Users</h5>
            <canvas id="userChart" height="100"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
new Chart(document.getElementById('vehicleChart'), {
    type: 'bar',
    data: {
        labels: ['Vehicles'],
        datasets: [{
            label: 'Count',
            data: [{{ $vehicles ?? 0 }}]
        }]
    }
});

new Chart(document.getElementById('userChart'), {
    type: 'bar',
    data: {
        labels: ['Users'],
        datasets: [{
            label: 'Count',
            data: [{{ $users ?? 0}}]
        }]
    }
});
</script>
@endpush