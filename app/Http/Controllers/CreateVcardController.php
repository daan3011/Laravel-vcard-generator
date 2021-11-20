<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CreateVcardController extends Controller
{
    //
    public function createVcard()
    {
        return view('createVcard');
    }

    public function index()
    {

        //QrCode::generate('Make me into a QrCode!');
        return view('qrcode');
    }
}