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

            <form action="{{route('admin.store')}}" method="post">
                @csrf

                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" required id="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required id="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Phone Number" required id="">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Password</label>
                            <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password" required id="">
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
