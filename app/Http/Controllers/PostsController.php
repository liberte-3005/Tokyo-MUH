<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->simplePaginate(15);
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



    public function cities(Request $request){
        $categories = DB::table('categories')->get();
        $key_cat_id = $request->cat_id;
        if(!empty($key_cat_id)){
            $query = Post::query();
            $posts = $query->where('cat_id', $key_cat_id)->simplePaginate(15);
            return view('tokyo')->with(['posts' => $posts]);
        }
    }


}