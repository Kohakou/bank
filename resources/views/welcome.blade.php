@extends('layouts.design')
@section('content')
@include('tag._link')


    <div class="brand">Banking System</div>
    <div class="address-bar">My Dream Become a Godlike Programmer</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
                    
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="{{ url('/') }}">BANKING SYSTEM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                         <a href="{{ url('/about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/support') }}">Support</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
                     <li>
                            <div class="dropdown"><br>
                                    <span>For Employees</span>
                                <div class="dropdown-content">
                                <a href="{{ url('/employee') }}">LOG IN</a>
                                </div>
                                </div>
                    </li>
                </ul>
            </div>
               
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="design2/img/banner-bg.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="design2/img/mainheader.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="design2/img/slide-3.jpg" alt="">
                            </div>
                           
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h6 class="brand-name">Saving Money Bank </h6>
                    <hr class="tagline-divider">
                   
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Banking System 2017</p>
                </div>
            </div>
        </div>
    </footer>
@endsection