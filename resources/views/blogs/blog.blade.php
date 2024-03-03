<!DOCTYPE html>
<html lang="en">
<head>
<title>csw</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/modal.css">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/4060136/screenshots/15314113/dribbel.gif">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="{{url('/')}}">c<span>s</span>w</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> <i class="fa-solid fa-bars"></i>
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
<li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
<li class="nav-item"><a href="{{url('/work')}}" class="nav-link">Work</a></li>
<li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
<li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>
    
<section class="hero-wrap degree-right js-fullheight">
<div class="home-slider js-fullheight owl-carousel">
<div class="slider-item js-fullheight" style="background-image:url(https://i.pinimg.com/originals/81/17/8b/81178b47a8598f0c81c4799f2cdd4057.gif);">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center">
<div class="col-md-12 ftco-animate">
<div class="absolute">
<h4 class="number" data-number="20">0</h4>
<p class="text-white" style="color: white;">More than a hundred successful projects</p>
</div>
<div class="text">
<h1 class="mb-4">zobir &amp; ofkir</h1>
<p>Hello, I'm Zobir Ofkir, a web and app developer.</p>
<p class="mb-0"><a href="{{url('/contact')}}#" class="btn btn-primary py-md-3 py-2 px-2 px-md-4">Contact Me</a></p>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="slider-item js-fullheight" style="background-image:url(https://user-images.githubusercontent.com/115187902/230700872-d5f44b85-56c7-4e27-80a4-6e2db901e60c.gif);">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center">
<div class="col-md-12 ftco-animate">
<div class="absolute">
<h4 class="number" data-number="5">0</h4>
<p class="text-white" style="color: white;">Years of Experienced</p>
</div>
<div class="text">
<h1 class="mb-4">zobir &amp; ofkir</h1>
<p>I'm specialist in php and laravel , and i like fastapi for making an api , and react-native for app developement</p>
<p class="mb-0"><a href="{{url('/contact')}}#" class="btn btn-primary py-md-3 py-2 px-2 px-md-4">Contact Me</a></p>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section" style="padding: 20px">
  <div class="container">
    <div class="row d-flex">
      @if (isset($data))
        @foreach ($data as $item)
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <h3 class="heading mb-3"><a href="#blogModal{{$item->id}}">{{$item->title}}</a></h3>
                <a href="#blogModal{{$item->id}}" class="block-20 img" style="background-image: url('{{$item->image_url}}');"></a>
                <div class="meta mb-3">
                  <div><a href="#blogModal{{$item->id}}">{{$item->date}}</a></div>
                  <div><a href="#blogModal{{$item->id}}">{{$item->middle_title}}</a></div>
                  <div><a href="#blogModal{{$item->id}}" class="meta-chat"><i class="fa-solid fa-star"></i> {{$item->stars}} </a></div>
                </div> 
                <p>{{substr($item->description, 0, 25) . '...'}}</p>
              </div>
            </div>
          </div>  

          <!-- Modal -->
          <div id="blogModal{{$item->id}}" class="modal" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center;">
            <div class="modal-content" style="max-width: 90%; max-height: 90%; overflow: auto; background-color: #fff; border-radius: 10px; padding: 20px;">
                <div class="text-center">
                    <h3 class="heading mb-3"><a href="">{{$item->title}}</a></h3>
                      <img src="{{$item->image_url}}" style="max-width: 100%; height: auto;" alt="">
                    <div class="meta mb-3">
                        <div><a href="#">{{$item->date}}</a></div>
                        <div><a href="#">{{$item->middle_title}}</a></div>
                        <div><a href="#" class="meta-chat"><i class="fa-solid fa-star"></i> {{$item->stars}} </a></div>
                    </div>
                    <p>{{$item->description, 0, 25}}</p>
                </div>
                <a href="#" class="btn-close">Close</a>
            </div>
        </div>
        @endforeach
      @endif
    </div>
  </div>
</section>

<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row mb-5">
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">csw</h2>
<p>Zobir Ofkir: Talented developer crafting elegant solutions with creativity, innovation, and a commitment to excellence.</p>
<ul class="mt-5 text-center" style="justify-content: center; align-items: center; display: flex;list-style: none;">
<li class="ftco-animate" style="justify-content: center; align-items: center; display: flex;list-style: none; padding: 10px;"><a href="https://twitter.com/Zobir_Ofkir"><i class="fa-brands fa-twitter"></i></a></li>
<li class="ftco-animate" style="justify-content: center; align-items: center; display: flex;list-style: none; padding: 10px;"><a href="https://web.facebook.com/zobir.ofkir.5/"><i class="fa-brands fa-facebook"></i></a></li>
<li class="ftco-animate" style="justify-content: center; align-items: center; display: flex;list-style: none; padding: 10px;"><a href="https://www.instagram.com/csw_zo/"><i class="fa-brands fa-instagram"></i></a></li>
<li class="ftco-animate" style="justify-content: center; align-items: center; display: flex;list-style: none; padding: 10px;"><a href="https://www.linkedin.com/in/zobir-ofkir-70b829296/?originalSubdomain=ma"><i class="fa-brands fa-linkedin"></i></a></li>
<li class="ftco-animate" style="justify-content: center; align-items: center; display: flex;list-style: none; padding: 10px;"><a href="https://github.com/zobirofkir"><i class="fa-brands fa-github"></i></a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4 ml-md-4">
<h2 class="ftco-heading-2">zobir</h2>
<ul class="list-unstyled">
<li><a href="{{url('/')}}#"><span class="fa fa-chevron-right mr-2"></span>home</a></li>
<li><a href="{{url('/about')}}#"><span class="fa fa-chevron-right mr-2"></span>about</a></li>
<li><a href="{{url('/work')}}#"><span class="fa fa-chevron-right mr-2"></span>work</a></li>
<li><a href="{{url('/blog')}}#"><span class="fa fa-chevron-right mr-2"></span>blog</a></li>
<li><a href="{{url('/contact')}}#"><span class="fa fa-chevron-right mr-2"></span>contact</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map"></span><span class="text">Imouzzer Kandar , Fès-Meknès</span></li>
<li><a href="{{url('/')}}#"><span class="icon fa fa-phone"></span><span class="text">+212 619920942</span></a></li>
<li><a href="{{url('/')}}#"><span class="icon fa fa-envelope pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="553c3b333a152c3a2027313a38343c3b7b363a38">contact@zobirofkir.com</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<p>
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved by <i class="fa fa-heart" aria-hidden="true"></i> <a target="blanc" href="https://zobirofkir.com" target="_blank">Zobir</a>
</p>
</div>
</div>
</div>
</footer>
  
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"853c4dfdae096663","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>