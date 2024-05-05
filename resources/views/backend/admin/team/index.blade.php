@extends('backend.admin.index')

@section('admin')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Manage Teams</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
