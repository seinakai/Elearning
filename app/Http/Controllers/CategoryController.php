<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;

class CategoryController extends Controller
{
    public function category()
    {

        $categories = Category::paginate(3);
        
        return view('categories',compact('categories'));
    }
}
