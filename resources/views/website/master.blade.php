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


    {{--    table--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DataTables -->
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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

                        @if(Session::get('student_id'))
                            <li class="dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >{{ Session::get('student_name') }}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('student.dashboard') }}" class="dropdown-item" > Dashboard</a></li>
                                    <li><a href="{{ route('student.logout') }}" class="dropdown-item" > Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('font-login') }}" class="nav-link">Login</a></li>
                            <li><a href="{{ route('font-register') }}" class="nav-link">Register</a></li>
                        @endif


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

        <!-- Required datatable js -->
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('/') }}admin/assets/js/pages/datatables.init.js"></script>

        <script src="{{ asset('/') }}admin/assets/js/app.js"></script>

    </body>
</html>
