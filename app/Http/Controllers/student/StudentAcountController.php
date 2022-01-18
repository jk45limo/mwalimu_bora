<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAcountController extends Controller
{
     public function index(){
         return view('students.dashboard');
     }
}
