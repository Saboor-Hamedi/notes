<section class="hero hero--video">
    <div class="container">
        <div class="col-12">
            <div class="search">
                <form class="d-flex" wire:submit.prevent>
                    <input type="search" class="form-control me-2 search-input" placeholder="Search..."
                        wire:model.live.debounce.750ms="searchTerm" @error('searchTerm') is-invalid @enderror
                        wire:keydown.escape="clearSearch" wire:keydown.enter="selectFirstResult">
                    @error('searchTerm')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    @if ($searchTerm && !empty($posts))
                        <ul class="mt-3 list-group search__ul" id="search-results">
                            @foreach ($posts as $result)
                                <li class="list-group-item search__li" wire:click="viewPost({{ $result->id }})">
                                    {{ $result->title }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </div>
            <div class="mt-3">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
