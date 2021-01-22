<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('tokyo',['posts'=> $posts]);
    }

    public function store(Request $request)
    {
        $data = [
            'cat_id' => $request->cat_id,
            'users' => $request->users,
            'text' => $request->text,
        ];
        $post = new Post;
        $post->fill($data)->save();

        return redirect('');
    }

    public function delete($id){
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect('');
    }

    public function showCity(Request $request, $cat_id){
        $posts = Post::findOrFail($cat_id);
        'cat_id' => $request->cat_id
        return view('.city',['posts' => $posts,]);
    }

    public function create(){
        $category = new Category;
        $categories = $category->getLists()->prepend('選択','');

        return view('',['categories' => $categories]);
    }
}