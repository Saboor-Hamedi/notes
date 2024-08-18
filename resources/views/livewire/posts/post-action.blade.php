<div>

    @auth
        @if ($post->guest())
            <button wire:click.prevent="modify" class="btn btn-primary btn-sm">
                Modify
            </button>
        @endif
    @endauth

    <button wire:click.prevent="show" class="btn btn-secondary btn-sm">
        Show
    </button>
</div>
