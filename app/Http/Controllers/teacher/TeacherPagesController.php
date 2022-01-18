<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherPagesController extends Controller
{
    public function index(){
        return view('teachers.index');
    }
    public function login(){
        return view('teachers.login');
    }
    public function register(){
        return view('teachers.register');
    }
    public function resetpassword(){
        return view('teachers.forgot-password');
    }
}
