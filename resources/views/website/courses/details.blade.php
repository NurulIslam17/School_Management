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
                                    <img src="{{asset($detailsCourse->c_image )}}"  alt="not Found" style="height: 200px;" class="card-img-top rounded-0">

                                </div>

                                <div class="col-md-6">
                                    <h2>{{ $detailsCourse->c_title }}</h2>
                                    <h4>{{ $detailsCourse->t_name }}</h4>
                                    <p>Price: {{ $detailsCourse->c_fee }} Tk</p>
                                    <p>Duration: {{ $detailsCourse->c_duration }} Month</p>
                                    <p>Starting date: {{ $detailsCourse->c_start_date }}</p>
                                    <hr>
                                    @if($enrollStat == 1)
                                        <h5 class="text-success"> <span class="text-danger">*</span>You're already enrolled in this course</h5>
                                    @else
                                        <a href="{{ route('new.enroll',['id'=>$detailsCourse->id]) }}"  class="btn btn-success rounded-0">Enroll Now</a>

                                    @endif

                                </div>
                            </div>

                            <div class="row m-4">
                                {!! $detailsCourse->c_description !!}
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

