@layout('layouts/master')
<?php /* Template Name: Contractors  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="content-block targeted-hero dynamic-background-image" style="background-image:url({{ asset('images/bg07.jpg') }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg07.jpg') }});height:200px">
        </div>
        <div class="content-container">
            <div class="targeted-hero-content">
                <h6 class="blue-text">Contractors</h6>
                <div class="">
                    <h1>Do the work. <br>We'll handle the rest.</h1>
                </div>
                <div class="">
                    <p>You take your job seriously. And so do we. RigUp puts everything you need right at your fingertips — from jobs and payments to insurance — so you can focus on your work.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-highlights white">
        <div class="content-container">
            <div class="targeted-highlight-list">
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Lower fees. Faster pay." src="{{ asset('images/cb_money.svg') }}"></div>
                    <h3 class="highlight-header">Lower fees. Faster pay.</h3>
                    <div class="highlight-content">
                        <p>Take home more money on every job. Flexible payment terms put you in control of when you’re paid and you can track payment in real-time.</p>
                    </div>
                </div>
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Real work. Not paperwork." src="{{ asset('images/real-work.svg') }}"></div>
                    <h3 class="highlight-header">Real work. Not paperwork.</h3>
                    <div class="highlight-content">
                        <p>Spend more time working, not playing phone tag or filling out paperwork. We’ll onboard you within 24 hours and help you find more work. Faster.</p>
                    </div>
                </div>
                <div class="targeted-highlight">
                    <div class="highlight-icon"><img alt="Support. When you need it." src="{{ asset('images/operators-right-support.svg') }}"></div>
                    <h3 class="highlight-header">Support. When you need it.</h3>
                    <div class="highlight-content">
                        <p>We’re here to help you in any way we can. In person, online or over the phone. We’ve got your back. Seven days a week.</p>
                    </div>
                </div>
            </div>
            <div class="banner-cta">
                <h3>Let's get to work.</h3>
                <div><a class="button primary" href="#">Start today</a></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-journey">
        <div class="content-container">
            <h2>What to expect.</h2>
            <div class="description">
                <p></p>
            </div>
            <div class="content-spacer"></div>
            <div class="items-container">
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Show us what you can do.</h3>
                        <div class="">
                            <p>Fill out your profile, upload a resume, and set your work availability. We’ll make sure employers can find you. And you can find them.</p>
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
                        <h3>Find the right job.</h3>
                        <div class="">
                            <p>It’s not just about the next job. It’s about finding the right fit. We’ll help you find jobs that work for you and your family.</p>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Do what you do best.</h3>
                        <div class="">
                            <p>You’re good at your job, and we're good at the rest. Paperwork, insurance, and compliance - RigUp has you covered.</p>
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
                        <h3>Get paid.</h3>
                        <div class="">
                            <p>We’ll make sure you get paid within five days. And you can track payments through your profile.</p>
                        </div>
                    </div>
                </div>
                <div class="journey-row">
                    <div class="left-section">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                        <h3>Get ready for tomorrow.</h3>
                        <div class="">
                            <p>We understand that this is more than just a job for you. It’s your career. We’re here to help you move forward. Any way we can.</p>
                        </div>
                    </div>
                    <div class="right-section empty">
                        <div class="journey-icon">
                            <div class="journey-icon-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-cta">
                <h3>Getting started is easy.</h3>
                <div><a class="button primary" href="#">Sign up today</a></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-logos-section white">
        <div class="content-container">
            <div class="logos-row">
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/wpx_logo.png') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/halliburton_logo_bw.png') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/logo-eclipse.jpg') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/premier_directional_logo.png') }}"></div>
                <div class="company-logo" style="max-width:20%"><img alt="" src="{{ asset('images/rsppermian_logo_bw.png') }}"></div>
            </div>
        </div>
    </div>

    <div class="content-block targeted-testimonials dynamic-background-image" style="background-image:url({{ asset('images/bg06.jpg') }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg06.jpg') }})"></div>
        <div class="content-container">
            <div class="slick-slider">
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <div class="headshot-image-container">
                                <div class="rigup-headshot" style="background-image:url('{{ asset('images/member12.jpg') }}');"></div>
                                <hr class="med">
                            </div>
                            <hr class="small">
                            <h6 class="white-text">Jonathan Christesen</h6>
                            <div class="blue-text">Lease Operator / Pumper</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>I like to think RigUp chose me. Everything fell into place and I feel incredibly blessed. The people at RigUp are friendly and professional. I’d like to say thank you for allowing me to be a part of it!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <div class="headshot-image-container">
                                <div class="rigup-headshot" style="background-image:url('{{ asset('images/member13.jpg') }}');"></div>
                                <hr class="med">
                            </div>
                            <hr class="small">
                            <h6 class="white-text">James Melton</h6>
                            <div class="blue-text">Drilling, Completions and Workover Consultant</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>Everyone I speak with keeps their word and truly cares about us. RigUp puts a face to a name by coming out to the field and asks about how we’re doing. They get a better knowledge of what we do out on the field.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="targeted-testimonial">
                        <div class="testimonial-person">
                            <div class="headshot-image-container">
                                <div class="rigup-headshot" style="background-image:url('{{ asset('images/member11.png') }}');"></div>
                                <hr class="med">
                            </div>
                            <hr class="small">
                            <h6 class="white-text">Richard Northcott</h6>
                            <div class="blue-text">Completions Consultant</div>
                        </div>
                        <div>
                            <div class="testimonial-text">
                                <p>With my previous consulting firms, I would sometimes wait 90 days without getting a check. It was a nightmare. Now that I am with RigUp, I can submit my invoice on a Friday, and the money is in my bank account the following week. It has been a tremendous change.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="targeted-cta">
        <div class="alternating-block reverse">
            <div class="alternating-img-section" style="background-image:url('{{ asset('images/img16.jpg') }}')"></div>
            <div class="alternating-block-content">
                <div class="content-side">
                    <h2>Browse jobs.</h2>
                    <div class="">
                        <p>Find your next gig.</p>
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
            <div class="alternating-img-section" style="background-image:url('{{ asset('images/bg09.jpg') }}')"></div>
            <div class="alternating-block-content">
                <div class="content-side">
                    <h2>We've got your back.</h2>
                    <div class="">
                        <p>You work hard so the world isn’t left in the dark. It’s our job to return the favor. We’re here seven days a week to help any way we can.</p>
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