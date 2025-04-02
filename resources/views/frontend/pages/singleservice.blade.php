@extends('frontend.layouts.layout')
@section('title', getPageTitle($titles, $singleservice->slug))
@section('meta')
    @include('frontend.partials.meta', [
        'page' => $singleservice->slug,
    ])
@endsection
@section('content')
    @include('frontend.partials.breadcrum', [
        'title' => $singleservice->title,
    ])

    </section>
    <!-- banner ends -->

    <div class="single-service">
        <div class="container">
            <div class="row m-auto py-5">
                <div class="col-md-4 py-sm-5 py-md-0 py-lg-0 order-sm-2 order-md-2">
                    <div class="mt-10">
                        @foreach ($services as $service)
                            <div
                                class="service-list mt-2 box-shadow {{ $singleservice->slug == $service->slug ? 'active' : '' }}">
                                <a href="{{ route('singleservice', $service->slug) }}" class="text-decoration-none">
                                    <h5>{{ $service->title }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-8 service-detail-div-1 order-sm-1 order-md-1 mt-2">
                    <img src="{{ asset('images/service/' . $singleservice->image) }}" alt="{{ config('app.name') }}"
                        class="py-3 img-fluid" />

                    <div class="description mt-5 px-4">
                        <h1 class="py-3">{{ $singleservice->title }}</h1>
                        {!! $singleservice->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    @include('frontend.partials.contact')
    <!-- contact ends -->

@endsection
