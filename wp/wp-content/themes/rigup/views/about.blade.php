@layout('layouts/master')
<?php /* Template Name: About  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="content-block about-hero dynamic-background-image" style="background-image:url({{ asset('images/bg03.jpg') }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/bg03.jpg') }});height:250px"></div>
        <div class="content-container">
            <div class="about-hero-content">
                <h6 class="blue-text">Our Story</h6>
                <h1><span class="about-hero-h1">Empowering the people who power the world<sup>™</sup></span></h1>
                <div class="">
                    <p>We’re building the energy industry’s largest marketplace, connecting independent contractors with work and matching service providers and operators with the workforce that will get the job done. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block leadership white">
        <div class="content-container">
            <div class="leadership-primary">
                <h2>Leaders in the field.</h2>
                <div class="">
                    <p>What began as a workforce bidding platform quickly grew into the largest marketplace and provider of labor in the energy industry. Our growing team is diverse and talented, and we’re focused on leading the energy industry into the future with innovative technology.</p>
                </div>
            </div>
            <h6 class="founders-title">Our Founders</h6>
            <div class="team-members">
                <div class="team-member">
                    <div class="team-headshot"><img alt="Xuan Yong" src="{{ asset('images/member01.jpg') }}"></div>
                    <h3>Xuan Yong</h3>
                    <h6 class="md-blue-text">Chief Executive Officer &amp; Co-Founder</h6>
                    <div class="team-bio">
                        <p>Before co-founding RigUp, Xuan was an energy investor at Citadel and D.E. Shaw. He began his career as an energy analyst at Goldman Sachs. Xuan graduated from Texas A&amp;M University.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-headshot"><img alt="Mike Witte" src="{{ asset('images/member02.jpg') }}"></div>
                    <h3>Mike Witte</h3>
                    <h6 class="md-blue-text">Chief Operating Officer &amp; Co-Founder</h6>
                    <div class="team-bio">
                        <p>Mike previously worked at Encana Corporation as a petroleum engineer and in energy private equity consulting. Mike graduated from Columbia Business School and Texas A&amp;M University.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-exec-team__layout">
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Zarah Charania" src="{{ asset('images/member03.png') }}"></div>
            <h3>Zarah Charania</h3>
            <h6 class="md-blue-text">Head of Business Operations</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Paul Rogers" src="{{ asset('images/member04.png') }}"></div>
            <h3>Paul Rogers</h3>
            <h6 class="md-blue-text">Head of Engineering</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="John Mark Warren" src="{{ asset('images/member05.png') }}"></div>
            <h3>John Mark Warren</h3>
            <h6 class="md-blue-text">Head of Finance</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Derek Beckman" src="{{ asset('images/member06.png') }}"></div>
            <h3>Derek Beckman</h3>
            <h6 class="md-blue-text">Head of Marketplace Operations</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Shane Kinder" src="{{ asset('images/member07.png') }}"></div>
            <h3>Shane Kinder</h3>
            <h6 class="md-blue-text">Head of Product</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Patrick Duncan" src="{{ asset('images/member08.png') }}"></div>
            <h3>Patrick Duncan</h3>
            <h6 class="md-blue-text">Head of Special Projects</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Olivia Howe" src="{{ asset('images/member09.png') }}"></div>
            <h3>Olivia Howe</h3>
            <h6 class="md-blue-text">Head of Legal</h6>
        </div>
        <div class="about-exec-team__person">
            <div class="about-exec-team__person-image"><img alt="Kaitlyn DeBernardo" src="{{ asset('images/member10.png') }}"></div>
            <h3>Kaitlyn DeBernardo</h3>
            <h6 class="md-blue-text">Head of Strategy</h6>
        </div>
    </div>
    <div class="content-block investors-section white">
        <div class="content-container">
            <h6>Our Investors</h6>
            <div class="investors-content">
                <div class="logos-row">
                    <div class="company-logo" style="max-width:33.333333333333336%">
                        <a href="#" target="_blank"><img alt="Founders Fund" src="{{ asset('images/foundersfund.png') }}"></a>
                    </div>
                    <div class="company-logo" style="max-width:33.333333333333336%">
                        <a href="#" target="_blank"><img alt="Bedrock" src="{{ asset('images/bedrock.png') }}"></a>
                    </div>
                    <div class="company-logo" style="max-width:33.333333333333336%">
                        <a href="#" target="_blank"><img alt="Andreessen Horowitz" src="{{ asset('images/andreessen_horowitz.png') }}"></a>
                    </div>
                </div>
                <div class="logos-row">
                    <div class="company-logo" style="max-width:25%">
                        <a href="#" target="_blank"><img alt="Quantum Energy Partners" src="{{ asset('images/quantum.png') }}"></a>
                    </div>
                    <div class="company-logo" style="max-width:25%">
                        <a href="#" target="_blank"><img alt="Brookfield" src="{{ asset('images/brookfield.png') }}"></a>
                    </div>
                    <div class="company-logo" style="max-width:25%">
                        <a href="#" target="_blank"><img alt="Baillie Gifford" src="{{ asset('images/baillie_gifford.png') }}"></a>
                    </div>
                    <div class="company-logo" style="max-width:25%">
                        <a href="#"  target="_blank"><img alt="" src="{{ asset('images/moore_logo.jpg') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2 style="text-align:center">Awards</h2>
        <div class="cardFeed">
            <div class="container">
                <div class="feed">
                    <div class="feed-row fade-in">
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img01a.png') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>100 Promising Startups To Watch In 2019 - CNBC</h5>
                                </div>
                                <div class="description">RigUp made this global list for our scalability, diversity, intellectual property, and opportunity.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img02a.png') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>#3 Best Workplaces in Texas (Small &amp; Medium Companies) - Fortune</h5>
                                </div>
                                <div class="description">RigUp made 3rd place on this list of best places to work based on feedback from 42,000 TX employees.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img03a.png') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>Startups That Will Boom In 2019 - Business Insider</h5>
                                </div>
                                <div class="description">Dozens of venture capital investors listed RigUp as one of the 57 most promising startups of 2019.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action">
                <div>
                    <button class="button primary">View More Articles</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2 style="text-align:center">Press</h2>
        <div class="cardFeed">
            <div class="container">
                <div class="feed">
                    <div class="feed-row fade-in">
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img04a.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>Andreessen Horowitz leads $300M Series D for RigUp</h5>
                                </div>
                                <div class="description">David George of Andreessen Horowitz on why a16z is excited to back RigUp.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img05a.png') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>Austin’s RigUp could be among next ‘unicorn’ startups</h5>
                                </div>
                                <div class="description">RigUp is recognized as one of 50 private companies around the world on a path toward a $1 BN valuation.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img06a.png') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>These 50 Start-Ups May Be the Next "Unicorns" - New York Times</h5>
                                </div>
                                <div class="description">The New York Times goes into detail on their list of the “next unicorn startups”, which includes RigUp.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action">
                <div>
                    <button class="button primary">View More Articles</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block partners topographic">
        <div class="content-container">
            <h2>Our partners.</h2>
            <div class="slick-slider">
                <div>
                    <div class="partner">
                        <div class="partner-logo"><img alt="Our partners" src="{{ asset('images/parsley.jpg') }}"></div>
                        <div class="partner-description">
                            <p>Parsley Energy uses RigUp to manage tail spend and contract labor. RigUp gives Parsley’s procurement team real-time spend analytics in categories that were historically fragmented, while providing its operations functions access to the best contract workforce at the most competitive rates.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="partner">
                        <div class="partner-logo"><img alt="Our partners" src="{{ asset('images/petrolegacy.jpg') }}"></div>
                        <div class="partner-description">
                            <p>Parsley Energy uses RigUp to manage tail spend and contract labor. RigUp gives Parsley’s procurement team real-time spend analytics in categories that were historically fragmented, while providing its operations functions access to the best contract workforce at the most competitive rates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block white">
        <div class="content-container">
            <div class="banner">
                <h3>Join our growing team.</h3>
                <a class="button primary" href="#">View jobs</a>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection