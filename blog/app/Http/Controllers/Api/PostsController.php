<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with('user')->paginate(1);
       
        return PostResource::collection($posts);
    }

    public function store(StorePostRequest $request){
        $post = Post::create($request->all());
        
       return new PostResource($post); 
    }
}
