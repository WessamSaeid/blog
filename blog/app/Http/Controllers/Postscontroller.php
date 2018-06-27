<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\User;

class postscontroller extends Controller
{
    public function index(){
        $posts = Post::paginate(2);
        
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function create(){
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(StorePostRequest $request){
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect(route('posts.index')); 
    }

    public function edit($id){
        $post=Post::find($id);
        $users = User::all();

        return view('posts.edit',[
            'post' => $post,
            'users' => $users
        ]);
    }

    public function update(UpdatePostRequest $request,$id){
        $post=Post::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect(route('posts.index')); 
    }

    public function destroy(Request $request,$id){
        Post::find($id)->delete();

        return redirect(route('posts.index')); 
    }

    public function show(Request $request,$id){
        $post=Post::find($id);
        $user=$post->user;

        return view('posts.show',[
            'post' => $post,
            'user' => $user
        ]);
    }
}
