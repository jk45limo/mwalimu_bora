<div>
    <form method="post" id="register_form" wire:submit.prevent="registerteacher" autocomplete="off" enctype="multipart/form-data">
        <ul class="nav nav-tabs  nav-justified">
            @if ($currentstep == 1)
            <li class="nav-item">
                <a class="nav-link active" id="link_teacher_information">1.
                    Teacher Information</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link inactive" id="link_teacher_information">1.
                    Teacher Information</a>
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
           @if ($currentstep == 3)
           <li class="nav-item">
            <a class="nav-link active" id="link_association_information">3.
                Association Information</a>
        </li>
           @else
           <li class="nav-item">
            <a class="nav-link inactive" id="link_association_information">3.
                Association Information</a>
        </li>
           @endif
        </ul>
        <div class="tab-content" style="margin-top:16px;">
            @if ($currentstep == 1)
                      <div class="tab-pane active" id="teacher_information">
                <div class="form-wrap row">
                    <h3 class="category-name">Enter Your Association Information</h3>
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
                        <input type="email" class="input-field" wire:model="email"
                            placeholder="mail@exanple@gmail.com">
                            @error('email')
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
                        <label for="">Country</label>
                        <select name="" class="input-field" id=""  wire:model="country">
                            <option value="">Select country</option>
                            <option value="kenya">Kenya</option>
                            <option value="Uganda">Uganda</option>
                            <option value="tanzania">Tanzania</option>
                        </select>
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">County</label>
                        <select wire:model="county" class="input-field" id="">
                            <option value="">Select county</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Kisumu">Kisumu</option>
                        </select>
                        @error('county')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">Gender</label>
                        <select name="" class="input-field" id="" wire:model="gender">
                            <option value="">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">Address</label>
                        <input type="text" class="input-field" name="" placeholder="Address" wire:model="home_address">
                        @error('home_address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">Profession</label>
                        <select  class="input-field" id="" wire:model="profession">
                            <option value="">Select proffesion</option>
                            <option value="Profession 1">Profession 1</option>
                            <option value="Profession 2">Profession 2</option>
                        
                        </select>    @error('profession')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
                        <label for="">Upload your CV</label>
                        <input type="file" class="input-field" name="" placeholder="Address" wire:model="cv">
                        <small class="text-muted form-text">
                            (files accepted: jpeg, jpg, png, pdf - max file size:50k)
                        </small>
                        @error('cv')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                </div>
                
            </div>
            @endif
      @if ($currentstep == 2)
          <div class="tab-pane active" id="education_information">
                <h3 class="category-name">Enter Your Education Information</h3>
                <div class="form-wrap row">
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">Primary School</label>
                        <input type="text" class="input-field" wire:model="primary_school" placeholder="Primary School">
                        @error('primary_school')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">Secondary School</label>
                        <input type="text" class="input-field" wire:model="secondary_school" placeholder="Secondary School">
                        @error('secondary_school')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">College / University</label>
                        <input type="text" class="input-field" wire:model="university" placeholder="Secondary School">
                        @error('university')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Subject you teach</label>
                        <select name="" class="input-field" id="" wire:model="subject_combination">
                            <option value="">Subject you teach</option>
                            <option value="English/Maths">English/Maths</option>
                            <option value="English/Kiswahili">English/Kiswahili</option>
                        </select>
                        @error('subject_combination')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Level you teach</label>
                        <select name="" class="input-field" id="" wire:model="teaching_level">
                            <option value="">Level you teach</option>
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                        </select>
                        @error('teaching_level')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    {{-- <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6 teacher-select-subject">
                        <label for="">Primary Subject</label>
                        <p><input type="checkbox" wire:model="primary_subject" value="English" id=""> <span>English</span></p>
                        <p><input type="checkbox" wire:model="primary_subject" value="CRE" id=""> <span>CRE</span></p>
                        <p><input type="checkbox" wire:model="primary_subject" value="IRE" id=""> <span>IRE</span></p>
                        <p><input type="checkbox" wire:model="primary_subject" value="Kiswahili" id=""> <span>Kiswahili</span></p>
                        <p><input type="checkbox" wire:model="primary_subject" value="Maths" id=""> <span>Maths</span></p>
                        <p><input type="checkbox" wire:model="primary_subject" value="Science" id=""> <span>Science</span></p>
                        <p><input type="checkbox" wire:model="primary_subject" value="Social Studies" id=""> <span>Social Studies</span></p>
                        @error('primary_subject')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6 teacher-select-subject">
                        <label for="">Other Subject</label>
                        <p><input type="checkbox" wire:model="other_subjects" value="English"> <span>English</span></p>
                        <p><input type="checkbox" wire:model="other_subjects" value="CRE"> <span>CRE</span></p>
                        <p><input type="checkbox" wire:model="other_subjects" value="IRE"> <span>IRE</span></p>
                        <p><input type="checkbox" wire:model="other_subjects" value="Kiswahili"> <span>Kiswahili</span></p>
                        <p><input type="checkbox" wire:model="other_subjects" value="Maths"> <span>Maths</span></p>
                        <p><input type="checkbox" wire:model="other_subjects" value="Science"> <span>Science</span></p>
                        <p><input type="checkbox" wire:model="other_subjects" value="Social Studies"> <span>Social Studies</span></p>
                        @error('other_subjects')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6 teacher-select-subject">
                        <label for="">Classes you teach</label>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="All" id=""> <span>All</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach"  value="Grade 1"> <span>Grade/Class 1</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 2"> <span>Grade/Class 2</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 3"> <span>Grade/Class 3</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 4"> <span>Grade/Class 4</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 5"> <span>Grade/Class 5</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 6"> <span>Grade/Class 6</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 7"> <span>Grade/Class 7</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="Grade 8"> <span>Grade/Class 8</span></p>
                        <p><input type="checkbox" wire:model="classes_you_teach" value="KCPE"> <span>KCPE</span></p>
                        @error('classes_you_teach')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                </div>
                <div class="form-wrap row">
                    <div class="form-item col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <label for="">Professional summary</label>
                        <textarea name="" class="input-field" wire:model="professional_summary" cols="30" rows="10"></textarea>
                        @error('professional_summary')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>

                
            </div>
      @endif
      @if ($currentstep == 3)
            <div class="tab-pane active" id="association_information">
                <div class="form-wrap row">
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">TSC Designation Code</label>
                        <select wire:model="designation_code" class="input-field" id="">
                            <option value="">Designation code</option>
                            <option value="Code 1">Code 1</option>
                            <option value="Code 2">Code 2</option>
                        </select>
                        @error('designation_code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">TSE Number(Optional)</label>
                        <input type="text" class="input-field" wire:model="tsc_number" placeholder="TSE Number">
                        @error('tsc_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <label for="">Other Associations</label>
                        <input type="text" class="input-field" wire:model="other_associations" placeholder="Other Associations">
                        @error('other_associations')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">KRA Pin</label>
                        <input type="text" class="input-field" wire:model="kra_pin" placeholder="KRA Pin">
                        @error('kra_pin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Referral Code</label>
                        <input type="text" class="input-field" wire:model="referral_code" placeholder="Referral Code">
                        @error('referral_code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Password</label>
                        <input type="password" class="input-field" wire:model="password" placeholder="" id="password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <i class="bi bi-eye-slash" id="togglePassword"
                            style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
                    </div>
                    <div class="form-item col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="">Confirm Password</label>
                        <input type="password" class="input-field" wire:model="password_confirmation" id="cpassword"
                            placeholder="Confirm Password">
                        <i class="bi bi-eye-slash" id="toggleCPassword"
                            style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
                            @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
              
            </div>
      @endif
            
          
        </div>
        @if ($currentstep == 1)
             <div class="row">
            <div class="col-12">
                <button type="button" class="form-next-button" wire:click="increasestep()">Next</button>
            </div>
        </div>
        @endif
       
        @if ($currentstep == 2)
             <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <button type="button" class="form-next-button"  wire:click="descreaseStep()">Previous</button>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">

                <button type="button"  class="form-next-button" wire:click="increasestep()">Next</button>
            </div>
        </div>
        @endif
       @if ($currentstep == 3)
            <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <button type="button" name="previous_btn_association_information" class="form-next-button" wire:click="descreaseStep()">Previous</button>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">

                <button type="submit" name="btn_association_information"
                    id="btn_association_information" class="form-next-button">Submit</button>
            </div>
            <p>Already have a Roodito Account? <a href="{{ url('teacher-login') }}">Sign In</a></p>
        </div>
       @endif
       
    </form>
</div>
