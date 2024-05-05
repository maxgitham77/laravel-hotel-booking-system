<?php

    namespace App\Actions\Slider;

    use App\Models\Admin\Slider\Slider;
    use App\Traits\FileUploadTrait;
    use Illuminate\Http\Request;

    class UpdateSliderAction
    {
        use FileUploadTrait;

        public function execute(Request $request, $id): Slider
        {
            $imagePath = $this->uploadFile($request, 'image', $request->old_image);
            $slider = Slider::findOrFail($id);
            $slider->image = !empty($imagePath) ? $imagePath : $request->old_image;
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
