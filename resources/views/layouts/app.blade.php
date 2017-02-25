<!DOCTYPE html>
<!-------1st design---------------->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   

    <!-- Styles -->

        <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
 
    
    
 @yield('content')
  
   
    <!-- Scripts -->
            <script src="/js/bootstrap.js"></script>

        <script src="/js/jquery-3.1.1.js"></script>

    <script src="/js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>
