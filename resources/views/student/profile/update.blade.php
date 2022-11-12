@extends('student.master')

@section('dashboard')

        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Edit Profile</h3>
                    </div>

                    <div class="card-header">
                        <form action="{{ route('update.profile.data') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <p class="text-success">{{ Session::get('message') }}</p>

                            <input type="hidden" name="updateById" value="{{ $editData->id }}">
                            <div class="row mt-3">
                                <label class="col-md-4" for="">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{ $editData->name }}" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-4" for="">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="{{ $editData->email }}" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-4" for="">Mobile</label>
                                <div class="col-md-8">
                                    <input type="text" name="mobile" value="{{ $editData->mobile }}" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-4" for="">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" class="form-control rounded-0" id="" cols="30" rows="4">
                                       {{ $editData->address }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-4" for="">Image</label>
                                <div class="col-md-5">
                                    <input type="file" name="image" class="form-control rounded-0">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset($editData->image)}}" alt="Not Found" style="height: 100px;width: 100px;">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-4" for=""></label>
                                <div class="col-md-8">
                                    <input type="submit" value="Update Profile" class="btn btn-success rounded-0">
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>

@endsection

