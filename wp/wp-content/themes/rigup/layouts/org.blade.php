<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body class="rigup-org">
    <div id="wrapper">

        @include('partials/org-header')

        @yield('content')


    </div>
    
    @include('partials/footer-scripts')
</body>
</html>