<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css"> 
  <!-- Font Awesome CSS--> 
  <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css"> 
  <!-- Google fonts - Roboto + Roboto Slab--> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300"> 
  <!-- owl carousel--> 
  <link rel="stylesheet" href="/assets/vendor/owl.carousel/assets/owl.carousel.css"> 
  <link rel="stylesheet" href="/assets/vendor/owl.carousel/assets/owl.theme.default.css"> 
  <!-- animate.css--> 
  <link rel="stylesheet" href="/assets/vendor/animate.css/animate.css"> 
  <!-- theme stylesheet--> 
  <link rel="stylesheet" href="/assets/css/style.default.css" id="theme-stylesheet"> 
  <!-- Custom stylesheet - for your changes--> 
  <link rel="stylesheet" href="/assets/css/custom.css"> 
  <!-- Favicon--> 
  <link rel="shortcut icon" href="/assets/img/favicon.png">  
    <title>@yield('title')</title>
</head>
<body>

    @include('navigasi')
    @yield('content')
    @include('footer')
    
  <!-- JavaScript files--> 
  <script src="/assets/vendor/jquery/jquery.min.js"></script> 
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
  <script src="/assets/vendor/jquery.cookie/jquery.cookie.js"> </script> 
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script> 
  <script src="/assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script> 
  <script src="/assets/vendor/jquery.counterup/jquery.counterup.js"></script> 
  <script src="/assets/js/front.js"></script>  
</body>
</html>
