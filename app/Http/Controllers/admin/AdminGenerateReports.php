<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminGenerateReports extends Controller
{
    public function teachersreport(){
        return view('admin.reports.teachers-report');
    }
}
