<!-- Search -->
<div class="block block-rounded">
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


<!-- Categories -->
<div class="block block-rounded js-ecom-div-nav d-none d-xl-block">
  <div class="block-header block-header-default">
      <h3 class="block-title">
          <i class="fa fa-fw fa-boxes text-muted mr-1"></i> {{ __('Programming Languages') }}
      </h3>
  </div>
  <div class="block-content">
      <ul class="nav nav-pills flex-column push">
          @forelse ($languages as $language)
              <li class="nav-item mb-1">
                  <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                      {{ $language->langName }} <span class="badge badge-pill badge-secondary ml-1">{{ __(0) }}</span>
                  </a>
              </li>
          @empty
              <span class="text-warning">{{ __('No Languages Registerd yet') }}</span>
          @endforelse
      </ul>
  </div>
</div>
<!-- END Categories -->

<!-- Recent Comments -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
      <h3 class="block-title">Recent Comments</h3>
      <div class="block-options">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
          </button>
      </div>
  </div>
  <div class="block-content font-size-sm">
      <div class="push">
          <a class="font-w600" href="be_pages_generic_profile.html">Thomas Riley</a> on <a href="be_pages_blog_story.html">Exploring the Alps</a>
          <p class="mt-1">
              Awesome trip! Looking forward going there, I'm sure it will be a great experience!
          </p>
      </div>
      <div class="push">
          <a class="font-w600" href="be_pages_generic_profile.html">Jose Mills</a> on <a href="be_pages_blog_story.html">Travel &amp; Work</a>
          <p class="mt-1">
              Thank you for sharing your story with us! I really appreciate the info, it will come in handy for sure!
          </p>
      </div>
      <div class="push">
          <a class="font-w600" href="be_pages_generic_profile.html">Jack Greene</a> on <a href="be_pages_blog_story.html">Black &amp; White</a>
          <p class="mt-1">
              Really touching story.. I'm so happy everything went well at the end!
          </p>
      </div>
      <div class="push">
          <a class="font-w600" href="be_pages_generic_profile.html">Wayne Garcia</a> on <a href="be_pages_blog_story.html">Sleep Better</a>
          <p class="mt-1">
              Great advice! Thanks for sharing, I'm sure it will help many people sleep better and improve their lifes.
          </p>
      </div>
      <div class="text-center push">
          <small>
              <a class="font-w600" href="javascript:void(0)">Read More..</a>
          </small>
      </div>
  </div>
</div>
<!-- END Recent Comments -->

<!-- Social -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
      <h3 class="block-title">Social</h3>
  </div>
  {{-- social media --}}
</div>
<!-- END Social -->