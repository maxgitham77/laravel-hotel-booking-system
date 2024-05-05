<?php

namespace App\Http\Controllers\Frontend\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Admin\Room\Room;
use App\Models\Admin\Room\RoomType;
use App\Models\Admin\Slider\Slider;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        //$singleRoomTypes = RoomType::with('rooms')->where('status', 1)->where('name', 'single')->get();
        $roomTypes = RoomType::where('name', 'single')->get();

        $singleRoomTypesDetails = [];

        foreach ($roomTypes as $roomtype) {
            $singleRoomTypes = Room::where('status', 1)->where('roomtype_id', $roomtype['id'])->get();
            //dd($singleRoomTypes);
            $item = [
                'name' => $roomtype['name'],
                'image' => $roomtype['image'],
                'single_room_type' => $singleRoomTypes,
            ];

            array_push($singleRoomTypesDetails, $item);
        }
//dd($singleRoomTypesDetails);

        $singleRooms = Room::with('roomType')->where('roomtype_id', 'aa073a5a-418d-4cc5-966f-63e9df4769ae')->get();
        return view('frontend.landing.index', compact('sliders', 'singleRoomTypesDetails'));
    }
}
