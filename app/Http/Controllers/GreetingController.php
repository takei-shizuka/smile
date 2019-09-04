<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller   //controller(class)
{
    public function morning() {     //action(method)
        return view('greeting/morning');
    }

    public function goodnight() {      //action(method)
        return view('greeting/goodnight');
     }
}
