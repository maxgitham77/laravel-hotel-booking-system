@extends('backend.admin.index')

@section('admin')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between  align-items-center">
                Manage SPA
                <div class="card-header-action">
                    <a href="{{ route('spa.create') }}" class="btn btn-primary"><i class="lni lni-plus"></i> Create </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
