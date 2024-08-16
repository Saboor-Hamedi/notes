<div class="container">
    <div class="message">
    @if (Session::has('message'))
        <span class="messages" >{{ Session('message') }}</span>
    @endif
</div>
    <div class="form-container">
        <!-- Search Form -->
        <form class="d-flex">
            <input type="search" class="form-control me-2 search-input" placeholder="Search..."
                wire:model.live.debounce.750ms="searchTerm" wire:keydown.escape="clearSearch" wire:input="updateSearch">
            <!-- Display search results only if there is a search term -->
            @if ($searchTerm && !empty($posts))
                <ul class="mt-3 list-group search__ul" id="search-results">
                    @foreach ($posts as $result)
                        <li class="list-group-item search__li">
                            {{ $result->title }} <!-- Adjust based on your result structure -->
                        </li>
                    @endforeach
                </ul>
            @elseif ($searchTerm)
                <p class="mt-3">No results found.</p>
            @endif
        </form>
    </div>
</div>
