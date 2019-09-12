<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTaken extends Model
{
    protected $guarded = [];
    protected $table = 'category_taken';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function results()
    {
        return $this->hasMany('App\Result');
    }
}
