<div>
    @if (auth()->check() && auth()->user()->id === $post->user_id)
    <button wire:click.prevent="modify" class="btn btn-primary btn-sm">
        Modify
    </button>
    @endif
    <button wire:click.prevent="show" class="btn btn-secondary btn-sm">
        Show
    </button>
</div>
