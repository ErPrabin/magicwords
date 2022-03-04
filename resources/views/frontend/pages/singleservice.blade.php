@extends('frontend.layouts.layout')
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

                        <p>By choosing Genius IT - Web Design and development, you are choosing&nbsp;technology that is
                            reliable, usable, adaptable and scalable. The websites developed by Genius IT solutions are
                            planned and designed from the ground-up to provide the best outcome&nbsp;for our clients. Genius
                            IT Solutions is a professional web development company based in Canterbury, NSW. We have been
                            providing top notch web-development services in Australia and Nepal. We approach each project
                            with fresh ideas and our team is focused to create unique custom websites every-time. We have
                            been providing best quality web development&nbsp;services in Canterbury and Kathmandu and have a
                            good reputation of working with reputed companies in Australia and Nepal.</p>

                        <p>We will make sure the website we develop exceeds your needs and requirements. The features that
                            are used by our team are built considering your present and future objectives on mind. Our web
                            developers will work&nbsp;according to your requirements and expectations. Genius IT Solutions
                            is here to provide striking, high quality,user friendly, professional web-design service for
                            you.</p>

                        <p><strong>Why Us for Web Development ?</strong></p>

                        <ul>
                            <li>We give the best result driven Web Solution</li>
                            <li>We Specialize in Delivering best quality, dynamic, vibrant, strong, user friendly Websites
                            </li>
                            <li>Our team has best specialization and experience in making websites</li>
                            <li>We have extensive knowledge of Programming and Website Design, Development Tools</li>
                            <li>We will recommend and deliver the best Website Solution for you</li>
                        </ul>

                        <h1><strong>Our Process</strong></h1>

                        <p><strong>The Web Design Briefing</strong></p>

                        <p>In this stage we develop scope-of-the-work by discussing and focusing on the client’s preferences
                            including layout, colors, fonts etc.</p>

                        <p><strong>Research</strong></p>

                        <p>We conduct research focused on the client's business&nbsp;itself, on its history, and on its
                            competitors.</p>

                        <p><strong>Reference</strong></p>

                        <p>We conduct research into designs that have been successful and current styles and trends in
                            relation to the design brief.</p>

                        <p><strong>Mock up</strong></p>

                        <p>We develop the design concept(s) around the brief and research findings.</p>

                        <p><strong>Reflection</strong></p>

                        <p>We set millstones to pause through the design process to take stock of our progress. This lets
                            our ideas mature and allow any correction before we move forward with renewed enthusiasm.</p>

                        <p><strong>Presentation</strong></p>

                        <p>In this final step, we then present the client with the final product.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    @include('frontend.partials.contact')
    <!-- contact ends -->

 @endsection