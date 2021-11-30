@extends('frontend.layouts.layout')
@section('content')

    @include('frontend.partials.breadcrum',['page'=>'Service'])

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
    @include('frontend.partials.contact_info')


@endsection
