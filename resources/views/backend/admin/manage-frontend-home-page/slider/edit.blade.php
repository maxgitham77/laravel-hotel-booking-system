@extends('backend.admin.index')

@section('admin')
    <style>


    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between align-items-center">
                Update Slider
                <div class="card-header-action">
                    <a href="{{ route('slider.index') }}" class="btn btn-primary"><i class="lni lni-angle-double-left"></i> Back </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div id="image-preview" class="image-preview background-preview mt-2">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload"/>
                                    <input type="hidden" name="old_image" value="{{ $slider->image }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ $slider->title }}" placeholder="Title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="col col-md-6">
                            <label for="sub_title">SubTitle</label>
                            <input type="text" class="form-control {{ $errors->has('sub_title') ? 'is-invalid' : '' }}" name="sub_title" value="{{ $slider->sub_title }}" placeholder="SubTitle" />
                            <x-input-error :messages="$errors->get('sub_title')" class="mt-2" />
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md12">
                            <label for="sub_text">Text</label>
                            <textarea class="form-control {{ $errors->has('sub_text') ? 'is-invalid' : '' }}" name="sub_text" placeholder="Text">{!! $slider->sub_text !!}</textarea>
                            <x-input-error :messages="$errors->get('sub_text')" class="mt-2" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-6">
                            <label for="button_text">Button Text</label>
                            <input type="text" class="form-control" name="button_text" value="{{ $slider->button_text }}" placeholder="Button Text" />
                        </div>
                        <div class="col col-md-6">
                            <label for="button_link">Button Link</label>
                            <input type="text" class="form-control {{ $errors->has('button_link' ? 'is-invalid' : '') }}" value="{{ $slider->button_link }}" name="button_link" placeholder="Button Link" />
                            <x-input-error :messages="$errors->get('button_link')" class="mt-2" />
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" required>
                                    <option value="">Select</option>
                                    <option @selected($slider->status === 0) value="0">Inactive</option>
                                    <option @selected($slider->status === 1) value="1">Active</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $(document).ready(function () {
                $('.image-preview').css({
                    'background-image': 'url({{ asset($slider->image) }})',
                    'background-size': 'cover',
                    'background-position': 'center center'
                });

            })
        })
    </script>
@endpush
