<?php

    namespace App\Http\Controllers\Admin\Slider;

    use App\Actions\Slider\StoreSliderAction;
    use App\Actions\Slider\UpdateSliderAction;
    use App\DataTables\SliderDataTable;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Slider\StoreSliderRequest;
    use App\Http\Requests\Admin\Slider\UpdateSliderRequest;
    use App\Models\Admin\Slider\Slider;
    use App\Traits\FileUploadTrait;
    use Illuminate\Http\Request;
    use Mockery\Exception;

    class SliderController extends Controller
    {
        use FileUploadTrait;

        /**
         * Display a listing of the resource.
         */
        public function index(SliderDataTable $dataTable)
        {
            return $dataTable->render('backend.admin.manage-frontend-home-page.slider.index');
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('backend.admin.manage-frontend-home-page.slider.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(StoreSliderRequest $request, StoreSliderAction $storeSliderAction)
        {
            try {
                $storeSliderAction->execute($request);
                $notification = [
                    'alert-type' => 'success',
                    'message' => 'Created successfuly'
                ];
                return redirect()->route('slider.index')->with($notification);
            } catch (\Exception $e) {
                logger($e->getMessage());
                $notificationError = [
                    'alert-type' => 'error',
                    'message' => 'Something went wrong'
                ];
                return redirect()->route('slider.index')->with($notificationError);
            }
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            try {
                $slider = Slider::findOrFail($id);
                return view('backend.admin.manage-frontend-home-page.slider.edit', compact('slider'));
            } catch (\Exception $e) {
                logger($e->getMessage());
            }
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(UpdateSliderRequest $request, string $id, UpdateSliderAction $updateSliderAction)
        {
            try {
                $updateSliderAction->execute($request, $id);
                $notification = [
                    'alert-type' => 'success',
                    'message' => 'Updated successfuly'
                ];
                return redirect()->route('slider.index')->with($notification);
            } catch (Exception $e) {
                logger($e->getMessage());
                $notificationError = [
                    'alert-type' => 'error',
                    'message' => 'Something went wrong'
                ];
                return redirect()->back()->with($notificationError);
            }
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            try {
                Slider::findOrFail($id)->delete();
                return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
            } catch (\Exception $e) {
                \logger($e);
                return response(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
            }
        }
    }
