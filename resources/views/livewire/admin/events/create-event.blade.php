<div class="px-5 py-5">
    <form action="" wire:submit.prevent="storeevents" class="mx-4 " autocomplete="off"
        enctype="multipart/form-data">
        <div class="register-step-one">
            <div class="top-register-step-one">
                <h5>Add New Event Information</h5>
            </div>
            <div class="bottom-register-step-one">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="" class="form-label">Start</label>
                            <input type="datetime-local" wire:model="start_date" class="form-control" placeholder="">
                            @error('start_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">End</label>
                            <input type="datetime-local" wire:model="end_date" class="form-control"
                                placeholder="">
                            @error('end_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Event for</label>
                            <select name="" wire:model="event_for" class="form-control" id="">
                                <option value="">Click to select</option>
                                <option value="All">All</option>
                                <option value="Teachers">Teachers</option>
                                <option value="Pupils">Pupils</option> 
                                <option value="Parents">Parents</option>
                                <option value="Tutors">Tutors</option>
                                <option value="Admin">Admin</option>
                            </select>
                            @error('event_for')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Venue</label>
                            <input type="text" wire:model="venue" class="form-control"
                                placeholder="">
                            @error('venue')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Event Title</label>
                            <input type="text" wire:model="title" class="form-control"
                                placeholder="">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="" wire:model="description" class="form-control" id="" cols="30" rows="5"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <br>
              
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
            <span class="indicator-label">Upload New Event
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-3 ms-2 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)"
                            fill="black"></rect>
                        <path
                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                            fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </form>
</div>
