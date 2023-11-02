<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/iconsmea.png') }}">
    <title>Perpustakaan | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
</head>


<style>
    body{
    background-image: url("{{ asset('image/2022-03-19.jpg') }}");
    background-size: cover;
    }
    .main {
        height: 100vh;
    }
    .login-box {
        width: 400px;
        padding: 30px;
        background-color: white
    }
    form div {
        margin-bottom: 15px;
    }
    .icon {
        width: 100px; /* Atur lebar gambar sesuai kebutuhan */
        height: auto; /* Biarkan tinggi otomatis agar gambar tidak terdistorsi */
        display: block;
        margin: 0 auto;
        max-width: 100%;
    }
    .center-text {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
    }
    .login-box .form-control {
        margin-top: 25px;
    }
    .login-box .box .form-control{
        background-color: #d9d9d9;
    }
</style>


<body>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        <div class="login-box">
            <img src="{{ asset('image/iconsmea.png') }}" alt="" class="icon">
                <div class="center-text">
                    <h4 class="mt-2">SMKN 1 SUBANG</h4>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="box">
                        <input type="text" name="username" id="username" placeholder="NIS/NIP" class="form-control" required>
                    </div>
                    <div class="box">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary form-control">Login</button>
                    </div>
                </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

