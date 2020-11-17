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

<div class="container">
    <h3 class="text-center text-uppercase">Single Or Multiple File Upload</h3>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('single-upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for='file'>Select Single File</label>
                <input type="file" name="file" class="form-control-file"><br>
                @error('file')
                 {{ $message }}
                @enderror <br>
                <input type="submit" value="Upload" class="btn btn-warning">
            </form>
            @if(Session::has('message'))
                {{ Session::get('message') }}
            @endif
        </div>
        <div class="col-6">
            <form action="{{ url('multiple-upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for='file'>Select Multiple Files</label>
                <input type="file" name="files[]" class="form-control-file" multiple><br>
                @error('file')
                 {{ $message }}
                @enderror <br>
                <input type="submit" value="Upload" class="btn btn-success">
            </form>
            @if(Session::has('message'))
                {{ Session::get('message') }}
            @endif
        </div>
    </div>
    
</div>

</body>
</html>
