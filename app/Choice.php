<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function question()
    {
        return $this->hasOneThrough('App\Question');
    }
}
