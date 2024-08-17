<section class="hero hero--video">
    <div class="container">
        <div class="col-12">
            <div class="search">
                <form class="d-flex">
                    <input type="search" 
                           class="form-control me-2 search-input" 
                           placeholder="Search..."
                           wire:model.live.debounce.750ms="searchTerm" 
                           @error('searchTerm') is-invalid @enderror
                           wire:keydown.escape="clearSearch">
                    
                    @if ($searchTerm && !empty($posts))
                        <ul class="mt-3 list-group search__ul" id="search-results">
                            @foreach ($posts as $result)
                                <li class="list-group-item search__li" wire:click="viewPost({{ $result->id }})">
                                    {{ $result->title }}
                                </li>
                            @endforeach
                        </ul>
                    @elseif (session()->has('message') && empty($searchTerm))
                        <div class="mt-3 alert alert-warning">
                        {{ session('message') }}
                        </div>
                    @endif
                </form>
            </div>

            @if (session()->has('message') && !empty($searchTerm))
                <div class="mt-3 alert alert-info">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div><!-- .container-->
</section><!-- .hero-->
