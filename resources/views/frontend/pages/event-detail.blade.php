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

    @if (session('flash_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('flash_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- banner ends -->
    </section>
    <!-- banner ends -->
    <!-- Event Hero -->
    <div class="event-hero bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('images/event/' . $event->image) }}" class="img-fluid rounded shadow"
                        alt="Event Image">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-4">{{ $event->title }}</h1>
                    <div class="event-info">
                        <div class="d-flex align-items-center mb-3">
                            <i class="far fa-calendar-alt me-2 text-primary"></i>
                            <span>{{ \Carbon\Carbon::parse($event->start_at)->format('F j, Y | h:i A') }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-users me-2 text-primary"></i>
                            <span>Capacity: 45/{{ $event->capacity }} seats</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                            <span>{{ $event->location }}</span>
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
            <div class="content text-justify">
                {!! $event->description !!}
            </div>
        </div>
    </div>

    <!-- Registration Form -->

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Register for Event</h3>
                        <div class="bar"></div>
                        <form method="POST" action="{{ route('event.register', $event->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Whatsapp Number</label>
                                    <input type="tel" class="form-control" name="contact_number" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="tel" class="form-control" name="location" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Gender</label>
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="m" required checked>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="f">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="other" id="other"
                                                value="o">
                                            <label class="form-check-label" for="female">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Special Requirements</label>
                                <textarea class="form-control" rows="3" name="note"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn red-btn-color px-5">Submit Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
