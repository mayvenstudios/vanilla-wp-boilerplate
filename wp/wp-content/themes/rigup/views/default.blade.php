@layout('layouts/master')
@section('content')
@while(have_posts())
<?php the_post(); ?>
<main>
    <h2 class=" title-dark-bg">{{ get_the_title() }}</h2>
    
    <div class="block plain-page-block">
        <div id="condition0">
            <div class="">
                {{ the_content() }}
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection