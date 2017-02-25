<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="/design3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/design3/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!----
    <link href="/design3/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/design3/img/services-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                        <hr class="small">
                        <span class="subheading">Dont Stop, Keep Going !!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>Hello. Let's talk.</h1>

              <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
              nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
              cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>

              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
              nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
              cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
              ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

                   <div class="col-md-4 form-group">
                        <label for="Name">Name</label>                        
                        <input class="form-control" type="text" name="Name" id="Name">
                        
                    </div>  
                <div class="col-md-4 form-group">
                        <label for="Email">Email</label>                        
                        <input class="form-control" type="text" name="Email" id="Email">
                </div> 
                 <div class="col-md-12 form-group">
                        <label for="Subject">Subject</label>                        
                        <input class="form-control" type="text" name="Subject" id="Subject">
                        
                    </div> 
                 <div class="col-md-12 form-group">
                           <label  for="contactMessage">Message <span class="required">*</span></label>
                           <textarea class="form-control" name="contactMessage"  id="contactMessage" rows="15" cols="50" ></textarea>
                        </div>
                  <div class="col-md-2 form-group">
                           <button class="form-control">Submit</button>
                            <img src="design3/img/loader.gif"> 
                        </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  
                    
                    <p class="copyright text-muted">Copyright &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/design3/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/design3/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/design3/js/jqBootstrapValidation.js"></script>
    <script src="/design3/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="/design3/js/clean-blog.min.js"></script>

</body>

</html>
