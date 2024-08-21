<form wire:submit.prevent="update">
   <div class="container">
     <div class="container py-3 mx-auto text-center rounded shadow-sm ">
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
    <div class="form-floating">
        <textarea wire:model.live='content' id="content" name="content"
            class="form-control @error('content') is-invalid @enderror" placeholder="Leave a comment here"></textarea>
        <small>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </small>
    </div>
      <div class="mb-1 form-group">
            <label for="completed">
                <input type="checkbox" id="completed" wire:model="completed"> Check as Completed
            </label>
        </div>
    <button type="submit" class="btn btn-info"><i class="bi bi-pencil-square"></i></button>
   </div>
</form>
