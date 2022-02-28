<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

$u = Session::get('id');
$user = DB::table('users')->where(['id'=>$u, 'role'=>"mahasiswa"])->first();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">

   <title>Welcome To Website | Sipil </title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">


</head>


<body data-spy="scroll" data-target=".fixed-top">



<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" class="img-fluid b-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
              </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="about.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="service.html">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="pricing.html">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="contact.html">Contact</a>
                    </li>
                    <?php
                        if($user != null){
                    ?>
                    <div class="dropdown nav-item">
                        <a class="nav-link smoth-scroll" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $user->nama ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Setting</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                    <?php
                        }else{
                    ?>
                    <div class="dropdown nav-item">
                        <a class="nav-link smoth-scroll" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('login-admin') }}">Login As Admin</a>
                            <a class="dropdown-item" href="{{ route('login') }}">Login As Mahasiswa</a>
                        </div>
                    </div>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN HEADER AREA END -->

<!--MAIN BANNER AREA START -->
<div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h1 class="banner-title">Register To Become a Civil Engineer</h1>
                            <p>We hope you enjoy our website. and be an exemplary worker</p>
                            <?php
                                if($user != null){
                            ?>
                            <br>
                            <br>
                            <?php
                                }else{
                            ?>
                                <a href="{{ route('login') }}" class="btn btn-white btn-circled">lets start</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')

    
    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Woow animtaion -->
    <script src="{{ asset('plugins/counterup/wow.min.js')}}"></script>
    <script src="{{ asset('plugins/counterup/jquery.easing.1.3.js')}}"></script>
     <!-- Counterup -->
    <script src="{{ asset('plugins/counterup/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/gmap3.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>   
    <!-- Contact Form -->
    <script src="{{ asset('plugins/jquery/contact.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>

  </body>
  </html>
