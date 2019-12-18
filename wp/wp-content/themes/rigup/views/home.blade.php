@layout('layouts/master')
<?php /* Template Name: Home */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="homepage-hero" style="background-image:url({{ asset('images/bg-home-hero.jpg') }})">
        <div class="container">
            <div class="columns">
                <div class="column is-7 is-9-mobile">
                    <div class="homepage-hero__heading">
                        <h1>Empowering the people who power the world™.</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="homepage-hero__copy homepage-hero__copy-desktop">
                        <p>Our network and digital solutions help energy companies scale faster – allowing operators, vendors, and contractors to work together seamlessly while reducing costs and risk.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="homepage-hero__cta">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container homepage-hero__copy-mobile-container">
        <div class="columns">
            <div class="column">
                <div class="homepage-hero__copy homepage-hero__copy-mobile">
                    <p>Our network and digital solutions help energy companies scale faster – allowing operators, vendors, and contractors to work together seamlessly while reducing costs and risk.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container two-column-text">
            <div class="columns is-desktop">
                <div class="column two-column-text__column-one">
                    <div class="two-column-text__column-one-header">
                        <h2>Empowering Operators</h2>
                    </div>
                    <div class="two-column-text__column-one-text">
                        <p>Reduce overhead and save money by digitizing your operations.</p>
                    </div>
                    <div class="two-column-text__cta-desktop-container">
                        <p><a href="#" class="button">Learn More</a></p>
                    </div>
                </div>
                <div class="column">
                    <div class="two-column-text__column-two-copy">
                        <ul>
                            <li><strong>Extensive Network</strong>
                                <br>Connect with our growing network of over 25K contractors and 10K vendors to get the right service provider, at the right cost.
                            </li>
                            <li><strong>Safety &amp; Compliance</strong>
                                <br>Reduce risk with our internal compliance system, customizable onboarding, certification tracking, and access to training.
                            </li>
                            <li><strong>Optimized Operations</strong>
                                <br>Get transparency, control costs, and minimize operational overhead with our end-to-end digital invoicing and payments system.
                            </li>
                        </ul>
                    </div>
                    <div class="two-column-text__cta-mobile-container">
                        <p><a href="#" class="button">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns is-multiline is-mobile image-band__columns is-centered">
        <div class="column is-one-sixth-desktop is-one-third-mobile image-band__column">
            <img src="{{ asset('images/img01.jpg') }}" alt="Oil &amp; gas workers inspect tanks." class="image-band__image">
        </div>
        <div class="column is-one-sixth-desktop is-one-third-mobile image-band__column">
            <img src="{{ asset('images/img02.jpg') }}" alt="Solar technicians install panels at an industrial solar site." class="image-band__image">
        </div>
        <div class="column is-one-sixth-desktop is-one-third-mobile image-band__column">
            <img src="{{ asset('images/img03.jpg') }}" alt="A wind farm at sunset." class="image-band__image">
        </div>
        <div class="column is-one-sixth-desktop is-one-third-mobile image-band__column">
            <img src="{{ asset('images/img04.jpg') }}" alt="An oil &amp; gas drilling site." class="image-band__image">
        </div>
        <div class="column is-one-sixth-desktop is-one-third-mobile image-band__column">
            <img src="{{ asset('images/img05.png') }}" alt="Midstream pipeline workers repair an oil &amp; gas pipeline." class="image-band__image">
        </div>
        <div class="column is-one-sixth-desktop is-one-third-mobile image-band__column">
            <img src="{{ asset('images/img06.jpg') }}" alt="An offshore drilling rig at sunset." class="image-band__image">
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container two-column-text">
            <div class="columns is-desktop">
                <div class="column two-column-text__column-one">
                    <div class="two-column-text__column-one-header">
                        <h2>Empowering Vendors</h2>
                    </div>
                    <div class="two-column-text__column-one-text">
                        <p>Start working with top companies, and hiring top contractors.</p>
                    </div>
                    <div class="two-column-text__cta-desktop-container">
                        <p><a href="#" class="button">Explore the Benefits</a></p>
                    </div>
                </div>
                <div class="column">
                    <div class="two-column-text__column-two-copy">
                        <ul>
                            <li><strong>More Opportunities</strong>
                                <br>Easily start working with top operators under our Global MSA™ .
                            </li>
                            <li><strong>More Cash Flow</strong>
                                <br>Enjoy lower fees and faster payments, allowing your business to increase cash flow and scale faster.
                            </li>
                            <li><strong>Less Paperwork</strong>
                                <br>Reduce overhead by letting us handle onboarding, operator invoices, and contractor job sheets.
                            </li>
                        </ul>
                    </div>
                    <div class="two-column-text__cta-mobile-container">
                        <p><a href="#" class="button">Explore the Benefits</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue">
        <div class="logo-band__container">
            <div class="logo-band__header">
                <h2>Trusted by leaders in energy</h2>
            </div>
            <div class="container logo-band__container">
                <div class="columns is-vcentered is-multiline logo-band__columns is-mobile">
                    <div class="column is-6-mobile is-2-desktop">
                        <div class="logo-band__img-container">
                            <a href="#"><img src="{{ asset('images/logo-anadarko.png') }}" alt="Anadarko logo"></a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-2-desktop">
                        <div class="logo-band__img-container">
                            <a href="#"><img src="{{ asset('images/logo-gulfport.png') }}" alt="Gulfport Energy logo"></a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-2-desktop">
                        <div class="logo-band__img-container">
                            <a href="#"><img src="{{ asset('images/logo-noble.png') }}" alt="Noble Energy Logo"></a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-2-desktop">
                        <div class="logo-band__img-container">
                            <a href="#"><img src="{{ asset('images/logo-bp.png') }}" alt="BP Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container home-page-image-and-text">
            <div class="columns is-desktop">
                <div class="column"><img class="img-block" src="{{ asset('images/bg05.jpg') }}" alt=""></div>
                <div class="column home-page-image-and-text__text">
                    <div class="home-page-image-and-text__label">
                        <h2>Empowering Contractors</h2>
                    </div>
                    <div class="home-page-image-and-text__header">
                        <p>Take charge of your career with the jobs, pay, and access to training.</p>
                    </div>
                    <div class="home-page-image-and-text__copy">
                        <ul>
                            <li><strong>Better Pay &amp; Benefits</strong>
                                <br>Enjoy lower split rates, flexible payment terms like NextDay Pay™ , and healthcare options that fit your needs.
                            </li>
                            <li><strong>More Jobs</strong>
                                <br>Let us help you find your next job so you can spend more time focusing on what really matters.
                            </li>
                            <li><strong>Career Support</strong>
                                <br>Advance your career through our accredited training and certification partnerships.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p><a href="#" class="button">Get Started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-card-grid" style="background-image:url({{ asset('images/bg-pattern.jpg') }})">
        <div class="container">
            <div class="columns">
                <div class="column is-11">
                    <div class="home-page-card-grid__label">
                        <h2>Our Solutions</h2>
                    </div>
                    <div class="home-page-card-grid__header">
                        <p>Achieve your operational goals through our workforce, vendor, and field service solutions.</p>
                    </div>
                    <div class="home-page-card-grid__copy">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="columns is-desktop">
                <div class="column is-4-desktop">
                    <div class="home-page-card-grid__card">
                        <div class="home-page-card-grid__card-image-container"><img src="{{ asset('images/hardhat-icon.svg') }}" alt=""></div>
                        <div class="home-page-card-grid__card-title">
                            <h2>Workforce Marketplace</h2>
                        </div>
                        <div class="home-page-card-grid__card-copy">
                            <p>Connect with thousands of independent contractors to find the right person for the job. Let RigUp take care of onboarding, compliance, and payments so you can get to work faster.</p>
                        </div>
                        <div class="home-page-card-grid__card-cta">
                            <p><a href="#" class="button tertiary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="column is-4-desktop">
                    <div class="home-page-card-grid__card">
                        <div class="home-page-card-grid__card-image-container"><img src="{{ asset('images/vendor-icon.svg') }}" alt=""></div>
                        <div class="home-page-card-grid__card-title">
                            <h2>Vendor Marketplace</h2>
                        </div>
                        <div class="home-page-card-grid__card-copy">
                            <p>Effortlessly work with the vendors you want – when you want. Use our Global MSA™ , Vendor Connect, and the Vendor Invoicing Portal to digitize your operations and get vendors on the field faster.</p>
                        </div>
                        <div class="home-page-card-grid__card-cta">
                            <p><a href="#" class="button tertiary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="column is-4-desktop">
                    <div class="home-page-card-grid__card">
                        <div class="home-page-card-grid__card-image-container"><img src="{{ asset('images/service-provider-icon.svg') }}" alt=""></div>
                        <div class="home-page-card-grid__card-title">
                            <h2>Managed Field Services</h2>
                        </div>
                        <div class="home-page-card-grid__card-copy">
                            <p>Remove the operational burden of on-demand and routine field tasks using our end-to-end solution that leverages our network of qualified providers, data-driven dispatching, plus tracking and analytics, and digital payments.</p>
                        </div>
                        <div class="home-page-card-grid__card-cta">
                            <p><a href="#" class="button tertiary">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container pardot-lead-form">
            <div class="columns is-multiline is-centered">
                <div class="column pardot-lead-form__header is-8">
                    <h3>Discover how RigUp can help empower your company.</h3>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection