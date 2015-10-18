<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }


    public function getShow($slug)
    {
        //
        $post = $this->post->where('slug', '=', $slug)->first();
        
        return view('posts.show')->with('post', $post);

    }

}
