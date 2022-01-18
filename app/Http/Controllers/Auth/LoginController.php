<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

  
      protected function authenticated(Request $request, $user)
    {

        if ($user->hasRole('admin')) {
            return  redirect()->route('admin');
        }
        if ($user->hasRole('student')) {
            return  redirect()->route('student');
        }
        if ($user->hasRole('teacher')) {
            return  redirect()->route('teacher');
        }
        if ($user->hasRole('tutor')) {
            return  redirect()->route('tutor');
        }
        if ($user->hasRole('parent')) {
            return  redirect()->route('parent');
        }
    }
    
}
