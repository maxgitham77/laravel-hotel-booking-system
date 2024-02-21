<?php

namespace App\Http\Controllers\Frontend\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutPage()
    {
        return view('frontend.about.about-page');
    }
}
