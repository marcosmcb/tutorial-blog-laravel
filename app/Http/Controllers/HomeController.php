<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Post;

class HomeController extends Controller
{
    //
	private $post;

    public function __construct(Post $post){
    	$this->post = $post;
    }

    public function index(){

    	$posts = $this->post->get();

    	return view('home')->with('posts', $posts);

    }

}
