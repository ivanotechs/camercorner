<div>
    <div class="container d-flex justify-content-center align-items-center" >
        <div class="p-4 border w-50">
            <h4 class="mb-2 text-center">Update Profile</h4>

            <div class="d-flex justify-content-center">
                <label for="picture">
                    @if (isset($uploaded_profile))
                        <img src="{{ $uploaded_profile->temporalUrl() }}" alt="user-image" class="rounded-circle">
                        @else
                            @if (auth()->user()->profile)
                                <img src="{{ asset('storage/'.auth()->user()->profile) }}" alt="user-image" class="rounded-circle">
                                @else
                                <img src="{{ asset('be_assets') }}/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            @endif
                    @endif
                </label>
            </div>

            <input id="picture" wire:model='uploaded_image' type="file" hidden >
            <div class="form-group col-12">
                <label>Name<span class="text-danger">*</span></label>
                <input type="text" wire:model="name" class="form-control">
                @error('name') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group col-12">
                <label>Shop Name<span class="text-danger">*</span></label>
                <input type="text" wire:model="shop_name" class="form-control">
                @error('shop_name') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group col-12">
                <label>Phone<span class="text-danger">*</span></label>
                <input type="text" wire:model="phone" class="form-control">
                @error('phone') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group col-12">
                <label>Email<span class="text-danger">*</span></label>
                <input type="text" disabled wire:model="email" class="form-control">
                @error('email') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div>
                <button class="btn btn-primary p-2 w-100" wire:click='save'> Submit</button>
            </div>
        </div>
    </div>
</div>
