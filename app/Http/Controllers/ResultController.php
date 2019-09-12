<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class ResultController extends Controller
{
    public function showresult()
    {


        return view('result');
    }
}
