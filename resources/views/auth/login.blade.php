<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 350px;">
        <h4 class="text-center mb-3">Login</h4>

    @if(session('success'))
        <div id="successBox" class="alert alert-success">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(function () {
                let success = document.getElementById('successBox');

                if(success){
                    success.style.transition = "0.5s";
                    success.style.opacity = "0";

                    setTimeout(() => {
                        success.remove();
                    }, 500);
                }
            }, 3000);
        </script>
    @endif

    @if(session('error'))
        <div id="alertBox" class="alert alert-danger">
            {{ session('error') }}
        </div>

        <script>
            setTimeout(function () {
                let alert = document.getElementById('alertBox');

                if(alert){
                    alert.style.transition = "0.5s";
                    alert.style.opacity = "0";

                    setTimeout(() => {
                        alert.remove();
                    }, 500);
                }
            }, 3000);
        </script>
    @endif

<form method="POST" action="/login">
    @csrf

    <input type="email" name="email" class="form-control mb-2" placeholder="Email">
    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-primary w-100">Login</button>
</form>

        <p class="text-center mt-2">
            No account? <a href="{{ route('register') }}">Register</a>
        </p>
    </div>

</div>

</body>
</html>