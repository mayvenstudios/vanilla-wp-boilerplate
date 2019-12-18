@layout('layouts/master')
<?php /* Template Name: Work Marketplace  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>

<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Workforce Marketplace</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>We make it easy to operate with a contractor workforce.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>Reduce overhead and risk when you source, pay and manage compliant contractors using our digital tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue text-block-slice">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <h2>Why Workforce Marketplace</h2>
                    <p>Traditional consulting firms burden operators with fragmented resources and mountains of paperwork to operate with a contingent workforce. </p>
                    <p>At the same time, contractors are getting charged massive split rates without receiving access to the benefits, training, or support they need..</p>
                    <p><strong>The energy industry deserves better.</strong></p>
                    <p>We’re building the largest network of professionals in the energy industry – offering better terms and options for contractors, and digital tools for operators that scale with your business.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white product-demo-slice__container">
        <div class="container">
            <div class="columns product-demo-slice__row--alternating">
                <div class="column">
                    <div class="product-demo-slice__label"></div>
                    <div class="product-demo-slice__copy">
                        <h2>Qualified Contractor Network</h2>
                        <p>Access our network of over 25k contractors to find the quality professionals you need. Easily onboard existing contractors to streamline your workforce and upgrade your contractor experience.</p>
                    </div>
                    <div class="product-demo-slice__cta"></div>
                </div>
                <div class="column product-demo-slice__image is-7">
                    <img src="{{ asset('images/img17.png') }}" alt="Laptop showing the RigUp dashboard.">
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue product-demo-slice__container">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="product-demo-slice__label"></div>
                    <div class="product-demo-slice__copy">
                        <h2>Seamless Digital Payments</h2>
                        <p>Use our mobile and desktop apps to take advantage of digital timesheets, flexible payment terms like our NextDay Pay™ offering, and real-time spend tracking.</p>
                    </div>
                    <div class="product-demo-slice__cta"></div>
                </div>
                <div class="column product-demo-slice__image is-7"><img src="{{ asset('images/img18.png') }}" alt="Mobile phone showing job sheet submission in the RigUp app."></div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white product-demo-slice__container">
        <div class="container">
            <div class="columns product-demo-slice__row--alternating">
                <div class="column">
                    <div class="product-demo-slice__label"></div>
                    <div class="product-demo-slice__copy">
                        <h2>Compliance &amp; Risk Management</h2>
                        <p>Mitigate risk using our customizable compliance system – ensuring compliant operations, certification tracking, and FLSA exposure reduction.</p>
                    </div>
                    <div class="product-demo-slice__cta"></div>
                </div>
                <div class="column product-demo-slice__image is-7"><img src="{{ asset('images/img19.png') }}" alt="Tablet screen showing compliance management in the RigUp app."></div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue">
        <div class="container">
            <div class="card-grid-slice__label"></div>
            <div class="card-grid-slice__copy">
                <h3>And more...</h3>
            </div>
            <div class="columns card-grid-slice__cards is-multiline is-centered is-tablet">
                <div class="column card-grid-slice__card is-5-desktop"><img src="{{ asset('images/icon-education.svg') }}" alt="Icon: Training &amp; Enablement">
                    <div>
                        <h3>Contractor Training &amp; Enablement</h3>
                        <p>Ensure that qualified contractors are equipped and ready to execute on any operational need.</p>
                    </div>
                </div>
                <div class="column card-grid-slice__card is-5-desktop"><img src="{{ asset('images/Icon-reporting.svg') }}" alt="Icon: Reporting">
                    <div>
                        <h3>Reporting &amp; Analytics</h3>
                        <p>Drive operational improvements with spend transparency and analytics – a benefit of managing your workforce through the RigUp platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container pardot-lead-form">
            <div class="columns is-multiline is-centered">
                <div class="column pardot-lead-form__header is-8">
                    <h3>Discover how RigUp helps you streamline your contractor workforce.</h3>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection