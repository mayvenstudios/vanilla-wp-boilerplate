@layout('layouts/master')
<?php /* Template Name: Pipeline */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="text-hero">
        <div class="container">
            <div class="columns text-hero__row">
                <div class="column is-10">
                    <div class="text-hero__label">
                        <h1>Pipeline</h1>
                    </div>
                    <div class="text-hero__headline">
                        <p>We’re bringing opportunity &amp; efficiency to&nbsp;<strong>midstream.</strong></p>
                    </div>
                </div>
            </div>
            <div class="columns text-hero__row">
                <div class="column is-8">
                    <div class="text-hero__copy">
                        <p>Our midstream pipeline offering is growing. Explore where we can take you.</p>
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
                    <p>Over 70% of crude oil and petroleum products in the U.S. move through pipelines. At a cost over $7 million per mile, pipelines are a great investment but expensive to maintain and build. Increased regulatory oversight via PHMSA, FERC, and DOT only add to the cost.</p>
                    <p>Our solution provides managed services that drive operational efficiency and lower costs, while providing certified, vetted managers and inspectors across midstream disciplines. All while empowering pipeline professionals to take control of their pay and careers.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--white image-and-list-slice__container">
        <div class="container">
            <div class="image-and-list-slice__copy-container">
                <div class="columns">
                    <div class="column is-offset-1 is-10">
                        <h2><strong>Pipeline Professionals</strong></h2>
                        <p>RigUp connects pipeline professionals with top midstream companies while providing best-in-class insurance options, better split rates, and fast, flexible payment options. RigUp empowers you to take control of your career with more money in your pocket for the same work, the largest network to find your next job, and access to training and certification opportunities..</p>
                    </div>
                </div>
            </div>
            <div class="columns is-gapless is-vcentered is-desktop">
                <div class="column is-half-desktop"><img class="image-and-list-slice__image" src="{{ asset('images/img40.jpg') }}" width="1170" height="910" alt="Pipeline welder repairing a pipeline joint."></div>
                <div class="column is-12-tablet is-offset-0-desktop is-half-desktop">
                    <div class="image-and-list-slice__list-container">
                        <h3>We can help:</h3>
                        <ul>
                            <li>Construction Managers</li>
                            <li>Chief Inspectors</li>
                            <li>Certified Welding Inspectors</li>
                            <li>Project Managers</li>
                            <li>Pipeline Inspectors</li>
                            <li>Welding Inspector</li>
                            <li>Coating Inspectors</li>
                            <li>Utility Inspectors</li>
                            <li>Environmental Inspectors</li>
                            <li>E&amp;I Inspectors</li>
                            <li>Tank Inspectors</li>
                            <li>and many more...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container section-container--blue image-checkboard-slice__container">
        <div class="container">
            <div class="image-checkerboard-slice__header-copy-container">
                <div class="columns">
                    <div class="column is-offset-1 is-10">
                        <h2>Operators</h2>
                        <p>RigUp empowers you to quickly hire quality pipeline professionals with the largest workforce marketplace in the North American energy industry. In addition, our workforce management offering simplifies administrative overhead and reduces risk.</p>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered image-checkerboard-slice__row--alternating">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img41.jpg') }}" alt="Pipeline supplies for repair." width="1164" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Workforce management</h3>
                        <p>RigUp is the smartest way to work. Our platform provides digitized solutions for everything from sourcing, onboarding, and payment processing to risk mitigation and compliance. Once your entire workforce is managed on RigUp, robust data gathering and analytics give you better operational transparency, enabling more accurate predictive models and budget forecasting.</p>
                    </div>
                </div>
            </div>
            <div class="columns image-checkerboard-slice__row is-desktop is-gapless is-vcentered">
                <div class="column"><img class="image-checkerboard-slice__image" src="{{ asset('images/img42.jpg') }}" alt="Pipeline inspection and repair crews at work." width="1170" height="904"></div>
                <div class="column">
                    <div class="image-checkerboard-slice__copy">
                        <h3>Operational Management</h3>
                        <p>Our end-to-end project management solution removes the operational burden from the operator. RigUp builds the team, provides the equipment, and manages the supply chain based on the scope of the project. We ensure that the work is performed safely and to your quality standards. Then total costs are summarized and invoiced, all within the platform.</p>
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