<div class="row g-4 settings-section mb-3">
    <div class="col-lg-12 col-md-12">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                {{Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="" wire:model='name' autocomplete="off">
                                @error('name')
                                <div class="invalid-feedback">
                                    <span class="text-danger"> {{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" value="" wire:model='slug' wire:keyup=''>
                                @error('slug')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn app-btn-primary" wire:click.prevent='create'>Save</button>
                </form>
            </div><!--//app-card-body-->
        </div>
    </div>
</div>
