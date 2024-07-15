<div class="mt-5">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-6 col-lg-8 d-flex justify-content-between align-items-center">
            <h3>Products</h3>
            <a href="#" wire:click.prevent="$emitTo('admin.products.edit','load')" class="btn btn-primary text-white"
                wire:loading.attribute='disabled'>
                <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none" wire:target="load"></i>
                Add Product
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <input type="text" wire:model.debounce.500ms="filters.name" class="form-control w-100 input-sm"
                placeholder="Type to Search">
        </div>
    </div>
    <p class="sub-header">
        List of Products
    </p>

    <div class="table-responsive">
        <table class="table table-bordered m-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $k => $product)
                    <tr wire:key="{{ $k }}">
                        <td>{{ $loop->index + 1 }}</td>
                        <td><a href="{{ route('admin.product.detail', $product) }}"
                                class="">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.product.detail', $product) }}"
                                class="btn btn-default text-primary"><i class="fa fa-eye"></i> View</a>
                            <a href="#"
                                wire:click.prevent="$emitTo('admin.products.edit','load',{{ $product }})"
                                class="btn btn-default text-success"><i class="fa fa-pen"></i> Edit</a>
                            <a href="#"
                                wire:click.prevent="$emitTo('admin.products.delete','load',{{ $product }})"
                                class="btn btn-default text-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($products->count())
        <div class="mt-5">
            {{ $products->links() }}
        </div>
    @endif
    {{-- / Pagination --}}

    <livewire:admin.products.edit />
    <livewire:admin.products.delete />
</div>
