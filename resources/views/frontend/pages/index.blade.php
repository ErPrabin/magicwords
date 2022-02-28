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
                        <h1>Your Digital Branding With Us.</h1>
                        <div class="home-banner-desc mt-3">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <button class="btn mt-3 btn-index-banner">
                            Contact Us<i class="ps-3 fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-img">
                        <img src="../assets/images/aboutus.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- banner ends -->

   @include('frontend.partials.about')

    <!-- services -->
    <div class="services py-5">
        <div class="container">
            <h1>Services</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">
                For your very specific industry, we have highly-tailored IT
                solutions.
            </p>
            <div class="row pt-5">
                <div class="col-md-4 p-4">
                    <div class="card p-3">
                        <img class="index-service-img" src="../assets/images/service.svg" alt="" />
                        <h4 class="py-3">Web development</h4>
                        <div>
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based on the amount you're
                                willing to spend.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card p-3">
                        <img class="index-service-img" src="../assets/images/service.svg" alt="" />
                        <h4 class="py-3">Web development</h4>
                        <div>
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based on the amount you're
                                willing to spend.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card p-3">
                        <img class="index-service-img" src="../assets/images/service.svg" alt="" />
                        <h4 class="py-3">Web development</h4>
                        <div>
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based on the amount you're
                                willing to spend.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card p-3">
                        <img class="index-service-img" src="../assets/images/service.svg" alt="" />
                        <h4 class="py-3">Web development</h4>
                        <div>
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based on the amount you're
                                willing to spend.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card p-3">
                        <img class="index-service-img" src="../assets/images/service.svg" alt="" />
                        <h4 class="py-3">Web development</h4>
                        <div>
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based on the amount you're
                                willing to spend.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-4">
                    <div class="card p-3">
                        <img class="index-service-img" src="../assets/images/service.svg" alt="" />
                        <h4 class="py-3">Web development</h4>
                        <div>
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based on the amount you're
                                willing to spend.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="" class="readmore-circle text-white"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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
                For your very specific industry, we have highly-tailored IT
                solutions.
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
                            <div class="col-md-2 col-sm-4 text-center p-3">
                                <i class="fab fa-html5 fa-3x"></i>
                                <h6>HTML</h6>
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
                For your very specific industry, we have highly-tailored IT
                solutions.
            </p>
            <div class="row pt-4">
                <div class="col-md-6 p-3">
                    <div class="d-flex">
                        <i class="fa fa-check pe-3 pt-2"></i>
                        <div class="heading-features">
                            <h3>Warranty Management IT</h3>
                            <div class="description-features text-muted pt-2">
                                <p>
                                    Our service offerings enhance customer
                                    experience throughout secure & highly
                                    functional end-to-end warranty
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex">
                        <i class="fa fa-check pe-3 pt-2"></i>
                        <div class="heading-features">
                            <h3>Warranty Management IT</h3>
                            <div class="description-features text-muted pt-2">
                                <p>
                                    Our service offerings enhance customer
                                    experience throughout secure & highly
                                    functional end-to-end warranty
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex">
                        <i class="fa fa-check pe-3 pt-2"></i>
                        <div class="heading-features">
                            <h3>Warranty Management IT</h3>
                            <div class="description-features text-muted pt-2">
                                <p>
                                    Our service offerings enhance customer
                                    experience throughout secure & highly
                                    functional end-to-end warranty
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex">
                        <i class="fa fa-check pe-3 pt-2"></i>
                        <div class="heading-features">
                            <h3>Warranty Management IT</h3>
                            <div class="description-features text-muted pt-2">
                                <p>
                                    Our service offerings enhance customer
                                    experience throughout secure & highly
                                    functional end-to-end warranty
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex">
                        <i class="fa fa-check pe-3 pt-2"></i>
                        <div class="heading-features">
                            <h3>Warranty Management IT</h3>
                            <div class="description-features text-muted pt-2">
                                <p>
                                    Our service offerings enhance customer
                                    experience throughout secure & highly
                                    functional end-to-end warranty
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex">
                        <i class="fa fa-check pe-3 pt-2"></i>
                        <div class="heading-features">
                            <h3>Warranty Management IT</h3>
                            <div class="description-features text-muted pt-2">
                                <p>
                                    Our service offerings enhance customer
                                    experience throughout secure & highly
                                    functional end-to-end warranty
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our features ends-->

    <!-- testimonials -->
    <div class="testimonials py-5">
        <div class="container">
            <h1>Testimonials</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">
                For your very specific industry, we have highly-tailored IT
                solutions.
            </p>

            <!-- carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-md-6 p-5">
                                    <div class="card text-muted px-4 py-5">
                                        <div class="card-entity">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever
                                        since the 1500s, when an unknown
                                        printer took a galley of type and
                                        scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries,

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="circle-img-testimonials">
                                                    <img src="../assets/images/service.svg" alt="" />
                                                </div>

                                                <div class="ps-3">
                                                    <h4 class="m-0">
                                                        Gopi Krish
                                                    </h4>
                                                    <div>
                                                        Managing director,
                                                        NepalOne Adventure
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-5">
                                    <div class="card text-muted px-4 py-5">
                                        <div class="card-entity">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever
                                        since the 1500s, when an unknown
                                        printer took a galley of type and
                                        scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries,

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="circle-img-testimonials">
                                                    <img src="../assets/images/service.svg" alt="" />
                                                </div>

                                                <div class="ps-3">
                                                    <h4 class="m-0">
                                                        Gopi Krish
                                                    </h4>
                                                    <div>
                                                        Managing director,
                                                        NepalOne Adventure
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-md-6 p-5">
                                    <div class="card text-muted px-4 py-5">
                                        <div class="card-entity">01</div>
                                        Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever
                                        since the 1500s, when an unknown
                                        printer took a galley of type and
                                        scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries,

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="circle-img-testimonials">
                                                    <img src="../assets/images/service.svg" alt="" />
                                                </div>

                                                <div class="ps-3">
                                                    <h4 class="m-0">
                                                        Gopi Krish
                                                    </h4>
                                                    <div>
                                                        Managing director,
                                                        NepalOne Adventure
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-5">
                                    <div class="card text-muted px-4 py-5">
                                        <div class="card-entity">02</div>
                                        Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever
                                        since the 1500s, when an unknown
                                        printer took a galley of type and
                                        scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries,

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="circle-img-testimonials">
                                                    <img src="../assets/images/service.svg" alt="" />
                                                </div>

                                                <div class="ps-3">
                                                    <h4 class="m-0">
                                                        Gopi Krish
                                                    </h4>
                                                    <div>
                                                        Managing director,
                                                        NepalOne Adventure
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-md-6 p-5">
                                    <div class="card text-muted px-4 py-5">
                                        <div class="card-entity">01</div>
                                        Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever
                                        since the 1500s, when an unknown
                                        printer took a galley of type and
                                        scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries,

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="circle-img-testimonials">
                                                    <img src="../assets/images/service.svg" alt="" />
                                                </div>

                                                <div class="ps-3">
                                                    <h4 class="m-0">
                                                        Gopi Krish
                                                    </h4>
                                                    <div>
                                                        Managing director,
                                                        NepalOne Adventure
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-5">
                                    <div class="card text-muted px-4 py-5">
                                        <div class="card-entity">02</div>
                                        Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever
                                        since the 1500s, when an unknown
                                        printer took a galley of type and
                                        scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries,

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="circle-img-testimonials">
                                                    <img src="../assets/images/service.svg" alt="" />
                                                </div>

                                                <div class="ps-3">
                                                    <h4 class="m-0">
                                                        Gopi Krish
                                                    </h4>
                                                    <div>
                                                        Managing director,
                                                        NepalOne Adventure
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- carousel -->
        </div>
    </div>
    <!-- testimonials ends -->

    <!-- Contact -->
    <div class="contact-us" style="
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

    <!-- footer -->
@endsection
