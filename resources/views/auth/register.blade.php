<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container d-flex">
        <form action="{{ route('register.verify') }}" method="POST" class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
            @csrf
            <h2 class="text-center">
                Register form
            </h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
                @error('password_confirmation')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
            <div class="mt-3 text-center">
                <a href="{{ route('login.index') }}">Login</a>
            </div>

        </form>
    </div>
</body>

</html>
