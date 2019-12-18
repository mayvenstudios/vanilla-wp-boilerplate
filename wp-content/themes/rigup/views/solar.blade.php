@layout('layouts/master')
<?php /* Template Name: Solar */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Solar</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>The&nbsp;<strong>future is bright</strong>&nbsp;with solar energy jobs powered by RigUp.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>We’re growing the largest workforce marketplace in North America to drive efficiency and cost savings for solar companies while providing technicians with industry leading services and technology.</p>
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
                    <p>Within the next year, demand for solar technicians is expected to increase by 95% as solar power usage grows for utility, commercial, and industrial segments. RigUp is excited about this growth, and we’re energized by the opportunity to bring our workforce solutions to this bright segment of the industry.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-checkboard-slice__container">
        <div class="container">
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img47.jpg') }}" alt="A solar technician installs a solar panel." width="1170" height="902"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Companies</h3>
                        <p>Here at RigUp, we understand that you need a seamless process from start to finish. We’re here to help you get from point A to point B with no hiccups. Our Managed Field Services solution offers end-to-end management and contracting for your entire workforce as well as your vendors to drive operational efficiency. From construction and panel installation to operations and maintenance, RigUp has your back.</p>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img48.jpg') }}" alt="Solar technicians layout a utility-scale solar array." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Professionals</h3>
                        <p>RigUp works with solar technicians, electricians, and vegetation management technicians to give you the best potential work placement options possible. Optimize your resume and find a job that fits your technical skills and geographical preferences. RigUp provides you with the services you need to thrive in your career.</p>
                        <ul>
                            <li>Enjoy fast, consistent, seamless payments</li>
                            <li>Decide which benefits are right for you</li>
                            <li>Search for jobs that fit your goals - whether that means staying close to home or learning a new skill or technology</li>
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
                    <h3>Connect with one of our specialists to explore how RigUp can support you today.</h3>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection