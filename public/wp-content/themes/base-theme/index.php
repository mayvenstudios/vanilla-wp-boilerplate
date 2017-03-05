@if( ! is_404() )

@include('views/default')

@else

@include('views/404')

@endif