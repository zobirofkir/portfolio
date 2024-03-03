<!-- auths/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/4060136/screenshots/15314113/dribbel.gif">

</head>
<body style="background-color: black;">
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{url('/')}}" style="font-weight: 900;">csw</a>
            <button class="navbar-toggler" style="color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fa-rotate-180" style="color: #ffffff;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Adjusted: Added 'ms-auto' for margin-left: auto -->
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-weight: 500;" href="{{url('/blog')}}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-weight: 500;" href="{{url('/about')}}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-weight: 500;" href="{{url('/work')}}">Work</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <section class="vh-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://www.thisiscolossal.com/wp-content/uploads/2018/04/agif2opt.gif"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" name="name" class="form-control form-control-lg"
                                   placeholder="Enter your name" />
                            <label class="form-label text-white" for="form3Example3">name</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                                   placeholder="Enter password" />
                            <label class="form-label text-white" for="form3Example4">Password</label>
                        </div>
                        <button type="submit" class="btn btn" style="background-color: white; color: black;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
