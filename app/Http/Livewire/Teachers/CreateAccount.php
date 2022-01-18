<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Brian2694\Toastr\Facades\Toastr;
class CreateAccount extends Component
{ use WithFileUploads;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $country;
    public $email;
    public $phone_number;
    public $county;
    public $gender;
    public $profession;
    public $cv;
    public $home_address;
    public $primary_school;
    public $secondary_school;
    public $university;
    public $subject_combination;
    public $teaching_level;
    // public $primary_subject;
    // public $other_subjects;
    // public $classes_you_teach;
    public $professional_summary;
    public $designation_code;
    public $tsc_number;
    public $other_associations;
    public $kra_pin;
    public $referral_code;
    public $password;
    public $password_confirmation;

    public $totalsteps = 4;
    public $currentstep = 1;

    public function mount(){
        $this->currentstep = 1;

    }
    public function increasestep(){
      $this->resetErrorBag();
        $this->validateData();
        $this->currentstep++;
        if($this->currentstep > $this->totalsteps){
            $this->currentstep = $this->totalsteps;
        }
    }
     
    public function render()
    {
        return view('livewire.teachers.create-account');
    }
    public function descreaseStep(){
        $this->resetErrorBag();
        $this->currentstep = $this->currentstep-1;
        if($this->currentstep < 1){
            $this->currentstep = 1;
        }
    }
    public function validateData (){
        if($this->currentstep == 1){
            $this->validate([
                'first_name'=>'required|string',
                'middle_name'=>'required|string',
                'last_name'=>'required|string',
                'email'=>'required|email|unique:users',
                'phone_number'=>'required|digits:10|unique:teachers',
                'country'=>'required',
                'county'=>'required',
                'gender'=>'required',
                'profession'=>'required',
                'cv'=> 'required|mimes:pdf, doc,docx, PDF|max:10080',
                'home_address'=>'required|string'
            ]);
        }elseif($this->currentstep ==  2){

            $this->validate([
                'primary_school'=>'required|string',
                'secondary_school'=>'required|string',
                'university'=>'required|string',
                'subject_combination'=>'required|string',
                'teaching_level'=>'required',
                // 'primary_subject'=>'required|array|min:1|max:3',
                // 'other_subjects'=>'required|array|min:1|max:2',
                // 'classes_you_teach'=>'required|array|min:1|max:3',
                'professional_summary'=>'required|string|min:100'
            ]);
        }
    
    }
    public function registerteacher(){
        $this->resetErrorBag();
        if($this->currentstep == 3){
            $this->validate([
                'designation_code'=>'required|string',
                'tsc_number'=>'required',
                'other_associations'=>'required',
                'kra_pin'=>'required|unique:teachers',
                'referral_code'=>'required',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
            ]);
        }

        $user = new User;
        $names = $this->first_name ." ".$this->middle_name ." ".$this->last_name;
        $user->name = $names;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();
        $user->attachRole("teacher");

        $teacher = new Teacher;
        $teacher->user_id = $user->id;
        $teacher->phone_number = $this->phone_number;
        $teacher->county = $this->county;
        $teacher->country = $this->country;
        $teacher->address = $this->home_address;
        $teacher->gender = $this->gender;
        $teacher->profession = $this->profession; 
        $teacher->primary_school = $this->primary_school;
        $teacher->secondary_school = $this->secondary_school;
        $teacher->university = $this->university;
        $teacher->subject_combination = $this->subject_combination;
        $teacher->teaching_level = $this->teaching_level;
        // $teacher->primary_subject = $this->primary_subject;
        // $teacher->other_subject = $this->other_subjects;
        // $teacher->classes_teaching = $this->classes_you_teach;
        $teacher->professional_summary = $this->professional_summary;
        $teacher->designation_code = $this->designation_code;
        $teacher->tsc_number = $this->tsc_number;
        $teacher->kra_pin = $this->kra_pin;
        $teacher->other_associations = $this->other_associations;
        $teacher->referral_code = $this->referral_code;
        $fileNameWithExt = $this->cv->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->cv->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->cv->storeAs('teacher_cv', $filenameToStore, 'public');
        $teacher->uploaded_cv = $filenameToStore;
        $teacher->save();

        Toastr::warning('Teacher Account Created  Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('teacher-login/');
        // return redirect('admin/complete-teacher-account/'.$teacher->id);
    }
}