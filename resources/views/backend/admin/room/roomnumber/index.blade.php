@extends('backend.admin.index')

@section('admin')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header flex justify-between  align-items-center">
                Manage Room Numbers
                <div class="card-header-action">
                    <a href="{{ route('roomnumbers.create') }}" class="btn btn-primary"><i class="lni lni-plus"></i> Create </a>
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
