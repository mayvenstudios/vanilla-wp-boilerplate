@layout('layouts/master')
<?php /* Template Name: Sample Page Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

    <h1>{{ get_the_title() }}</h1>

    {{ the_content() }}

<?php endwhile; ?>
@endsection