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

            <form action="{{route('admin.update',$user->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Name" required id="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Email Address</label>
                            <input type="email" class="form-control" name="email" disabled value="{{$user->email}}" placeholder="Email Address" required id="">
                            <small>Please Note : Email address cannot be changed</small>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="" class="mb-4">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}" placeholder="Phone Number" required id="">
                        </div>
                    </div>


                </div>

                <div class="form-group mb-4">
                    <input type="submit" class="btn btn-primary" name="" value="Update" id="">
                </div>
            </form>

        </div>
        <!--begin::Body-->
    </div>

@endpush
