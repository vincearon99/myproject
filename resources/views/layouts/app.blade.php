<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            <i class="fa fa-car"></i> Vehicle Records
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fa fa-chart-line"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="fa fa-users"></i> Users
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vehicles.index') }}">
                        <i class="fa fa-car"></i> Vehicles
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <i class="fa fa-user"></i> Profile
                    </a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-white text-decoration-none">
                            <i class="fa fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<!-- Success Toast -->
@if(session('success'))
<div id="successToast"
     class="toast show position-fixed top-0 end-0 m-3 bg-success text-white"
     role="alert">
    <div class="toast-body">
        {{ session('success') }}
    </div>
</div>

<script>
setTimeout(() => {
    let toast = document.getElementById('successToast');

    if (toast) {
        toast.style.transition = "0.5s";
        toast.style.opacity = "0";

        setTimeout(() => {
            toast.remove();
        }, 500);
    }
}, 2000);
</script>
@endif

<!-- Error Toast -->
@if(session('error'))
<div id="errorToast"
     class="toast show position-fixed top-0 end-0 m-3 bg-danger text-white"
     role="alert">
    <div class="toast-body">
        {{ session('error') }}
    </div>
</div>

<script>
setTimeout(() => {
    let toast = document.getElementById('errorToast');

    if (toast) {
        toast.style.transition = "0.5s";
        toast.style.opacity = "0";

        setTimeout(() => {
            toast.remove();
        }, 500);
    }
}, 2000);
</script>
@endif

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Additional Scripts -->
@stack('scripts')

</body>
</html>
