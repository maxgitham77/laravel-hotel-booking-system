@extends('backend.admin.index')

@section('admin')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between  align-items-center">
                Manage Home Page Slider
                <div class="card-header-action">
                    <a href="{{ route('slider.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Create </a>
                </div>
            </div>

            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
