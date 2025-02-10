@extends('frontend.layouts.layout')
@section('title', getPageTitle($titles, 'event'))
@section('meta')
    @include('frontend.partials.meta', [
        'page' => 'event',
    ])
@endsection
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    @include('frontend.partials.breadcrum', ['title' => 'Event'])

    <!-- banner ends -->
    </section>

    <!-- career -->
    <div class="career-vacancy py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow-sm hover-effect">
                        <!-- Event Image -->
                        <div class="position-relative">
                            <img src="https://thebookwishesclub.com/media/event_photos/Falgun_4_pic.png" class="card-img-top" alt="Event Image"
                                style="height: 200px; object-fit: cover;">
                            <div
                                class="capacity-badge position-absolute top-0 end-0 m-2 bg-primary text-white px-2 py-1 rounded">
                                <small>Capacity: 50/100</small>
                            </div>
                        </div>

                        <!-- Event Details -->
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Professional Workshop</h5>
                            <div class="d-flex align-items-center text-muted mb-2">
                                <i class="far fa-calendar-alt me-2"></i>
                                <small>March 15, 2024 | 09:00 AM</small>
                            </div>
                            <p class="card-text">Join our intensive workshop designed for IT professionals to enhance their
                                skills in modern technologies.</p>
                        </div>

                        <!-- Register Button -->
                        <div class="card-footer bg-transparent border-top-0 text-center">
                            <button class="btn btn-primary w-75">Register Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-effect {
            transition: transform 0.3s ease;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
        }

        .capacity-badge {
            background-color: rgba(0, 123, 255, 0.9) !important;
        }
    </style>




    <!-- contact -->
    <div class="contact-us py-5"
        style="
                        background: url('https://template.hasthemes.com/mitech/assets/images/bg/home-infotechno-contact-bg.webp')
                            no-repeat center center;
                    ">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="top-contact-section ps-3">
                        <h1>
                            Obtaining further information by make a contact
                            with our experienced IT staffs.
                        </h1>
                    </div>
                    <div class="bottom-contact-section ps-3">
                        <span class="text-muted">
                            We're available 8 hours a day!,<br />
                            Contact to require adetailed analysis and
                            assessment of your plan.
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-right-index text-center">
                        <i class="fa fa-3x fa-phone"></i>
                        <div class="text-uppercase">
                            <span>Reach Out Now!</span>
                        </div>
                        <div class="contact-number-index">
                            <h1>1900 688668</h1>
                        </div>
                        <div class="contact-number-index">
                            <button class="btn red-btn-color">
                                Contact Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact ends -->
@endsection
