<?php

namespace App\Http\Livewire\Parents;

use App\Models\ParentGuardian;
use App\Models\ParentUser;
use App\Models\User;
use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;
class CreateAccount extends Component
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $username;
    public $referral_code;
    public $password;
    public $password_confirmation;
    public function render()
    {
        return view('livewire.parents.create-account');
    }
    protected $rules = [
        'first_name'=>'required|string|min:3|max:100',
        'middle_name'=>'required|string|min:3|max:100',
        'last_name'=>'required|string|min:3|max:100',
        'email'=>'required|email|unique:users',
        'phone_number'=>'required|digits:10|unique:tutors',
        'referral_code'=>'required|string',
        'password'=>'required|confirmed|min:8',
        'username'=>'required|unique:tutors|min:8',
        'password_confirmation'=>'required'
    ];

    public function registerparent(){
        $this->validate();
        $user = new User;
        $names = $this->first_name ." ".$this->middle_name ." ".$this->last_name;
        $user->name = $names;
        $user->email = $this->email;
        $user->password = bcrypt($this->phone_number);
        $user->save();
        $user->attachRole("tutor");

        $tutor = new ParentGuardian;
        $tutor->phone_number = $this->phone_number;
        $tutor->user_id = $user->id;
        $tutor->referral_code = $this->referral_code;
        $tutor->username = $this->username;
        $tutor->save();
        Toastr::warning('Tutor Account Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('parent-login');
        
    }

}
