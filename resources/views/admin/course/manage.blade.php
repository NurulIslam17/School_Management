@extends('admin.master')

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
                        @foreach($allData as $allData)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{asset($allData->c_image)}}" alt="NotFound" style="height: 80px;width: 80px; border-radius: 50%">
                                </td>
                                <td>{{$allData->c_title}}</td>
                                <td>{{$allData->t_name}}</td>
                                <td>{{$allData->c_fee}}</td>
                                <td>{{$allData->c_start_date}}</td>
                                <td>{{$allData->c_duration}}</td>
                                <td>{{$allData->c_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{ route('change.course.status',['id'=>$allData->id]) }}" class="btn btn-{{$allData->c_status == 1 ? 'danger' : 'info'}} rounded-0" title="Details">
                                        {{$allData->c_status == 1 ? 'Disapprove' : 'Approve'}}
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

