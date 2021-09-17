@extends('layouts.frontend')

@section('content')
<div class="content">
    <!-- Hero -->
    <div style="background-image: url('{{ asset('media/photos/photo23@2x.jpg')}}');">
        <div class="content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">The
                    latest stories only for you.</h1>
                <h2 class="h4 font-w400 text-white-75" data-toggle="appear" data-class="animated fadeInDown">Feel free
                    to explore and read.</h2>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="row py-3">
        <!-- LIST -->
        <div class="col-xl-8">
            <!-- Story -->

            @empty($projects)
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-4">
                            <a href="javascript:void(0)">
                                <img class="img-fluid"
                                    src="{{ asset('media/images/first_project_itself2021-08-30-101857.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <h4 class="mb-1">
                                <a class="text-primary-dark" href="javascript:void(0)">Default Project</a>
                            </h4>
                            <div class="font-size-sm mb-3">
                                <a href="javascript:void(0)">Deogratias Alison</a> on July 13, 2019 · <em
                                    class="text-muted">15 min</em>
                            </div>
                            <p class="font-size-sm">
                                This Post Shown because no any project has been uploaded yet...
                            </p>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">Continue Reading..</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            @foreach ( $projects as $project)
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-4">
                            <a href="/project/{{ $project->id }}">
                                <img class="img-fluid" src="{{ asset('media/images/'. $project->cover) }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <h4 class="mb-1">
                                <a class="text-primary-dark" href="/project/{{ $project->id }}"> {{ $project->title }}</a>
                            </h4>
                            <div class="font-size-sm mb-3">
                                <a href="javascript:void(0)">
                                {{ $project->user->name }}</a> on
                                {{ date('jS M Y', strtotime($project->updated_at)) }} <em class="text-muted">&bull; {{ $project->updated_at->diffForHumans() }}</em>
                            </div>
                            <p class="font-size-sm text-justify">
                                {{ Str::limit($project->description, 130, ' ...') }}
                            </p>
                            <a class="btn btn-sm btn-light" href="/project/{{ $project->id }}">Continue Reading..</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endempty

        
            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <div class="pagination justify-content-center push">
                    {!! $projects->appends(['sort'=>'updated_at'])->links() !!}
                </div>
            </nav>

        </div>

        <!-- SIDE VIEW -->
        <div class="col-xl-4">
            <!-- Search -->
            <div class="block block-rounded d-none">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Search</h3>
                </div>
                <div class="block-content block-content-full">
                    <form action="be_pages_blog_classic.html" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" placeholder="Type and hit enter..">
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->


            <!-- Languages -->
            <div class="block block-rounded js-ecom-div-nav d-none d-xl-block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-boxes text-muted mr-1"></i> 
                        {{ __('Programming Languages') }}
                    </h3>
                </div>
                <div class="block-content">
                    <ul class="nav nav-pills flex-column push">
                        @forelse ($languages as $language)
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                href="/tech/{{ $language->id }}">
                                {{ $language->langName }} <span
                                    class="badge badge-pill badge-secondary ml-1">
                                    {{ count($language->project) }}</span>
                            </a>
                        </li>
                        @empty
                        <span class="text-warning">{{ __('No Languages Registerd yet') }}</span>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Social -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Social</h3>
                </div>
                {{-- social media --}}
            </div>
            <!-- END Social -->
        </div>
    </div>
</div>

<!-- Instructors -->
@include('shared.instractors')

<!-- Subscribe -->
@include('shared.subscribe')

@endsection