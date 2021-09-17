@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
<!-- Hero -->
@include('pages.includes.breadcrumb')

<!-- Page Content -->
<div class="content">

    <!-- Recent Orders -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Project List</h3>
            <div class="block-options">
                <a href="{{ route('project.create') }}" class="btn btn-sm btn-alt-primary" data-class="d-none">
                    <i class="fa fa-plus"></i> Add project
                </a>
            </div>
        </div>
        <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
            <!-- Search Form -->
            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                <div class="form-group push">
                    <div class="input-group">
                        <input type="text" class="form-control" id="one-ecom-orders-search"
                            name="one-ecom-orders-search" placeholder="Search recent orders..">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END Search Form -->
        </div>
        <div class="block-content">
            <!-- Recent Orders Table -->
            <div class="table-responsive pb-3">

                @if ($projects->count() > 0)
                <table class="table table-borderless table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="" style="width: 320px;">Title</th>
                            <th class="d-none d-sm-table-cell">Category</th>
                            <th>Tech</th>
                            <th class="d-none d-xl-table-cell text-center">Created</th>
                            <th class="d-none d-sm-table-cell text-center">Likes</th>
                            <th class="d-none d-sm-table-cell text-right">Download</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( $projects as $project)
                        <tr>
                            <td class="font-size-sm">
                                <a class="font-w600" href="javascript:void(0)">
                                    <strong>{{ $project->title }}</strong>
                                </a>
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">
                                {{ $project->category->name }}</td>

                            <td>
                                <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">
                                    {{ $project->language->langName }}
                                </span>
                            </td>
                            <td class="d-none d-xl-table-cell text-center font-size-sm">
                                {{ date('jS M Y', strtotime($project->created_at)) }}
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">9</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right font-size-sm">
                                <strong>8989</strong>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @else
                <div class="alert alert-info" role="alert">
                    <p class="mb-0">You have no any project now <a class="alert-link"
                            href="{{ route('project.create') }}"> Add Project
                            now</a>!
                    </p>
                </div>

                @endif

            </div>
            <!-- END Recent Orders Table -->

            {{-- <!-- Pagination -->
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination pagination-sm justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination --> --}}
        </div>
    </div>
    <!-- END Recent Orders -->
</div>
<!-- END Page Content -->
@endsection