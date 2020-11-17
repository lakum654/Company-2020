<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container" style="font-family: cursive;">
    <h2 class="text-center">Company</h2><br>
   <ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="fileupload">Upload File</a></li>
    <li class="nav-item"><a class="nav-link" href="companies">Company DataTable</a></li>
    <li class="nav-item"><a class="nav-link" href="employee">Employee DataTable</a></li>
    <li class="nav-item"><a class="nav-link" href="crud">Employee Crud</a></li>
    <li class="nav-item"><a class="nav-link" href="import_export">Import Export</a></li> 
    <li class="nav-item"><a class="nav-link" href="logout">Logout</a></li>    
   </ul>
   </div>
<h3 class="text-center text-uppercase">Welcome to Home</h3>
<div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3760624.0873092995!2d70.11911264177994!3d23.005977784791998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x395967c2a12d8a2d%3A0x2bd1fb90b3264970!2sPrathugadh%2C%20Gujarat%2C%20India!3m2!1d22.869522099999998!2d71.5545911!4m5!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!3m2!1d22.3038945!2d70.80215989999999!5e0!3m2!1sen!2sin!4v1605323670085!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</body>
</html>
