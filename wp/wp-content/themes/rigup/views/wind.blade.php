@layout('layouts/master')
<?php /* Template Name: Wind */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>

<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Wind</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>Prepare to be <strong>blown away</strong> by the way RigUp empowers the wind industry.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>We’re growing the largest workforce marketplace in North America to help drive efficiency and cost savings for site managers while providing turbine technicians with best-in-class services.</p>
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
                    <p>Wind energy has the potential to support over 600,000 jobs in manufacturing, installation, maintenance, and supporting services by 2050, according to the U.S. Department of Energy. As turbine technology improves and the industry continues to mature, wind is becoming competitive with other means of electricity generation.</p>
                    <p>North America is becoming more reliant on wind every year, and RigUp is here to help wind turbine technicians and site managers work together seamlessly. With RigUp, site managers can easily find qualified turbine technicians whose certifications are trustworthy and up-to-date.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-checkboard-slice__container">
        <div class="container">
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img49.jpg') }}" alt="Turbine technicians repairing a windmill." width="1172" height="906"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Wind Turbine Technicians</h3>
                        <p>RigUp connects you with opportunities at top companies, while providing you with better pay and the benefits and services you deserve. You work hard. We’re here to make life easier by giving you the options you need:</p>
                        <ul>
                            <li>Enjoy fast, consistent, seamless payments</li>
                            <li>Decide which benefits are right for you</li>
                            <li>Search for jobs that fit your goals - whether that means staying close to home or learning a new skill or technology</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img50.jpg') }}" alt="West Texas windmill field." width="1168" height="906"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Wind Site Managers</h3>
                        <p>Ensure your turbines are always running efficiently and smoothly by sourcing quality, reliable workers. With RigUp, you’ll have the confidence of knowing that technician certifications are up-to-date, and with our end-to-end digitized solution from sourcing through job sheet approvals and payment processing, you’ll be able to reduce overhead and drive efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white">
        <div class="container pardot-lead-form">
            <div class="columns is-multiline is-centered">
                <div class="column pardot-lead-form__header is-8">
                    <h2>Connect with one of our specialists to explore how RigUp can support you today.</h2>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection