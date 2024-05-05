@extends('backend.admin.index')

@section('admin')
    <style>


    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between align-items-center">
                Edit Facility
                <div class="card-header-action">
                    <a href="{{ route('facilities.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Back </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('facilities.update', $facility->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <div role="iconpicker" name="icon" data-icon="{{ @$facility->icon }}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-12">
                            <label for="name">Name <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ $facility->name }}" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" required>
                                    <option value="">Select</option>
                                    <option @selected($facility->status === 0) value="0">Inactive</option>
                                    <option @selected($facility->status === 1) value="1">Active</option>
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

