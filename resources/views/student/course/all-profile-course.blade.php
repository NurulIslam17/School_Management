@extends('student.master')

@section('dashboard')
    <div class="row">
        <div class="col">
            <div class="card rounded-0">
                <div class="card-header bg-warning">
                    <h4 class="text-center">All Enrolled Course</h4>
                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Course</th>
                                <th>Teacher</th>
                                <th>Contact</th>
                                <th>Start On</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($enrollCourses as $enrollCourse)
                                <tr>
                                    <td>
                                        <img src="{{ $enrollCourse->c_image }}" style="height: 50px;width: 50px;" alt="">
                                    </td>
                                    <td>{{ $enrollCourse->c_title }}</td>
                                    <td>{{ $enrollCourse->teacher_id }}</td>
                                    <td>01XXXXXXXXX</td>
                                    <td>{{ $enrollCourse->c_start_date }}</td>
                                    <td>{{ $enrollCourse->enroll_status == 'Pending' ? 'Pending' : 'Active' }}</td>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection
