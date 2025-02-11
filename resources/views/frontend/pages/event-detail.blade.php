@extends('frontend.layouts.layout')
@section('title', getPageTitle($titles, 'event-detail'))
@section('meta')
    @include('frontend.partials.meta', [
        'page' => 'event-detail',
    ])
@endsection
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    @include('frontend.partials.breadcrum', [
        'title' => 'Event Detail',
    ])

    <!-- banner ends -->
    </section>
    <!-- banner ends -->
    <!-- Event Hero -->
    <div class="event-hero bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://picsum.photos/800/500" class="img-fluid rounded shadow" alt="Event Image">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-4">Professional Web Development Workshop</h1>
                    <div class="event-info">
                        <div class="d-flex align-items-center mb-3">
                            <i class="far fa-calendar-alt me-2 text-primary"></i>
                            <span>March 25, 2024 | 09:00 AM</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-users me-2 text-primary"></i>
                            <span>Capacity: 45/100 seats</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                            <span>Tech Hub Building, Silicon Valley Street</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Description -->
    <div class="event-description py-5">
        <div class="container">
            <h3 class="mb-4">About This Event</h3>
            <div class="content">
                <p>Join us for an intensive web development workshop designed for aspiring developers. This hands-on session
                    will cover:</p>
                <ul>
                    <li>Modern JavaScript frameworks</li>
                    <li>Responsive design principles</li>
                    <li>Backend integration</li>
                    <li>Best practices in web development</li>
                </ul>
                <p>Perfect for beginners and intermediate developers looking to enhance their skills.</p>
            </div>
        </div>
    </div>

    <!-- Registration Form -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Register for Event</h3>
                        <div class="bar"></div>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Gender</label>
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male" required>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mb-3">
                                <label class="form-label">Select Preferred Date</label>
                                <div class="d-flex flex-wrap gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="preferred_date" id="date1" value="2024-03-25" required>
                                        <label class="form-check-label" for="date1">March 25, 2024</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="preferred_date" id="date2" value="2024-03-26">
                                        <label class="form-check-label" for="date2">March 26, 2024</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="preferred_date" id="date3" value="2024-03-27">
                                        <label class="form-check-label" for="date3">March 27, 2024</label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label">Special Requirements</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Submit Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
