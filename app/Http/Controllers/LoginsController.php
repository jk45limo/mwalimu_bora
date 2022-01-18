<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginsController extends Controller
{
    public function adminlogin()
    {
        return view('auth.admin-login');
    }
}
