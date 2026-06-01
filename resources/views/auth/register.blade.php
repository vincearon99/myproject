<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width:400px;">
        <h4 class="text-center">Register</h4>
        
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/register">
    @csrf

    <input type="text" name="name" class="form-control mb-2" placeholder="Full Name">
    <input type="email" name="email" class="form-control mb-2" placeholder="Email">
    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-success w-100">Register</button>
</form>

        <p class="text-center mt-2">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>
    </div>
</div>

</body>
</html>