@extends('layouts.frontend')

@section('content')

<div class="content">
  <!-- Navigation -->
  @include('shared.cumbusome')

  <div class="row py-3">
    <div class="col-xl-9">

      @empty($projectsByLanguage)
        @if ($projectsByCategories->count() > 0)
        <div class="row">
          @foreach ( $projectsByCategories as $item)
            <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
              <a class="block block-rounded block-link-pop" href="/project/{{$item->id }}">
                <img class="img-fluid" src="{{ asset('media/images/'.$item->cover) }}" alt="" height="30px">
                <div class="block-content">
                  <h4 class="mb-1">{{ Str::limit($item->title, 18, ' ...') }}</h4>
                  <p class="font-size-sm">
                    <span class="text-primary">{{ $item->user->name }}</span> on {{ date('jS M Y', strtotime($item->updated_at)) }} <em class="text-muted"> 
                      {{-- {{ $item->updated_at->diffForHumans() }} --}}</em>
                  </p>
                  <article class="font-size-sm text-justify">
                    <p class="font-size-sm text-justify">
                      {{ Str::limit($item->description, 130, '...') }}
                    </p>
                  </article>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation">
          <div class="pagination justify-content-center push">
              {!! $projectsByCategories->links() !!}
          </div>
        </nav>
        @else

        @endif
      @else
        @if($projectsByLanguage->count() > 0)
        <div class="row">
          @foreach ( $projectsByLanguage as $item)
            <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
              <a class="block block-rounded block-link-pop" href="/project/{{ $item->id }}">
                <img class="img-fluid" src="{{ asset('media/images/'.$item->cover) }}" alt="" height="30px">
                <div class="block-content">
                  <h4 class="mb-1">{{ Str::limit($item->title, 18, ' ...') }}</h4>
                  <p class="font-size-sm">
                    <span class="text-primary">{{ $item->user->name }}</span> on {{ date('jS M Y', strtotime($item->updated_at)) }} <em class="text-muted"> 
                      {{-- {{ $item->updated_at->diffForHumans() }} --}}</em>
                  </p>
                  <article class="font-size-sm text-justify">
                    <p class="font-size-sm text-justify">
                      {{ Str::limit($item->description, 130, '...') }}
                    </p>
                    
                  </article>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation">
          <div class="pagination justify-content-center push">
              {!! $projectsByLanguage->links() !!}
              {{-- {!! $projectsByLanguage->appends(['sort'=>'updated_at'])->links() !!} --}}
          </div>
        </nav>
        @else

        @endif
      @endempty
    </div>

    <!-- SIDE VIEW -->
    <div class="col-xl-3">

      <div class="block block-rounded js-ecom-div-nav d-xl-none {{ ((isset($projectsByLanguage) && $projectsByLanguage->count() > 0) || (isset($projectsByCategories) && $projectsByCategories->count() > 0))? 'd-xl-none': 'd-xl-block' }}">
        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" href="#technology_tab">
                <i class="fa fa-fw fa-boxes text-muted mr-1"></i> Technology</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#categology_tab">
                <i class="fa fa-fw fa-clone text-muted mr-1"></i> Category</a>
          </li>
        </ul>
        <div class="block-content tab-content">
          <!-- Languages -->
          <div class="tab-pane active" id="technology_tab" role="tabpanel">
            <ul class="nav nav-pills flex-column push">
              @foreach ($languages as $language)
              <li class="nav-item mb-1">
                <a class="nav-link d-flex justify-content-between align-items-center" href="/tech/{{ $language->id }}">
                  {{ $language->langName }}
                  <span class="badge badge-pill badge-secondary ml-1">{{ count($language->project) }}</span>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
          
          <!-- Categories -->
          <div class="tab-pane" id="categology_tab" role="tabpanel">
            <ul class="nav nav-pills flex-column push">
              @foreach ($categories as $category)
              <li class="nav-item mb-1">
                <a class="nav-link d-flex justify-content-between align-items-center" href="/cat/{{ $category->id }}">
                  {{ $category->name }}
                  <span class="badge badge-pill badge-secondary ml-1">{{ count($category->project) }}</span>
                </a>
              </li>
              @endforeach
            </ul></div>
        </div>
      </div>

      <!-- Languages -->
      <div class="block block-rounded d-none js-ecom-div-nav {{ ((isset($projectsByLanguage) && $projectsByLanguage->count() > 0)|| (isset($projectsByCategories) && $projectsByCategories->count() > 0))? 'd-xl-block': 'd-xl-none' }}">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-fw fa-boxes text-muted mr-1"></i> 
                {{ __('Technology') }}
            </h3>
        </div>
        <div class="block-content">
          <ul class="nav nav-pills flex-column push">
            @foreach ($languages as $language)
            <li class="nav-item mb-1">
              <a class="nav-link d-flex justify-content-between align-items-center" href="/tech/{{ $language->id }}">
              {{ $language->langName }} 
              <span class="badge badge-pill badge-secondary ml-1">{{ count($language->project) }}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>

      <!-- Categories -->
      <div class="block block-rounded d-none js-ecom-div-nav {{ ((isset($projectsByLanguage) && $projectsByLanguage->count() > 0)|| (isset($projectsByCategories) && $projectsByCategories->count() > 0))? 'd-xl-block': 'd-xl-none' }}">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-fw fa-clone text-muted mr-1"></i> 
                {{ __('Category') }}
            </h3>
        </div>
        <div class="block-content">
          <ul class="nav nav-pills flex-column push">
            @foreach ($categories as $category)
            <li class="nav-item mb-1">
              <a class="nav-link d-flex justify-content-between align-items-center"
              href="/cat/{{ $category->id }}">
              {{ $category->name }} 
              <span class="badge badge-pill badge-secondary ml-1">{{ count($category->project) }}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection