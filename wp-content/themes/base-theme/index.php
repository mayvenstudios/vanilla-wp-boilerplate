@if( ! is_404() )

@include('views/blog')

@else

@include('views/404')

@endif