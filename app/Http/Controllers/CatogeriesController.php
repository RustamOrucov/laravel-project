<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatogeriesController extends Controller
{
    public function catogeries(){
        return view('front/pages/catogeries');
    }
}
