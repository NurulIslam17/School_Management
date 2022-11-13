@extends('student.master')

@section('dashboard')
    <div class="row">
        <div class="col">
            <div class="card rounded-0">
                <div class="card-header bg-warning">
                    <h4 class="text-center">All Enrolled Course</h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr class="bg-info">
                                <th>Image </th>
                                <th>Name </th>
                                <th>Teacher </th>
                                <th>Phone </th>
                                <th>Status </th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($enrollCourses as $enrollCourse)
                                <tr>
                                    <td>
                                        <img src="{{ $enrollCourse->c_image  }}" style="height: 50px;width: 50px;" alt="">
                                    </td>
                                    <td>{{ $enrollCourse->c_title  }}</td>
                                    <td>{{ $enrollCourse->teacher_id  }}</td>
                                    <td>{{ $enrollCourse->teacher_id  }}</td>
                                    <td>{{ $enrollCourse->enroll_status == 'Pending' ? 'Pending' : 'Active'  }}</td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
