<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Craiglist</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('callie/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('callie/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('callie/css/style.css')}}" />
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    <style>
        .categories-select {
            margin-top: 10px;
            background-color: #1b1c1e;
            border: 2px solid #323335;
        }
    </style>
    @yield('style')
</head>
<body>
    @include('partials.header')
    
    @yield('content')

    @include('partials.footer')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('callie/js/jquery.min.js')}}"></script>
    <script src="{{asset('callie/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('callie/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('callie/js/main.js')}}"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    @yield('script')

</body>

</html>
