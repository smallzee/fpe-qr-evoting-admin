@extends('layouts.panel.app')

@push('content')
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{ $page_title }}</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->

            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="datatable">
                    <thead>
                    <tr class="fw-bolder text-muted">
                        <th>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox"/>
                            </div>
                        </th>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr class="fw-bolder text-muted">
                        <th>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox"/>
                            </div>
                        </th>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>

                    </tfoot>
                    <tbody>
                    @php($sn =1)
                    @forelse($posts as $value)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </td>
                            <td>{{ $sn++ }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>
                                <a href="{{route('post.edit',$value->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
										    <i class="fa fa-eye"></i>
                                        </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" align="center">No record found yet</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                {{ $posts->links() }}

            </div>
        </div>
    </div>
@endpush
