<?php

use App\Http\Controllers\admin\AdminGenerateReports;
use App\Http\Controllers\admin\AdminParentController;
use App\Http\Controllers\admin\AdminPupilController;
use App\Http\Controllers\admin\AdminTutorController;
use App\Http\Controllers\admin\CalendarController;
use App\Http\Controllers\admin\ContentCOntroller;
use App\Http\Controllers\admin\TeachersController;
use App\Http\Controllers\CommonPagesController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\parent\ParentAccountController;
use App\Http\Controllers\parent\ParentPagesController;
use App\Http\Controllers\student\StudentAcountController;
use App\Http\Controllers\student\StudentPagesController;
use App\Http\Controllers\teacher\TeacherAccountController;
use App\Http\Controllers\teacher\TeacherPagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route::get('/logoutchecked', function (Request $request) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/login')->with('passwordreset', 'Congrats! Your account is now set.You can now login');
    $request->session()->flush();
    Auth::logout();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ALL LOGINS CONTROLLER
Route::get('admin-login', [LoginsController::class, 'adminlogin']);
Route::get('admin/dashboard', [ContentCOntroller::class, 'index'])->name('admin');
Route::get('admin/discover-calendar-events', [CalendarController::class, 'allevents']);
Route::prefix('admin')->group(function () {
    Route::get('all-teachers', [TeachersController::class, 'index']);
    Route::get('enroll-new-teacher', [TeachersController::class, 'createteacher']);
    Route::get('complete-teacher-account/{teacher}', [TeachersController::class, 'finishteachaccount']);
    Route::patch('complete_teacher_account/{teacher}', [TeachersController::class, 'updateteacheraccount']);
    Route::get('manage-teachers/{teacher}', [TeachersController::class, 'manageteacher']);
    Route::get('all-tutors', [TeachersController::class, 'index']);
    Route::resource('managetutors', AdminTutorController::class);
    Route::resource('managepupils', AdminPupilController::class);
    Route::resource('manageparents', AdminParentController::class);
    Route::resource('manageevents', CalendarController::class);
    Route::get('manage-calendar-events', [CalendarController::class, 'managecalendarevents']);
    Route::get('blog/all-blogs',[ContentCOntroller::class, 'allblogs']);
    Route::get('blogs/edit-blog/{blogid}',[ContentCOntroller::class, 'editblog']);
    Route::patch('blogs/edit_blog/{blogid}',[ContentCOntroller::class, 'updateblog']);
    Route::get('blogs/view-blog/{blogid}',[ContentCOntroller::class, 'viewblog']);
    Route::get('blogs/delete-blog/{blogid}',[ContentCOntroller::class, 'deleteblog']);
    Route::get('reports/teachers', [AdminGenerateReports::class, 'teachersreport']);
});




// STUDENT ACCESS LINKS
Route::get('student/dashboard', [StudentAcountController::class, 'index'])->name('student');
Route::get('student-login/', [StudentPagesController::class, 'index']);
Route::get('student-register/', [StudentPagesController::class, 'register']);
Route::get('student-forgot-password/', [StudentPagesController::class, 'forgotpassword']);
Route::prefix('student')->group(function () {
    Route::get('feestatement', [StudentAccountController::class, 'feestatement']);
    Route::get('account-password', [StudentAccountController::class, 'accountpassword']);
});


// CLERK LINKS
Route::get('finance/dashboard', [FinanceController::class, 'index'])->name('clerk');

// COMMON PAGES LINKS
Route::get('terms-conditions', [CommonPagesController::class, 'termsconditions']);
Route::get('mission', [CommonPagesController::class, 'mission']);
Route::get('privacy-policy', [CommonPagesController::class, 'privacypolicy']);
Route::get('faq', [CommonPagesController::class, 'faq']);
//


// STUDENT ACCESS LINKS
Route::get('teachers/dashboard', [TeacherAccountController::class, 'index'])->name('teacher');
Route::get('teachers/', [TeacherPagesController::class, 'index']);
Route::get('teacher-login', [TeacherPagesController::class, 'login']);
Route::get('teacher-register', [TeacherPagesController::class, 'register']);
Route::get('teacher-reset-password', [TeacherPagesController::class, 'resetpassword']);
// https://www.youtube.com/watch?v=sNzhrqVC4CI


// PARENT LINKS
Route::get('parent/dashboard', [ParentAccountController::class, 'index'])->name('parent');
Route::get('parent/', [ParentPagesController::class, 'index']);
Route::get('parent-login', [ParentPagesController::class, 'login']);
Route::get('parent-register', [ParentPagesController::class, 'register']);
Route::get('parent-reset-password', [ParentPagesController::class, 'resetpassword']);