<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    {{-- My Style --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>{{ $title }}</title>
</head>
<body style="background: #424bf5">
    <div class="dash-login">
        <div class="contain">
            <div class="cover">
                <div class="front">
                    <div class="text">
                        <span class="text-1">Welcome to Website <br>Administrator</span>
                        <span class="text-2"> Pepak Basa</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="login-alert">
                    @if (session()->has('loginError'))
                    <div class="alert alert-danger fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <form action="/" method="POST" class="form-login">
                    @csrf
                    <div class="form-content">
                        <div class="login-form">
                            <div class="title">Login</div>
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class='bx bxs-envelope'></i>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-box">
                                    <i class='bx bxs-user'></i>
                                    <input type="name" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" required value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-box">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                                </div>
                                <div class="button input-box">
                                    <input type="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                        <div class="login-pict">
                            <img src="img/profile.jpg" alt="login-pict">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- batas --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="login-form mt-4 p-4">
                <form action="/" method="post" class="row g-3">
                    @csrf
                    <h4 class="text-center">Dashboard</h4>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark float-end">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>