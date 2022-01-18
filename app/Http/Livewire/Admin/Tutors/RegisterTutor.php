<?php

namespace App\Http\Livewire\Admin\Tutors;

use App\Models\Tutor;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Brian2694\Toastr\Facades\Toastr;

class RegisterTutor extends Component
{
    public $first_name;
    public $middle_name;
    public $surname;
    public $email;
    public $phone_number;
    public $username;
    public $referral_code;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'first_name'=>'required|string|min:3|max:100',
        'middle_name'=>'required|string|min:3|max:100',
        'surname'=>'required|string|min:3|max:100',
        'email'=>'required|email|unique:users',
        'phone_number'=>'required|digits:10|unique:tutors',
        'referral_code'=>'required|string',
        'password'=>'required|confirmed|min:8',
        'username'=>'required|unique:tutors|min:8',
        'password_confirmation'=>'required'
    ];
    public function render()
    {
        return view('livewire.admin.tutors.register-tutor');
    }

    public function registertutor(){
        $this->validate();
        $user = new User;
        $names = $this->first_name ." ".$this->middle_name ." ".$this->surname;
        $user->name = $names;
        $user->email = $this->email;
        $user->password = bcrypt($this->phone_number);
        $user->save();
        $user->attachRole("tutor");

        $tutor = new Tutor;
        $tutor->phone_number = $this->phone_number;
        $tutor->user_id = $user->id;
        $tutor->referral_code = $this->referral_code;
        $tutor->username = $this->username;
        $tutor->save();
        Toastr::warning('Tutor Account Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('managetutors.index');
        
    }
}
