<?php

namespace App\Http\Controllers\Admin\Room;

use App\DataTables\RoomTypeDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\StoreRoomTypeRequest;
use App\Models\Admin\Room\RoomType;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(RoomTypeDataTable $dataTable)
    {
        return $dataTable->render('backend.admin.room.roomtype.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.room.roomtype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomTypeRequest $request)
    {
        try {
            $imagePath = $this->uploadFile($request, 'image');

            $roomType = new RoomType();
            $roomType->image = $imagePath;
            $roomType->name = strtolower($request->name);
            $roomType->status = $request->status;
            $roomType->show_in_home_page = $request->show_in_home_page;
            $roomType->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Created successfuly'
            ];
            return redirect()->route('roomtypes.index')->with($notification);
        } catch (\Exception $e) {
            logger($e->getMessage());
            $notificationError = [
                'alert-type' => 'error',
                'message' => 'Something went wrong'
            ];
            return redirect()->route('roomtypes.index')->with($notificationError);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roomtype = RoomType::findOrFail($id);
        return view('backend.admin.room.roomtype.edit', compact('roomtype'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $imagePath = $this->uploadFile($request, 'image', $request->old_image);

            $roomType = RoomType::findOrFail($id);
            $roomType->image = !empty($imagePath) ? $imagePath : $request->old_image;
            $roomType->name = strtolower($request->name);
            $roomType->status = $request->status;
            $roomType->show_in_home_page = $request->show_in_home_page;
            $roomType->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Created successfuly'
            ];
            return redirect()->route('roomtypes.index')->with($notification);
        } catch (\Exception $e) {
            logger($e->getMessage());
            $notificationError = [
                'alert-type' => 'error',
                'message' => 'Something went wrong'
            ];
            return redirect()->route('roomtypes.index')->with($notificationError);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            RoomType::findOrFail($id)->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            \logger($e);
            return response(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
        }
    }
}
