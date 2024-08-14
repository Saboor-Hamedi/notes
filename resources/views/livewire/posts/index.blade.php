<div>
    <div class="container">
        @livewire('search-bar')
    </div>
    <main>
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
        <div class="py-5 album bg-body-tertiary">
            <div class="container ">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
                    @foreach ($posts as $post)
                        <div class="col">
                            <div class="mb-2 mb-sm-2 card">
                                <img src="#" alt="Thumbnail" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ Str::limit($post->content, 50, '...') }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-secondary">View</a>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small
                                            class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $posts->links('vendor.pagination.simple-bootstrap-5') }}
            </div>
        </div>
    </main>
</div>
