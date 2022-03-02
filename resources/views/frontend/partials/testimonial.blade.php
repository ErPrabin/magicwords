<!-- testimonials -->
<div class="testimonials py-5">
    <div class="container">
        <h1>Testimonials</h1>
        <div class="bar"></div>
        <p class="text-center text-muted sub-head">
            {!! strip_tags(getCData('testimonial', 'synopsis')) !!}
        </p>

        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($testimonials->chunk(2) as $key => $t)
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $key + 1 }}" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                @endforeach

            </div>
            <div class="carousel-inner">
                @foreach ($testimonials->chunk(2) as $key => $testimonial)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="mt-5">
                            <div class="row">
                                @foreach ($testimonial as $t)
                                    <div class="col-md-6 p-5">
                                        <div class="card text-muted px-4 py-5">
                                            <div class="card-entity">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            {!! $t->description !!}

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="circle-img-testimonials">
                                                        <img src="{{ asset('images/testimonial/' . $t->image) }}"
                                                            alt="{{ config('app.name') }}" />
                                                    </div>

                                                    <div class="ps-3">
                                                        <h4 class="m-0">
                                                            {{ $t->name }}
                                                        </h4>
                                                        <div>
                                                            {{ $t->designation }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
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
