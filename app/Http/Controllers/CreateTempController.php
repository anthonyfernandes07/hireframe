<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTempController extends Controller
{
    public function returnview()
    {
        return view('createtemplate');
    }

    public function store(Request $request)
    {
        dd('ok');
    }
}
