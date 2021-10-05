<!DOCTYPE html>
<html lang="en"> 

<head>
    <title>Sunday Etom Eni</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Portfolio Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">
    
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head> 

<body>
    
    <header class="header">
	    
        @if (request()->is('/', 'projects', 'contact', 'resume'))
            @include('layouts.header')
        @else
            @include('layouts.dasHeader')
        @endif


		<!--//top-bar-->

        @yield('contentHeader')
        
       
        
    </header><!--//header-->
        

    @yield('content')
    
    @if (!request()->is('contact', 'resume', 'see_login', 'dashboard'))
        @include('layouts.letsTalkFooter')
    @endif

    <footer class="footer text-light text-center py-2">
        <small class="copyright"> Copyright &copy; <a class="text-light text-link" href="https://wa.me/2348108786933" target="_blank">Sunday Etom Eni</a></small>
    </footer>

    <!-- Javascript -->
    <script type="text/javascript" src="assets/js/plugins/popper.min.js"></script> 
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    {{-- <script type="text/javascript" src="assets/plugins/flickity/flickity.pkgd.min.js"></script>  --}}

    <!-- Custom JS -->
    <script type="text/javascript" src="assets/js/main.js"></script>
    
    
</body>

</html> 

