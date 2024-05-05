<?php

namespace App\Http\Controllers\Admin\Room\RoomNumber;

use App\DataTables\RoomNumberDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\RoomNumber\StoreRoomNumberRequest;
use App\Http\Requests\Admin\Room\RoomNumber\UpdateRoomNumberRequest;
use App\Models\Admin\Room\RoomNumber\RoomNumber;
use Illuminate\Http\Request;

class RoomNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RoomNumberDataTable $dataTable)
    {
        return $dataTable->render('backend.admin.room.roomnumber.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.room.roomnumber.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomNumberRequest $request)
    {
        try {
            $roomNumber = new RoomNumber();
            $roomNumber->room_nr = $request->room_nr;
            $roomNumber->status = $request->status;
            $roomNumber->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Created successfully.'
            ];
            return redirect()->route('roomnumbers.index')->with($notification);

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
        $roomNumber = RoomNumber::findOrFail($id);
        return view('backend.admin.room.roomnumber.edit', compact('roomNumber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomNumberRequest $request, string $id)
    {
        try {
            $roomNumber = RoomNumber::findOrFail($id);
            $roomNumber->room_nr = $request->room_nr;
            $roomNumber->status = $request->status;
            $roomNumber->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Updated successfully.'
            ];
            return redirect()->route('roomnumbers.index')->with($notification);

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
        try {
            RoomNumber::findOrFail($id)->delete();
            return response(['status' => 'success', 'message' => ['Deleted successfully']]);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return response(['status' => 'error', 'message' => ['Something went wrong']]);
        }
    }
}
