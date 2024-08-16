<form>
    <div class="container py-3 mx-auto mt-3 mb-3 text-center rounded shadow-sm card bg-light">
        <h4 class="text-primary">Write Your Note</h4>
    </div>
    <div class="mb-3">
        <input wire:model.live='title' type="text" id="title" name="title"
            class="form-control @error('title') is-invalid @enderror" placeholder="Enter your title">
        <small>
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </small>
    </div>
    <div class="mb-3 form-floating">
        <textarea wire:model.live='content' id="content" name="content"
            class="form-control @error('content') is-invalid @enderror" placeholder="Leave a comment here"></textarea>
        <small>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </small>
    </div>
    <div class="mb-3 form-check">
        <input wire:model.live='completed' class="form-check-input" type="checkbox" name="completed" id="completed">
        <label class="form-check-label" for="completed">
            <small class="text-primary">Mark as Completed</small>
        </label>
    </div>
    {{-- <button wire:click.prevent='submit' class="btn btn-primary w-100">Submit</button> --}}
    <x-primary-button wire:click.prevent='submit' class="btn btn-primary w-100">Make note</x-primary-button>
</form>
