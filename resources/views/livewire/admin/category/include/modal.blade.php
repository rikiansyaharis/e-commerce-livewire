
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5 " id="exampleModalLabel">Update Category</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" wire:model.live="category_id">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="name" class="form-control" wire:model='name' id="name" value="">
                        @error('name')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                        <input type="name" class="form-control" id="slug" value="" wire:model='slug'>
                        @error('slug')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-white" wire:click.prevent="cancel()" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary text-white" wire:click.prevent="update()" data-bs-dismiss="modal">Save</button>
                </div>
            </form>

        </div>
        </div>
    </div>

