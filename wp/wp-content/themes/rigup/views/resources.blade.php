@layout('layouts/master')
<?php /* Template Name: Resources  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>

<main>
    <div class="legacy-hero">
        <div class="content-container">
            <div class="name">
                <h6 class="blue-text">Resources</h6>
            </div>
            <div class="message">
                <h1>RigUp is dedicated to keeping you up to date on services, news, and industry trends.</h1>
            </div>
            <div class="sub-text">Check out our blogs, case studies, and videos here.</div>
        </div>
    </div>

    <div>
        <h2 style="text-align:center;margin:50px 0px 20px 0px">Blog</h2>
        <div class="cardFeed">
            <div class="container">
                <div class="title">
                    <h5>Industry News &amp; Tips</h5>
                </div>
                <div class="feed">
                    <div class="feed-row fade-in">
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img26.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>Contractor Spotlight: Brannon Wood</h5>
                                </div>
                                <div class="description">In an interview with RigUp, Brannon Wood, an oil &amp; gas contractor, tells how he started in the oil field....</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img27.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>7 tips to building a powerful Oil &amp; Gas resume</h5>
                                </div>
                                <div class="description">The top 7 tips for building a resume for the oil &amp; gas industry, plus a resume template to get you starte...</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img28.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>RigUp Raises $300 Million in Series D Funding Led by a16z</h5>
                                </div>
                                <div class="description">The energy industry’s fastest growing tech startup has raised more than $450 million to date.</div>
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
        </div>
        <div class="cardFeed">
            <div class="container">
                <div class="title">
                    <h5>Product &amp; Engineering Updates</h5>
                </div>
                <div class="feed">
                    <div class="feed-row fade-in">
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img29.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>How RigUp is transitioning to React</h5>
                                </div>
                                <div class="description">It all started with a five minute lightning talk at our Product, Design, and Engineering offsite in Janua...</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img30.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>Our Journey to a Design Language System</h5>
                                </div>
                                <div class="description">When I started at RigUp four years ago, our journey toward a design language system had already begun.</div>
                                <div class="action">
                                    <div>
                                        <button>Read Article</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="thumbnail"><img alt="" src="{{ asset('images/img31.jpg') }}"></div>
                            <div class="body">
                                <div class="title">
                                    <h5>RigUp’s 1st ever hackathon</h5>
                                </div>
                                <div class="description">With all the new engineers, we wanted to get to know each other and establish better working relationship...</div>
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
        </div>
    </div>

    <div class="content-block white">
        <div class="content-container">
            <div class="banner">
                <h3>See Job Openings at RigUp HQ</h3>
                <a class="button primary" href="#">View Jobs</a>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection