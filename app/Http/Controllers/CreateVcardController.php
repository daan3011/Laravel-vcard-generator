<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CreateVcardController extends Controller
{
    //
    public function createVcard()
    {

        $templates = [];
        $templateviews = scandir('../resources/views/templates');
        
        foreach ($templateviews as $templateview) {
            array_push($templates, substr($templateview, 0, -10));  
           }

        return view('createVcard',  ['templates' => array_values(array_filter($templates))]);
    }

    public function index()
    {

        //QrCode::generate('Make me into a QrCode!');
        return view('qrcode');
    }
}