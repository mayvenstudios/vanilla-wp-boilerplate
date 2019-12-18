@layout('layouts/master')
<?php /* Template Name: Drilling  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Upstream Drilling</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>We provide seamless processes so your rigs go off&nbsp;<strong>without a hitch.</strong></p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>RigUp drives efficiency and cost management for our clients while bringing better opportunities with simple, competitive billing to our service providers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-checkboard-slice__container">
        <div class="container">
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img32.jpg') }}" alt="A contractor arrives a an upstream drilling site." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Operators and Vendors</h3>
                        <p>RigUp is your end-to-end service provider solution for everything from sourcing, onboarding, and payment processing through risk mitigation and FLSA compliance.</p>
                        <ul>
                            <li>Source the contractors you need to meet your operational goals.</li>
                            <li>Onboard vendors quickly through our Global MSA™.</li>
                            <li>Quickly onboard all new service providers.</li>
                            <li>Trust RigUp to handle drug tests and certification requirements.</li>
                            <li>Control spend with transparent data and analytics.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img33.jpg') }}" alt="An oil &amp; gas contractor readies pipe segments at a drill rig." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Contractors</h3>
                        <p>RigUp empowers you by offering more opportunities, unbeatable services, and competitive pay.</p>
                        <ul>
                            <li>Benefit from an entire department dedicated to finding you your next job.</li>
                            <li>Enjoy lower split rates and faster payments, with options like NextDay Pay™.</li>
                            <li>Forget the paperwork with our simpler billing process.</li>
                            <li>Get access to the training and certifications you need to build your career.</li>
                            <li>Easily onboard and schedule drug screenings with our attentive staff.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue image-and-list-slice__container">
        <div class="container">
            <div class="columns is-gapless is-vcentered is-desktop">
                <div class="column is-half-desktop"><img class="image-and-list-slice__image" src="{{ asset('images/img34.jpg') }}" width="1170" height="904" alt="Directional driller preps the drill on an oil rig."></div>
                <div class="column is-12-tablet is-offset-0-desktop is-half-desktop">
                    <div class="image-and-list-slice__list-container">
                        <h3>Who We Help</h3>
                        <ul>
                            <li>Contract Drilling Engineers</li>
                            <li>Drilling Superintendents</li>
                            <li>Drilling Consultants</li>
                            <li>Rig Clerks</li>
                            <li>Directional Drilling Supervisors</li>
                            <li>Directional Drillers</li>
                            <li>MWD Engineers</li>
                            <li>Drilling Fluids Engineers</li>
                            <li>Solids Control Technicians</li>
                            <li>Mud Loggers</li>
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