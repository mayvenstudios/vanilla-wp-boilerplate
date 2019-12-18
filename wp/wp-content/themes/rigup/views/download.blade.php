@layout('layouts/master')
<?php /* Template Name: Download  */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <div class="download-app-page">
        <div class="content-block white dynamic-background-image" style="background-image:url({{ asset('images/bg04.jpg') }})">
            <div class="sm-res-img" style="background-image:url({{ asset('images/bg04.jpg') }});height:250px"></div>
            <div class="content-container">
                <div class="download-app-hero-content">
                    <h1>RigUp for your mobile phone.</h1>
                    <div class="">
                        <p>Download the new RigUp mobile app and join the exclusive network for the oilfield.</p>
                    </div>
                    <div class="app-store-links">
                        <a href="#" target="_blank"><img alt="Download on the app store" src="{{ asset('images/download-app-store.svg') }}"></a>
                        <a href="#" target="_blank"><img alt="Get it on google play" src="{{ asset('images/download-google-pay.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-block dots additional-info">
            <div class="content-container">
                <div class="alternating-section reverse">
                    <div>
                        <h3>Stay connected with the oilfield on your mobile phone.</h3>
                        <div class="">
                            <p>Share photos, advice and recommendations with other industry insiders. Discuss the latest news, trends and activity. Cut out the noise and focus on the work with the network built exclusively for the oilfield.</p>
                        </div>
                        <div class="app-store-links">
                            <a href="#" target="_blank"><img alt="Download on the app store" src="{{ asset('images/download-app-store.svg') }}"></a>
                            <a href="#" target="_blank"><img alt="Get it on google play" src="{{ asset('images/download-google-pay.png') }}"></a>
                        </div>
                    </div>
                    <div class="mobile-image"><img alt="Get our mobile app today!" src="{{ asset('images/img12.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection