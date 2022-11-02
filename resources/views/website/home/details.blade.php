@extends('website.master')

@section('title')
    Course details
@endsection

@section('body')
    <section class="py-5" style="background-color: #726868">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-light text-center">Course details</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">

                    <div class="card rounded-0 shadow">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('/')}}website/images/wbslider2.jpg"  alt="not Found" class="card-img-top h-100 rounded-0">

                                </div>

                                <div class="col-md-6">
                                    <h2>Course Name</h2>
                                    <h4>Teacher Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur ipsum perspiciatis ullam. Ab debitis dolores ducimus et fuga maiores maxime minus, odio quibusdam quos sapiente tempore veniam vero voluptatem.</p>
                                    <p>Price: 2333 Tk</p>
                                    <p>Starting date: 12-12-2022</p>
                                    <hr>
                                    <a href="#" class="btn btn-success rounded-0">Buy Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

