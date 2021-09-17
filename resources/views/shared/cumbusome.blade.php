<!-- Navigation -->
<div class="bg-white">
  <div class="content content-boxed py-1">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">
              <li class="breadcrumb-item">
                <a class="link-fx text-dark" href="/">All</a>
            </li>

            @if (isset($projectsByLanguage))
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('Technology')}}
                </li>
                @if ($projectsByLanguage->count() > 0)
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $projectsByLanguage[0]->language->langName}}
                    </li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        @foreach ( $languages as $row)
                            @if($row->id == request()->tech)
                                {{ $row->langName }}
                            @endif
                        @endforeach
                    </li>
                @endif
                
            @elseif (isset($projectsByCategories))
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('Categoty')}}
                </li>
                @if ($projectsByCategories->count() > 0)
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $projectsByCategories[0]->category->name}}
                    </li> 
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        @foreach ( $categories as $categ)
                            @if($categ->id == request()->cat)
                                {{ $categ->name }}
                            @endif
                        @endforeach
                    </li>   
                @endif
            @else
                <li class="breadcrumb-item" aria-current="page">
                    <a class="link-fx" href="/tech/{{ $project->language_id }}">
                        {{ $project->language->langName}}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $project->title}}
                </li>
            @endif
          </ol>
      </nav>
  </div>
</div>
<!-- END Navigation -->