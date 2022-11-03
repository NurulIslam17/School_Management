@extends('admin.master')
@section('title')
    Manage Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body shadow">

                    <h4 class="text-center">All Teacher Information</h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="bg-info">
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{$teacher->t_image}}" alt="NotFound" style="height: 80px;width: 80px; border-radius: 50%">
                                    </td>
                                    <td>{{$teacher->t_name}}</td>
                                    <td>{{$teacher->t_email}}</td>
                                    <td>{{$teacher->t_phone}}</td>
                                    <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>{{$teacher->t_name}}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
