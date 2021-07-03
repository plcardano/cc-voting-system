<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>KBCF Voting System</title>
</head>
<body style="background-color: lightgray">
    @include('includes.navbar')

    @yield('content')
    

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    
</body>
</html>