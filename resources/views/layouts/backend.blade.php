<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        
        @include('shared.head')
       
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed">
            <!-- Side Overlay-->
            @include('pages.includes.aside')
            
            <!-- Sidebar -->
            @include('pages.includes.side-bar')

            <!-- Header -->
            @include('pages.includes.header')

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('shared.footer')
            <!-- END Footer -->

            <!-- Apps Modal -->
            @include('pages.includes.modals')
           
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS -->
        <script src="{{ mix('js/oneui.app.js') }}"></script>
        

        <!-- Laravel Scaffolding JS -->
        {{-- <script src="{{ mix('/js/laravel.app.js') }}"></script> --}}

        @yield('js_after')
    </body>
</html>
