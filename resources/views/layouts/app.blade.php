<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('shared.head')
</head>
<body>
    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">
          @yield('content')
        </main>
    </div>

    <script src="{{ mix('js/oneui.app.js') }}"></script>

    @yield('js_after')
</body>
</html>
