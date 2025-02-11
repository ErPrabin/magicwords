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
    <!-- Event Toggle Section -->
    <div class="event-filter py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Our Events</h2>
                <p class="text-muted">Discover our upcoming and past professional events</p>
            </div>
            <div class="filter-buttons d-flex justify-content-center gap-4">
                <button class="custom-filter-btn active" id="upcoming-events">
                    <span class="btn-text">Upcoming Events</span>
                    <span class="badge">5</span>
                </button>
                <button class="custom-filter-btn" id="past-events">
                    <span class="btn-text">Past Events</span>
                    <span class="badge">12</span>
                </button>
            </div>
        </div>
    </div>
    <!-- career -->
    <div class="events">
        <div id="upcomming" class="career-vacancy py-5">
            <div class="container">
                <div class="row" id="event-container">
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 shadow-sm hover-effect">
                            <!-- Event Image -->
                            <div class="position-relative">
                                <img src="https://thebookwishesclub.com/media/event_photos/Falgun_4_pic.png"
                                    class="card-img-top" alt="Event Image" style="height: 200px; object-fit: cover;">
                                <div
                                    class="capacity-badge position-absolute top-0 end-0 m-2 red-btn-color text-white px-2 py-1 rounded">
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
                                <p class="card-text">Join our intensive workshop designed for IT professionals to enhance
                                    their
                                    skills in modern technologies.</p>
                            </div>

                            <!-- Register Button -->
                            <div class="card-footer bg-transparent border-top-0 text-center">
                                <button class="btn red-btn-color w-75">Register Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="past" class="career-vacancy py-5 d-none">
            <div class="container">
                <div class="row" id="event-container">
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 shadow-sm hover-effect">
                            <!-- Event Image -->
                            <div class="position-relative">
                                <img src="https://thebookwishesclub.com/media/event_photos/Falgun_4_pic.png"
                                    class="card-img-top" alt="Event Image" style="height: 200px; object-fit: cover;">
                                <div
                                    class="capacity-badge position-absolute top-0 end-0 m-2 red-btn-color text-white px-2 py-1 rounded">
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
                                <p class="card-text">Join our intensive workshop designed for IT professionals to enhance
                                    their
                                    skills in modern technologies.</p>
                            </div>

                            <!-- Register Button -->
                            <div class="card-footer bg-transparent border-top-0 text-center">
                                <button class="btn red-btn-color w-75">Register Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 shadow-sm hover-effect">
                            <!-- Event Image -->
                            <div class="position-relative">
                                <img src="https://thebookwishesclub.com/media/event_photos/Falgun_4_pic.png"
                                    class="card-img-top" alt="Event Image" style="height: 200px; object-fit: cover;">
                                <div
                                    class="capacity-badge position-absolute top-0 end-0 m-2 red-btn-color text-white px-2 py-1 rounded">
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
                                <p class="card-text">Join our intensive workshop designed for IT professionals to enhance
                                    their
                                    skills in modern technologies.</p>
                            </div>

                            <!-- Register Button -->
                            <div class="card-footer bg-transparent border-top-0 text-center">
                                <button class="btn red-btn-color w-75">Register Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 shadow-sm ">
                            <!-- Event Image -->
                            <div class="position-relative">
                                <img src="https://thebookwishesclub.com/media/event_photos/Falgun_4_pic.png"
                                    class="card-img-top" alt="Event Image" style="height: 200px; object-fit: cover;">
                                <div
                                    class="capacity-badge position-absolute top-0 end-0 m-2 red-btn-color text-white px-2 py-1 rounded">
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
                                <p class="card-text">Join our intensive workshop designed for IT professionals to enhance
                                    their
                                    skills in modern technologies.</p>
                            </div>

                            <!-- Register Button -->
                            <div class="card-footer bg-transparent border-top-0 text-center">
                                <button class="btn red-btn-color w-75">Register Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .event-filter {
            background-color: #f8f9fa;
        }

        .custom-filter-btn {
            padding: 15px 30px;
            border: 2px solid #77af3a;
            background: transparent;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            color: #77af3a;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .custom-filter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.2);
        }

        .custom-filter-btn.active {
            background: #77af3a;
            color: white;
        }

        .custom-filter-btn .badge {
            background: #77af3a;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            margin-left: 10px;
            font-weight: 500;
        }

        .custom-filter-btn.active .badge {
            background: white;
            color: #77af3a;
        }

        @media (max-width: 576px) {
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }

            .custom-filter-btn {
                width: 100%;
                max-width: 250px;
                margin-bottom: 10px;
            }
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
