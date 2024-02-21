<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        return view('frontend.contact.contact-page');
    }
}
