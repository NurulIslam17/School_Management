@extends('website.master')

@section('title')
    Enroll
@endsection



@section('body')
    <section class="py-5">
        <div class="container">

            <div class="row bg-info">
                <div class="col">
                    <h3 class="text-center py-3">Your Selected Course is {{ $course->c_title }}</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mx-auto">

                    <div class="card card-body rounded-0">
                        <div class="row">
                            <div class="col-md-6 px-0 mx-0">
                                <img src="{{asset('/')}}website/images/enroll-now.jpg" class="py-0 my-0 w-100 h-100" alt="">
                            </div>
                            <div class="col-md-6 shadow d-flex align-items-center">
                                <div class="card card-body rounded-0">

                                    <h3 class="text-center">Enrollment</h3>
                                    <hr>

                                    <form action="{{ route('enroll.new.course',['id'=>$course->id]) }}" method="post">
                                        @csrf
                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Full Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" placeholder="Enter Full Name" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" name="email" placeholder="Enter Email" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Mobile</label>
                                            <div class="col-md-8">
                                                <input type="text" name="mobile" placeholder="Enter mobile" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4" for="">Payment</label>
                                            <div class="col-md-8">
                                                <input type="radio" name="enroll_type" checked value="Cash"> Cash
                                                <input type="radio" name="enroll_type" value="Online"> Online
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for=""></label>
                                            <div class="col-md-8">
                                                <input type="submit" value="Enroll This Course" class="btn btn-success rounded-0">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection

