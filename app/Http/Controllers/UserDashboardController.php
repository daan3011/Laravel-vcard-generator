<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    //
    public function dashboard() {
        return view('userDashboard');
    }

    public function statistics() {
        return view('userStatistics');
    }

    public function templates() {
        return view('userTemplates');
    }

    public function scroll() {
        return view('scrollTest');
    }
}
