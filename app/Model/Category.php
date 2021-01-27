<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function getLists()
    {
        $categories = Category::orderBy('id')->pluck('name','id');
        return $categories;
    }

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }
}
