@layout('layouts/master')
<?php /* Template Name: Sample Page Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

    <!--  

    your html goes here

    -->


@endsection