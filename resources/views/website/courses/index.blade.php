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

                @foreach($latestCourses as $latestCourse)
                    <div class="col-md-3">
                        <div class="card shadow border border-0 rounded-0 mb-3">
                            <img src="{{asset($latestCourse->c_image)}}" style="height: 200px;" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4>{{$latestCourse->c_title}}</h4>
                                <h5>Instructor : {{ $latestCourse->t_name }}</h5>
                                <p>Course Fee : {{ $latestCourse->c_fee }}</p>
                                <p>Starting Date : {{ $latestCourse->c_start_date }}</p>
                                <hr>
                                <a href="{{ route('course-details',['id'=>$latestCourse->id] )}}" class="btn btn-success rounded-0">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </section>
@endsection
