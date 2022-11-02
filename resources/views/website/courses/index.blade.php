@extends('website.master')

@section('title')
    All-Courses
@endsection

@section('body')
    <section class="py-5" style="background-color: #494343">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-light">All Cources</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #f6f1f1">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-3 rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/images/abc.png" style="height: 200px;" alt="not Found" class="card-img-top rounded-0">

                        <div class="card-body">
                            <h3>Course 1</h3>
                            <p>Instructor Name</p>
                            <p>Price: 1233 Tk</p>
                            <p>Starting Date: 23-12-2022</p>
                            <hr>
                            <a href="{{ route('course-details') }}" class="btn btn-outline-success rounded-0">View More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/images/webdesin1.jpg" style="height: 200px;" alt="not Found" class="card-img-top rounded-0">

                        <div class="card-body">
                            <h3>Course 1</h3>
                            <p>Instructor Name</p>
                            <p>Price: 1233 Tk</p>
                            <p>Starting Date: 23-12-2022</p>
                            <hr>
                            <a href="{{ route('course-details') }}" class="btn btn-outline-success rounded-0">View More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/images/webdesin2.jpg" style="height: 200px;" alt="not Found" class="card-img-top rounded-0">

                        <div class="card-body">
                            <h3>Course 1</h3>
                            <p>Instructor Name</p>
                            <p>Price: 1233 Tk</p>
                            <p>Starting Date: 23-12-2022</p>
                            <hr>
                            <a href="{{ route('course-details') }}" class="btn btn-outline-success rounded-0">View More</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3 rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/images/workstyle1.png" style="height: 200px;" alt="not Found" class="card-img-top rounded-0">

                        <div class="card-body">
                            <h3>Course 1</h3>
                            <p>Instructor Name</p>
                            <p>Price: 1233 Tk</p>
                            <p>Starting Date: 23-12-2022</p>
                            <hr>
                            <a href="{{ route('course-details') }}" class="btn btn-outline-success rounded-0">View More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/images/wbslider2.jpg" style="height: 200px;" alt="not Found" class="card-img-top rounded-0">

                        <div class="card-body">
                            <h3>Course 1</h3>
                            <p>Instructor Name</p>
                            <p>Price: 1233 Tk</p>
                            <p>Starting Date: 23-12-2022</p>
                            <hr>
                            <a href="{{ route('course-details') }}" class="btn btn-outline-success rounded-0">View More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/images/contactus.jpg" style="height: 200px;" alt="not Found" class="card-img-top rounded-0">

                        <div class="card-body">
                            <h3>Course 1</h3>
                            <p>Instructor Name</p>
                            <p>Price: 1233 Tk</p>
                            <p>Starting Date: 23-12-2022</p>
                            <hr>
                            <a href="{{ route('course-details') }}" class="btn btn-outline-success rounded-0">View More</a>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
