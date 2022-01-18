<div>
    <form action="" wire:submit.prevent="registerpupil" autocomplete="off">
        <h3>Student Registration</h3>
        <ul class="nav nav-tabs  nav-justified">
            @if ($currentstep == 1)
                 <li class="nav-item">
                <a class="nav-link active" id="link_student_information">1.
                    Student Information</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link inactive" id="link_student_information">1.
                    Student Information</a>
            </li>
            @endif
           @if ($currentstep == 2)
           <li class="nav-item">
            <a class="nav-link active" id="link_education_information">2.
                Education Information</a>
        </li>
           @else
           <li class="nav-item">
            <a class="nav-link inactive" id="link_education_information">2.
                Education Information</a>
        </li>
           @endif
           
    
        </ul>
        <div class="tab-content" style="margin-top:16px;">
            @if ($currentstep == 1)
                <div class="tab-pane active" id="student_information">
                <div class="form-wrap row p-1">
                    <h3 class="category-name">Personal Details</h3>
                    <div class="form-wrap row">
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">First Name</label>
                            <input type="text" class="input-field" placeholder="First Name" wire:model="first_name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Middle Name</label>
                            <input type="text" class="input-field" wire:model="middle_name" name="" placeholder="Middle Name">
                            @error('middle_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Last Name</label>
                            <input type="text" class="input-field" wire:model="last_name" placeholder="Last Name">
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="input-field" wire:model="date_of_birth" placeholder="">
                            @error('date_of_birth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Phone Number</label>
                            <input type="text" class="input-field" wire:model="phone_number" placeholder="Phone Number">
                            @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Username</label>
                            <input type="text" class="input-field" wire:model="username" placeholder="Username">
                            @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
                            <label for="">Email</label>
                            <input type="text" class="input-field" wire:model="email" placeholder="example@example@gmail.com">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <h3 class="category-name">Parent/Guardian Details</h3>
                    <div class="form-wrap row">
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Full Name</label>
                            <input type="text" class="input-field" wire:model="parent_name" placeholder="Full Name">
                            @error('parent_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Phone Number</label>
                            <input type="text" class="input-field" wire:model="parent_phone_number" placeholder="Phone Number">
                            @error('parent_phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <label for="">Email</label>
                            <input type="text" class="input-field" wire:model="parent_email_address" placeholder="mail@example@gmail.com">
                            @error('parent_email_address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        
                    </div>
                </div>
            </div>
            @endif 
            @if ($currentstep == 2) 
             <div class="tab-pane active" id="education_information">
                <h3 class="category-name">Your Education</h3>
                <div class="form-wrap row p-1">
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">School System</label>
                        <select name="" class="input-field" id="" wire:model="school_system">
                            <option value="">Please select</option>
                            <option value="System 1">System 1</option>
                            <option value="System 2">Syetem 2</option>
                        </select>
                        @error('school_system')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">School Level</label>
                        <select name="" class="input-field" id="" wire:model="school_level">
                            <option value="">Please select</option>
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                        </select>
                        @error('school_level')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Password</label>
                        <input type="password" class="input-field" wire:model="password" placeholder="" id="password">
                        <i class="bi bi-eye-slash" id="togglePassword" style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Confirm Password</label>
                        <input type="password" class="input-field" wire:model="password_confirmation" id="cpassword" placeholder="Confirm Password">
                        <i class="bi bi-eye-slash" id="toggleCPassword" style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    
                    <p>Already have a Roodito Account? <a href="{{ url('student-login') }}">Sign In</a></p>
                </div>
    
            </div>
            @endif
            <div class="row">
                @if ($currentstep == 1)
                    <div class="col-12">
                    <button type="button" class="form-next-button" name="btn_student_information" wire:click="increasestep()" id="btn_student_information">Next</button>
                </div>
                @endif
                @if ($currentstep == 2)
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                    <button type="button" class="form-next-button"  wire:click="descreaseStep()">Previous</button>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                    <button type="submit" class="form-next-button" id="btn_education_information">Submit</button>
                </div>
                @endif
                
            </div>
          
        </div>
    </div>
    </form>
</div>
