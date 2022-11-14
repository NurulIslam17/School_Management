@extends('teacher.master')

@section('title')
    Manage Enroll
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body shadow">

                    <h4 class="text-center">All Enrolled Information</h4>
                    <p class="text-center text-success">{{ Session::get('message') }}</p>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-info">
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Course</th>
                            <th>Student</th>
                            <th>Payment</th>
                            <th>Duration</th>
                            <th>Enrolled On</th>
                            <th>Starting Date</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($enrollInformation as $enrollInfo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($enrollInfo->course->c_image) }}" alt="Not Found" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>{{ $enrollInfo->course->c_title }}</td>
                                    <td>{{ $enrollInfo->student->name }}</td>
                                    <td>{{ $enrollInfo->payment_status }}</td>
                                    <td>{{ $enrollInfo->course->c_duration }} Month</td>
                                    <td>{{ $enrollInfo->enroll_date }}</td>
                                    <td>{{ $enrollInfo->course->c_start_date }}</td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

