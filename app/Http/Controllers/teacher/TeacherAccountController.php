<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherAccountController extends Controller
{
    public function index(){
        return view('teachers.dashboard');
    }
}
