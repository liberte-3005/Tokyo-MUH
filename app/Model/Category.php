<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function getLists()
    {
        $categories = Category::orderBy('id')->pluck('name','id','cat_pic');
        return $categories;
    }

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }

    public function getCategoryNameAttribute(){
        return config('categories.'.$this->cat_id);
    }
}
