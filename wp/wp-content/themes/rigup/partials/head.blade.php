<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ wp_title('') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    
    @yield('head')
    
    {{ wp_head() }}

    @if(is_user_logged_in())
    <style>
        html,body {margin-top: 0 !important;}
    </style>
    @endif

</head>