<?php

namespace App\Http\Controllers\Frontend\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function servicesPage()
    {
        return view('frontend.services.services-page');
    }
}
