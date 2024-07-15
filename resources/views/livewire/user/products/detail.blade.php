<div>
    <div class="row justify-content-between align-items-center">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="font-14 mb-0">Product Details</h3>
            </div>
            <div>
                <a href="#" wire:click.prevent="$emitTo('user.products.edit','load',{{$product}})" class="btn btn-primary" wire:loading.attribute='disabled'>
                    <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none" wire:target="load"></i>
                    Update Product
                </a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="mb-4">
            <h4>
                {{$product->name}}
            </h4>
            <p>Price: ${{$product->price}}</p>
        </div>

        <h5>Image</h5>
        <div class="row mb-4">
            @if ($product->image)
                <div class="col-6 col-md-3 col-lg-2 card mx-1 mb-1">
                    <img class="img-fluid p-2" src="{{ asset('storage/' . $product->image) }}">
                </div>
            @endif
        </div>

        <h5>Description</h5>
        {!! $product->description !!}
    </div>

    <livewire:user.products.edit />
</div>
