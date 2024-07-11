<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                
                </a>
            </div>
                <div class="container" style="width:1050px; " >
                    <div class="row">
                        <div class="col-6" style=" box-shadow: 0px 0px 4px 10px rgba(0, 0, 0, 0.25);justify-content:center;align-items:center; display:grid;border-radius:16px 0 0 16px; background-color:#D7D7D7; height: 550px;">
                        <div class="">
                              <img src="/assets/vectors/login-logo.svg" alt="">
                {{ $slot }}
                       </div>
            
                        </div>
                        <div class="col-6" style="box-shadow: 0px 0px 4px 10px rgba(0, 0, 0, 0.25); border-radius:0px 16px 16px 0px;background: #26282F; justify-content:center;  background-image: url('/assets/vectors/frame-login.svg');background-size: cover; 
    background-position: center; height: 550px;
    background-repeat: no-repeat; ">
    <div class="text" style="max-height:100px;"> 
        <h1 style="font-family: 'Poppins' ,sans-serif;
font-weight: 600;
font-size: 45px;
line-height: 90px;

color: #FFFFFF;
padding:25px 0 0 25px; 
">BIENVENUE</h1> 
                                <h2 style="color:white ;font-family: 'Poppins' ,sans-serif;font-size: 23px; padding:25px 0 0">à SABOUR EDUCATION</h2> </div>
<div class="img" style="justify-content:right; transform: translate(12px, -57px);
display:flex;"> <img src="/assets/vectors/img-login.svg" alt="" style=""></div>
                               

                                
                        </div>
                    </div>
                </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
