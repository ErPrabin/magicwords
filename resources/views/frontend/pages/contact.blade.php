@extends('frontend.layouts.layout')
@section('content')
    @include('frontend.partials.breadcrum',['page'=>'Contact Us'])

    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-8">
                    <div class="contact-wrap">
                        <div class="contact-form">
                            <div class="contact-title">
                                <h2>Write Us</h2>
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" id="email" class="form-control" required
                                                data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                                required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            <span>Send Message</span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="contact-info">
                        <h3>Our contact details</h3>

                        <div class="row">
                            <div class="col-md-4">
                                <ul class="address">
                                    <li class="location">
                                        <i class="bx bxs-location-plus"></i>
                                        <span>Address</span>
                                        {!! strip_tags(getCData('Address','description')) !!}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="address">
                                    <li class="location">
                                        <i class="bx bxs-phone-call"></i>
                                        <span>Phone</span>
                                        {!! strip_tags(getCData('Contact Number','description')) !!}

                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="address">
                                    <li class="location">
                                        <i class="bx bxs-envelope"></i>
                                        <span>Email</span>
                                        {!! strip_tags(getCData('Email','description')) !!}
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-follow-us">
                            <h3>Follow us:</h3>
                            <ul class="social-wrap">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! strip_tags(getCData('Facebook Link','description')) !!}" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
