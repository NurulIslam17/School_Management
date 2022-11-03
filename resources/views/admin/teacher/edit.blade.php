@extends('admin.master')
@section('title')
    Edit Teacher
@endsection

@section('body')
    <section class="py-3 ">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="col-lg-10">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Edit Teacher Info</h2>
                            <h5 class="text-center text-success">{{session('success')}}</h5>

                            <form action="{{ route('update.teacher') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="update_teacher" value="{{$teacher->id}}">
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="t_name" value="{{ $teacher->t_name}}"  class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="t_email" value="{{ $teacher->t_email}}"  class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="t_phone" value="{{ $teacher->t_phone}}"   class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="t_password" value="{{ $teacher->t_password }}"  class="form-control" id="horizontal-password-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="t_description" class="form-control" cols="30" rows="5">
                                          {{ $teacher->description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="t_image" class="form-control-file">
                                    </div>
                                    <div class="col-sm-4">
                                        <img src=" {{ asset($teacher->t_image ) }}" style="height: 80px;width: 80px;" alt="Not_Found">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-success rounded-0 w-md">Update Teacher</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
