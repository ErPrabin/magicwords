@extends('frontend.layouts.layout')
@section('content')
    <!-- navbar ends -->

    <!-- test -->

    <!-- test ends -->

    <!-- banner -->
    <div class="home-banner pb-5" style="height: auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="home-banner-text">
                        <h1>{!! strip_tags(getCData('Home Banner','synopsis')) !!}</h1>
                        <div class="home-banner-desc mt-3">
                            <p>
                               {!! getCData('Home Banner','description') !!}
                            </p>
                        </div>
                        <button class="btn mt-3 btn-index-banner">
                            Contact Us<i class="ps-3 fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-img">
                        <img src="{{ asset('images/component/'.getCData('Home Banner','image')) }}" alt="{{ config('app.name') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- banner ends -->
    <div class="services py-5">
        <div class="container">
            <div class="row">
                @foreach ($specifications as $specification)
                    <div class="col-md-3 p-3">
                        <div class="card p-4">
                            <div class="text-center">
                                <i class="fa {{ $specification->fa_icon }} fa-3x"></i>
                            </div>
                            <h4 class="text-center py-3">{{ $specification->title }}</h4>
                            <div class="text-center">
                                <p class="p-0 m-0">
                                    {!! strip_tags($specification->description) !!}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('frontend.partials.about')

    <!-- services -->
    <div class="services py-5">
        <div class="container">
            <h1>Services</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">
                {!! strip_tags(getCData('Service', 'synopsis')) !!}
            </p>
            <div class="row pt-5">
                @foreach ($services as $service)
                    <div class="col-md-4 p-4">
                        <div class="card p-3">
                            <img class="index-service-img" src="{{ asset('images/service/' . $service->image) }}"
                                alt="" />
                            <a href="">
                                <h4 class="py-3">{{ $service->title }}</h4>
                            </a>
                            <div>
                                <p class="p-0 m-0">
                                    {!! strip_tags($service->synopsis) !!}
                                </p>
                            </div>
                            <div class="text-center">
                                <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service ends -->

    <!-- technologies we work with -->
    <div class="technologies py-5">
        <div class="container">
            <h1>Technologies We Work With</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">
                {!! strip_tags(getCData('Technology', 'synopsis')) !!}
            </p>
            <div class="pt-4">
                <ul class="nav nav-tabs justify-content-center" id="myTab">
                    <li class="nav-item">
                        <a href="#all" class="nav-link active" data-bs-toggle="tab">All</a>
                    </li>
                    <li class="nav-item">
                        <a href="#mobile-development" class="nav-link" data-bs-toggle="tab">Mobile Development</a>
                    </li>
                    <li class="nav-item">
                        <a href="#frontend" class="nav-link" data-bs-toggle="tab">Frontend</a>
                    </li>
                    <li class="nav-item">
                        <a href="#backend" class="nav-link" data-bs-toggle="tab">Backend</a>
                    </li>
                    <li class="nav-item">
                        <a href="#deployment" class="nav-link" data-bs-toggle="tab">Deployment</a>
                    </li>
                    <li class="nav-item">
                        <a href="#database" class="nav-link" data-bs-toggle="tab">Database</a>
                    </li>
                </ul>
                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="all">
                        <div class="row">
                            @foreach ($technologies as $technology)
                                <div class="col-md-2 col-sm-4 text-center p-3">
                                    <img src="{{ asset('images/technology/' . $technology->iconkhgf) }}" alt="">
                                    <h6>HTML</h6>
                                </div>
                            @endforeach

                        </div>

                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-apple fa-3x"></i>
                            <h6>IOS</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-android fa-3x"></i>
                            <h6>ANDROID</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-js fa-3x"></i>
                            <h6>JAVASCRIPT</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-css3-alt fa-3x"></i>
                            <h6>CSS</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-react fa-3x"></i>
                            <h6>REACT</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-vuejs fa-3x"></i>
                            <h6>VUE JS</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-python fa-3x"></i>
                            <h6>PYTHON</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <img src="../assets/images/django.png" style="width: 58px; height: 58px" alt="django"
                                class="img-fluid" />

                            <h6>DJANGO</h6>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-php fa-3x"></i>
                            <h6>PHP</h6>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mobile-development">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-html5 fa-3x"></i>
                            <h4>HTML</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-apple fa-3x"></i>
                            <h4>IOS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-android fa-3x"></i>
                            <h4>ANDROID</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-js fa-3x"></i>
                            <h4>JAVASCRIPT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-css3-alt fa-3x"></i>
                            <h4>CSS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-react fa-3x"></i>
                            <h4>REACT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-vuejs fa-3x"></i>
                            <h4>VUE JS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-python fa-3x"></i>
                            <h4>PYTHON</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-django fa-3x"></i>
                            <h4>DJANGO</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-php fa-3x"></i>
                            <h4>PHP</h4>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="frontend">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-html5 fa-3x"></i>
                            <h4>HTML</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-apple fa-3x"></i>
                            <h4>IOS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-android fa-3x"></i>
                            <h4>ANDROID</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-js fa-3x"></i>
                            <h4>JAVASCRIPT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-css3-alt fa-3x"></i>
                            <h4>CSS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-react fa-3x"></i>
                            <h4>REACT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-vuejs fa-3x"></i>
                            <h4>VUE JS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-python fa-3x"></i>
                            <h4>PYTHON</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-django fa-3x"></i>
                            <h4>DJANGO</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-php fa-3x"></i>
                            <h4>PHP</h4>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="backend">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-html5 fa-3x"></i>
                            <h4>HTML</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-apple fa-3x"></i>
                            <h4>IOS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-android fa-3x"></i>
                            <h4>ANDROID</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-js fa-3x"></i>
                            <h4>JAVASCRIPT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-css3-alt fa-3x"></i>
                            <h4>CSS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-react fa-3x"></i>
                            <h4>REACT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-vuejs fa-3x"></i>
                            <h4>VUE JS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-python fa-3x"></i>
                            <h4>PYTHON</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-django fa-3x"></i>
                            <h4>DJANGO</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-php fa-3x"></i>
                            <h4>PHP</h4>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="deployment">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-html5 fa-3x"></i>
                            <h4>HTML</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-apple fa-3x"></i>
                            <h4>IOS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-android fa-3x"></i>
                            <h4>ANDROID</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-js fa-3x"></i>
                            <h4>JAVASCRIPT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-css3-alt fa-3x"></i>
                            <h4>CSS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-react fa-3x"></i>
                            <h4>REACT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-vuejs fa-3x"></i>
                            <h4>VUE JS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-python fa-3x"></i>
                            <h4>PYTHON</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-django fa-3x"></i>
                            <h4>DJANGO</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-php fa-3x"></i>
                            <h4>PHP</h4>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="database">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-html5 fa-3x"></i>
                            <h4>HTML</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-apple fa-3x"></i>
                            <h4>IOS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-android fa-3x"></i>
                            <h4>ANDROID</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-js fa-3x"></i>
                            <h4>JAVASCRIPT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-css3-alt fa-3x"></i>
                            <h4>CSS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-react fa-3x"></i>
                            <h4>REACT</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-vuejs fa-3x"></i>
                            <h4>VUE JS</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-python fa-3x"></i>
                            <h4>PYTHON</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <img src="../assets/images/django.png" style="width: 38px" alt="django"
                                class="img-fluid" />
                            <h4>DJANGO</h4>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center p-3">
                            <i class="fab fa-php fa-3x"></i>
                            <h4>PHP</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- technologies we work with ends -->

    <!-- our features -->
    <div class="features py-5">
        <div class="container">
            <h1 class="text-center">Our Features</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">
                {!! strip_tags(getCData('feature', 'synopsis')) !!}
            </p>
            <div class="row pt-4">
                @foreach ($features as $feature)
                    <div class="col-md-6 p-3">

                        <div class="d-flex">
                            <i class="fa fa-check pe-3 pt-2"></i>
                            <div class="heading-features">
                                <h3>{{ $feature->title }}</h3>
                                <div class="description-features text-muted pt-2">
                                    <p>
                                        {!! strip_tags($feature->description) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- our features ends-->

    @include('frontend.partials.testimonial', ['testimonials' => $testimonials])

    <!-- Contact -->
    @include('frontend.partials.contact')

    <!-- contact ends -->

    <!-- footer -->
@endsection
