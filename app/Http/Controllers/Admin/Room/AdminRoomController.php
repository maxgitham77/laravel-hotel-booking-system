<?php

namespace App\Http\Controllers\Admin\Room;

use App\DataTables\RoomDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\StoreRoomRequest;
use App\Http\Requests\Admin\Room\updateRoomRequest;
use App\Models\Admin\Room\Facility\Facility;
use App\Models\Admin\Room\Room;
use App\Models\Admin\Room\RoomFacility\RoomFacility;
use App\Models\Admin\Room\RoomGallery\RoomGallery;
use App\Models\Admin\Room\RoomNumber\RoomNumber;
use App\Models\Admin\Room\RoomType;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminRoomController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(RoomDataTable $roomDataTable)
    {
        return $roomDataTable->render('backend.admin.room.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomTypes = RoomType::all();
        $facilities = Facility::all();
        $roomNumbers = RoomNumber::all();
        return view('backend.admin.room.create', compact('roomTypes', 'facilities', 'roomNumbers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        try {
            $imagePath = $this->uploadFile($request, 'image');

            $room = new Room();
            $room->user_id = Auth::user()->id;
            $room->image = $imagePath;
            $room->roomtype_id = $request->roomtype_id;
            $room->roomnumber_id = $request->roomnumber_id;
            $room->room_name = $request->room_name;
            $room->slug = Str::slug($request->room_name);
            $room->number_of_adult = $request->number_of_adult;
            $room->number_of_children = $request->number_of_children;
            $room->room_capacity = $request->room_capacity;
            $room->price = number_format($request->price);
            $room->discount = number_format($request->discount);
            $room->size = $request->size;
            $room->bed_size = $request->bed_size;
            $room->short_description = $request->short_description;
            $room->description = $request->description;
            $room->view = $request->view;
            $room->smoking_allowed = $request->smoking_allowed;
            $room->cooking_allowed = $request->cooking_allowed;
            $room->status = $request->status;

            $room->save();

            foreach ($request->facilities as $facilityId) {
                $facility = new RoomFacility();
                $facility->room_id = $room->id;
                $facility->facility_id = $facilityId;
                $facility->save();
            }

            $notification = [
                'alert_type' => 'success',
                'message' => 'Created successfully'
            ];

            return redirect()->route('rooms.index')->with($notification);


        } catch (\Exception $e) {
            logger($e->getMessage());

            $notification = [
                'alert-type' => 'error',
                'message' => 'Something went wrong'
            ];
            return redirect()->back()->with($notification);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::findOrFail($id);
        $roomFacilities = RoomFacility::where('room_id', $room->id)->pluck('facility_id')->toArray();
        $roomTypes = RoomType::all();
        $facilities = Facility::all();
        $roomNumbers = RoomNumber::all();
        return view('backend.admin.room.edit', compact('room', 'roomTypes', 'facilities', 'roomNumbers', 'roomFacilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, string $id)
    {
        try {
            $imagePath = $this->uploadFile($request, 'image', $request->old_image);

            $room = Room::findOrFail($id);
            $room->user_id = Auth::user()->id;
            $room->image = !empty($imagePath) ? $imagePath : $request->old_image;
            $room->roomtype_id = $request->roomtype_id;
            $room->roomnumber_id = $request->roomnumber_id;
            $room->room_name = $request->room_name;
            $room->slug = Str::slug($request->room_name);
            $room->number_of_adult = $request->number_of_adult;
            $room->number_of_children = $request->number_of_children;
            $room->room_capacity = $request->room_capacity;
            $room->price = number_format($request->price);
            $room->discount = number_format($request->discount);
            $room->size = $request->size;
            $room->bed_size = $request->bed_size;
            $room->short_description = $request->short_description;
            $room->description = $request->description;
            $room->view = $request->view;
            $room->smoking_allowed = $request->smoking_allowed;
            $room->cooking_allowed = $request->cooking_allowed;
            $room->status = $request->status;

            $room->save();

            RoomFacility::where('room_id', $room->id)->delete();

            foreach ($request->facilities as $facilityId) {
                $facility = new RoomFacility();
                $facility->room_id = $room->id;
                $facility->facility_id = $facilityId;
                $facility->save();
            }

            $notification = [
                'alert_type' => 'success',
                'message' => 'Updated successfully'
            ];

            return redirect()->route('rooms.index')->with($notification);


        } catch (\Exception $e) {
            logger($e->getMessage());

            $notification = [
                'alert-type' => 'error',
                'message' => 'Something went wrong'
            ];
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
