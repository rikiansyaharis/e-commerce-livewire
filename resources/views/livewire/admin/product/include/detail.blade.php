
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">

            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" wire:model='name'>{{ $name }}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" wire:model='name'>{{ $name }}</h3>
                                <h6 class="card-subtitle" wire:model='slug'>{{ $slug }}</h6>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6">
                                        <div class="white-box text-center"><img src="{{ asset('storage/'.  $image )}}" wire:model='image' width="200px" class="mt-5 img-responsive"></div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6">
                                        <h4 class="box-title mt-5">Product description</h4>
                                        <p wire:model='description'>{{ $description }}</p>
                                        <h2 class="mt-5" wire:model='price'>
                                            Rp. {{ $price }}<small class="text-success" style="font-size: 13px" wire:model='stock'> stock({{ $stock }})</small>
                                        </h2>
                                        <hr>
                                        <p wire:model='release_date'> <span>Exp. Release Date : {{ $release_date }} </span> </p>
                                        <p wire:model='cpu'> <span> CPU : {{ $cpu }} </span> </p>
                                        <p wire:model='memory'><span> Memory : {{ $memory }} </span> </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title mt-5">Specification</h3>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-product">
                                                <tbody>
                                                    <tr>
                                                        <td width="390">Brand</td>
                                                        <td wire:model='brand_id'>{{ $brand_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chipset</td>
                                                        <td wire:model='chipset'>{{ $chipset }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CPU</td>
                                                        <td wire:model='cpu'>{{ $cpu }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>OS</td>
                                                        <td wire:model='os'>{{ $os }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Display</td>
                                                        <td wire:model='display'>{{ $display }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dimensions</td>
                                                        <td wire:model='dimensions'>{{ $dimensions }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Memory</td>
                                                        <td wire:model='memory'>{{ $memory }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Battery</td>
                                                        <td wire:model='battery'>{{ $battery }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" wire:click.prevent="cancel()" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

