<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function index() {

        // retrieve data from DB::
        // users:count
        // posts:count
        // comment::count
        $postCount = Post::count();
        $categoriesCount = Category::count();
        $commentCount = Comment::count();

        return view('admin.index', compact('postCount','categoriesCount','commentCount'));

    }
}
