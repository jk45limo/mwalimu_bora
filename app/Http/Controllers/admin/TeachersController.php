<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('admin.teachers.all-teachers', compact('teachers'));
    }
    public function createteacher(){
        return view('admin.teachers.enroll-new-teacher');
    }
    public function finishteachaccount($teacher){
        
        return view('admin.teachers.complete-teacher-account', compact('teacher'));
    }
    public function updateteacheraccount(Request $request, $teacher){
     
        $this->validate($request, [
            'primary_subject' => 'required|array|min:1|max:3',
            'classes_you_teach' => 'required|array|min:1|max:3',
            'other_subjects' => 'required|array|min:1|max:3',
        ]);
        
    }
    public function manageteacher($teacher){
 
        $teacheruser = Teacher::findOrFail($teacher);
        return view('admin.teachers.teacher-profile', compact('teacheruser'));
    }
}
