<div class="row g-4 settings-section mb-3">
    <div class="col-lg-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="name" value="" wire:model='name'>
                                @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" value="" wire:model='slug'>
                                @error('slug')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn app-btn-primary" wire:click.prevent='create'>Save Changes</button>
                    @if (session('success'))
                        <span class="text-success">{{ session('success')}}</span>
                    @endif
                </form>
            </div><!--//app-card-body-->
        </div>
    </div>
</div>
