<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\CategoryTaken;
use App\Result;

use Auth;

class QuestionController extends Controller
{
    public function questionpage($categoryId)
    {

        $category = Category::find($categoryId);

        $categoryTaken = Auth::user()->categories_taken()->create([
            'category_id' => $categoryId
        ]);

        $question = $category->questions->first();
        $choices =  $question->choices()->get();

        return view('question',compact('question', 'choices' , 'categoryTaken'));
    }

    public function nextquestion($takenId , Request $request)
    {  

        $categoryTaken = CategoryTaken::find($takenId);

        $categoryTaken->results()->create([
            'question_id' =>  request()->questionId,
            'choice_id' => request()->userschoice,
            'user_id' => auth()->user()->id
        ]);

        $categoryId = Question::where('id' , $request->questionId)->first()->category->id;

        $question = Category::find($categoryId)
        ->questions
        ->where('id', ">" ,$request->questionId)
        ->first();

        if($question == ''){

            return redirect($categoryTaken->id.'/showresult/');
            
        }
        $choices =  $question->choices;

        return view('question',compact('question', 'choices' ,'categoryTaken'));
        
    }

    public function random()
    {
        $choices = $question->choices;

        $choices = str_random(4);

    }

    public function showresult($takenId)
    {
        $user_results = Result::where('user_id' , auth()->user()->id)
        ->where('category_taken_id' , $takenId)
        ->with('question', 'choice')->get();

         return view('result', compact('user_results'));
    }

}
