<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryTaken;
use App\Category;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        $categories = $user->categories_taken()->paginate(5);


        return view('dashboard',compact('user','categories'));
    }

    public function logout()
    {
        return view('home');
    }

}
