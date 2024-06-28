<form x-data="{ isModalOpen : @entangle('showModal') }" wire:submit.prevent="save">
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
                <h5 class="modal-title" id="exampleModalLongTitle">{{$isEditMode?  "Edit Testimonial" : "Create Testimonial"}}</h5>
            </div>
            <div class="modal-body row">
                <div class=" form-group col-12">
                    <label>Name<span class="text-danger">*</span></label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <span class="error"> {{ $message }} </span> @enderror
                </div>

                <div class=" form-group col-12">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" wire:model="company" class="form-control">
                    @error('company') <span class="error"> {{ $message }} </span> @enderror
                </div>

                <div class=" form-group col-12">
                    <label>Testimony<span class="text-danger">*</span></label>
                    <textarea type="text" wire:model="testimony" class="form-control"></textarea>
                    @error('testimony') <span class="error"> {{ $message }} </span> @enderror
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" x-on:click="isModalOpen = !isModalOpen;" class="btn btn-secondary"
                        data-dismiss="modal">Close
                </button>
                <button type="button" wire:click="save" class="btn btn-primary"  wire:loading.attribute = 'disabled'>
                    <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none"   wire:target="save"></i>
                    Save changes
                </button>
            </div>
        </div>
    </div>

    <div class="overlay" x-show="isModalOpen" x-cloak></div>
</form>
