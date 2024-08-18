<main>
    <div class="container">
        @livewire('search-bar')
    </div>
    <section class="container py-5 text-center">
        <div class="row py-lg-5">
            <div class="mx-auto col-lg-6 col-md-8">
                <p class="lead text-body-secondary">Something short and leading about the collection below—its
                    contents, the creator, etc.</p>
                <p>
                </p>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class=" col-lg-4 col-md-6 col-sm-12">
                    <div class="shadow-sm card h-100">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top img-fluid"
                            alt="Image for {{ $post->title }}">
                        <div class="card-body d-flex flex-column">
                            <p class="text-muted">{{ $post->user->name }}</p>
                            <h5 class="card-title">{!! $post->title !!}</h5>
                            <p class="card-text">{!! Str::limit($post->content, 40, '...') !!}.</p>
                            <p class="mt-auto text-muted">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        
                        <div class="card-footer d-flex justify-content-between">
                            @livewire('posts.post-action',['postId' => $post->id])
                        </div>
                           
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links('vendor.pagination.simple-bootstrap-5') }}
    </div>

</main>
