@extends('layouts.frontend')

@section('content')

    <div class="content">
        <!-- Navigation -->
        @include('shared.cumbusome')

        <!-- Hero Content -->
        <div class="bg-image mt-2" style="background-image: url('{{ asset('media/photos/photo23@2x.jpg')}}');">
            <div class="bg-primary-op">
                <div class="content content-full overflow-hidden">
                    <div class="my-8 text-center">
                        <h1 class="text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">Travel the world and feel alive.</h1>
                        <h2 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-class="animated fadeInDown">Experience life like never before.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero Content -->


        <!-- Page Content -->
        <div class="bg-white">
            <div class="content content-boxed">
                <div class="text-center font-size-sm push">
                    <span class="d-inline-block py-2 px-4 bg-body-light rounded">
                        <a class="link-effect font-w600" href="be_pages_generic_profile.html">John Doe</a> on July 16, 2019 &bull; <em>5 min</em>
                    </span>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <!-- Story -->
                        <article class="story text-justify">
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row gutters-tiny items-push js-gallery push img-fluid-100">
                                <div class="col-6 animated fadeIn">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo21@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo21.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-6 animated fadeIn">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo22@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END Gallery -->

                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                            <h3 class="font-w400 text-black mt-5 mb-3">Experiences</h3>
                            <p>Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere habitasse sollicitudin, libero sit potenti leo ultricies etiam blandit id platea augue, erat habitant fermentum lorem commodo taciti tristique etiam curabitur suscipit lacinia habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis proin duis fringilla praesent ornare lorem eros malesuada vitae nullam diam velit potenti consectetur, vehicula accumsan risus lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi class praesent duis ligula, vel ornare faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim et nec habitasse ultricies id tortor curabitur, consectetur eu inceptos ante conubia tempor platea odio, sed sem integer lacinia cras non risus euismod turpis platea erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing dapibus habitant sodales gravida pulvinar, elementum mi tempus ut commodo congue ipsum justo nec dui cursus scelerisque elementum volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu integer vulputate etiam ligula lobortis nunc, interdum commodo libero aliquam suscipit phasellus sollicitudin arcu varius venenatis erat ornare tempor nullam donec vitae etiam tellus.</p>

                            <h3 class="font-w400 text-black mt-5 mb-3">Exploring</h3>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row gutters-tiny items-push js-gallery push img-fluid-100">
                                <div class="col-12 animated fadeIn">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo23@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo23@2x.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-6 animated fadeIn">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo24@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo24.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-6 animated fadeIn">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo14@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo14.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END Gallery -->

                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                            <h3 class="font-w400 text-black mt-5 mb-3">Memories</h3>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        </article>
                        <!-- END Story -->

                        <!-- Actions -->
                        <div class="mt-5 d-flex justify-content-between push">
                            <a class="btn btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-heart mr-1"></i> Recommend
                            </a>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-light" data-toggle="tooltip" title="Like Story">
                                    <i class="fa fa-thumbs-up"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" id="dropdown-blog-story" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-share-alt mr-1"></i> Share
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-blog-story">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fab fa-fw fa-facebook mr-1"></i> Facebook
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fab fa-fw fa-twitter mr-1"></i> Twitter
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fab fa-fw fa-google-plus mr-1"></i> Google+
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fab fa-fw fa-linkedin mr-1"></i> LinkedIn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Actions -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </div>

    <!-- More Stories -->
    <div class="content content-boxed">
        <!-- Section Content -->
        @include('pages.projects.related')
        
    </div>
    <!-- END More Stories -->
@endsection