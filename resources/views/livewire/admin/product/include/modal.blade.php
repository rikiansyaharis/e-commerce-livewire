
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5 " id="exampleModalLabel">Update Brand</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit='update'>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" wire:model='name' id="name" value="">
                        @error('name')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Harga <span class="text-danger">*</span> </label>
                        <input type="number" class="form-control form-control-sm" id="price" value="" wire:model='price' placeholder="Rp." autocomplete="off">
                        @error('price')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Stok <span class="text-danger">*</span> </label>
                        <input type="number" class="form-control form-control-sm" id="stock" value="" wire:model='stock' autocomplete="off">
                        @error('stock')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Release Date </label>
                        <input type="date" class="form-control form-control-sm" id="release_date" value="" wire:model='release_date' autocomplete="off">
                        @error('release_date')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Brand <span class="text-danger">*</span> </label>
                        <select class="form-select" wire:model='brand_id' id="brand_id" aria-label="Default select example" >
                            <option selected>Select Brand</option>
                            @foreach ( $brand as $item )
                                <option value="{{ $item->id }}">{{ ucfirst($item->name) }}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Dimension <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="dimensions" value="" wire:model='dimensions' autocomplete="off">
                        @error('dimensions')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Display <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="display" value="" wire:model='display' autocomplete="off">
                        @error('display')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">OS <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="os" value="" wire:model='os' autocomplete="off">
                        @error('os')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Chipset <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="chipset" value="" wire:model='chipset' autocomplete="off">
                        @error('chipset')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">CPU <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="cpu" value="" wire:model='cpu' autocomplete="off">
                        @error('cpu')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Memory <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="memory" value="" wire:model='memory' autocomplete="off">
                        @error('memory')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Batery <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control form-control-sm" id="batery" value="" wire:model='battery' autocomplete="off">
                        @error('battery')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">image </label>
                        <input class="form-control form-control-sm" accept="image/png, image/jpeg" type="file" wire:model='image' id="image">
                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                        @if ($oldImage)
                            old Image: <br>
                            <img class="block mt-1" style="width: 50px;" src="{{ Storage::url($oldImage)}}" alt="">
                        @endif
                        @if ($newImage)
                            New Image: <br>
                            <img class="block mt-1" style="width: 50px;" src="{{ $newImage->temporaryUrl()}}" alt="">
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" wire:model='description' id="exampleFormControlTextarea1" rows="4"></textarea>
                        @error('name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary text-white" wire:click.prevent="cancel()" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white"  data-bs-dismiss="modal">Save</button>
                </div>
            </form>

        </div>
        </div>
    </div>

