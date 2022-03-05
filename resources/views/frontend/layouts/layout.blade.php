<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', config('app.name'))</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @yield('meta')
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <link rel="shortcut icon" href="{{ asset('assets/images/Logo.png') }}" type="image/x-icon" />


    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <section class="banner-img-index">
        <!-- navbar -->
        <div class="banner-curve" id="banner-curve"></div>
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}"><img class="logo"
                        src="{{ asset('assets/images/Logo.png') }}" alt="{{ config('app.name') }}" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center ms-auto p-0 m-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" aria-current="page"
                                href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('aboutus') ? 'active' : '' }}"
                                href="{{ route('aboutus') }}">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('singleservice') ? 'active' : '' }}"
                                href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu py-0" aria-labelledby="navbarDropdown">
                                @foreach ($services as $service)
                                    <li class="px-0">
                                        <a class="dropdown-item menu-text"
                                            href="{{ route('singleservice', $service->slug) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('careerdetail') || request()->routeIs('career') ? 'active' : '' }}"
                                href="{{ route('career') }}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="tel:{!! strip_tags(getCData('Contact Number', 'description')) !!}" class="nav-contact-btn"><i
                                    class="fa fa-phone-alt pe-1"></i>
                                {!! strip_tags(getCData('Contact Number', 'description')) !!}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="footer-logo" src="{{ asset('assets/images/Logo.png') }}" alt="" />
                        <div class="mt-4">
                            <h5 class="text-white">Connect With Us</h5>
                            <div class="d-flex">
                                <a class="text-decoration-none text-white" target="_blank"
                                    href="{!! strip_tags(getCData('Facebook Link', 'description')) !!}">
                                    <div class="connect-circle me-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                                <a class="text-decoration-none text-white" target="_blank"
                                    href="{!! strip_tags(getCData('Twitter Link', 'description')) !!}">
                                    <div class="connect-circle me-2">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                                <a class="text-decoration-none text-white" target="_blank"
                                    href="{!! strip_tags(getCData('Linkedin Link', 'description')) !!}">
                                    <div class="connect-circle me-2">
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="contact-us-footer-bg">
                                <div class="contact-us-footer fw-bold">
                                    <a href="{{ route('contact') }}" class="text-white">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-white">Quick Links</h4>

                        <div class="footer-links">
                            <ul>
                                <li class="py-2"><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li class="py-2"><a href="{{ route('contact') }}">Contact</a></li>
                                <li class="py-2"><a href="{{ route('career') }}">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-white">Our Services</h4>

                        <div class="footer-links">
                            <ul>
                                @foreach ($services as $service)
                                    <li class="py-2"><a
                                            href="{{ route('singleservice', $service->slug) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-white">Contact Us</h4>

                        <div class="footer-links">
                            <ul>
                                <li class="py-2">{!! strip_tags(getCData('Address', 'description')) !!}</li>
                                <li class="py-2">
                                    <a href="tel:{!! strip_tags(getCData('Contact Number', 'description')) !!}">{!! strip_tags(getCData('Contact Number', 'description')) !!}</a>
                                </li>
                                <li class="py-2"><a
                                        href="mailto:{!! strip_tags(getCData('Email', 'description')) !!}">{!! strip_tags(getCData('Email', 'description')) !!}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-0">
                        © {{ \Carbon\Carbon::now()->format('Y') }} {{ config('app.name') }}.All Rights Reserved
                    </div>
                    {{-- <div class="m-0">Privacy Policy</div> --}}
                </div>
            </div>
        </div>
        <!-- footer ends -->
</body>
<script src="{{ asset('assets/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener("scroll", function() {
            if (window.scrollY > 80) {
                document
                    .getElementById("navbar_top")
                    .classList.add("fixed-top");
                document
                    .getElementById("navbar_top")
                    .classList.add("colored-nav");
                // document
                //     .getElementById("banner-curve")
                //     .style.top = "-50px";

                // add padding top to show content behind navbar
                // navbar_height =
                //     document.querySelector(".navbar").offsetHeight;
                // document.body.style.paddingTop = navbar_height + "px";
            } else {
                document
                    .getElementById("navbar_top")
                    .classList.remove("fixed-top");
                document
                    .getElementById("navbar_top")
                    .classList.remove("colored-nav");
                // document
                // .getElementById("banner-curve")
                // .style.top = "0";

                document
                    .getElementById("navbar_top")
                    .classList.add("trans-nav");
                // remove padding top from body
                document.body.style.paddingTop = "0";
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth > 992) {
            document
                .querySelectorAll(".navbar .nav-item")
                .forEach(function(everyitem) {
                    everyitem.addEventListener("mouseover", function(e) {
                        let el_link =
                            this.querySelector("a[data-bs-toggle]");

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add("show");
                            nextEl.classList.add("show");
                        }
                    });
                    everyitem.addEventListener("mouseleave", function(e) {
                        let el_link =
                            this.querySelector("a[data-bs-toggle]");

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove("show");
                            nextEl.classList.remove("show");
                        }
                    });
                });
        }
        // end if innerWidth
    });
    var myCarousel = document.querySelector("#myCarousel");
</script>

</html>
