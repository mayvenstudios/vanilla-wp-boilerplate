<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body>
    @include('partials/header')

    @yield('content')

    @include('partials/footer')

    {{ wp_footer() }}
</body>
</html>