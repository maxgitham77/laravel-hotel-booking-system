@extends('backend.admin.index')

@section('admin')
    <style>


    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between align-items-center">
                Create SPA
                <div class="card-header-action">
                    <a href="{{ route('spa.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Back </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('spa.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <div id="image-preview" class="image-preview background-preview mt-2">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" class="{{ $errors->has('logo') ? 'is-invalid' : '' }}" name="logo" id="image-upload"/>
                                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div id="image-preview-2" class="image-preview background-preview mt-2">
                                    <label for="image-upload-2" id="image-label-2">Choose File</label>
                                    <input type="file" class="{{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="image-upload-2"/>
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-12">
                            <label for="title">Title</label>
                            <input type="text" class="form-control {{ $errors->has('room_name') ? 'is-invalid' : '' }}"
                                   name="title" value="{{ old('title') }}" placeholder="Title"/>
                            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col col-md-12">
                            <label for="short_description">Short Description</label>
                            <textarea class="form-control {{ $errors->has('short_description') ? 'is-invalid' : '' }}" value="{{ old('short_description') }}"
                                      name="short_description" placeholder="Short Description"></textarea>
                            <x-input-error :messages="$errors->get('short_description')" class="mt-2"/>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

