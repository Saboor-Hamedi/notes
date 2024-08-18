<div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <img src="https://via.placeholder.com/100x20" class="card-img-top img-fluid" alt="Image not found ">
                    <div class="card-body">
                        <p class="text-muted">{{ $post->user->name }}</p>
                        <h1 class="card-title">{!! Str::ucfirst($post->title) !!}</h1>
                        <p class="card-text">{{ $post->content }}</p>
                        <p class="text-muted"> {{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('home') }}" class="btn btn-primary btn-sm" wire:navigate>
                            <i class="bi bi-house"></i> Back
                        </a>
                        @if ($post->guest())
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm" wire:navigate>
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
