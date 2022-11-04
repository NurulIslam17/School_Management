@extends('teacher.master')

@section('title')
    Manage courses
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body shadow">

                    <h4 class="text-center">All Courses Information</h4>
                    <p class="text-center text-success">{{ Session::get('message') }}</p>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-info">
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Course</th>
                            <th>Teacher</th>
                            <th>Fee</th>
                            <th>Starting Date</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{asset($course->c_image)}}" alt="NotFound" style="height: 80px;width: 80px; border-radius: 50%">
                                </td>
                                <td>{{$course->c_title}}</td>
                                <td>{{$course->t_name}}</td>
                                <td>{{$course->c_fee}}</td>
                                <td>{{$course->c_start_date}}</td>
                                <td>{{$course->c_duration}}</td>
                                <td>{{$course->c_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit btn btn-success rounded-0"></i>
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-trash btn btn-danger rounded-0"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-{{$course->c_status == 1 ? 'check' : 'lock'}}  btn btn-{{$course->c_status == 1 ? 'warning' : 'dark'}}  rounded-0"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

