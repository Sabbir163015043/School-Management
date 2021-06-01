<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function admission()
    {
        return view('front.admission.admission');
    }
}
