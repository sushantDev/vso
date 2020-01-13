<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Sushant">

    <title>Vidhya Sathi Online</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css/modern-business.css') }}" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-nav fixed-top" style="opacity:0.9; height:105px">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="{{ asset('frontend/images/logoo.jpeg') }}" height=80px width=150px>
        </a>
        <div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="font-size:20px">
                <li class="nav-item">
                    <a class="nav-link" style="color:#fdc351;" href="{{ route('about-us') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fdc351;" href="{{ route('our-courses') }}">Our Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fdc351;" href="{{ route('faq') }}">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fdc351;" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item ">
                    <a href="{{ route('login') }}">
                        <button class="btn my-2 my-sm-0 " type="submit" style="background-color:#02539C;color:rgba(255,255,255,0.5)"> Login</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
