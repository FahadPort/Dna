<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'My Website')</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@stack('styles') <!-- Additional CSS -->
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('scripts') <!-- Additional JavaScript -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Nastaliq+Urdu:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>



