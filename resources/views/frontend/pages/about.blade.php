@extends('frontend.layouts.layout')
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    @include('frontend.partials.breadcrum',['title'=>'About Us'])

    <!-- banner ends -->
    </section>

    <!-- about us   -->
    @include('frontend.partials.about')
    <!-- about us ends -->

    <!-- service copy  -->
    @include('frontend.partials.specification',['specification' => $specifications])
    
    <!-- service copy ends -->

    <!-- Why Choose Us -->
    <div class="why-us py-5">
        <div class="container">
            <h1>Why Choose Us</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">
                {!! strip_tags(getCData('Why Choose Us', 'synopsis')) !!}
            </p>
            <div class="row mt-5 m-auto">

                <div class="col-md-4">
                    @foreach ($whyus as $key => $w)
                        @if ($key % 2 == 0)
                            <div class="d-flex my-3">
                                <div class="text-end">
                                    <h4>{{ $w->title }}</h4>
                                        {!! $w->description !!}
                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/component/' . getCData('Why Choose Us', 'image')) }}"
                        alt="{{ config('app.name') }}" class="img-fluid" />
                </div>
                <div class="col-md-4">
                    @foreach ($whyus as $key => $w)
                        @if ($key % 2 == 1)
                            <div class="d-flex my-3">
                                <div class="text-end">
                                    <h4>{{ $w->title }}</h4>
                                        {!! $w->description !!}
                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us ends -->

    <!-- testimonials -->
    @include('frontend.partials.testimonial', ['testimonials' => $testimonials])

    <!-- testimonials ends -->

    <!-- contact -->
    @include('frontend.partials.contact')
    <!-- contact ends -->
@endsection
