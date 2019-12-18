@layout('layouts/master')
<?php /* Template Name: Service Providers  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>

<main>
    <div class="content-block targeted-hero dynamic-background-image" style="background-image:url({{ asset('images/bg05.jpg')  }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg05.jpg')  }});height:200px"></div>
        <div class="content-container">
            <div class="targeted-hero-content">
                <h6 class="blue-text">Vendors</h6>
                <div class="">
                    <h1>Scale your business. Quickly and easily.</h1>
                </div>
                <div class="">
                    <p>RigUp® gives you access to the largest marketplace in the energy industry as well as the tools you need to scale effectively. You focus on your work. We’ll handle the rest.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-highlights white">
        <div class="content-container">
            <div class="targeted-highlight-list">
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="More work. Faster pay." src="{{ asset('images/servive-prov-more-work.svg') }}"></div>
                    <h3 class="highlight-header">More work. Faster pay.</h3>
                    <div class="highlight-content">
                        <p>RigUp unlocks more work opportunities with hundreds of operators through our Global MSA™. Flexible invoicing options reduce your cash-flow requirements, giving you peace of mind.</p>
                    </div>
                </div>
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Better talent. Less paperwork." src="{{ asset('images/servive-prov-better-talent.svg') }}"></div>
                    <h3 class="highlight-header">Better talent. Less paperwork.</h3>
                    <div class="highlight-content">
                        <p>Our marketplace puts top talent at your fingertips and our labor management tools handle drug screenings, background checks and certifications — all trackable through your online dashboard.</p>
                    </div>
                </div>
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Support. When you need it." src="{{ asset('images/operators-right-support.svg') }}"></div>
                    <h3 class="highlight-header">Support. When you need it.</h3>
                    <div class="highlight-content">
                        <p>We work hard to make sure you and your team have what you need to do your jobs. We’re available seven days a week to keep your company working.</p>
                    </div>
                </div>
            </div>
            <div class="banner-cta">
                <h3>Getting started is easy. </h3>
                <div><a class="button primary" href="#">Sign up now</a></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-journey">
        <div class="content-container">
            <h2>How RigUp works for you.</h2>
            <div class="description">
                <p>Whether you’re looking for your next job or you’re scaling your workforce, RigUp gets you where you want to be. Faster — and without the administrative hassle.</p>
            </div>
            <div class="journey-row">
                <h6 class="left-section left-title blue-text">Offer your services.</h6>
                <h6 class="right-section right-title blue-text">Staff your team.</h6>
            </div>
            <div class="items-container">
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Find work.</h3>
                        <div class="">
                            <p>Find and bid on jobs offered by hundreds of operators.</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Find contractors.</h3>
                        <div class="">
                            <p>Access the industry’s largest network of quality contractors.</p>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Bring jobs to RigUp</h3>
                        <div class="">
                            <p>Our Global MSA™, comprehensive insurance and quick onboarding process make it easy to join.</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Bring contractors to RigUp.</h3>
                        <div class="">
                            <p>During onboarding, RigUp handles drug screenings, background checks, certifications, and insurance.</p>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Focus on your work.</h3>
                        <div class="">
                            <p>You do your job. We’ll do ours. RigUp handles unlimited invoicing and accounts receivable saving you headache and hassle.</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Workforce management.</h3>
                        <div class="">
                            <p>Access all contractor information through your online dashboard. Keeping track of your workforce has never been easier.</p>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Get paid.</h3>
                        <div class="">
                            <p>Flexible payouts and competitive pricing accelerate your cash flow and save you money.</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Easy payments.</h3>
                        <div class="">
                            <p>Digital jobsheet approvals save you time, while your contractors get paid faster.</p>
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
                <div class="company-logo" style="max-width:25%"><img alt="" src="{{ asset('images/parsley_logo.png') }}"></div>
                <div class="company-logo" style="max-width:25%"><img alt="" src="{{ asset('images/precision_logo_bw.png') }}"></div>
                <div class="company-logo" style="max-width:25%"><img alt="" src="{{ asset('images/logo-sanchez.jpg') }}"></div>
                <div class="company-logo" style="max-width:25%"><img alt="" src="{{ asset('images/bakerhughes_logo_bw.png') }}"></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-testimonials dynamic-background-image" style="background-image:url({{ asset('images/bg06.jpg')  }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg06.jpg')  }})"></div>
        <div class="content-container">
            <div class="slick-slider">
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <div class="headshot-image-container">
                                <div class="rigup-headshot" style="background-image:url({{ asset('images/img13.jpg') }});"></div>
                                <hr class="med">
                            </div>
                            <hr class="small">
                            <h6 class="white-text">Jason McCall</h6>
                            <div class="blue-text">Operations Manager</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>Easy to work with and very helpful. Quick to respond to any questions and requests, which is the kind of support I need to keep day to day operations running smoothly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="targeted-cta">
        <div class="alternating-block reverse">
            <div class="alternating-img-section" style="background-image:url('{{ asset('images/img14.jpg') }}')"></div>
            <div class="alternating-block-content">
                <div class="content-side">
                    <h2>Browse the marketplace.</h2>
                    <div class="">
                        <p>Find work and build your team.</p>
                    </div>
                    <div class="content-button">
                        <div class="">
                            <p><a target="_blank" rel="noopener" href="#">Get started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alternating-block reverse">
            <div class="alternating-img-section" style="background-image:url('{{ asset('images/img15.jpg') }}')"></div>
            <div class="alternating-block-content">
                <div class="content-side">
                    <h2>We’ve got your back.</h2>
                    <div class="">
                        <p>We’re here to help you in any way we can. In person, online or over the phone. Seven days a week.</p>
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