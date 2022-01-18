<?php

namespace App\Http\Livewire\Students;

use App\Models\Pupil;
use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
class RegisterAccount extends Component
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $date_of_birth;
    public $parent_name;
    public $school_system;
    public $school_level;
    public $password;
    public $username;
    public $password_confirmation;
    public $parent_phone_number;
    public $parent_email_address;
    public $totalsteps = 2;
    public $currentstep = 1;

    public function mount()
    {
        $this->currentstep = 1;
    }
    public function render()
    {
        return view('livewire.students.register-account');
    }
    public function increasestep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentstep++;
        if ($this->currentstep > $this->totalsteps) {
            $this->currentstep = $this->totalsteps;
        }
    }
    public function descreaseStep()
    {
        $this->resetErrorBag();
        $this->currentstep = $this->currentstep - 1;
        if ($this->currentstep < 1) {
            $this->currentstep = 1;
        }
    }
    public function validateData()
    {
        if ($this->currentstep == 1) {
            $this->validate([
                'first_name' => 'required|string',
                'middle_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email|unique:users',
                'username' => 'required|unique:pupils',
                'phone_number' => 'required|digits:10|unique:pupils',
                'date_of_birth' => 'required|date_format:Y-m-d|before_or_equal:'.Carbon::now()->subYears(4),
                'parent_name' => 'required|string|min:10',
                'parent_phone_number' => 'required|digits:10|unique:pupils',
                'parent_email_address' => 'required|email'
            ]);
        }
    }
    public function registerpupil()
    {
        $this->resetErrorBag();
        if ($this->currentstep == 2) {
            $this->validate([
                'school_system' => 'required',
                'school_level' => 'required',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
            ]);
        }
        $names = $this->first_name . " " . $this->middle_name . " " . $this->last_name;
        $userpupil = new User;
        $userpupil->name = $names;
        $userpupil->email = $this->email;
        $userpupil->password = bcrypt($this->password);
        $userpupil->save();

        $userpupil->attachRole("student");

        $userparent = new User;
        $userparent->name = $this->parent_name;
        $userparent->email = $this->parent_email_address;
        $userparent->password = bcrypt($this->parent_phone_number);
        $userparent->save();
        $userparent->attachRole("parent");

        $pupil = new Pupil;
        $pupil->user_id = $userpupil->id;
        $pupil->date_of_birth = $this->date_of_birth;
        $pupil->phone_number = $this->phone_number;
        $pupil->username = $this->username;
        $pupil->parent_names = $this->parent_name;
        $pupil->parent_phone_number = $this->parent_phone_number;
        $pupil->parent_email =$this->parent_email_address;
        $pupil->school_level = $this->school_level;
        $pupil->school_system = $this->school_system;
        $pupil->save();

        Toastr::warning('Account Registered Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('student-login');
    }
}
