<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<meta name="description"
  content="">
<meta name="author" content="deesynertz">
<meta name="robots" content="noindex, nofollow">


<meta name="keywords" content="deesynertz, deesyner">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Deesynertz') }}</title>

<!-- Icons -->
<link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
<link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

<!-- Fonts and Styles -->
@yield('css_before')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

<link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">

<!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/amethyst.css') }}">
@yield('css_after')

<!-- Scripts -->
<script>
  window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
</script>