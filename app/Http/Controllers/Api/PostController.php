<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ِApiResponseTrait;
    public function index()
    {
        $posts = Post::get();
        return $this->apiResponse($posts,'ok Api','200');

    }

    public function show($id){

        $post = Post::find($id);

        if(! $post){


            return $this->apiResponse(null,'Not found show',401);

        }


        return $this->apiResponse($post,'ok show',200);

    }

}
