@extends('backend.admin.index')

@section('admin')
    <style>


    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between align-items-center">
                Update Slider
                <div class="card-header-action">
                    <a href="{{ route('roomtypes.index') }}" class="btn btn-primary"><i class="lni lni-angle-double-left"></i> Back </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('roomtypes.update', $roomtype->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div id="image-preview" class="image-preview background-preview mt-2">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload"/>
                                    <input type="hidden" name="old_image" value="{{ $roomtype->image }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ $roomtype->name }}" placeholder="Name" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="show">Show in Home Page</label>
                                <select class="form-control {{ $errors->has('show_in_home_page') ? 'is-invalid' : '' }}" name="show_in_home_page" required>
                                    <option value="">Select</option>
                                    <option @selected($roomtype->show_in_home_page === 0) value="0">No</option>
                                    <option @selected($roomtype->show_in_home_page === 1) value="1">Yes</option>
                                </select>
                                <x-input-error :messages="$errors->get('show_in_home_page')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" required>
                                    <option value="">Select</option>
                                    <option @selected($roomtype->status === 0) value="0">Inactive</option>
                                    <option @selected($roomtype->status === 1) value="1">Active</option>
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
                    'background-image': 'url({{ asset($roomtype->image) }})',
                    'background-size': 'cover',
                    'background-position': 'center center'
                });

            })
        })
    </script>
@endpush
