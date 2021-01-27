<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->take(5)->get();
        return view('tokyo',['posts'=> $posts]);
    }

    public function store(Request $request)
    {
        $data = [
            'cat_id' => $request->cat_id,
            'users' => $request->users,
            'text' => $request->text,
            'created_at' => $request->created_at,
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


    //public function create(){
    //    $category = new Category;
    //    $categories = $category->getLists()->prepend('選択','');
    //    return view('',['categories' => $categories]);
    //}

    public function cities(Request $request){
        
        $key_cat_id = $request->cat_id;
        if(!empty($key_cat_id)){
            $query = Post::query();
            $posts = $query->where('cat_id', $key_cat_id)->get();
            $message = "一覧";
            return view('tokyo')->with(['posts' => $posts]);
        }else{
            $message = "まだ";
            return view('tokyo')->with(['message',$message]);
        }
    }


}