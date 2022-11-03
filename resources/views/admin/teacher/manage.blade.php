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
                    <p class="text-center text-success">{{ Session::get('message') }}</p>

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
                                    <td>
                                        <a href="{{route('edit.teacher',$teacher->id)}}">
                                            <i class="fa fa-edit btn btn-success rounded-0"></i>
                                        </a>

                                        <a href="{{route('delete.teacher',$teacher->id)}}">
                                            <i class="fa fa-trash btn btn-danger rounded-0"></i>
                                        </a>
                                        <a href="{{route('change.status',$teacher->id)}}">
                                            <i class="fa fa-{{$teacher->status == 1 ? 'check' : 'lock'}}  btn btn-{{$teacher->status == 1 ? 'warning' : 'dark'}}  rounded-0"></i>
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
