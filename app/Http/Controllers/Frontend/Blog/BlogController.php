<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogsPage()
    {
        return view('frontend.blogs.blogs-page');
    }
}
