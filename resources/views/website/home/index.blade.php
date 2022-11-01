@extends('website.master')

@section('title')
    Home
@endsection


@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="3800">

        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#slider" data-bs-slide-to="2" class=""></li>
        </ol>

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
