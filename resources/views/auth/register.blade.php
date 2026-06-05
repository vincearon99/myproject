<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .register-card{
            width:100%;
            max-width:400px;
        }

        @media (max-width:576px){
            .register-card{
                margin:15px;
            }
        }
    </style>
</head>
<body class="bg-light">

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    
    <div class="card register-card shadow p-4">
        
        <h4 class="text-center mb-3">Register</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register">
            @csrf

            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>

            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>

            <button type="submit" class="btn btn-success w-100">
                Register
            </button>
        </form>

        <p class="text-center mt-3 mb-0">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>

    </div>

</div>

</body>
</html>
