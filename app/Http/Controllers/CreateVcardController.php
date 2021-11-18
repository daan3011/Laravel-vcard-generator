<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateVcardController extends Controller
{
    //
    public function createVcard()
    {
        return view('createVcard');
    }
}
