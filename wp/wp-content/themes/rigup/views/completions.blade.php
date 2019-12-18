@layout('layouts/master')
<?php /* Template Name: Completions  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Upstream Completions</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>Get the job done (well) when you <strong>complete your team</strong> with RigUp.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>RigUp helps to build completions teams using the largest workforce marketplace in the North American energy industry. We empower teams through low split rates, faster pay, access to training and certification opportunities, and more</p>
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
                    <p>Developing a wellsite is tedious work, and RigUp is here to help facilitate each and every step. We’ll make sure you have the right tools and crew on the ground to help you safely move forward from a drilled well to a successful, producing well with less overhead and less downtime.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-checkboard-slice__container">
        <div class="container">
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img37.jpg') }}" alt="A completed oil pump." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Operators and Vendors</h3>
                        <p>RigUp is here to facilitate end-to-end management of your operational needs. Partnering with RigUp means always having access to qualified, experienced, certified consultants and vendors who’ll get the job done.</p>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img38.jpg') }}" alt="Soil removal during the construction of a drilling rig." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Contractors</h3>
                        <p>RigUp gives you access to top companies at top pay. We’ll help you use your resume to create a professional RigUp profile that will help match you with the right job for you. After that, we’ll ensure a fair split rate and easy billing process. Already have a job? Great! Sign up with RigUp and we’ll help you take home more of your hard earned pay starting today.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue image-and-list-slice__container">
        <div class="container">
            <div class="columns is-gapless is-vcentered is-desktop">
                <div class="column is-half-desktop"><img class="image-and-list-slice__image" src="{{ asset('images/img39.jpg') }}" width="1170" height="904" alt="An oilfield contractor holds a hardhat with the RigUp logo on it."></div>
                <div class="column is-12-tablet is-offset-0-desktop is-half-desktop">
                    <div class="image-and-list-slice__list-container">
                        <h3>Who We Help</h3>
                        <ul>
                            <li>Coiled Tubing Consultants</li>
                            <li>Completions Consultants</li>
                            <li>Completions Engineers</li>
                            <li>Completions Superintendents</li>
                            <li>Flowback Consultants</li>
                            <li>Flowback Operators</li>
                            <li>Frac Operators</li>
                            <li>Frac Technicians</li>
                            <li>Wireline Consultants</li>
                            <li>Wireline Operators</li>
                            <li>Drillout Consultants</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue">
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