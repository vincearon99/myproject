<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i class="fa fa-car"></i> Vehicle Records</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <!-- AYUSIN MO DIN ROUTES LATER -->
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-chart-line"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-users"></i> Users</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('vehicles.index') }}"><i class="fa fa-car"></i> Vehicles</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link">
                        Logout
                    </button>
                </form>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

@if(session('success'))
<div id="successToast" class="toast show position-fixed top-0 end-0 m-3 bg-success text-white">
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
    }, 2000); // 2 seconds
</script>
@endif

@if(session('error'))
<div id="errorToast" class="toast show position-fixed top-0 end-0 m-3 bg-danger text-white">
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

<!-- ✅ ADD THIS (IMPORTANT) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- ✅ ADD THIS (VERY IMPORTANT) -->
@stack('scripts')

</body>
</html>