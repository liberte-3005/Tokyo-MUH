<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('tokyo',['posts'=> $posts]);
    }

    public function store(Request $request){
        $categories = $request->input('categories');
        $users = $request->input('users');
        $text = $request->input('text');
        $pin_code = $request->input('pin_code');

        Post::create(["categories" => $categories, "users" => $users, "text" =>$text, "pin_code"=>$pin_code]);
        $posts = Post::all();
        return view('tokyo',['posts'=> $posts]);
    }

    public function delete(Request $request){
        Post::find($request->id)->delete();
        return redirect('');
    }
}