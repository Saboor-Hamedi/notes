<div>

    @auth
        @if ($post->guest())
            <button wire:click.prevent="modify" class="btn btn-primary btn-sm">
                <i class="bi bi-pencil-square"></i> 
            </button>
        @endif
    @endauth

    <button wire:click.prevent="show" class="btn btn-secondary btn-sm">
        <i class="bi bi-eye"></i> 
    </button>
</div>
