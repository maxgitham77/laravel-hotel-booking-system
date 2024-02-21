@extends('backend.admin.index')

@section('admin')

    <!-- Top Information starts-->
    @include('backend.admin.dashboard._top-data-info')
    <!-- Top Information ends-->

    <!-- Sales overview starts-->
    @include('backend.admin.dashboard._sales-overview-trends')
    <!-- Sales overview ends-->

    <!-- Recent Orders starts-->
    @include('backend.admin.dashboard._recent-orders')
    <!-- Recent Orders ends-->


@endsection
