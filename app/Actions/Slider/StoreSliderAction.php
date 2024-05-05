<?php

    namespace App\Actions\Slider;

    use App\Models\Admin\Slider\Slider;
    use App\Traits\FileUploadTrait;
    use Illuminate\Http\Request;

    class StoreSliderAction
    {
        use FileUploadTrait;

        public function execute(Request $request): Slider
        {
            $imagePath = $this->uploadFile($request, 'image');
            $slider = new Slider();
            $slider->image = $imagePath;
            $slider->title = $request->title;
            $slider->sub_title = $request->sub_title;
            $slider->sub_text = $request->sub_text;
            $slider->button_link = $request->button_link;
            $slider->button_text = $request->button_text;
            $slider->status = $request->status;
            $slider->save();
            return $slider;
        }
    }
