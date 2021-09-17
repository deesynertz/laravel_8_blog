<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('shared.head')
</head>

<body>
    <div id="page-container" class="page-header-dark main-content-boxed page-header-fixed">

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Logo -->
                    <a class="font-w600 font-size-h5 tracking-wider text-dual mr-3" href="index.html">
                        Deesyner<span class="font-w400">TZ</span>
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <a class="btn btn-sm btn-dual d-md" href="https://www.github.com/deesynertz/" target="_blank">
                        <i class="fab fa-fw fa-github"></i>
                    </a>
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <div id="page-header-loader" class="overlay-header bg-primary-lighter">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            <!-- Navigation -->
            <div class="bg-white page-header-fixed">
                <div class="content py-3">
                    <!-- Toggle Main Navigation -->
                    <div class="d-lg-none">
                        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                        <button type="button"
                            class="btn btn-block btn-alt-secondary d-flex justify-content-between align-items-center"
                            data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                            Menu
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- END Toggle Main Navigation -->

                    <!-- Main Navigation -->
                    @include('shared.nav-main')

                </div>
            </div>
            <!-- END Navigation -->


            @yield('content')


        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('shared.footer')
    </div>
    <script src="{{ mix('js/oneui.app.js') }}"></script>
    @yield('js_after')
</body>

</html>