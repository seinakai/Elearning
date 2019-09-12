<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Question;
use App\Choice;

class AdminController extends Controller
{
    public function createlesson()
    {
        return view('createlesson');
    }

    public function savelesson(Request $request)
    {
        Category::create([
            'title' => $request->lessonTitle,
            'text' => $request->description
        ]);

        return redirect('/categories');
    }

    public function editlesson($category_id)
    { 

        $category = Category::where("id" , $category_id)->first();
        return view('editlesson',compact('category'));

    }
    
    public function newquestion($categoryId)
    {
        return view('newquestion' , compact('categoryId'));
    }
    
    public function updatelesson()
    {
        
        $category = Category::where("id",request()->category_id)->first();
        
        $category->update([
            
            'title' => request()->title,
            'text' => request()->text
            
            ]);
            return redirect('categories');
        }

        public function updatequestion($id)
        {
            $question = Question::find($id);

            return view('updatequestion',compact('question'));
        }

        public function allquestions($categoryId)
        {

            $category = Category::find($categoryId);

            $questions = $category->questions;

            return view('allquestions',compact('questions' , 'categoryId'));
        }

        public function storeupdate($id)
        {
            $question = Question::find($id);

            $question->update([
                'question_text' => request()->questiontext
            ]);

            foreach(request()->choices as $key => $choice){
                Choice::find($key)->update([
                    'choice' => $choice
                ]);
            }

            return redirect('/allquestions/'.$question->category->id);
        }

        public function createnewquestion($categoryId)
        {
            
            $category = Category::find($categoryId);

            $question = $category->questions()->create([
                'question_text' =>request()->questiontext,
            ]);

            foreach(request()->choices as $key => $choice){

                $question->choices()->create([
                    'choice' => $choice,
                    'is_answer' => $key == 'correct'
            ]);
            }

            return redirect('/allquestions/'.$categoryId);
        }
}