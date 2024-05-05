@extends('backend.admin.index')

@section('admin')
    <style>


    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between align-items-center">
                Create Room
                <div class="card-header-action">
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Back </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div id="image-preview" class="image-preview background-preview mt-2">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" class="{{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="image-upload"/>
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-12">
                            <label for="room_name">Room Name</label>
                            <input type="text" class="form-control {{ $errors->has('room_name') ? 'is-invalid' : '' }}"
                                   name="room_name" value="{{ old('room_name') }}" placeholder="Name"/>
                            <x-input-error :messages="$errors->get('room_name')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="roomtype_id">Room Type</label>
                                <select class="form-control"
                                        name="roomtype_id">
                                    <option value="">Select</option>
                                    @foreach($roomTypes as $roomType)
                                        <option value="{{ $roomType->id }}">{{ $roomType->name }} Room </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="roomnumber_id">Room Number</label>
                                <select class="form-control" name="roomnumber_id">
                                    <option value="">Select</option>
                                    @foreach($roomNumbers as $roomNumber)
                                        <option value="{{ $roomNumber->id }}">{{ $roomNumber->room_nr }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="adult">Number of adults</label>
                                    <select class="form-control {{ $errors->has('number_of_adult') ? 'is-invalid' : '' }}"
                                            name="number_of_adult">
                                        <option value="">Select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('number_of_adult')" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="children">Number of children</label>
                                    <select class="form-control {{ $errors->has('number_of_children') ? 'is-invalid' : '' }}"
                                            name="number_of_children">
                                        <option value="">Select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('number_of_children')" class="mt-2"/>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="room_capacity">Room Capcity</label>
                                    <input type="number" class="form-control {{ $errors->has('room_capacity') ? 'is-invalid' : '' }}"
                                           name="room_capacity" value="{{ old('room_capacity') }}" placeholder="Room Capacity"/>
                                    <x-input-error :messages="$errors->get('room_capacity')" class="mt-2"/>
                                </div>
                            </div>
                        </div>
                    <div class="row mt-4">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="price">Room Price</label>
                                <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                                       name="price" value="{{ old('price') }}" placeholder="Price"/>
                                <x-input-error :messages="$errors->get('price')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="discount">Room Price Discount</label>
                                <input type="text" class="form-control"
                                       name="discount" value="{{ old('discount') }}" placeholder="0"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="size">Room Size</label>
                                <input type="text" class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}"
                                       name="size" value="{{ old('size') }}" placeholder="Room Size"/>
                                <x-input-error :messages="$errors->get('size')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="bed_size">Bed Size</label>
                                <input type="text" class="form-control {{ $errors->has('bed_size') ? 'is-invalid' : '' }}"
                                       name="bed_size" placeholder="Bed Size"/>
                                <x-input-error :messages="$errors->get('bed_size')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="view">View</label>
                                <input type="text" class="form-control {{ $errors->has('view') ? 'is-invalid' : '' }}"
                                       name="view" value="{{ old('view') }}" placeholder="View"/>
                                <x-input-error :messages="$errors->get('view')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="status">Facilities</label>
                                <select class="form-control js-example-basic-multiple" name="facilities[]" multiple="multiple">
                                    <option value="">Select</option>
                                    @foreach($facilities as $facility)
                                        <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control {{ $errors->has('short_description') ? 'is-invalid' : '' }}"
                                          name="short_description"  placeholder="Short Description">{!! old('short_description') !!}</textarea>
                                <x-input-error :messages="$errors->get('short_description')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                          name="description" placeholder="Description">{!! old('description') !!}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="smoking_allowed">Is smoking allowed?</label>
                                <select class="form-control {{ $errors->has('smoking_allowed') ? 'is-invalid' : '' }}"
                                        name="smoking_allowed">
                                    <option value="">Select</option>
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                                <x-input-error :messages="$errors->get('smoking_allowed')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="cooking_allowed">Is cooking allowed?</label>
                                <select class="form-control {{ $errors->has('cooking_allowed') ? 'is-invalid' : '' }}"
                                        name="cooking_allowed">
                                    <option value="">Select</option>
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                                <x-input-error :messages="$errors->get('cooking_allowed')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                        name="status">
                                    <option value="">Select</option>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    </div>
                    <button class="btn btn-primary mt-4" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection

