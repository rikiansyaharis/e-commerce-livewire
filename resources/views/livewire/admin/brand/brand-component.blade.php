<div>


    <h1 class="app-page-title mb-2">{{ $title }}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('brand.brands') }}">{{ $title }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Brand</li>
        </ol>
      </nav>

    @include('livewire.admin.brand.include.form')

    @include('livewire.admin.brand.include.modal')


    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            {{-- Table --}}
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Table Brand</h1>
                </div>
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <div class="col-auto">
                                    <input type="text" wire:model.live.debounce.200ms='search' id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search...">
                                </div>
                            </div><!--//col-->
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table  class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="cell">No.</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">slug</th>
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
                                            <td class="cell">
                                                <button class="btn btn-sm btn-warning" href="" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $item->id }})">Edit</button>
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="#" wire:click="delete({{ $item->id }})">Delete</button>
                                            </td>
                                        </tr>
                                        <?php $no++ ?>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $data->links() }}
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->

                </div><!--//tab-pane-->

            </div><!--//tab-content-->
            {{-- End Table --}}
        </div>
    </div>



</div>


