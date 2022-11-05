@extends('teacher.master')

@section('title')
    Course Detail
@endsection

@section('body')
    <div class="row">
        <div class="col">

            <div class="card rounded-0 shadow" style="border: 2px solid #8e8b8b">

                <div class="card-header bg-info">
                    <h3 class="text-center">Course Details Information</h3>
                </div>

                <div class="card-body">

                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <h4> <strong>Course Name: </strong> {{$courseDetails->c_title}}</h4>
                            <h4> <strong>Course Fee: </strong> {{$courseDetails->c_fee}} TK.</h4>
                            <h4> <strong>Course Start: </strong> {{$courseDetails->c_start_date}}</h4>
                            <h4> <strong>Course Duration: </strong> {{$courseDetails->c_duration}} Month</h4>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset($courseDetails->c_image)}}" alt="Not_found" style="height: 200px;width: 200px;">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h3 class="text-center">Details</h3>
                            <hr>
                            {!! $courseDetails->c_description !!}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
