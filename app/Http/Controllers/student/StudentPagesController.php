<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentPagesController extends Controller
{
    public function index(){
        return view('students.login');
    }
    public function register(){
       return view('students.register'); 
    }
    public function forgotpassword(){
        return view('students.forgot-password');
    }
}
