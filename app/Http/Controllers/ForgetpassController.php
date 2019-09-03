<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetpassController extends Controller
{
    public function forget(){
        return view('forgetpass');
    }
}
