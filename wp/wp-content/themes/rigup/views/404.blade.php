@layout('layouts/master', ['hideFooter' => true, 'hideHeader' => true, 'hideWrapper' => true])

@section('head')

<style type="text/css">
    body {
      width: 100vw;
      height: 100vh;
      margin: 0;
      background: #0b6395 url({{ asset('images/404.svg') }}) no-repeat center;
    }
    
    #goHome, #wrapper {
      display: block;
      width: 100%;
      height: 100%;
      cursor: pointer;
    }
    
    @media (max-width: 768px) {
      body {
        background-image: url({{ asset('images/404-mobile.svg') }});
      }
    }
</style>

@endsection

@section('content')

<a id="goHome" href="{{ get_bloginfo('url') }}"></a>

@endsection