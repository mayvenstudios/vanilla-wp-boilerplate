@layout('layouts/master')
<?php /* Template Name: Vendor Marketplace  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Vendor Marketplace</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>Work with preferred vendors faster – without the paperwork and risk.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>Work with the vendors you want, when you want, using our Global MSA™ . Easily onboard, ensure compliance, and consolidate vendor payments through our digital platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue text-block-slice">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <h2>Why Vendor Marketplace</h2>
                    <p>Across the energy industry, companies are wasting a lot of time trying to onboard, work with, and pay the vendors they need to get the job done. We created the Vendor Marketplace to make it easier for operators and vendors to work together. </p>
                    <p>Our Vendor Marketplace includes the largest network of vendors –&nbsp;ready to hire –&nbsp;in the energy industry. In addition, tools like our Global MSA™ and invoicing portal make it easier to work with any vendor –&nbsp;without the operational overhead.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white product-demo-slice__container">
        <div class="container">
            <div class="columns product-demo-slice__row--alternating">
                <div class="column">
                    <div class="product-demo-slice__label">
                        <p></p>
                    </div>
                    <div class="product-demo-slice__copy">
                        <h2>Qualified Vendor Network</h2>
                        <p>Use our network of over 10k vendors to find quality professionals for any job. Onboard existing vendors to utilize consolidated invoicing with RigUp.</p>
                    </div>
                    <div class="product-demo-slice__cta">
                        <p></p>
                    </div>
                </div>
                <div class="column product-demo-slice__image is-7"><img src="{{ asset('images/img20.png') }}" alt="Mobile device searching for vendors on the RigUp app."></div>
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
                        <p>Use our end-to-end digital invoicing system to approve vendor invoices and process payments with ease – all through one simple portal.</p>
                    </div>
                    <div class="product-demo-slice__cta"></div>
                </div>
                <div class="column product-demo-slice__image is-7"><img src="{{ asset('images/img21.png') }}" alt="Laptop showing digital invoicing on the RigUp platform."></div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white product-demo-slice__container">
        <div class="container">
            <div class="columns product-demo-slice__row--alternating">
                <div class="column">
                    <div class="product-demo-slice__label">
                        <p></p>
                    </div>
                    <div class="product-demo-slice__copy">
                        <h2>Compliance &amp; Risk Management</h2>
                        <p>Ensure compliant operations with our customizable compliance system that goes to work for you to make sure your company’s specific needs are met.</p>
                    </div>
                    <div class="product-demo-slice__cta"></div>
                </div>
                <div class="column product-demo-slice__image is-7"><img src="{{ asset('images/img22.png') }}" alt="Tablet showing vendor compliance management in the RigUp app."></div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue product-demo-slice__container">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="product-demo-slice__label"></div>
                    <div class="product-demo-slice__copy">
                        <h2>Reporting &amp; Analytics</h2>
                        <p>Get full spend transparency and drive operational improvements when you have access to analytics and data insights from RigUp.</p>
                    </div>
                    <div class="product-demo-slice__cta"></div>
                </div>
                <div class="column product-demo-slice__image is-7"><img src="{{ asset('images/img23.png') }}" alt="Laptop checking vendor analytics through the RigUp platform."></div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container pardot-lead-form">
            <div class="columns is-multiline is-centered">
                <div class="column pardot-lead-form__header is-8">
                    <h3>Start saving time and money with the Vendor Marketplace.</h3>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection