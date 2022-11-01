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
    <body class="d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">SMS#7</a>

                <div>
                    <ul class="navbar-nav ms-auto">
                        <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                        <li><a href="{{ route('courses') }}" class="nav-link">Courses</a></li>
                        <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    </ul>
                </div>
            </div>

        </nav>



        @yield('body')



        {{--    Footer Section --}}
        <footer class="mt-auto" style="background-color: #0b0b0b">
            <section class="py-5">
                <div class="container text-light">

                    <div class="row">

                        <div class="col-md-4">
                            <h4> Lorem ipsum dolor sit amet. </h4>
                            <p class="text-secondary" style="text-align: justify">Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem dolorum eligendi laboriosam obcaecati? Beatae mollitia nulla reiciendis suscipit veniam. sit amet, consectetur adipisicing elit. Autem dicta eius iusto laboriosam provident sequi sunt tempore vero? Sit, unde!</p>
                        </div>

                        <div class="col-md-3 ps-5">
                            <h4>Social links</h4>
                            <ul class="nav navbar-nav">
                                <li><a href="" class="nav-link text-secondary"><i class="fab fa-facebook text-light me-2"></i> Facebok</a></li>
                                <li><a href="" class="nav-link text-secondary"><i class="fab fa-whatsapp text-light me-2"></i> Whatsaap</a></li>
                                <li><a href="" class="nav-link text-secondary"><i class="fab fa-twitter text-light me-2"></i> Twitter</a></li>
                                <li><a href="" class="nav-link text-secondary"><i class="fab fa-linkedin text-light me-2"></i> Linkedin</a></li>
                            </ul>
                        </div>

                        <div class="col-md-5">
                            <h4>Contact With Us</h4>

                            <p class="pt-2 pb-0 mb-0">Office Address</p>
                            <address class="text-secondary">
                                House # 27, Road # 20, West Sewrapara, Mirpur.
                            </address>
                            <p class="pt-2 mb-0">Headquarters</p>
                            <address class="text-secondary">
                                House # 232, Road # 220, Karwon Bazar, Dhaka.
                            </address>

                            <p class="text-secondary"><i class="fa fa-phone text-light me-2"></i>+08817365733536 &nbsp;&nbsp;|&nbsp;&nbsp; <i class="fa fa-envelope text-light me-2"></i> sms7@gmail.com</p>

                        </div>

                    </div>

                </div>

            </section>

            <section class="bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="py-3 mb-0 text-light text-center">&copy;Designed and Developed <i class="fa fa-heart text-dark me-2"></i>By <strong>Nurul Islam</strong>, 2022</p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>



        {{--script Files Here--}}
        <script src="{{asset('/')}}website/js/jquery-3.6.0.min.js"></script>
        <script src="{{asset('/')}}website/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}website/js/action.js"></script>
    </body>
</html>
