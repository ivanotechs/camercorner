<form x-data="{ isModalOpen : @entangle('showModal') }" wire:submit.prevent="save" wire:key="{{Str::uuid()}}">
    <div
        class="modal"
        role="dialog"
        tabindex="-1"
        x-show="isModalOpen"
        x-cloak
        x-transition
    >
        <div class="modal-inner">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$isEditMode?'Edit Product' : 'Add Product'}}</h5>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs tabs-bordered w-100"></ul>
                <div class="tab-content w-100">
                    <div class="tab-pane active" id="home-b1">
                        <div class="form-group col-12">
                            <label>Name<span class="text-danger">*</span></label>
                            <input type="text" wire:model="name" class="form-control">
                            @error('name') <span class="error"> {{ $message }} </span> @enderror
                        </div>
                        <div class="form-group col-12">
                            <label>Price<span class="text-danger">*</span></label>
                            <input type="number" wire:model="price" class="form-control">
                            @error('price') <span class="error"> {{ $message }} </span> @enderror
                        </div>
                        <div class="form-group col-12">
                            <label>Category<span class="text-danger">*</span></label>
                            <select wire:model="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="error"> {{ $message }} </span> @enderror
                        </div>
                        <div class="form-group col-12">
                            <label>Image<span class="text-danger">*</span></label>
                            <div class="row">
                                @if ($image)
                                    <div class="col-3 card mx-1 mb-1">
                                        <img class="img-fluid p-2" src="{{ $image->temporaryUrl() }}" alt="Image Preview">
                                    </div>
                                @elseif($isEditMode && $product->image)
                                    <div class="col-3 card mx-1 mb-1">
                                        <img class="img-fluid p-2" src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" wire:model="image" accept=".png, .jpg, .jpeg">
                                <div wire:loading wire:target="image">Uploading...</div>
                                @error('image') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Description<span class="text-danger">*</span></label>
                            <textarea
                                wire:model.lazy="description"
                                wire:key="uniqueKey"
                                id="description"
                                class="description form-input rounded-md shadow-sm mt-1 block w-full"
                                rows="20"
                                autocomplete="description"
                            ></textarea>
                            @error('description') <span class="error"> {{ $message }} </span> @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" x-on:click="isModalOpen = !isModalOpen;" class="btn btn-secondary"
                        data-dismiss="modal">Close
                </button>
                <button type="button" wire:click="save" class="btn btn-primary" wire:loading.attribute='disabled'>
                    <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none" wire:target="save"></i>
                    Save changes
                </button>
            </div>
        </div>
    </div>
    <div class="overlay" x-show="isModalOpen" x-cloak></div>
</form>
