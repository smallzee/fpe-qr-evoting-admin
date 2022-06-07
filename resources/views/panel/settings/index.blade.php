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

            <form action="{{ route('settings.store') }}" method="post">
                @csrf
                <div class="row">
                    @foreach($all_key as $key)

                        <h6 class="col-sm-12 " style="font-size: 15px; margin-bottom: 10px; padding-bottom: 10px;">{{ucwords($key)}}</h6>

                        @foreach($all_settings_array[$key] as $settings_key)



                            <div  class="col-sm-4 mb-3">

                                <div class="form-group">

                                    <label for="{{$settings_key['key']}}" class=" control-label">
                                        {{$settings_key['descr']}}
                                    </label>

                                </div>
                            </div>


                            <div class="col-sm-8 mb-3">
                                <div class="form-group">
                                    <input class="form-control" required name="{{$settings_key['id']}}" type="{{$settings_key['settings_input_type']}}" id="{{$settings_key['id']}}" value="{{$settings_key['value']}}">
                                </div>
                            </div>

                        @endforeach

                    @endforeach
                </div>

                <div class="form-group mb-2">
                    <input type="submit" class="btn btn-primary" value="Update" id="">
                </div>

            </form>

        </div>

    </div>

@endpush
