<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['cat_id','users','text','pin_code'];

    public function category()
    {
        return $this->belongsTo('App\Model\Category','cat_id');
    }
    public function getCategoriesName() {
        return config('category.'.$this->cat_id);
    }
}