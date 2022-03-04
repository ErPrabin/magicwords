<div class="contact-us" style="
                    background: url('https://template.hasthemes.com/mitech/assets/images/bg/home-infotechno-contact-bg.webp')
                        no-repeat center center;
                ">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="top-contact-section ps-3">
                        <h1>
                            {!! strip_tags(getCData('Contact Banner','synopsis')) !!}
                        </h1>
                    </div>
                    <div class="bottom-contact-section ps-3">
                        <span class="text-muted">
                            {!! getCData('Contact Banner','description') !!}
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
                            <h1>{!! strip_tags(getCData('Contact Number','description')) !!}</h1>
                        </div>
                        <div class="contact-number-index">
                            <a href="{{ route('contact') }}" class="btn red-btn-color">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>