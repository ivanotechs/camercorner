<div>
    <div class="container d-flex justify-content-center align-items-center" >
        <div class="p-4 border w-50">
            <h4 class="mb-2 text-center">Change Password</h4>
            <div class="form-group col-12">
                <label>Old Password<span class="text-danger">*</span></label>
                <input type="password" wire:model="old_password" class="form-control">
                @error('old_password') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group col-12">
                <label>New Password<span class="text-danger">*</span></label>
                <input type="password" wire:model="password" class="form-control">
                @error('password') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group col-12">
                <label>Confirm New Password<span class="text-danger">*</span></label>
                <input type="password" wire:model="password_confirmation" class="form-control">
                @error('password_confirmation') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <div>
                <button class="btn btn-primary p-2 w-100" wire:click='save'> Submit</button>
            </div>
        </div>
    </div>
</div>
