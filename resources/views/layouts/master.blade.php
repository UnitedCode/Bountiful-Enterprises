<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bountiful Enterprises</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top affix">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img class="img-responsive" src="/images/navbar-logo.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {{ classActivePath('/') }}><a href="{{ route('home') }}">Home</a></li>
                <li class="dropdown {!! classActiveSegment(1, 'services') !!}" {{ classActiveSegment(1, 'services') }}><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li {{ classActivePath('services/detailing') }}><a href="{{ route('detailing') }}">Detailing</a></li>
                        <li {{ classActivePath('services/fabrication') }}><a href="{{ route('fabrication') }}">Fabrication</a></li>
                        <li {{ classActivePath('services/shipping') }}><a href="{{ route('shipping') }}">Shipping</a></li>
                        <li {{ classActivePath('services/erecting') }}><a href="{{ route('erecting') }}">Erecting</a></li>
                        <li {{ classActivePath('services/quality-control') }}><a href="{{ route('quality-control') }}">Quality Control</a></li>
                    </ul>
                </li>
                <li {{ classActivePath('projects') }}><a href="{{ route('projects') }}">Projects</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li {{ classActivePath('about') }}><a href="{{ route('about') }}">About</a></li>
                <li {{ classActivePath('contact') }}><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer>
    <div class="row">
        <!--Logo-->
        <div class="col-sm-3 footer-logo">
            <img class="img-responsive" src="/images/footer-logo.png">
        </div>
        <!--Footer links-->
        <div class="col-sm-6">
            <div class="row">
                <div class="col-xs-4">
                    <ul>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact		</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <ul>
                        <li><a href="{{ route('detailing') }}">Detailing</a></li>
                        <li><a href="{{ route('fabrication') }}">Fabrication</a></li>
                        <li><a href="{{ route('shipping') }}">Shipping</a></li>
                        <li><a href="{{ route('erecting') }}">Erecting</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <ul>
                        <li><a href="#">Customer Portal</a></li>
                        <li><a href="#">Employee Portal	</a></li>
                        <li><a href="{{ route('login') }}">Admin Portal</a></li>
                        <li><a href="#">Fabsuite</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="certifications">
                <ul>
                    <li>
                        <div class="cert"><img src="http://via.placeholder.com/58">
                            <p>Certification One</p>
                        </div>
                    </li>
                    <li>
                        <div class="cert"><img src="http://via.placeholder.com/58">
                            <p>Certification Three</p>
                        </div>
                    </li>
                </ul
            </div>
        </div>
    </div>
</footer>
<script src="/js/app.js"></script>
</body>
</html>