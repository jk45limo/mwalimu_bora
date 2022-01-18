<div>
    <form action="" wire:submit.prevent="registerteacher" autocomplete="off" enctype="multipart/form-data">
        @if ($currentstep == 1)
            <div class="register-step-one">
            <div class="top-register-step-one">
                <h5>Teacher Information</h5>
            </div>
            <div class="bottom-register-step-one">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" wire:model="first_name" class="form-control" placeholder="First Name">
                            @error('first_name')
                                <small class="text-danger">{{$message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Middle Name</label>
                            <input type="text" wire:model="middle_name" class="form-control" placeholder="Middle name">
                            @error('middle_name')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Surname</label>
                            <input type="text" wire:model="surname" class="form-control" placeholder="Surname">
                            @error('surname')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" wire:model="email" class="form-control" placeholder="Valid email address">
                            @error('email')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="number" wire:model="phone_number" class="form-control" placeholder="Phone number" min="0" max="9999999999">
                            @error('phone_number')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for=""  class="form-label">Country</label>
                            <select name="" class="form-control" wire:model="country" id="">
                                <option value="" selected>Choose country</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Tanzania">Tanzania</option>
                            </select>
                            @error('country')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">County</label>
                            <select name="" class="form-control" id="" wire:model="county">
                                <option value="" selected>Choose county</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kisumu">Kisumu</option>
                            </select>
                            @error('county')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Gender</label>
                            <select name="" class="form-control" id="" wire:model="gender">
                                <option value="" selected>Choose gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option> 
                            </select>
                            @error('gender')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Profession</label>
                            <select name="" class="form-control" id="" wire:model="profession">
                                <option value="" selected>Choose Profession</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Teaching">Teaching</option> 
                            </select>
                            @error('profession')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="" class="form-label">Upload Cv</label>
                             <input type="file" wire:model="cv" class="form-control">
                             @error('cv')
                             <small class="text-danger">{{$message }}</small>
                         @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="" class="form-label">Home Address</label>
                             <textarea name="" wire:model="home_address" class="form-control" id="" cols="30" rows="5"  placeholder="Describe teacher home address"></textarea>
                             @error('home_address')
                             <small class="text-danger">{{$message }}</small>
                         @enderror
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        @endif
        
        @if ($currentstep == 2)
              <div class="register-step-two">
            <div class="top-register-step-two">
                <h5>Education Information</h5>
            </div>
            <div class="bottom-register-step-one">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Primary School</label>
                            <input type="text" class="form-control" wire:model="primary_school" placeholder="Write here">
                            @error('primary_school')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Secondary School</label>
                            <input type="text" class="form-control" wire:model="secondary_school" placeholder="Write here">
                            @error('secondary_school')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">University</label>
                            <input type="text" wire:model="university" class="form-control" placeholder="University name">
                            @error('university')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Subjects You Teach</label>
                            <select name="" class="form-control" id="" wire:model="subject_combination">
                                <option value="" selected>Choose subject</option>
                                <option value="English/Kiswahili">English/Kiswahili</option>
                                <option value="Maths/Science">Maths/science</option>
                                <option value="Social/CRE">Social/CRE</option>
                            </select>
                            @error('subject_combination')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Level You Teach</label>
                            <select name="" class="form-control" id="" wire:model="teaching_level">
                                <option value="" selected>Choose level</option>
                                <option value="Lower school">Lower school</option>
                                <option value="Upper school">Upper school</option> 
                            </select>
                            @error('teaching_level')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div> 
                </div>
                <br>
               
                <br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="" class="form-label">Professional Summary</label>
                             <textarea wire:model="professional_summary" class="form-control" id="" cols="30" rows="5" placeholder="Describe teacher home address"></textarea>
                             @error('professional_summary')
                             <small class="text-danger">{{$message }}</small>
                         @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
      
        @if ($currentstep == 3)
             <div class="register-step-three">
            <div class="top-register-step-two">
                <h5>Association Information</h5>
            </div>
            <div class="bottom-register-step-one">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">TSC Designation Code</label>
                            <select name="" class="form-control" id="" wire:model="designation_code">
                                <option value="" selected>Choose designation code</option>
                                <option value="Code one">Code One</option>
                                <option value="Code two">Code two</option> 
                            </select>
                            @error('designation_code')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">TSC Number(optional)</label>
                            <input type="text" class="form-control" wire:model="tsc_number" placeholder="Write here ">
                            @error('tsc_number')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="" class="form-label">Other Associations</label>
                            <input type="text" class="form-control" wire:model="other_associations" placeholder="Other associations">
                            @error('other_associations')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">KRA Pin</label>
                            <input type="text" class="form-control" placeholder="Valid KRA Pin" wire:model="kra_pin">
                            @error('kra_pin')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="form-label">Referral Code</label>
                            <input type="text" class="form-control" placeholder="Referral code" wire:model="referral_code">
                            @error('referral_code')
                            <small class="text-danger">{{$message }}</small>
                        @enderror
                        </div>
                    </div>
                     
                </div>
                
            </div>
        </div>
        @endif
       <br>
       <div class="d-flex flex-stack pt-15">
        <!--begin::Wrapper-->
        @if ($currentstep == 1)
            <div class="mr-2">
            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" style="cursor: not-allowed;display:none;">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
            <span class="svg-icon svg-icon-4 me-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black"></path>
                </svg>
            </span>
            </button>
        </div>
        @endif 
        @if($currentstep == 2 || $currentstep == 3)
        <button type="button" class="btn btn-lg btn-light-primary me-3"  wire:click="descreaseStep()">
            <span class="svg-icon svg-icon-4 me-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black"></path>
                </svg>
            </span>Back</button>
        @endif
        
        <!--end::Wrapper-->
        <!--begin::Wrapper-->
        <div>

            @if ($currentstep == 3)
                 <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                <span class="indicator-label">Submit 
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-3 ms-2 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon--></span>
                <span class="indicator-progress">Please wait... 
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            @endif 
            @if($currentstep == 1 || $currentstep == 2)
          
                   <button type="button" class="btn btn-lg btn-primary" wire:click="increasestep()">Continue  
            <span class="svg-icon svg-icon-4 ms-1 me-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </button>
            @endif
           
         
        </div>
        <!--end::Wrapper-->
    </div>
    </form>
</div>
