@extends('website.master')

@section('title')
    Student Home
@endsection

@section('body')

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body rounded-0">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('student.dashboard') }}" class="nav-link border-bottom">Dashboard</a></li>
                        <li><a href="{{ route('student.profile') }}" class="nav-link border-bottom">Profile</a></li>
                        <li><a href="{{ route('all.dashboard.courses') }}" class="nav-link border-bottom">All Courses</a></li>
                        <li><a href="" class="nav-link border-bottom">Account</a></li>
                        <li><a href="{{ route('student.logout') }}" class="nav-link border-bottom">Logout</a></li>
                    </ul>

                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-body rounded-0">
                    @yield('dashboard')

                </div>
            </div>
        </div>
    </div>
@endsection
