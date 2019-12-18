@layout('layouts/master', ['bodyClass' => 'page-drilling'])
<?php /* Template Name: Landing Page  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>

<div class="hero-banner">
    <div class="hero-img"><img src="{{ asset('images/bg08.png') }}" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-7">
                <div class="event-details">
                    <h1>Drilling Consultant</h1>

                    <p>RigUp is where the oilfield's best Drilling Consultants find new work opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-5 col-lg-push-8 col-sm-push-7">
                <div class="event-registration-form">
                    <h3>Learn how to get started with RigUp</h3>
                    <form accept-charset="UTF-8" method="post" action="http://services.rigup.com/drilling-consultant" class="form" id="pardot-form">
                        <p class="form-field  first_name pd-text required required-custom">
                            <input type="text" value="" class="text" placeholder="First Name *">
                        </p>

                        <p class="form-field  last_name pd-text required required-custom">
                            <input type="text" value="" class="text" placeholder="Last Name *">
                        </p>

                        <p class="form-field  company pd-text required required-custom">
                            <input type="text" value="" class="text" placeholder="Company *">
                        </p>

                        <p class="form-field  email pd-text required required-custom">
                            <input type="text" value="" class="text" placeholder="Email *">
                        </p>

                        <p class="form-field  phone pd-text required required-custom">
                            <input type="text" value="" class="text" placeholder="Phone *">
                        </p>

                        <p class="form-field  job_title pd-text required required-custom">
                            <input type="text" value="" class="text" placeholder="Current Job Title *">
                        </p>

                        <p class="form-field  Role pd-select required required-custom  form-field-master">
                            <select class="select" onchange="">
                                <option value="" selected="">I am a(n): *</option>
                                <option value="106125">Contractor</option>
                                <option value="106127">Service Provider</option>
                                <option value="106129">Operator</option>
                            </select>
                        </p>

                        <p class="form-field  Sector pd-select required required-custom">

                            <select class="select" onchange="">
                                <option value="" selected="">Sector *</option>
                                <option value="106131">E&amp;P Operator</option>
                                <option value="106133">Oilfield Services</option>
                                <option value="106135">Midstream</option>
                                <option value="106137">Offshore</option>
                            </select>
                        </p>

                        <p class="form-field  Working_Status pd-select required required-custom form-field-slave dependentFieldSlave">
                            <select class="select" onchange="">
                                <option value="" selected="">Working status *</option>
                                <option value="106139">Currently Working</option>
                                <option value="106141">Seeking Work</option>
                            </select>
                        </p>

                        <!-- forces IE5-8 to correctly submit UTF8 content  -->
                        <input name="_utf8" type="hidden" value="☃">
                        <p class="submit">
                            <input type="submit" accesskey="s" value="Submit">
                        </p>
                        <p>By completing this form,&nbsp; I confirm that I have read and agree&nbsp;to our&nbsp;<a href="#" target="_top">Terms of Service</a>&nbsp;and&nbsp;<a href="#" target="_top">Privacy Policy</a>.</p>

                    </form>
                </div>
            </div>

            <div class="col-lg-8 col-sm-7 col-lg-pull-4 col-sm-pull-5">
                <h4>What are drilling consultants?</h4>

                <p>Drilling consultants (also known as drilling supervisors, company mentor wellsite supervisors) are highly experienced and skilled contract professionals who oversee a drilling operation, acting in the E&amp;P company's best interest on location.</p>

                <p>Although they are typically contractors, drilling consultants function as the E&amp;P company’s eyes and ears on location, ensuring things are done correctly, efficiently, and as cost-effectively as possible. Essentially, they are responsible for making sure the well is drilled as closely as possible&nbsp;to the engineer’s design, procedure, and AFE.</p>

                <p>Responsibilities of drilling consultants include providing the drilling engineer with daily reports and valuable feedback such as suggestions for necessary changes as operations progress, implementing changes, overseeing rig crews, and signing field tickets or invoices.</p>
            </div>
        </div>
    </div>
</div>

<div class="dark-bg section-padding">
    <div class="container">
        <h2 class="text-center">RigUp Roles: Drilling Consultant</h2>

        <div class="row">
            <div class="col-sm-6">
                <p><strong>What is the required experience or career path for a drilling consultant?&nbsp;</strong>Most drilling consultants have over 10-15 years of experience working on, for, or around a drilling operation. The majority of these professionals have worked their way up the ranks, typically starting as a floorhand, rig hand, derrickhand, etc. This job is most commonly held by someone without a technical degree.</p>

                <p>Someone interested in becoming a drilling consultant should gain experience in drilling, performing in roles such as a driller or directional driller for 3-5 years. Typically, a management role such as a toolpusher or rig manager would follow. After gaining experience and demonstrating upward career trajectory growth, one would be in a favorable position to pursue work as a drilling consultant.</p>

                <p><strong>Where does a drilling consultant work?&nbsp;</strong>Drilling consultants spend about 99% of their time on location, only leaving for necessary groceries or errands during lulls in drilling operation.</p>

                <p><strong>What is a drilling consultant's schedule?&nbsp;</strong>Drilling consultants’ schedules vary depending on the schedule run by the E&amp;P company, but common schedules for this position are (days on site/days off):</p>

                <ul>
                    <li>14/14</li>
                    <li>14/7</li>
                    <li>21/21</li>
                    <li>30/30</li>
                </ul>
            </div>

            <div class="col-sm-6">
                <p>Drilling consultants typically work 12 hours per day. Most often, there is one day shift consultant and one night shift consultant. Some companies, though, only run one drilling consultant who is responsible for 24-hour operations (usually on less challenging wells). Horizontal land wells take roughly 20-40 days depending on the depth and region of the well. These and other short term jobs (45 days or less) may operate without ever making a drilling consultant change.</p>

                <p>
                    <strong>How much does a drilling consultant make?</strong>
                    <br> Depending on the experience held by a drilling consultant, the location and characteristics of the operation, and considering other specialties, a drilling consultant will average between $1,200 and $1,500 per day or up to $2,500 a day. In a year, one could make between $145,000 and $300,000.
                </p>

                <p>
                    <strong>Who does a drilling consultant report to?&nbsp;</strong>Drilling consultants report to the drilling superintendent, drilling engineer, drilling manager, VP of operations, or COO, depending on the size of the company (one would report to a COO in the smallest company and a drilling superintendent in the largest company, for example).
                </p>

                <p>
                    <strong>Who reports to a drilling consultant?&nbsp;</strong>Everyone on the drilling location during a drilling operation is supervised by the drilling consultant.
                </p>
            </div>
        </div>
    </div>
</div>
@endwhile
@endsection