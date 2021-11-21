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

        $templates = [];
        $templateviews = scandir('../resources/views/templates');
        
        foreach ($templateviews as $templateview) {
            array_push($templates, substr($templateview, 0, -10));  
           }

        return view('userTemplates', ['templates' => array_values(array_filter($templates))]);
    }

    public function scroll() {
        return view('scrollTest');
    }

    public function testSubDir() {
        return view('test1');
    }
}
