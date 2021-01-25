<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    //
    public function index(Request $request)
    {

        $cat_id = $request->input('cat_id');
 

 
        return view('cities.show', compact('posts'));
    }
}
