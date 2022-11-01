@extends('website.master')

@section('title')
    Home
@endsection


@section('body')
    <div class="carousel slide" data-bs-ride="carousel" dat-bs-interval="400">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{asset('/')}}website/images/wbslider4.jpg" style="height:550px;" alt="" class="w-100">
            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/images/wbslider1.jpeg" style="height:550px;" alt="" class="w-100">
            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/images/wbslider5.jpg" style="height:550px;" alt="" class="w-100">
            </div>


        </div>
    </div>
@endsection
