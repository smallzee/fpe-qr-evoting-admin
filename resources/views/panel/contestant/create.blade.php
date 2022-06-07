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

            <form action="{{route('contestant.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" required id="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="mb-4">Matric Number</label>
                            <input type="text" class="form-control mb-4" required name="matric_number" placeholder="Matric Number" id="">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="" class="mb-4">Email Address</label>
                            <input type="email" class="form-control mb-4" required name="email" placeholder="Email Address" id="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="mb-4">Phone Number</label>
                            <input type="text" class="form-control mb-4" required name="phone" placeholder="Phone Number" id="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Department</label>
                            <select name="department" id="department" data-control="select2" data-placeholder="Select a department " class="form-select mb-2">
                                <option value="" selected disabled>Select</option>
                                @foreach(\App\Department::orderBy('name')->get() as $value)
                                    <option value="{{ $value->id }}"> {{ ucwords($value->name) }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Alias</label>
                            <input type="text" class="form-control" name="alias" value="{{old('alias')}}" placeholder="Alias" required id="">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Level</label>
                            <select name="level" id="level" data-control="select2" data-placeholder="Select a level " class="form-select mb-2">
                                <option value="" selected disabled>Select</option>
                                @foreach(array('ND 1 FT','ND 1 DPT','ND 1 PTYR','ND 2 PTYR','ND 3 PTYR','ND 2 FT','ND 2 DPT','HND 1 FT','HND 1 DPT','HND 2 FT','HND 2 DPT') as $value)
                                    <option value="{{ $value }}">{{ ucwords($value) }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Sex</label>
                            <select name="sex" id="sex" data-control="select2" data-placeholder="Select a sex " class="form-select mb-2">
                                <option value="" selected disabled>Select</option>
                                @foreach(array('male','female') as $value)
                                    <option value="{{$value}}">{{ ucwords($value) }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Program</label>
                            <select name="program" id="program" data-control="select2" data-placeholder="Select a program " class="form-select mb-2">
                                <option value="" selected disabled>Select</option>
                                @foreach(array('National Diploma','Higher National Diploma') as $value)
                                    <option value="{{$value}}">{{ ucwords($value) }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Post</label>
                            <select name="post" id="post" data-control="select2" data-placeholder="Select a post " class="form-select mb-2">
                                <option value="" selected disabled>Select</option>
                                @foreach(\App\Posts::orderBy('name')->get() as $value)
                                    <option value="{{ $value->id }}"> {{ ucwords($value->name) }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>

                </div>

                <div class="form-group mb-4">
                    <input type="submit" class="btn btn-primary" name="" value="Submit" id="">
                </div>
            </form>

        </div>
        <!--begin::Body-->
    </div>

@endpush
