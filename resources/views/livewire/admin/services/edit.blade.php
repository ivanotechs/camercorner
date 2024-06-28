<form x-data="{ isModalOpen: @entangle('showModal') }" wire:submit.prevent="save">
    <div class="modal" role="dialog" tabindex="-1" x-show="isModalOpen" x-cloak x-transition>
        <div class="modal-inner">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ $isEditMode ? 'Edit Service' : 'Create Service' }}
                </h5>
            </div>
            <div class="modal-body row">
                <div class="form-group col-12">
                    <label>Title<span class="text-danger">*</span></label>
                    <input type="text" wire:model="title" class="form-control">
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12">
                    <label>Description<span class="text-danger">*</span></label>
                    <textarea wire:model="description" class="form-control" rows="5"></textarea>
                    @error('description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-12">
                    <label>Icon</label>
                    <div class="row">
                        @if (isset($icon))
                            <div class="col-3 card mx-1 mb-1">
                                <img class="img-fluid p-2" src="{{ $icon->temporaryUrl() }}">
                            </div>
                        @endif

                        @if ($isEditMode && !isset($icon))
                            <div class="col-3 card mx-1 mb-1">
                                <img class="img-fluid p-2" src="{{ asset('storage/' . $service->icon) }}">
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Icon</label>
                        <input type="file" accept=".jpg, .png, .jpeg" class="form-control" wire:model="icon">
                        <div wire:loading wire:target="icon">Uploading ...</div>
                        @error('icon')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Cover Image</label>
                    <div class="row">
                        @if (isset($image))
                            <div class="col-3 card mx-1 mb-1">
                                <img class="img-fluid p-2" src="{{ $image->temporaryUrl() }}">
                            </div>
                        @endif

                        @if ($isEditMode && !isset($image))
                            <div class="col-3 card mx-1 mb-1">
                                <img class="img-fluid p-2" src="{{ asset($service->coverImage()) }}">
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Image</label>
                        <input type="file" accept=".jpg, .png, .jpeg" class="form-control" wire:model="image">
                        <div wire:loading wire:target="image">Uploading ...</div>
                        @error('image')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" x-on:click="isModalOpen = !isModalOpen;" class="btn btn-secondary"
                    data-dismiss="modal">Close
                </button>
                <button type="submit" class="btn btn-primary" wire:loading.attribute='disabled'>
                    <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none" wire:target="save"></i>
                    Save changes
                </button>
            </div>
        </div>
    </div>

    <div class="overlay" x-show="isModalOpen" x-cloak></div>
</form>
