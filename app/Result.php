<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $guarded = [];
    protected $table = "user_results";
    protected $appends = ['answer'];

    public function categoryTaken()
    {
        return $this->belongsTo('App\CategoryTaken');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function choice()
    {
        return $this->belongsTo('App\Choice');
    }

    public function getAnswerAttribute()
    {
        $answer = $this->question->choices()->where('is_answer',1)->first();
        
        return $answer ? $answer->choice : '';
    }
}
