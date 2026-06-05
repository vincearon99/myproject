@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center flex-wrap">
        <h5 class="mb-2 mb-md-0">
            <i class="fa fa-users"></i> Users
        </h5>

        <a href="{{ route('users.create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add User
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle text-center">

                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($users as $user)

                    <tr>

                        <td>
                            {{ $user->name }}
                        </td>

                        <td class="text-break">
                            {{ $user->email }}
                        </td>

                        <td>
                            {{ $user->created_at->format('M d, Y h:i A') }}
                        </td>

                        <td>

                            <div class="d-flex flex-column flex-md-row justify-content-center gap-1">

                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm w-100"
                                            onclick="return confirm('Delete this user?')">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="4">
                            No users found.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<style>

@media (max-width: 768px) {

    .table {
        font-size: 13px;
    }

    .card-header {
        text-align: center;
    }

    .card-header .btn {
        width: 100%;
        margin-top: 10px;
    }

    .table td,
    .table th {
        white-space: nowrap;
    }

}

</style>

@endsection
