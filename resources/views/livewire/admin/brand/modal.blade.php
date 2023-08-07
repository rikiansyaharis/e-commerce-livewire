
    <!-- Modal -->
    <div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5 " id="exampleModalLabel">{{ $postId ? 'Edit Post' : 'Create Post' }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="" wire:submit.prevent="{{ $postId ? 'update' : 'store' }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" wire:model='name' id="name" value="">
                        @error('name')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Brand Slug</label>
                        <input type="name" class="form-control" id="slug" value="" wire:model='slug'>
                        @error('slug')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" >Status</label> </br>
                        <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-1" wire:model='status'>
                        Hidden
                        @error('status')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-white" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary text-white" >Save</button>
                </div>
            </form>

        </div>
        </div>
    </div>

