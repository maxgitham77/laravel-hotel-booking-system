<?php

namespace App\Http\Controllers\Admin\Room\RoomGallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Room\Room;
use App\Models\Admin\Room\RoomGallery\RoomGallery;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class RoomGalleryController extends Controller
{

    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(string $roomId)
    {
        $roomGalleries = RoomGallery::where('room_id', $roomId)->get();
        $room = Room::findOrFail($roomId);
        return view('backend.admin.room.gallery.index', compact('room', 'roomGalleries'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:3000'],
            'room_id' => ['required'],
        ]);
        try {
            $imagePath = $this->uploadFile($request, 'image');
            $gallery = new RoomGallery();
            $gallery->room_id = $request->room_id;
            $gallery->image = $imagePath;
            $gallery->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Created successfully!'
            ];

            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            logger($e->getMessage());
            $notification =  [
                'alert-type' => 'error',
                'message' => 'Something went wrong'
            ];
            return redirect()->back()->with($notification);
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $roomGallery = RoomGallery::findOrFail($id);
            $this->deleteFile($roomGallery->image);
            $roomGallery->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return response(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }
}
