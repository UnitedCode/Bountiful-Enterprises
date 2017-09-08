@extends('layouts.master')

@section('content')
    <div id="home">
        <div class="carousel slide" id="home-carousel" data-ride="carousel">
            <!-- Indicators-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#home-carousel" data-slide-to="0"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides-->
            <div class="carousel-inner">
                <div class="item active"><img src="http://via.placeholder.com/1600x900" alt=""></div>
                <div class="item"><img src="http://via.placeholder.com/1600x900" alt=""></div>
                <div class="item"><img src="http://via.placeholder.com/1600x900" alt=""></div>
            </div>
            <!-- Left and right controls--><a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-chevron-left fa-stack-1x"></i></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-chevron-right fa-stack-1x"></i></span><span class="sr-only">Next</span></a>
        </div>
        <div class="more-info container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-card" style="background-image: url('images/home/projects.jpg');">
                        <div class="info-card-description">
                            <div class="info-card-visible">
                                <h4>Projects</h4><i class="fa fa-chevron-up fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="info-card-hidden text-center">
                                <h3>
                                    View current and past <br>projects</h3>
                                <div class="read-more text-center"><a class="btn btn-primary" href="projects.html">Projects<i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card" style="background-image: url('images/home/about.jpg');">
                        <div class="info-card-description">
                            <div class="info-card-visible">
                                <h4>About Us</h4><i class="fa fa-chevron-up fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="info-card-hidden">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                <div class="read-more text-center"><a class="btn btn-primary" href="about.html">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card" style="background-image: url('images/home/contact.jpg');">
                        <div class="info-card-description">
                            <div class="info-card-visible">
                                <h4>Contact</h4><i class="fa fa-chevron-up fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="info-card-hidden text-center">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Main Office: </td>
                                        <td><a href="tel:4172762520">(417) 276-2520</a></td>
                                    </tr>
                                    <tr>
                                        <td>Accounts Payable: </td>
                                        <td><a href="tel:4172762578">(417) 276-2578</a></td>
                                    </tr>
                                    <tr>
                                        <td>Estimating: </td>
                                        <td><a href="tel:4172763219">(417) 276-3219</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="read-more text-center"><a class="btn btn-primary" href="contact.html">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection