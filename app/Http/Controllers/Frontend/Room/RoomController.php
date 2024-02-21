<?php

namespace App\Http\Controllers\Frontend\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function roomsPage()
    {
        return view('frontend.rooms.rooms-page');
    }
}
