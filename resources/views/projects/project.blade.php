<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/4060136/screenshots/15314113/dribbel.gif">

</head>
<body class="bg-white" style="margin: 0; padding: 0;">
    <div class="container text-center" style="padding: 30px">
        <a href="{{url('/blog/create')}}" class="text-decoration-none text-black" style="font-weight: bold; text-transform: uppercase;"><h3>post blog</h3></a>
    </div>
    
    <div class="container mt-5" style="padding: 20px;">
        <div class="text-center">
            <a href="{{route("project")}}"><img src="https://i.gifer.com/CM9n.gif" style="width: 50%; border-radius: 30px; text-align: center;" ></a>
        </div>
        <form action="{{route('project')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="short_title" class="form-label">short_title</label>
                <input type="text" class="form-control" id="short_title" name="short_title" placeholder="short title">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="image"> 
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="date">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="url">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"  rows="3" placeholder="Enter description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8">
                <div class="card text-center">
                    @if (isset($data))
                        @foreach ($data as $item)
                            <img src="{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                            
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4>{{ $item->date }}</h4>
                                        <h5>{{ $item->short_title }}</h5>
                                        <h6>{{ $item->stars }}</h6>
                                    </div>
                                    <div>
                                        <a href="{{ url('/project/update', $item->id) }}" class="btn btn-warning">Update</a>
                                        <a href="{{ url('/project/delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div> 

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>csw
                </h6>
                <p>
                    This Is cms about my blog and it is developed by me .
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Our Sections
                </h6>
                <p>
                <a href="{{url('/')}}" class="text-reset">Home</a>
                </p>
                <p>
                <a href="{{url('/about')}}" class="text-reset">About</a>
                </p>
                <p>
                <a href="{{url('/work')}}" class="text-reset">Work</a>
                </p>
                <p>
                <a href="{{url('/blog')}}" class="text-reset">blog</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Our Projects
                </h6>
                <p>
                <a href="https://zobirofkir.com/rm-bg" class="text-reset">Rm-bg</a>
                </p>
                <p>
                <a href="https://zobirofkir.com/csw-movies" class="text-reset">Movies</a>
                </p>
                <p>
                <a href="https://zobirofkir.com/chat-boot-v1" class="text-reset">ChatBoot-v1</a>
                </p>
                <p>
                <a href="https://zobirofkir.com/chat-boot-v2" class="text-reset">ChatBoot-v2</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i> Imouzzer-Kandar Ain Soltane Morocco</p>
                <p>
                <i class="fas fa-envelope me-3"></i>
                    contact@zobirofkir.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 212 619920942</p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright 
        <a class="text-reset fw-bold" target="blanc" href="https://zobirofkir.com/">zobir</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
