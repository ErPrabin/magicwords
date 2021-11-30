@extends('frontend.layouts.layout')
@section('content')


    @include('frontend.partials.breadcrum',['page'=>'About Us'])

    <section class="about-us-area pt-70 pb-70">
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

    {{-- <section class="solution-area pb-70">
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
    </section> --}}
    <section class="protect-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="protect-img">
                        <img src="{{ asset('images/component/' . getCData('why-choose-us', 'image')) }}" alt="Image">
                    </div>
                </div>
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
    @include('frontend.partials.contact_info')
@endsection
