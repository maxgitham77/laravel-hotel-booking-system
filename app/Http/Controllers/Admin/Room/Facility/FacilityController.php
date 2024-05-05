<?php

namespace App\Http\Controllers\Admin\Room\Facility;

use App\DataTables\FacilityDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\Facility\StoreFacilityRequst;
use App\Http\Requests\Admin\Room\Facility\UpdateFacilityRequst;
use App\Models\Admin\Room\Facility\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FacilityDataTable $dataTable)
    {
        return $dataTable->render('backend.admin.facility.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacilityRequst $request)
    {
        try {
            $facility = new Facility();
            $facility->icon = $request->icon;
            $facility->name = $request->name;
            $facility->slug = Str::slug($request->name);
            $facility->status = $request->status;
            $facility->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Created successfully'
            ];
            return redirect()->route('facilities.index')->with($notification);
        } catch (\Exception $e) {
            logger($e->getMessage());
            $notification = [
                'alert-type' => 'error',
                'message' => 'Something went wrong and could not be created'
            ];
            return redirect()->route('facilities.index')->with($notification);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $facility = Facility::findOrFail($id);
        return view('backend.admin.facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityRequst $request, string $id)
    {
        try {
            $facility = Facility::findOrFail($id);
            $facility->icon = $request->icon;
            $facility->name = $request->name;
            $facility->slug = Str::slug($request->name);
            $facility->status = $request->status;
            $facility->save();

            $notification = [
                'alert-type' => 'success',
                'message' => 'Updated successfully'
            ];
            return redirect()->route('facilities.index')->with($notification);
        } catch (\Exception $e) {
            logger($e->getMessage());
            $notification = [
                'alert-type' => 'error',
                'message' => 'Something went wrong and could not be created'
            ];
            return redirect()->route('facilities.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Facility::findOrFail($id)->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            \logger($e);
            return response(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
        }
    }
}
