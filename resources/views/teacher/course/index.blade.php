@extends('teacher.master')
@section('title')
    Add Course
@endsection

@section('body')
    <section class="py-3 ">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="col-lg-10">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Create New Course</h2>
                            <h5 class="text-center text-success">{{session('success')}}</h5>

                            <form action="{{ route('create.course') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="c_title" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Fee</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="c_fee"  class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Starting Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="c_start_date"  class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Duration</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="c_duration"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="c_image" class="form-control-file" id="horizontal-password-input">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-sm-12">
                                        <textarea name="c_description" class="form-control" id="summernote" style="height: 300px!important;" cols="30" rows="10"></textarea>
                                    </div>
                                </div>


                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-success rounded-0 w-md">Create Course</button>
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
