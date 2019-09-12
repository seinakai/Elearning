<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    public function result()
    {
        return $this->hasMany('App\Result');
    }
}
