<div>

    <h1 class="app-page-title mb-2">{{ $title }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('product.products')}}">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Product</li>
      </ol>
    </nav>


    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row g-4 settings-section mb-3">
        <div class="col-lg-12 col-md-12">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form" wire:submit='create' enctype=”multipart/form-data”>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="name" value="" wire:model='name' autocomplete="off">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Harga <span class="text-danger">*</span> </label>
                                    <input type="number" class="form-control form-control-sm" id="price" value="" wire:model='price' placeholder="Rp." autocomplete="off">
                                    @error('price')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Stok <span class="text-danger">*</span> </label>
                                    <input type="number" class="form-control form-control-sm" id="stock" value="" wire:model='stock' autocomplete="off">
                                    @error('stock')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Release Date </label>
                                    <input type="date" class="form-control form-control-sm" id="release_date" value="" wire:model='release_date' autocomplete="off">
                                    @error('release_date')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
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
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Dimension <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="dimensions" value="" wire:model='dimensions' autocomplete="off">
                                    @error('dimensions')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Display <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="display" value="" wire:model='display' autocomplete="off">
                                    @error('display')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">OS <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="os" value="" wire:model='os' autocomplete="off">
                                    @error('os')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Chipset <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="chipset" value="" wire:model='chipset' autocomplete="off">
                                    @error('chipset')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">CPU <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="cpu" value="" wire:model='cpu' autocomplete="off">
                                    @error('cpu')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Memory <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="memory" value="" wire:model='memory' autocomplete="off">
                                    @error('memory')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Batery <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm" id="batery" value="" wire:model='battery' autocomplete="off">
                                    @error('battery')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">image </label> <br>
                                    @if ($image)
                                        <img class="rounded mt-1 block" style="width: 100px;" src="{{ $image->temporaryUrl() }}" alt="">
                                    @endif
                                    <input class="form-control form-control-sm" accept="image/png, image/jpeg" type="file" wire:model='image' id="image">
                                    @error('image')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" wire:model='description' id="exampleFormControlTextarea1" rows="4"></textarea>
                                    @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <a href="{{route('product.products')}}" class="btn app-btn-secondary">Back</a>
                        <button type="submit" class="btn app-btn-primary">Save</button>
                        @if (session('success'))
                            <span class="text-success">{{ session('success')}}</span>
                        @endif
                    </form>
                </div><!--//app-card-body-->
            </div>
        </div>
    </div>

</div>
