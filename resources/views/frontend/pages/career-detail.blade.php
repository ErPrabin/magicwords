@extends('frontend.layouts.layout')
@section('title', getPageTitle($titles, 'career-detail'))
@section('meta')
    @include('frontend.partials.meta', [
        'page' => 'career-detail',
    ])
@endsection
@section('content')
    <!-- navbar ends -->

    <!-- banner -->
    @include('frontend.partials.breadcrum', [
        'title' => $career->title,
    ])

    <!-- banner ends -->
    </section>
    <!-- banner ends -->


    <!-- job description -->
    <div class="job-description py-5">

        <div class="container">
            <div class="top-part">
                <h1>{{ $career->title }}</h1>
                <span class="text-muted">By {{ config('app.name') }}</span>
                <div class="skills text-muted pt-4">

                    <h4>Skills</h4>
                    <span>{{ $career->skill }}</span>
                </div>
            </div>
            <div class="middle-part py-5">
                {!! $career->description !!}
            </div>
        </div>
    </div>
    <!-- job description ends -->

    <!-- appilcation form -->
    <div class="application-form py-5">
        <div class="container">
            <h1 class="text-center">Apply now.</h1>
            <div class="bar"></div>
            <form action="{{ route('careermail.send') }}" method="POST" enctype="multipart/form-data" class="form pt-5" id="form">
                @csrf
                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>Personal Information:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <input type="text" name="name" required class="form-control" placeholder="Your Full Name" />
                        </div>
                        <div class="py-3">
                            <input type="text" name="email" required class="form-control"
                                placeholder="Your Email Address" />
                        </div>
                        <div class="py-3">
                            <input type="text" name="phone_number" required class="form-control"
                                placeholder="Your Phone Number" />
                        </div>
                        <input type="text" name="subject" hidden value="Career | Apply for job." required
                            class="form-control" />
                        <input type="text" name="applied_for" hidden value="{{ $career->title }}" required
                            class="form-control" />
                        <div class="form-group py-3">
                            <select name="gender" class="form-control required">
                                <option selected disabled>Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>CV or Resume:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="cv" id="exampleInputFile">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-5" id="form-top">
                    <div class="col-md-4">
                        <h4>Cover Letter:</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="py-3">
                            <textarea name="cover_letter" class="form-control" placeholder="Cover Letter"></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button class="btn red-btn-color">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- application form ends -->

    <!-- contact -->
    {{-- @include('frontend.partials.contact') --}}
    <!-- contact ends -->

    <!-- footer -->
@endsection
