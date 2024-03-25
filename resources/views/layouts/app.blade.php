<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @php
    $settings = \App\Models\Settings::pluck('value', 'key')->toArray();
@endphp
<head>
    


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Emaar Properties') }} || Home</title>

    <!-- Favicons -->

    <link rel="shortcut icon" href="{{ asset('images/favicon/dream-favicon.webp') }}" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/dream-favicon.webp') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Raleway:300,400,500,600,700,800,900|Roboto:300,400,500,700" rel="stylesheet">
    
    <!-- =>> All Stylesheet <<= -->
    <!-- Bootstrap v3.3.6 Core CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />  
    <!-- Owl Carousel 2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}" />
    <!-- jquery-ui-1.12.0 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui-css/jquery-ui-1.12.0.min.css') }}" />
    <!-- Noice Slider (Price Range) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.nouislider.min.css') }}" />
    <!-- Animate 3.5.1 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
    <!--  Font Awesome 4.6.3 Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- Flat Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('flaticons/font/flaticon.css') }}" />

    <!-- Custom/Main Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header-menu-responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/dev_styles.css') }}" />

    @livewireStyles

</head>

<body>
 
    <!-- ALL SECTION INCLOSED TO THE WRAPPER -->
    <div class="wrapper">

        <!-- BEGIN LOADING -->
        <div id="loader" class="loader">
            <div class="implode">
                <div class="implode-in">
                    <div id="cover" class="acting"> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                        <span></span>
                    </div>
                </div>
            </div> <!-- /.implode -->
        </div> <!-- /#loader -->
        <!-- END LOADING -->
        @include('layouts.header')


       
            @yield('content')
       

        @include('layouts.footer')
        
    </div>
    
    @livewireScripts
    <!-- jQuery (necessary for Bootstrap's JavaScript plugin and others plugins) -->

    <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- jquery-ui-1.12.0 -->
    <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui-1.12.0.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap v3.3.6 -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel 2 -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Owl Carousel v1.3.2 -->
    <script type="text/javascript" src="{{ asset('js/owl-1.3.2/owl.carousel.min.js') }}"></script>
    <!-- WOW - v1.1.3 -->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Typer Js -->
    <script type="text/javascript" src="{{ asset('js/typed.min.js') }}"></script>
    <!-- Noice Slider (Price Range) -->
    <script src="{{ asset('js/jquery.nouislider.min.js') }}"></script> 
    <!-- jQuery Mobile Library -->
    <script type="text/javascript" src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>  
    <!-- Conatact Map -->
    <script type="text/javascript" src="{{ asset('js/map-script.js') }}"></script>

    <!-- Custom/Main Script here -->
    <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    
</body>

</html>
