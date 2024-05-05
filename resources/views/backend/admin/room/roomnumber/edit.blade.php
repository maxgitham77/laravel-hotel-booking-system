@extends('backend.admin.index')

@section('admin')
    <style>


    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between align-items-center">
                Edit Room Number
                <div class="card-header-action">
                    <a href="{{ route('roomnumbers.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Back </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('roomnumbers.update', $roomNumber->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mt-4">
                        <div class="col col-md-12">
                            <label for="room_nr">Room Number</label>
                            <input type="number" class="form-control {{ $errors->has('room_nr') ? 'is-invalid' : '' }}"
                                   name="room_nr" value="{{ $roomNumber->room_nr }}" placeholder="Room Number"/>
                            <x-input-error :messages="$errors->get('room_nr')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <div class="col col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                        name="status">
                                    <option value="">Select</option>
                                    <option @selected($roomNumber->status === 0) value="0">Inactive</option>
                                    <option @selected($roomNumber->status === 1) value="1">Active</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

