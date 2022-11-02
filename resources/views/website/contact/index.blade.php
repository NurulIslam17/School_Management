@extends('website.master')

@section('title')
    Contact
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">

                    <div class="card card-body rounded-0">
                        <div class="row">
                            <div class="col-md-6 px-0 mx-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7301.608628509339!2d90.3730577!3d23.789981700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b58914ed45%3A0xb88612d8fbfb11a9!2sWest%20Shewrapara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1667375057404!5m2!1sen!2sbd" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                            <div class="col-md-6 shadow d-flex align-items-center">
                                <div class="card card-body rounded-0">

                                    <h3 class="text-center">Contact us</h3>
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
                                            <label class="col-md-4" for="">Your Message</label>
                                            <div class="col-md-8">
                                                <textarea name="your_message" class="form-control rounded-0" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-2">
                                            <label class="col-md-4" for=""></label>
                                            <div class="col-md-8">
                                                <input type="submit" value="Send Message" class="btn btn-success rounded-0">
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

