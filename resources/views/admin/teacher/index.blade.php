@extends('admin.master')
@section('title')
    Add Teacher
@endsection

@section('body')
    <section class="py-3 ">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="col-lg-10">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Create New Teacher</h2>
                            <p class="text-center text-success">{{session('success')}}</p>

                            <form action="{{ route('create.teacher') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="t_name" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="t_email"  class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="t_phone"  class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="t_password" class="form-control" id="horizontal-password-input">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="t_description" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="t_image" class="form-control-file">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-success rounded-0 w-md">Add Teacher</button>
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
