<?php

namespace App\Http\Controllers\parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentPagesController extends Controller
{
    public function index(){
        return view('parents.index');
    }
    public function login(){
        return view('parents.login');
    }
    public function register(){
        return view('parents.register');
    }
    public function resetpassword(){
        return view('parents.forgot-password');
    }
}
