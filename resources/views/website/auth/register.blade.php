@extends('website.master')

@section('title')
    Register
@endsection

@section('body')
    @extends('website.master')

@section('title')
    Login
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">

                    <div class="card card-body rounded-0">
                        <div class="row">
                            <div class="col-md-6 px-0 mx-0">
                                <img src="{{asset('/')}}website/images/register.jpg" class="py-0 my-0 w-100 h-100" alt="">
                            </div>
                            <div class="col-md-6 shadow d-flex align-items-center">
                                <div class="card card-body rounded-0">

                                    <h3 class="text-center">Register</h3>
                                    <hr>

                                    <form action="">
                                        @csrf
                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Full Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="full_name" placeholder="Enter Full Name" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" name="email" placeholder="Enter Email" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Phone</label>
                                            <div class="col-md-8">
                                                <input type="text" name="phone" placeholder="Enter Phone" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4" for="">Password</label>
                                            <div class="col-md-8">
                                                <input type="password" name="password" placeholder="Enter Password" class="form-control rounded-0">
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for=""></label>
                                            <div class="col-md-8">
                                                <input type="submit" value="Register" class="btn btn-success rounded-0">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection

@endsection
