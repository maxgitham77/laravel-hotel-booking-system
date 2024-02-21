<?php

namespace App\Http\Controllers\Frontend\Testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonialsPage()
    {
        return view('frontend.testimonials.testimonials-page');
    }
}
