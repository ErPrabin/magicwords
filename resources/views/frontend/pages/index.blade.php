@extends('frontend.layouts.layout')
@section('content')


    <section class="banner-area bg-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content">
                        {{-- <span class="top-title">{{ getCData('Home Banner', 'synopsis') }}</span> --}}
                        <h1>{{ strip_tags(getCData('Home Banner', 'synopsis')) }}</h1>
                        <p>{{ getCData('Home Banner', 'description') }}</p>
                        <div class="banner-btn">
                            <a href="{{ route('contact') }}" class="default-btn">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner-image">
                        <img src="{{ asset('images/component/' . getCData('Home Banner', 'image')) }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area feature-area-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature overly-one">
                            <div class="overly-two">
                                <div class="title">
                                    <i class="flaticon-testing"></i>
                                    <h3>{{ strip_tags($service->title) }}</h3>
                                </div>
                                <p>{!! $service->description !!}</p>
                                <div class="feature-shape">
                                    <img src="{{ asset('assets/img/feature-shape.png') }} " alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="about-us-area pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/component/' . getCData('About Us', 'image')) }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="about-title">
                            <span>About Us</span>
                            <h2>{{ strip_tags(getCData('About Us', 'description')) }}</h2>
                        </div>
                        <div class="tab">
                            <ul class="tabs">
                                <li>
                                    Our Experience
                                </li>
                                <li>
                                    Our Approach
                                </li>
                            </ul>
                            <div class="tab_content">
                                <div class="tabs_item">
                                    {!! getCData('Our Experience', 'description') !!}
                                </div>
                                <div class="tabs_item">
                                    {!! getCData('Our Approach', 'description') !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="challenges-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title white-title">
                <span>Our Challenges</span>
                <h2>You Can Protect Your Organization’s Cybersecurity By Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-challenges overly-one">
                        <div class="overly-two">
                            <i class="flaticon-threat"></i>
                            <h3>Identifying Threats</h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <span class="flaticon-threat"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-challenges overly-one">
                        <div class="overly-two">
                            <i class="flaticon-cyber"></i>
                            <h3>Cyber Risk Assessment</h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <span class="flaticon-cyber"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-challenges overly-one">
                        <div class="overly-two">
                            <i class="flaticon-cyber-security-1"></i>
                            <h3>Testing Cyber Security</h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <span class="flaticon-cyber-security-1"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-challenges overly-one">
                        <div class="overly-two">
                            <i class="flaticon-password"></i>
                            <h3>Managing Cloud Security</h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <span class="flaticon-password"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Cyber Security Services</span>
                <h2>You Can Protect Your Organization’s Cybersecurity By Services Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img src="assets/img/services/services-1.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="services-content">
                            <h3><a href="services-details.html">Website Scanning</a></h3>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                <a href="services-details.html" class="read-more">
                                    Read More
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img src="assets/img/services/services-2.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="services-content">
                            <h3><a href="services-details.html">Malware Removal</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img src="assets/img/services/services-3.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="services-content">
                            <h3><a href="services-details.html">Cloud Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-img">
                            <a href="services-details.html">
                                <img src="assets/img/services/services-4.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="services-content">
                            <h3><a href="services-details.html">Data Protection</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="solution-area pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="solution-content">
                        <div class="solution-title">
                            <span>Working Process</span>
                            <h2>{{ strip_tags(getCData('Working Process', 'description')) }}</h2>
                        </div>
                        <div class="row">
                            @foreach ($working_process as $key => $wp)
                                <div class="col-lg-12 col-md-6">
                                    <div class="single-solution overly-one">
                                        <div class="overly-two">
                                            <h3>
                                                <a href="javascript:void(0)">
                                                    {{ $wp->title }}
                                                </a>
                                            </h3>
                                            {!! $wp->description !!}
                                            <span>0{{ $key + 1 }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="solution-img"
                        style="background-image: url('{{ asset('images/component/' . getCData('Working Process', 'image')) }}')">
                        <img src="{{ asset('images/component/' . getCData('Working Process', 'image')) }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="get-in-touch-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title white-title">
                <span>Get In Touch</span>
                <h2>Contact Us Today To Speak With An Expert About Your Specific Needs</h2>
            </div>
            <form class="get-in-touch-form">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="First-Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="Email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" id="Number">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control" id="Company">
                        </div>
                    </div>
                </div>
                <button type="submit" class="default-btn">
                    <span>Consultation</span>
                </button>
            </form>
        </div>
    </section> --}}


    <section class="protect-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="protect-content">
                        <div class="protect-title">
                            <span>Why Choose Us?</span>
                            <h2>{!! strip_tags(getCData('Why Choose Us', 'description')) !!}</h2>
                        </div>
                        <div class="row">
                            @foreach ($whyus as $w)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-challenges overly-one">
                                        <div class="overly-two">
                                            <i class="flaticon-database"></i>
                                            <h3>{{ $w->title }}</h3>
                                            {!! $w->description !!}
                                            <span class="flaticon-database"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="protect-img">
                        <img src="{{ asset('images/component/' . getCData('why-choose-us', 'image')) }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="testimonials">
                <span>What our customers say</span>
                <div class="testimonials-slider owl-carousel owl-theme">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonials-item">
                            <i class="flaticon-quote"></i>
                            {!! $testimonial->description !!}

                            <h3>{{ $testimonial->name }}</h3>
                            <span>{{ $testimonial->designation }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
