<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    public function show($slug){
        // $post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();
        // if($post == null){
        //     abort(404);
        // }
        return view('post', ['post' => $post]);
    }
}
