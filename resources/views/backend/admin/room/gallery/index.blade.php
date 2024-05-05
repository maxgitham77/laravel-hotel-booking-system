@extends('backend.admin.index')

@section('admin')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Manage <strong>{{ $room->room_name }}</strong> Room Gallery
            </div>
            <div class="my-3 ml-4">
                <a href="{{ route('rooms.index') }}" class="btn btn-primary">Go back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('image-galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label for="image">Choose Image<span class="text-danger">*</span> </label>
                                <input type="file" name="image" class="form-control mt-2 {{ $errors->has('image') ? 'is-invalid' : '' }}" />
                                <input type="hidden" name="room_id" value="{{ $room->id }}" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary mt-4" type="submit">Upload Image</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <div class="card">
            <div class="card-header flex justify-between  align-items-center">
                Room Gallery List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roomGalleries as $roomGallery)
                        <tr>
                            <td><img src="{{ $roomGallery->image }}" width="100" /></td>
                            <td><a href="{{ route('image-galleries.destroy', $roomGallery->id) }}" class="btn btn-primary delete-item"><i class="fas fa-trash"></i> </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
