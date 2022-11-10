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
                                <img src="{{asset('/')}}website/images/login2.jpg" class="w-100" alt="">
                            </div>
                            <div class="col-md-6 shadow d-flex align-items-center">
                                <div class="card card-body rounded-0">

                                    <h3 class="text-center">Login</h3>
                                    <hr>
                                    <p class="text-danger text-center">{{ Session::get('message') }}</p>

                                    <form action="{{ route('student-login') }}" method="post">
                                        @csrf
                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for="">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" name="email" placeholder="Enter Email" class="form-control rounded-0">
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
                                                <input type="submit" value="Login" class="btn btn-success rounded-0">
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
