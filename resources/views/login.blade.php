<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container" style="margin-top: 10rem">
        <form>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center pt-3">Login</h2>
                            <form action="/login" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="username" class="form-control" id="username"
                                        aria-describedby="username" name="username" placeholder="Masukan Username Anda" required>
                                    @if($errors->has('username'))
                                    <span class="error">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Masukan Password Anda" required>
                                    @if($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 d-grid">
                                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="{{ route('masyarakat-login')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="username" class="form-control" id="username" aria-describedby="username" name="username"
            placeholder="Masukan Username Anda">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda">
    </div>
    <div class="mb-3 d-grid">
        <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>

    </form>
    </div> --}}

















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>