@extends('layouts.frontend')

@section('content')

<div class="content">
  <!-- Navigation -->
  @include('shared.cumbusome')

  <div class="row py-3">
    <div class="col-xl-8">

      <div class="bg-image mt-2" style="background-image: 
          url('{{ asset('media/images/'.$project->cover )}}');">
        <div class="bg-primary-op">
          <div class="content content-full overflow-hidden">
            <div class="my-8 text-center">
              <h1 class="text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">
                {{ $project->title }}.</h1>
              {{-- <h6 class="h4 font-w400 text-white-75 invisible text-warning" data-toggle="appear" data-class="animated fadeInDown">
                <em>by</em>  {{ $project->user->name }}
              </h6> --}}
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white">
        <div class="content content-boxed">
          <div class="text-center font-size-sm push">
            <span class="d-inline-block py-2 px-4 bg-body-light rounded">
              <a class="link-effect font-w600" href="javascript:void(0)">{{ $project->user->name }}</a> on
              {{ date('jS M Y', strtotime($project->updated_at)) }} &bull;
              <em> {{ $project->updated_at->diffForHumans() }}</em>
            </span>
          </div>

          <div class="row justify-content-center">
            <div class="col-sm-12">
              <!-- Story -->
              <article class="font-size-sm text-justify">
                <p class="text-sm">{{ $project->description }}</p>

                <p>{{ $project->description }}</p>

                <h3 class="font-w400 text-black mt-5 mb-3">Sub Title</h3>
                <p>{{ $project->description }}</p>


                @empty(!$project->repository)
                  <h5 class="font-w400 text-black mt-5 mb-3">Soure Code</h3>
                    Clone from Repository 
                  @if (Auth::check())
                  <a href="{{ $project->repository }}" target="_blank"><em>here</em></a>
                  @else
                  <a href="/login"><em>here</em></a>
                  @endif
                @endempty
              </article>

              <div class="mt-5 d-flex justify-content-between push">
                <a class="btn btn-alt-primary" href="javascript:void(0)">
                  <i class="fa fa-heart mr-1"></i> Recommend
                </a>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-light" data-toggle="tooltip" title="Like Story">
                    <i class="fa fa-thumbs-up"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" id="dropdown-blog-story"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- SIDE VIEW -->
    <div class="col-xl-4">

      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Recent Comments</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"
              data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content font-size-sm">
          <div class="push">
            <a class="font-w600" href="be_pages_generic_profile.html">Thomas Riley</a> on <a
              href="be_pages_blog_story.html">Exploring the Alps</a>
            <p class="mt-1">
              Awesome trip! Looking forward going there, I'm sure it will be a great experience!
            </p>
          </div>
          <div class="push">
            <a class="font-w600" href="be_pages_generic_profile.html">Jose Mills</a> on <a
              href="be_pages_blog_story.html">Travel &amp; Work</a>
            <p class="mt-1">
              Thank you for sharing your story with us! I really appreciate the info, it will come in
              handy for sure!
            </p>
          </div>
          <div class="push">
            <a class="font-w600" href="be_pages_generic_profile.html">Jack Greene</a> on <a
              href="be_pages_blog_story.html">Black &amp; White</a>
            <p class="mt-1">
              Really touching story.. I'm so happy everything went well at the end!
            </p>
          </div>
          <div class="push">
            <a class="font-w600" href="be_pages_generic_profile.html">Wayne Garcia</a> on <a
              href="be_pages_blog_story.html">Sleep Better</a>
            <p class="mt-1">
              Great advice! Thanks for sharing, I'm sure it will help many people sleep better and improve
              their lifes.
            </p>
          </div>
          <div class="text-center push">
            <small>
              <a class="font-w600" href="javascript:void(0)">Read More..</a>
            </small>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- More Stories -->
<div class="content content-boxed py-2">
  <!-- Section Content -->
  @include('pages.projects.related')

</div>
<!-- END More Stories -->
@endsection