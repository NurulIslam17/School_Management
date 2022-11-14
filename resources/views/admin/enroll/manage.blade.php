@extends('admin.master')

@section('title')
    Manage Enrolled student
@endsection

@section('body')
    <div class="row">
        <div class="col">
            <div class="card rounded-0">
                <div class="card-header bg-warning">
                    <h4 class="text-center">All Enrolled Course</h4>
                </div>

                <div class="card-body">
                    <p class="text-center text-success">{{ Session::get('success') }}</p>
                    <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-info">
                            <th>Image</th>
                            <th>Course</th>
                            <th>Student</th>
                            <th>Student Contact</th>
                            <th>Start On</th>
                            <th>Payment Status</th>
                            <th>Enroll Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($allEnrollInfo as $enrollInfo)
                            <tr>
                                <td>
                                    <img src="{{ $enrollInfo->course->c_image }}" style="height: 50px;width: 50px;" alt="">
                                </td>
                                <td>{{ $enrollInfo->course->c_title }}</td>
                                <td>{{ $enrollInfo->student->name }}</td>
                                <td>{{ $enrollInfo->student->mobile }}</td>
                                <td>{{ $enrollInfo->course->c_start_date }}</td>
                                <td>{{ $enrollInfo->payment_status == 'Pending' ? 'Pending' : $enrollInfo->payment_status  }} {{ $enrollInfo->payment_status == 'Pending' ? ' ' : 'Tk.'  }}</td>
                                <td>{{ $enrollInfo->enroll_status === 'Pending' ? 'Pending' : 'Approved' }}</td>

                                <td>
                                    <a href="{{ route('enroll.status',['id'=>$enrollInfo->id]) }}" title="Enroll Status"> <i class="fa fa-{{ $enrollInfo->enroll_status === 'Pending' ? 'lock' : 'check' }} text-light bg-{{ $enrollInfo->enroll_status == 'Pending' ? 'danger' : 'success' }} p-2 rounded-0"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>


                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection
