@extends('website.master')

@section('title')
    Home
@endsection


@section('body')
    {{--    Slider Section--}}
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="3800">

        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#slider" data-bs-slide-to="2" class=""></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{asset('/')}}website/images/wbslider4.jpg" style="height:550px;" alt="" class="w-100">

                <div class="carousel-caption">
                    <h1 class="text-light">Web Design</h1>
                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, incidunt,
                        nesciunt. Corporis dignissimos distinctio eaque ex magni nam necessitatibus vero?</p>
                    <a href="#" class="btn btn-success rounded-0"> Read More...</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/images/wbslider1.jpeg" style="height:550px;" alt="" class="w-100">
            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/images/wbslider5.jpg" style="height:550px;" alt="" class="w-100">
            </div>


        </div>
    </div>

    {{--    Course Secotion--}}

    <section class="py-5" style="background-color: #9c9393">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h3 class="text-center text-light">Our Favourite Courses</h3>
                    <p class="text-center text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid aut error iusto laborum nam officia quos sit suscipit.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="card shadow border border-0 rounded-0 mb-3">
                        <img src="{{asset('/')}}website/images/banner1.jpg" style="height: 250px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4>Responsive Web Design</h4>
                            <h5>Alex Benjamine</h5>
                            <p>Tk. 1200</p>
                            <p>Starting: 12.12.2022</p>
                            <hr>
                            <a href="" class="btn btn-success rounded-0">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow border border-0 rounded-0 mb-3">
                        <img src="{{asset('/')}}website/images/laravel.jpg" style="height: 250px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4>Web Development</h4>
                            <h5>Alice Clark</h5>
                            <p>Tk. 5200</p>
                            <p>Starting: 01.01.2023</p>
                            <hr>
                            <a href="" class="btn btn-success rounded-0">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow border border-0 rounded-0 mb-3">
                        <img src="{{asset('/')}}website/images/wbslider6.jpg" style="height: 250px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Sayeed Asadul</h5>
                            <p>Tk. 4200</p>
                            <p>Starting: 12.12.2022</p>
                            <hr>
                            <a href="" class="btn btn-success rounded-0">Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{--  Recent  Course Secotion--}}

    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h3 class="text-center">Recent Courses</h3>
                    <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid aut error iusto laborum nam officia quos sit suscipit.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="card shadow border border-0 rounded-0 mb-3">
                        <img src="{{asset('/')}}website/images/abc.png" style="height: 250px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4>Responsive Web Design</h4>
                            <h5>Alex Benjamine</h5>
                            <p>Tk. 1200</p>
                            <p>Starting: 12.12.2022</p>
                            <hr>
                            <a href="" class="btn btn-success rounded-0">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow border border-0 rounded-0 mb-3">
                        <img src="{{asset('/')}}website/images/swd.png" style="height: 250px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4>Web Development</h4>
                            <h5>Alice Clark</h5>
                            <p>Tk. 5200</p>
                            <p>Starting: 01.01.2023</p>
                            <hr>
                            <a href="" class="btn btn-success rounded-0">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow border border-0 rounded-0 mb-3">
                        <img src="{{asset('/')}}website/images/wbslider2.jpg" style="height: 250px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Sayeed Asadul</h5>
                            <p>Tk. 4200</p>
                            <p>Starting: 12.12.2022</p>
                            <hr>
                            <a href="" class="btn btn-success rounded-0">Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{--    Footer Section --}}
    <footer style="background-color: #0b0b0b">
        <section class="py-5">
            <div class="container text-light">

                <div class="row">

                    <div class="col-md-4">
                        <h4> Lorem ipsum dolor sit amet. </h4>
                        <p style="text-align: justify">Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem dolorum eligendi laboriosam obcaecati? Beatae mollitia nulla reiciendis suscipit veniam. sit amet, consectetur adipisicing elit. Autem dicta eius iusto laboriosam provident sequi sunt tempore vero? Sit, unde!</p>
                    </div>

                    <div class="col-md-4 ps-5">
                        <h4>Social links</h4>
                        <ul class="nav navbar-nav">
                            <li><a href="" class="nav-link text-secondary">Facebok</a></li>
                            <li><a href="" class="nav-link text-secondary">Whatsaap</a></li>
                            <li><a href="" class="nav-link text-secondary">Twitter</a></li>
                            <li><a href="" class="nav-link text-secondary">Linkedin</a></li>
                            <li><a href="" class="nav-link text-secondary">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>Contact With Us</h4>

                        <p class="pt-2">Office Address : </p>
                        <address>
                            House # 27, Road # 20, West Sewrapara, Mirpur.
                        </address>
                        <p class="pt-2">Headquarters: </p>
                        <address>
                            House # 232, Road # 220, Karwon Bazar, Dhaka.
                        </address>

                    </div>

                </div>

            </div>

        </section>
    </footer>

@endsection
