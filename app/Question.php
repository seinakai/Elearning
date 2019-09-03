<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    

}
