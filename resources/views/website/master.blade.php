<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">

</head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <div class="container">
                <a href="#" class="navbar-brand">SMS#7</a>

                <div>
                    <ul class="navbar-nav ms-auto">
                        <li><a href="#" class="nav-link">Home</a></li>
                        <li><a href="#" class="nav-link">About</a></li>
                        <li><a href="#" class="nav-link">Courses</a></li>
                        <li><a href="#" class="nav-link">Contact</a></li>
                        <li><a href="#" class="nav-link">Login</a></li>
                        <li><a href="#" class="nav-link">Register</a></li>
                    </ul>
                </div>
            </div>

        </nav>



        @yield('body')



        {{--script Files Here--}}
        <script src="{{asset('/')}}website/js/jquery-3.6.0.min.js"></script>
        <script src="{{asset('/')}}website/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}website/js/action.js"></script>
    </body>
</html>
