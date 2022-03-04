@extends('frontend.layouts.layout')
@section('title', getPageTitle($titles, 'career-detail'))
@section('meta')
    @include('frontend.partials.meta', [
        'page' => 'career-detail',
    ])
@endsection
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    @include('frontend.partials.breadcrum', [
        'title' => $career->title,
    ])

    <!-- banner ends -->
    </section>
    <!-- banner ends -->


    <!-- job description -->
    <div class="job-description py-5">

        <div class="container">
            <div class="top-part">
                <h1>{{ $career->title }}</h1>
                <span class="text-muted">By {{ config('app.name') }}</span>
                <div class="skills text-muted pt-4">

                    <h4>Skills</h4>
                    <span>{{ $career->skill }}</span>
                </div>
            </div>
            <div class="middle-part py-5">
                {!! $career->description !!}
            </div>
        </div>
    </div>
    <!-- job description ends -->

    <!-- appilcation form -->
    <div class="application-form py-5">
        <div class="container">
            <h1>Apply now.</h1>
            <div class="bar"></div>
            <div class="form pt-5" id="form">
                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>Personal Information:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Your Full Name" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Your Email Address" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Your Phone Number" />
                        </div>
                    </div>
                </div>

                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>CV or Resume:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <input type="file" class="form-control" placeholder="Your Full Name" />
                        </div>
                    </div>
                </div>

                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>Additional Details:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <input type="text" class="form-control"
                                placeholder="How long will you be available for work?" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Notice Period" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Current Salary" />
                        </div>
                        <div class="py-3">
                            <input type="text" class="form-control" placeholder="Expected Salary" />
                        </div>
                    </div>
                </div>

                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>Cover Letter:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button class="btn red-btn-color">
                        Submit Application
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- application form ends -->

    <!-- contact -->
    {{-- @include('frontend.partials.contact') --}}
    <!-- contact ends -->

    <!-- footer -->
@endsection
