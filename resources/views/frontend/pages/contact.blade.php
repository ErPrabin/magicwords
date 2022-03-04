@extends('frontend.layouts.layout')
@section('title', getPageTitle($titles, 'carcontacteer'))
@section('meta')
    @include('frontend.partials.meta', [
        'page' => 'contact',
    ])
@endsection
@section('content')
    @include('frontend.partials.breadcrum', [
        'title' => 'Contact Us',
    ])

    </section>
    <!-- banner ends -->

    <div class="upper-part-contact">
        <div class="services py-5">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-4 p-4">
                        <div class="card text-center contact-section p-3">
                            <i class="fa fa-envelope fa-lg"></i>
                            <h4 class="py-3 m-0 text-center">Our Mail</h4>
                            <div>
                                <p class="p-0 m-0">{!! strip_tags(getCData('Email', 'description')) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-4">
                        <div class="card p-3 text-center contact-section">
                            <i class="fa fa-map-marker-alt fa-lg"></i>
                            <h4 class="py-3 m-0 text-center">
                                Our Address
                            </h4>
                            <div>
                                <p class="p-0 m-0">{!! strip_tags(getCData('Address', 'description')) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-4">
                        <div class="card text-center contact-section p-3">
                            <i class="fa fa-phone-alt fa-lg"></i>
                            <h4 class="py-3 m-0 text-center">Call Here</h4>
                            <div>
                                <p class="p-0 m-0">{!! strip_tags(getCData('Contact Number', 'description')) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 p-4">
                    <div id="map">
                        {!! getCData('Map', 'description') !!}
                    </div>
                </div>
                <div class="col-md-6 p-4">
                    <h1 class="head">Get In Touch With Us</h1>
                    <div class="m-bar"></div>


                    <form class="form" method="POST" action="{{ route('sendmail') }}">
                        @csrf
                        <div class="py-3">
                            <input type="text" name="name" required class="form-control" placeholder="Full Name" />
                        </div>
                        <div class="py-3">
                            <input type="text" name="email" required class="form-control" placeholder="Email" />
                        </div>
                        <div class="py-3">
                            <input type="text" name="subject" required class="form-control" placeholder="Subject" />
                        </div>
                        <div class="py-3">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <button class="btn mt-4 red-btn-color">
                            SUBMIT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
