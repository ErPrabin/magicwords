@extends('frontend.layouts.layout')
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    <div class="bread-crumb d-flex align-items-center justify-content-center">
        <div class="div">
            <h1 class="text-muted fw-bold">ABOUT US</h1>
            <div class="bact-to-home text-center">
                <a href="/" class="text-decoration-none back-home">Home</a>
            </div>
        </div>

    </div>

    <!-- banner ends -->
    </section>

    <!-- about us   -->
    <div class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-5">
                    <img src="../assets/images/service.svg" alt="" class="img-fluid" />
                </div>
                <div class="col-md-6 p-4">
                    <div class="about-text">
                        <h1>About Title</h1>
                        <div class="m-bar"></div>
                        <div class="about-index-description mt-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem. Lorem
                                ipsum dolor sit amet consectetur adipisicing
                                elit. Quisquam, quidem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit.
                                Quisquam, quidem. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Quisquam,
                                quidem.
                            </p>

                        </div>
                        <div class="contact-number-index">
                            <button class="btn red-btn-color">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us ends -->

    <!-- service copy  -->
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
                {{-- <div class="col-md-3 p-3">
                    <div class="card p-4">
                        <div class="text-center">
                            <i class="fa fa-headset fa-3x"></i>
                        </div>
                        <h4 class="text-center py-3">24/7 Support</h4>
                        <div class="text-center">
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="card p-4">
                        <div class="text-center">
                            <i class="fab fa-html5 fa-3x"></i>
                        </div>
                        <h4 class="text-center py-3">Optimal Choice</h4>
                        <div class="text-center">
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="card p-4">
                        <div class="text-center">
                            <i class="fab fa-html5 fa-3x"></i>
                        </div>
                        <h4 class="text-center py-3">Market Analysis</h4>
                        <div class="text-center">
                            <p class="p-0 m-0">
                                Our team is here to develop simple to
                                complex websites based
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- service copy ends -->

    <!-- Why Choose Us -->
    <div class="why-us py-5">
        <di class="container">
            <h1>Why Choose Us</h1>
            <div class="bar"></div>
            <p class="text-center text-muted sub-head">For your very specific industry,
                we have highly-tailored IT solutions.</p>
            <div class="row mt-5 m-auto">
                <div class="col-md-4">
                    <div class="d-flex my-3">
                        <div class="text-end">
                            <h4>Awesome Suport</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem.
                            </p>
                        </div>

                    </div>
                    <div class="d-flex my-3">
                        <div class="text-end">
                            <h4>Awesome Suport</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem.
                            </p>
                        </div>

                    </div>
                    <div class="d-flex my-3">
                        <div class="text-end">
                            <h4>Awesome Suport</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <img src="../assets/images/service.svg" alt="" class="img-fluid" />
                </div>
                <div class="col-md-4">
                    <div class="d-flex my-3">

                        <div class="text-start">
                            <h4>Awesome Suport</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex my-3">

                        <div class="text-start">
                            <h4 class="p-0">Awesome Suport</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex my-3">

                        <div class="text-start">
                            <h4 class="p-0">Awesome Suport</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam, quidem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <!-- Why Choose Us ends -->

    <!-- testimonials -->
    <div class="testimonials py-5">
        <div class="container">
            <h1>Testimonials</h1>
            <div class="bar">
            </div>
            <p class="text-center text-muted sub-head">For your very specific industry,
                we have highly-tailored IT solutions.</p>

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
