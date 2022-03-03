@extends('frontend.layouts.layout')
@section('content')
    @include('frontend.partials.breadcrum',['title'=>'Contact Us'])

    </section>
    <!-- banner ends -->

    <div class="contact py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 p-4">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 p-4">
                    <h1>Get In Touch With Us</h1>

                    <div class="form">
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Full Name" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Email" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Subject" />
                        </div>
                        <div class="py-3">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button class="btn mt-4 contact-sub-btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
