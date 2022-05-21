<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container d-flex">
        <form method="POST" action="{{ route('login.verify') }}"
            class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
            @csrf
            @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <small>
                        {{ session('success') }}
                    </small>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <h2 class="text-center">
                Login form
            </h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
                @error('password')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            @error('invalid_credentials')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <small>
                        {{ $message }}
                    </small>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            <div class="mt-3 text-center">
                <a href="{{ route('register.index') }}">registrarme</a>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
