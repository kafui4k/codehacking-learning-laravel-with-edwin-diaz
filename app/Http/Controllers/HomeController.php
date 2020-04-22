<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Http\Requests;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // retirve posts details
        // and comments with comments reply details
        $posts = Post::paginate(4);

        $categories = Category::all();

        $comments = Comment::all();

        return view('front/home', compact('posts', 'categories'));
    }

    public function post($id)
    {


        $post = Post::findOrFail($id);

        $comments = $post->comments()->whereIsActive(1)->get();

        $categories = Category::all();

        return view('post', compact('post', 'comments', 'categories'));
    }
}
