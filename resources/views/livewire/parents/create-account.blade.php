<div>
    <form autocomplete="off" wire:submit.prevent="registerparent">
        <h3>Parent Registration</h3>
        <div class="form-wrap row">
            <h3 class="category-name">Personal Details</h3>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">First Name</label>
                <input type="text" class="input-field" placeholder="First Name" wire:model="first_name">
                @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Middle Name</label>
                <input type="text" class="input-field" name="" placeholder="Middle Name" wire:model="middle_name">
                @error('middle_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Last Name</label>
                <input type="text" class="input-field" name="" placeholder="Last Name" wire:model="last_name">
                @error('last_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Email</label>
                <input type="email" class="input-field" name="" placeholder="mail@exanple@gmail.com" wire:model="email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Phone Number</label>
                <input type="text" class="input-field" name="" placeholder="Phone Number" wire:model="phone_number">
                @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Username</label>
                <input type="text" class="input-field" name="" placeholder="Username" wire:model="username">
                @error('username')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Referral Code</label>
                <input type="text" class="input-field" name="" placeholder="Referral Code" wire:model="referral_code">
                @error('referral_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Password</label>
                <input type="text" class="input-field" wire:model="password" placeholder="" id="password">
                <i class="bi bi-eye-slash" id="togglePassword" style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <label for="">Confirm Password</label>
                <input type="text" class="input-field" name="" id="cpassword" placeholder="Confirm Password" wire:model="password_confirmation">
                <i class="bi bi-eye-slash" id="toggleCPassword" style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12 form-next">
                <button class="form-next-button" type="submit">Submit</button>
            </div>
            <p>Already have a ROODITO account? <a href="{{ url('parent-login') }}">Log In</a></p>
    </form>
</div>
