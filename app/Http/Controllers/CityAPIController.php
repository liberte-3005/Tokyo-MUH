<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class CityAPIController extends Controller
{
    public function index(Request $request){
        //$data = Post::all();
        //$data = json_decode($data, true);
        //return $data;

        $url = "https://opendata.resas-portal.go.jp/api/v1/prefectures";
        $method = "GET";
        
        $cityAPI = new Category();
        return $cityAPI;
    }

}