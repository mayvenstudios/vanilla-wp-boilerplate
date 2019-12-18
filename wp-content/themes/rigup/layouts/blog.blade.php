<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body class="blog hs-blog-listing without-banner">
    <div id="wrapper">

        @include('partials/blog-header')

        @yield('content')


    </div>
    
    @include('partials/footer-scripts')
</body>
</html>