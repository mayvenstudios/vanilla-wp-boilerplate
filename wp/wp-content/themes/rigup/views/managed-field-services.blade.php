@layout('layouts/master')
<?php /* Template Name: Managed Field Services  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="legacy-hero">
        <div class="content-container">
            <div class="name">
                <h6 class="blue-text">Managed Field Services</h6>
            </div>
            <div class="message">
                <h1><span>We’re bringing <span class="blue-text">on-demand</span> services to the energy industry at real-time market rates.</span></h1>
            </div>
            <div class="sub-text">Our end-to-end solution leverages our network of qualified service providers, plus tracking and analytics, to turn your field services into a well-oiled machine.
            </div>
        </div>
    </div>

    <div class="managedFieldServices__why-here-wrapper">
        <div class="simpleText simpleText--left">
            <h2>Why We’re Here</h2>
            <div>
                <p>The energy industry relies heavily on the completion of field tasks. Fulfilling these tasks is a frustratingly manual process of moving down call lists and going over task details, only to find out a provider is unavailable, before moving on to the next name on the list. On top of that, add in on-site verification, task completion confirmation, and 30+ day invoicing, and one task can turn into months of phone calls and paperwork. It’s time for a change.</p>
                <p>Managed Field Services from RigUp reduces your operational burden – empowering you and your team to handle more job sites and drive revenue.</p>
            </div>
        </div>
    </div>

    <div class="cards-with-header-and-text__cards-wrapper">
        <div class="cards-with-header-and-text__card">
            <h3>Optimize Operations</h3>
            <p>Take a load off. We monitor systems and manage dispatch requests 24/7 while our digital field ticketing system reduces paperwork and processing times. Simply post tasks to our app or make a phone call, and receive confirmation from a qualified service provider in minutes.</p>
        </div>
        <div class="cards-with-header-and-text__card">
            <h3>Drive Transparency &amp; Efficiency</h3>
            <p>Reduce downtime and get visibility into spend with live location tracking, reporting, and analytics. See volume and production details, plus get driver GPS info all in one place - for greater operational transparency and efficiency, better forecasting, and reduced risk.</p>
        </div>
        <div class="cards-with-header-and-text__card">
            <h3>Pay Less &amp; Get More</h3>
            <p>Save money by trusting RigUp Managed Field Services to utilize real-time market pricing and incentive-driven performance to deliver quality, vetted service providers at less cost to you.</p>
        </div>
        <div class="cards-with-header-and-text__card">
            <h3>Use your Preferred Service Provider</h3>
            <p>While we’re confident that our vetted, HSE certified network of service providers is more than capable of coming in on-time and on-budget, our platform also lets you bring your legacy vendors with you. Once they’re qualified by RigUp, you can specify that we run your list first.</p>
        </div>
        <div class="cards-with-header-and-text__card">
            <h3>Reduce Risk &amp; Ensure Compliance</h3>
            <p>Prevent incidents with our extra layer of field oversight. RigUp provides unannounced field audits on suppliers every 2 weeks. Immediate corrective action is taken for noncompliance and safety infractions.</p>
        </div>
    </div>

    <div class="steps-with-header">
        <div class="steps-with-header__wrapper">
            <div class="steps-with-header__header-container">
                <h2 class="steps-with-header__header">On-Demand Fluids Hauling &amp; Management</h2>
                <p class="steps-with-header__paragraph">RigUp is able to handle all water, crude, and chemical fluid management requests through our Managed Field Services solution.</p>
                <h3 class="steps-with-header__how-it-works">How it Works</h3>
            </div>
            <div class="steps-with-header__steps">
                <div class="steps-with-header__step">
                    <div class="steps-with-header__number-circle">1</div>
                    <div class="steps-with-header__step-copy">We identify, qualify, and onboard service providers by region and ensure they meet your requirements.</div>
                </div>
                <div class="steps-with-header__step">
                    <div class="steps-with-header__number-circle">2</div>
                    <div class="steps-with-header__step-copy">Tasks are immediately routed to vetted providers via our Managed Field Services mobile and desktop apps.</div>
                </div>
                <div class="steps-with-header__step">
                    <div class="steps-with-header__number-circle">3</div>
                    <div class="steps-with-header__step-copy">We track requests from dispatch through payment processing, and show service provider location updates.</div>
                </div>
                <div class="steps-with-header__step">
                    <div class="steps-with-header__number-circle">4</div>
                    <div class="steps-with-header__step-copy">We provide monitoring of tank levels, truck locations, and task status updates through one consolidated dashboard.</div>
                </div>
                <div class="steps-with-header__step">
                    <div class="steps-with-header__number-circle">5</div>
                    <div class="steps-with-header__step-copy">We provide reporting and analytics including daily cost estimates.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="mfs-app-section">
        <div class="mfs-app-section__layout">
            <div class="mfs-app-section__screenshot-container"><img alt="Managed Services Tracking App" src="{{ asset('images/img24.jpg') }}" width="315" height="634"></div>
            <div class="mfs-app-section__description-container">
                <h2>Our technology puts you ahead.</h2>
                <h3>Data-Driven Dispatching</h3>
                <p>Our Managed Field Services solution optimizes service provider sourcing to reduce costs, accommodate operator preferences, and meet crucial timelines.</p>
                <h3>Reporting, Analytics, and Last Mile Data</h3>
                <p>We provide reporting dashboards with your total hauling spend, loads by location by date, and location data.</p>
                <h3>Digital Payments</h3>
                <p>Our end-to-end solution reduces paperwork and increases transparency.</p>
            </div>
        </div>
    </div>

    <div class="mfs-our-solution">
        <div class="mfs-our-solution__copy">
            <div>
                <h2>Our solution is much more than just technology.</h2>
            </div>
            <div>
                <h3>Network &amp; Compliance</h3>
                <p>We give you immediate access to our prequalified network of service providers.</p>
            </div>
            <div>
                <h3>Workforce Management</h3>
                <p>Our dedicated team facilitates onboarding, conducts field audits, and drives adoption.</p>
            </div>
            <div>
                <h3>Logistics</h3>
                <p>Our 24/7 operations team handles all dispatch requests, and provides customer service with a personal touch.</p>
            </div>
            <div>
                <h3>Service Provider Management</h3>
                <p>RigUp manages the entire transaction from dispatch to invoice.</p>
            </div>
            <div>
                <h3>Reporting</h3>
                <p>We provide dedicated data/analytics support to make sure you have the information you need.</p>
            </div>
        </div>
        <div class="mfs-our-solution__media"><img alt="" src="{{ asset('images/img25.png') }}"></div>
    </div>

    <div class="section-container section-container--blue">
        <div class="container pardot-lead-form">
            <div class="columns is-multiline is-centered">
                <div class="column pardot-lead-form__header is-8">
                    <h3>Take control of on-demand tasks with our Managed Field Services solution.</h3>
                    <button class="button primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection