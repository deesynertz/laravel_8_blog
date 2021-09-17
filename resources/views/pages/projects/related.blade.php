@empty($related)

<div class="bg-body-dark">
    <div class="content content-full">
        <div class="my-5 text-center">
            <h3 class="h4 mb-4 invisible" data-toggle="appear">No other Projects related to <strong>{{ $project->title }}</strong> with 
                <a href="/project/tech/{{$project->language_id }}" class="text-warning">{{ $project->language->langName }}</a> Technology </h3>
            <a class="btn btn-rounded btn-success px-4 py-2 invisible" data-toggle="appear" data-class="animated bounceIn" href="/login">subscribe to add new</a>
        </div>
    </div>
</div>

@else
<div class="row">
    <div class="content content-boxed text-center">
        <h2 class="font-w400">Related Post</h2>
    </div>

    @foreach ( $related as $project)
    <div class="col-md-4">
        <a class="block block-rounded block-link-pop" href="/project/{{ $project->id }}">
            <div class="block-content bg-image" style="background-image: url('{{ asset('media/images/'.$project->cover )}}');">
                <h4 class="text-warning mt-5 push">{{ $project->title }}</h4>
            </div>
            <div class="block-content block-content-full font-size-sm">
                <em>by</em>: <span class="text-primary">{{ $project->user->name }}</span> on {{ date('jS M Y', strtotime($project->updated_at)) }}· <em>{{ $project->updated_at->diffForHumans() }}</em>
            <p class="font-size-sm text-justify py-2 bold">
                {{ Str::limit($project->title, 130, ' ...') }}
            </p>
            </div>
            
        </a>
    </div>
    @endforeach
</div>
@endempty