<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function singlepost(){
        return view('front.pages.single-post');
    }
}
