@extends('layouts.panel.app')
@push('content')

    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch">
            <!--begin::Header-->
            <div class="card-header border-0 bg-danger py-5">
                <h3 class="card-title fw-bolder text-white">Statistics</h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Chart-->
                <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px; min-height: 200px;"><div id="apexcharts1no8bl1e" class="apexcharts-canvas apexcharts1no8bl1e apexcharts-theme-light" style="width: 354px; height: 200px;"><svg id="SvgjsSvg1257" width="354" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1259" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1258"><clipPath id="gridRectMask1no8bl1e"><rect id="SvgjsRect1262" width="361" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask1no8bl1e"></clipPath><clipPath id="nonForecastMask1no8bl1e"></clipPath><clipPath id="gridRectMarkerMask1no8bl1e"><rect id="SvgjsRect1263" width="358" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1269" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1270" flood-color="#cb1b46" flood-opacity="0.5" result="SvgjsFeFlood1270Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1271" in="SvgjsFeFlood1270Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1271Out"></feComposite><feOffset id="SvgjsFeOffset1272" dx="0" dy="5" result="SvgjsFeOffset1272Out" in="SvgjsFeComposite1271Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1273" stdDeviation="3 " result="SvgjsFeGaussianBlur1273Out" in="SvgjsFeOffset1272Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1274" in="SourceGraphic" in2="SvgjsFeGaussianBlur1273Out" mode="normal" result="SvgjsFeBlend1274Out"></feBlend></filter><filter id="SvgjsFilter1276" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1277" flood-color="#cb1b46" flood-opacity="0.5" result="SvgjsFeFlood1277Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1278" in="SvgjsFeFlood1277Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1278Out"></feComposite><feOffset id="SvgjsFeOffset1279" dx="0" dy="5" result="SvgjsFeOffset1279Out" in="SvgjsFeComposite1278Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1280" stdDeviation="3 " result="SvgjsFeGaussianBlur1280Out" in="SvgjsFeOffset1279Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1281" in="SourceGraphic" in2="SvgjsFeGaussianBlur1280Out" mode="normal" result="SvgjsFeBlend1281Out"></feBlend></filter></defs><g id="SvgjsG1282" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1283" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1292" class="apexcharts-grid"><g id="SvgjsG1293" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1295" x1="0" y1="0" x2="354" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1296" x1="0" y1="20" x2="354" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1297" x1="0" y1="40" x2="354" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1298" x1="0" y1="60" x2="354" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1299" x1="0" y1="80" x2="354" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1300" x1="0" y1="100" x2="354" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1301" x1="0" y1="120" x2="354" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1302" x1="0" y1="140" x2="354" y2="140" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1303" x1="0" y1="160" x2="354" y2="160" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1304" x1="0" y1="180" x2="354" y2="180" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1305" x1="0" y1="200" x2="354" y2="200" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1294" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1307" x1="0" y1="200" x2="354" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1306" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1264" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1265" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1268" d="M 0 200L 0 125C 20.65 125 38.35 87.5 59 87.5C 79.65 87.5 97.35 120 118 120C 138.65 120 156.35 25 177 25C 197.65 25 215.35 100 236 100C 256.65 100 274.35 100 295 100C 315.65 100 333.35 100 354 100C 354 100 354 100 354 200M 354 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1no8bl1e)" filter="url(#SvgjsFilter1269)" pathTo="M 0 200L 0 125C 20.65 125 38.35 87.5 59 87.5C 79.65 87.5 97.35 120 118 120C 138.65 120 156.35 25 177 25C 197.65 25 215.35 100 236 100C 256.65 100 274.35 100 295 100C 315.65 100 333.35 100 354 100C 354 100 354 100 354 200M 354 100z" pathFrom="M -1 200L -1 200L 59 200L 118 200L 177 200L 236 200L 295 200L 354 200"></path><path id="SvgjsPath1275" d="M 0 125C 20.65 125 38.35 87.5 59 87.5C 79.65 87.5 97.35 120 118 120C 138.65 120 156.35 25 177 25C 197.65 25 215.35 100 236 100C 256.65 100 274.35 100 295 100C 315.65 100 333.35 100 354 100" fill="none" fill-opacity="1" stroke="#cb1b46" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1no8bl1e)" filter="url(#SvgjsFilter1276)" pathTo="M 0 125C 20.65 125 38.35 87.5 59 87.5C 79.65 87.5 97.35 120 118 120C 138.65 120 156.35 25 177 25C 197.65 25 215.35 100 236 100C 256.65 100 274.35 100 295 100C 315.65 100 333.35 100 354 100" pathFrom="M -1 200L -1 200L 59 200L 118 200L 177 200L 236 200L 295 200L 354 200"></path><g id="SvgjsG1266" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1313" r="0" cx="59" cy="87.5" class="apexcharts-marker wp8qkuty9 no-pointer-events" stroke="#cb1b46" fill="#f1416c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1267" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1308" x1="0" y1="0" x2="354" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1309" x1="0" y1="0" x2="354" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1310" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1311" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1312" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1291" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1260" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 70px; top: 90.5px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Mar</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: transparent; display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Net Profit: </span><span class="apexcharts-tooltip-text-y-value">$45 thousands</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                <!--end::Chart-->
                <!--begin::Stats-->
                <div class="card-p mt-n20 position-relative">
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                                </svg>
                            </span>
                            <h1 class="text-warning">{{\App\Students::count()}}</h1>
                            <!--end::Svg Icon-->
                            <a href="{{route('users.index')}}" class="text-warning fw-bold fs-6">Total Student</a>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                                </svg>
                            </span>
                            <h1 class="text-primary">{{ \App\User::count() }}</h1>
                            <!--end::Svg Icon-->
                            <a href="{{route('admin.index')}}" class="text-primary fw-bold fs-6">Total Admin</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--end::Row-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 2-->
    </div>


    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">{{ __('Recent Admin') }}</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Over {{ \App\User::whereIn('role',['admin'])->count() }} members</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check">
                                </div>
                            </th>
                            <th class="min-w-150px">Name</th>
                            <th class="min-w-140px">Email Address</th>
                            <th class="min-w-120px">Admin Role</th>
                            <th class="min-w-100px text-end">Actions</th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                        @foreach(\App\User::whereIn('role',['admin'])->orderBy('id','desc')->limit(10)->get() as $value)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input widget-9-check" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{image_url('avatar.png')}}" alt="">
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="{{route('users.show',$value->id)}}" class="text-dark fw-bolder text-hover-primary fs-6">{{ ucwords($value->name) }}</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">{{ $value->phone }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('users.show',$value->id)}}" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $value->email }}</a>
                                    <span class="text-muted fw-bold text-muted d-block fs-7">{{ ucwords($value->role_name) }}</span>
                                </td>

                                <td class="text-end">
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                            <span class="text-muted me-2 fs-7 fw-bold">{{ ucwords($value->role) }}</span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        <a href="{{route('users.show',$value->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>

@endpush
