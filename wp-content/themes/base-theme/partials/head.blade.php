<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ wp_title('') }}</title>
    
    @yield('head')
    
    {{ wp_head() }}

    @if(is_user_logged_in())
    <style>
        html,body {margin-top: 0 !important;}
    </style>
    @endif

</head>