<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class QuestionController extends Controller
{
    public function questionpage($categoryId)
    {

        $question = Category::find($categoryId)->questions->first();
        $choices =  $question->choices()->get();

        return view('question',compact('question', 'choices'));
    }

    public function nextquestion(Request $request)
    {  

        $categoryId = Question::where('id' , $request->questionId)->first()->category->id;

        $question = Category::find($categoryId)
        ->questions
        ->where('id', ">" ,$request->questionId)
        ->first();

        if($question == ''){

             return redirect('result');

        }
        $choices =  $question->choices;

        return view('question',compact('question', 'choices'));
        
    }

}
