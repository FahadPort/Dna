<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
   <!-- Add your CSS links here -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
   <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

 
    @stack('styles')
</head>
<body>
    @include('layouts.header') <!-- Optional header file -->

    <main>
        @yield('content') <!-- Main content goes here -->
    </main>

    @include('layouts.footer') <!-- Optional footer file -->

    <!-- Add your scripts here -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
     <!-- AOS JS -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    

     <script>
         // Initialize AOS
         AOS.init({
    duration: 1500, // Optional global override
    once: true, // Animates only once on scroll
});

     </script>

    @stack('scripts') <!-- Allows injecting additional scripts -->
</body>
</html>
