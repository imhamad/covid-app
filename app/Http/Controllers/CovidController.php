<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function covid(){
        $var = "2020";
        return view('subviews.covid',compact('var'));
    }
}
