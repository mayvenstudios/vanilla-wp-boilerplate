@layout('layouts/master')
<?php /* Template Name: Production */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Upstream Production</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>Get <strong>pumped up</strong> about RigUp in upstream production.</p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>Approximately 8% of our nation's GDP is comprised of oil and gas production. RigUp is proud to give a helping hand to the hard workers who make it happen. From start to finish, RigUp is here to help you achieve your production goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue text-block-slice">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <p>“The RigUp team has done a great job helping facilitate interviews and finding great candidates to fill our open contract positions. Communication has been great from start to finish. The web portal is very easy to use and gives contractors exposure to different [opportunities]. Timesheet approval through the web portal is simple and easy to navigate.”</p>
                    <p><strong>– Derek Molde, Lead Production Foreman</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-checkboard-slice__container">
        <div class="container">
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img43.jpg') }}" alt="Oil &amp; gas contractors inspect an upstream production site." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Vendors and Operators</h3>
                        <p>The RigUp sourcing team works with you from start to finish to understand your production needs and contract the right service providers. We champion safe behaviors by being mindful of risk exposures while protecting personnel, property, and the environment.</p>
                        <ul>
                            <li>Cut the costs of hiring and onboarding employees.</li>
                            <li>Stop maintaining and/or renting equipment.</li>
                            <li>Pay your workforce more, without spending more, thanks to our low rates.</li>
                            <li>Source qualified service providers.</li>
                            <li>Let RigUp monitor workforce certifications.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img44.jpg') }}" alt="Oilfield lease operations" width="1164" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Lease Operations</h3>
                        <p>RigUp’s sourcing team works with you to understand your needs. We provide access to qualified candidates who are HSE compliant and certified, eliminating your task of sifting through resumes.</p>
                        <p>In addition, RigUp also provides a “turn key” lease operator package complete with the trucks and tools required to execute any job, across any basin. Let us take care of the hassle of equipment rental, maintenance, and cost of tools. We offer competitive rates and establish reduced LOEs to help ensure all wells are completed within budget.</p>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img45.jpg') }}" alt="Drilling site water storage at sunset." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Contractors</h3>
                        <p>We provide you with fast, competitive pay for your current or future job, and help to connect you with your next opportunity. Take your career to the next level with RigUp.</p>
                        <ul>
                            <li>Enjoy payment options like NextDay Pay™.</li>
                            <li>Get access to health insurance and other great benefits.</li>
                            <li>Discover a simpler billing process.</li>
                            <li>Get access to certifications and trainings.</li>
                            <li>Easily onboard and schedule drug screenings to get to work faster.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue image-and-list-slice__container">
        <div class="container">
            <div class="columns is-gapless is-vcentered is-desktop">
                <div class="column is-half-desktop"><img class="image-and-list-slice__image" src="{{ asset('images/img46.jpg') }}" width="1170" height="904" alt="Two oilfield workers inspect a pump jack near sunset."></div>
                <div class="column is-12-tablet is-offset-0-desktop is-half-desktop">
                    <div class="image-and-list-slice__list-container">
                        <h3>Who We Help</h3>
                        <ul>
                            <li>Automation Technicians</li>
                            <li>Compressor Operators</li>
                            <li>Electricians</li>
                            <li>Flowback Operators</li>
                            <li>I&amp;E Technicians</li>
                            <li>Lease Operators / Pumpers</li>
                            <li>Mechanics</li>
                            <li>Plant Operators</li>
                            <li>Production Operators</li>
                            <li>Production / Ops Engineers</li>
                            <li>Production Foremans</li>
                            <li>Production Specialists</li>
                            <li>Production Superintendents</li>
                            <li>Tank Inspectors</li>
                            <li>Well Testing Operators</li>
                            <li>Workover Consultants</li>
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