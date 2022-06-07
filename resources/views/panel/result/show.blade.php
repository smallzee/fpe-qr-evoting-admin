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
                        <th>Image</th>
                        <th>Matric Number</th>
                        <th>Name</th>
                        <th>Alias</th>
                        <th>Phone Number</th>
                        <th>Department</th>
                        <th>Level</th>
                        <th>Sex</th>
                        <th>Total Vote</th>
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
                        <th>Image</th>
                        <th>Matric Number</th>
                        <th>Name</th>
                        <th>Alias</th>
                        <th>Phone Number</th>
                        <th>Department</th>
                        <th>Level</th>
                        <th>Sex</th>
                        <th>Total Vote</th>
                    </tr>

                    </tfoot>
                    <tbody>
                    @php($sn =1)
                    @forelse($contestant as $value)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </td>
                            <td>{{ $sn++ }}</td>
                            <td><img src="{{url('https://www.federalpolyede.edu.ng/passport/Reg'.$value->matric_number.'.jpg')}}" style="width: 40px; height: 40px; border-radius: 50px" alt=""></td>
                            <td>{{ strtoupper($value->matric_number) }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->alias }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ ucwords($value->department->name) }}</td>
                            <td>{{ $value->level }}</td>
                            <td>{{ ucwords($value->sex) }}</td>
                            <td>{{ \App\Vote::where('post_id',$value->post_id)->where('contestant_id',$value->id)->count() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" align="center">No record found yet</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                {{ $contestant->links() }}

            </div>
        </div>
    </div>
@endpush
