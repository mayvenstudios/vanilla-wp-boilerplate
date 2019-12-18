@layout('layouts/master')
<?php /* Template Name: Operator Companies */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="content-block targeted-hero dynamic-background-image" style="background-image:url({{ asset('images/bg01.jpg') }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg01-mobile.jpg')  }}); height:200px"></div>
        <div class="content-container">
            <div class="targeted-hero-content">
                <h6 class="blue-text">Operators</h6>
                <div class="">
                    <h1>Scale your business with RigUp.&nbsp;</h1>
                </div>
                <div class="">
                    <p>We make it easy for you to find and manage the workforce you need, with less risk and overhead holding you back.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-highlights white">
        <div class="content-container">
            <div class="targeted-highlight-list">
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Qualified service providers at your fingertips." src="{{ asset('images/operators-right-people.svg') }}"></div>
                    <h3 class="highlight-header">Qualified service providers at your fingertips.</h3>
                    <div class="highlight-content">
                        <p>Our network of contractors and vendors is the largest in the North American energy industry. We use work history, certifications, location, and reviews to help match you with the right candidates for every job.&nbsp;</p>
                    </div>
                </div>
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="More transparency. Less risk." src="{{ asset('images/operators-right-work-efficiently.svg') }}"></div>
                    <h3 class="highlight-header">More transparency. Less risk.</h3>
                    <div class="highlight-content">
                        <p>We manage drug screenings and track certifications so that contractors are onboarded according to your terms, by your specified start date. Our Global MSA™ allows you to work with vendors faster, with less paperwork.&nbsp;</p>
                    </div>
                </div>
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Digital tools to help scale your business.&nbsp;" src="{{ asset('images/operators-right-support.svg') }}"></div>
                    <h3 class="highlight-header">Digital tools to help scale your business.&nbsp;</h3>
                    <div class="highlight-content">
                        <p>Getting you the right people for the job is only the beginning. Our end-to-end digital invoice and payment system minimizes operational overhead and provides full transparency into spend and performance.</p>
                    </div>
                </div>
            </div>
            <div class="banner-cta">
                <h3>Let’s get to work.</h3>
                <div><a class="button primary" href="#">Start today</a></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-journey">
        <div class="content-container">
            <h2>What to expect.</h2>
            <div class="description"></div>
            <div class="content-spacer"></div>
            <div class="items-container">
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Source.</h3>
                        <div class="">
                            <p>Use our workforce and vendor marketplaces to post jobs and search for candidates, or just tell us what you’re looking for and we’ll take care of it.</p>
                        </div>
                    </div>
                    <div class="right-section empty">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section empty"></div>
                    <div class="right-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Onboard.</h3>
                        <div class="">
                            <p>Trust RigUp with getting your service providers ready for work by your start date - whether you found them through us, or brought them to our platform.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Manage.</h3>
                        <div class="">
                            <p>Use our digital tools to manage your workforce from the field or from the office. Get insights and analytics that help you control spend.&nbsp;</p>
                        </div>
                    </div>
                    <div class="right-section empty">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section empty"></div>
                    <div class="right-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Pay.</h3>
                        <div class="">
                            <p>Pay your service providers more money faster with our industry-low rates, digital invoicing tools for vendors, and digital job sheets for contractors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-cta">
                <h3>Getting started is easy.</h3>
                <div><a class="button primary" href="#">Sign up now</a></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-logos-section white">
        <div class="content-container">
            <div class="logos-row">
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/logo-centennial.jpg') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/logo-ascent.jpg') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/logo-hilcorp.jpg') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/bhp_logo_bw.png') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/cabot_logo.png') }}"></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-testimonials dynamic-background-image" style="background-image:url({{ asset('images/bg02.jpg')  }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg02-mobile.jpg')  }})"></div>
        <div class="content-container">
            <div class="slick-slider">
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <hr class="small">
                            <h6 class="white-text">Cole Thompson</h6>
                            <div class="blue-text">Operations Engineer</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>RigUp Connect is an excellent source to make sure we are covered when we don’t have an MSA in place with a vendor. The Global MSA™ ties up any loose ends and RigUp takes care of onboarding and invoicing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <hr class="small">
                            <h6 class="white-text">Randy Frederick</h6>
                            <div class="blue-text">Well Control Supervisor</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>One stop site for operators to find the best value, quality consultants and materials.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <hr class="small">
                            <h6 class="white-text">Clayton Riddle</h6>
                            <div class="blue-text">Vice President</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>I firmly believe there is a need for the platform &amp; products RigUp has provided to our industry, and I believe the RigUp team is passionate about improving their platform, products, &amp; service every day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="targeted-cta">
        <div class="alternating-block reverse">
            <div class="alternating-img-section" style="background-image:url('{{ asset('images/img07.jpg')  }}')"></div>
            <div class="alternating-block-content">
                <div class="content-side">
                    <h2>Browse contractors.</h2>
                    <div class="">
                        <p>Find the right people.</p>
                    </div>
                    <div class="content-button">
                        <div class="">
                            <p><a href="#">Get started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alternating-block reverse">
            <div class="alternating-img-section" style="background-image:url('{{ asset('images/img08.jpg') }}')"></div>
            <div class="alternating-block-content">
                <div class="content-side">
                    <h2>We’ve got your back.</h2>
                    <div class="">
                        <p>You have a lot on your plate. And when questions arise, you don’t always have the time to find the answer. That’s why we’re here seven days a week.</p>
                    </div>
                    <div class="content-button">
                        <div class="">
                            <p><a target="_blank" rel="noopener" href="#">Get in touch</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection