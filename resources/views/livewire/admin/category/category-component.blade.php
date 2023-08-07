<div>
    <h1 class="app-page-title mb-2">{{ $title }}</h1>

    @include('livewire.admin.category.include.form')

    @include('livewire.admin.category.include.modal')

    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            {{-- Table --}}
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
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
                                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $item->id }})" >Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})" >Delete</button>
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
