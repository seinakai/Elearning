<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{

    protected $guarded = [];
    
    public function question()
    {
        return $this->hasOneThrough('App\Question');
    }

    public function result()
    {
        return $this->hasMany('App\Result');
    }
}
