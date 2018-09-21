@include('partials.header_area')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div>
                    <div clas="btn-group mr-2">
                        <a class="btn btn-outline-secondary" href="{{ route('posts.create') }}">Nuova News</a>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        @if( $posts->count() )
                            @foreach( $posts as $post )
                <a class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-auto justify-content-between">
                        <h5 class="mb-sm-2">{{ $post->title }}</h5>
                        <small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small></small><small>{{ date('d M,Y', strtotime($post->created_at)) }}</small>
                        <button class="btn btn-sm btn-outline-secondary" onclick="window.location='{{ route('posts.edit', $post->id) }}'">Modifica</button>
                        <button class="btn btn-sm btn-outline-secondary">Elimina</button>
                    </div><br>
                    <p class="mb-1">{{ $post->preview }}</p>
            </a>
                            @endforeach
                             @endif
                </div>
            </div>
        </main>
    </div>
</div>

@include('partials.footer_area')