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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/4060136/screenshots/15314113/dribbel.gif">

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

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<span class="subheading">Contact us</span>
<h2 class="mb-4">Have a Project?</h2>
<p>If You Have Build Any Project Just Contact Me</p>
</div>
</div>
<div class="row block-9">
<div class="col-md-8">
  @if (isset($name) && ($email))
  <div style="background: green; padding: 15px; border-radius: 10px; margin: 10px; text-align: center; color: white; font-weight: 900;" role="alert">
     Hello <strong>{{$name}}</strong> We Will Contact You Soon In This Email <strong>{{$email}}</strong>
  </div>
  @endif
<form action="{{url('/contact')}}" method="POST" class="p-4 p-md-5 contact-form">
  @csrf
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" style="border-radius: 10px" placeholder="Your Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="email" style="border-radius: 10px" placeholder="Your Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" style="border-radius: 10px" placeholder="Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea id cols="30" rows="7" name="message" style="border-radius: 10px" class="form-control" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Send Message" style="border-radius: 10px" class="btn btn-primary py-3 px-5">
</div>
</div>
</div>
</form>
</div>
<div class="col-md-4 d-flex pl-md-5">
<div class="row">
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text">
<p><span>Address:</span> Imouzzer-Kandar ‎Ain Soltane</p>
</div>
</div>
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text">
<p><span>Phone:</span> <a href="tel://1234567920">+212 619920942</a></p>
</div>
</div>
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text">
<p><span>Email:</span><span class="__cf_email__" data-cfemail="eb82858d84ab92849e9998829f8ec5888486">contact@zobirofkir.com</span></p>
</div>
</div>
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div class="text">
<p><span>Website</span> <a href="https://zobirofkir.com">zobirofkir.com</a></p>
</div>
</div>
</div>
</div>
<div class="col-md-12" style="margin-top: 20px">
<iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13272.693121059996!2d-5.014657849999999!3d33.7303351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f81adb97f7ca5%3A0xc4306de9d22dc415!2sImouzzer-Kandar!5e0!3m2!1sfr!2sma!4v1707929411779!5m2!1sfr!2sma" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> 
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"853c4dfec8566663","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>