<div>

    {{-- @include('livewire.admin.brand.modal') --}}

    <h1 class="app-page-title mb-2">Brand</h1>
    <div class="row g-4 settings-section mb-3">
        <div class="col-lg-12 col-md-12">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Business Name</label>
                                    <input type="text" class="form-control" id="setting-input-1" value="Lorem Ipsum Ltd." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="setting-input-2" class="form-label">Contact Name</label>
                                    <input type="text" class="form-control" id="setting-input-2" value="Steve Doe" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-3" class="form-label">Business Email Address</label>
                            <input type="email" class="form-control" id="setting-input-3" value="hello@companywebsite.com">
                        </div>
                        <button type="submit" class="btn app-btn-primary" >Save Changes</button>
                    </form>
                </div><!--//app-card-body-->
            </div>
        </div>
    </div>

    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            <div class="row g-3 mb-3 align-items-center justify-content-end">
                {{-- <div class="col-md-12">
                    <a href="" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn btn-sm btn-success text-white" wire:click="create">Add Brand</a>
                </div> --}}
            </div><!--//row-->

            {{-- Table --}}
            <div class="tab-content" id="orders-table-tab-content">

                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="cell">No.</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">slug</th>
                                            <th class="cell">status</th>
                                            <th class="cell">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>

                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="cell">{{ $no }}</td>
                                            <td class="cell">{{ $item->name }}</td>
                                            <td class="cell">{{ $item->slug }}</td>
                                            <td class="cell">{{ $item->status }}</td>
                                            <td class="cell">
                                                <a class="btn btn-sm btn-warning" href="" wire:click="edit({{ $item->id }})">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#" wire:click="delete({{ $item->id }})">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $no++ ?>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- {{ $brands->links() }} --}}
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->

                </div><!--//tab-pane-->

            </div><!--//tab-content-->
            {{-- End Table --}}
        </div>
    </div>


    @if ($isOpen)
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
    @endif



</div>


