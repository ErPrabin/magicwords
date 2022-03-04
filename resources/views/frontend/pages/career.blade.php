@extends('frontend.layouts.layout')
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    @include('frontend.partials.breadcrum',['title'=>'Career'])

    <!-- banner ends -->
    </section>

    <!-- about -->
    <div class="about py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 p-4">
                    <div class="about-text">
                        <h1>Build Your Career with us.</h1>
                        <div class="m-bar"></div>

                        <div class="about-index-description mt-3">
                            {!! getCData('career', 'description') !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <img src="{{ asset('images/component/' . getCData('career', 'image')) }}"
                        alt="{{ config('app.name') }}" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <!-- career -->
    <div class="career-vacancy py-5">
        <div class="container">
            <div class="row">
                @foreach ($careers as $career )
                    
                <div class="col-md-4 my-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card p-4">
                            <h5 class="m-0">{{ $career->title }}</h5>
                            <div class="text-muted vacancy-desc">
                               {{ strip_tags($career->synopsis) }}
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                {{-- <div class="vacancy-post">Front End</div> --}}

                                <a href="{{ route('careerdetail',$career->slug) }}" id="button" class="btn read-more-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>




    <!-- contact -->
    <div class="contact-us py-5" style="
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
