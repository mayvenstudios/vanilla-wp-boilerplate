<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body class="{{ isset($bodyClass) ? $bodyClass : false }}">
    <div id="wrapper">

        @if( ! isset($hideHeader) || ( isset($hideHeader) && $hideHeader !== true))
            @include('partials/header')
        @endif

        @yield('content')

        @if( ! isset($hideFooter) || ( isset($hideFooter) && $hideFooter !== true))
            @include('partials/footer')
        @endif

    </div>
    
    @include('partials/footer-scripts')
</body>
</html>