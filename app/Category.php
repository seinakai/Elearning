<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'text',
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function categories_taken()
    {
        return $this->hasMany('App\CategoryTaken');
    }


}
