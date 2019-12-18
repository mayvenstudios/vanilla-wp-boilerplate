@layout('layouts/master')
<?php /* Template Name: Upstream */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Upstream HSE</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>In upstream oil &amp; gas, <strong>safety first</strong> is an understatement.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>There’s a lot that goes on behind the scenes to help keep our planet and teams safe and healthy. RigUp makes it easier by helping you get the right certifications and consultants in place.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue text-block-slice">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <h2>Why We're Here</h2>
                    <p>Upholding Health, Safety, and Environment (HSE) policies and certifications is of the utmost importance to RigUp. We're here to ensure that you and your teams are able to work in a safe and secure environment. Part of this is double checking that certifications are up to date and organized. RigUp streamlines this process so that you’ll never have to manage HSE requirements alone.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-checkboard-slice__container">
        <div class="container">
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img35.jpg') }}" alt="HSE inspectors verify on-site compliance." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Contractors</h3>
                        <p>Get faster pay and lower split rates, plus more job opportunities with RigUp. We’re also here to help you</p>
                        <ul>
                            <li>Access HSE resources for completing services safely with minimum environmental impact.</li>
                            <li>Get access to training courses and get certified..</li>
                            <li>Keep up-to-date on upcoming certification expirations.</li>
                            <li>Facilitate the scheduling of drug and alcohol testing.</li>
                            <li>Easily log hours and get paid.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img36.jpg') }}" alt="An HSE inspector goes over a report with an oil &amp; gas contractor." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Vendors and Operators</h3>
                        <p>Sourcing and work management can take up a lot of time. Let RigUp take care of the operational burden for you so you can focus on what really matters. Save time and energy when RigUp helps you:</p>
                        <ul>
                            <li>Keep track of your certification requirements for each position.</li>
                            <li>Only receive candidates who are qualified and meet your requirements.</li>
                            <li>Ensure that all contractors are compliant.</li>
                            <li>Prescreen and drug test all contractors prior to approval.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container pardot-lead-form">
            <div class="columns is-multiline is-centered">
                <div class="column pardot-lead-form__header is-8">
                    <h2>Getting started is easy.</h2>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection