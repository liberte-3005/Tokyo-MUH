<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function category()
    {
        return $this->belongsTo('App\Model\Category','cat_id');
    }

    protected $fillable = ['cat_id','users','text','pin_code'];
}
