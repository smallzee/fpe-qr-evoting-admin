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
                    <tr>
                        <td>Image</td>
                        <td><img src="{{image_url($student->passport)}}" style="width: 30px;height: 30px;" alt=""></td>
                    </tr>
                    <tr>
                        <td>Certificate No</td>
                        <td>{{ $student->certificate_no }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <td>Matric Number</td>
                        <td>{{ $student->matric_number }}</td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{ $student->phone }}</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>{{ $student->level }}</td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>{{ $student->faculty->name }}</td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>{{ $student->department->name }}</td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>{{ $student->sex }}</td>
                    </tr>
                    <tr>
                        <td>Year Of Graduation</td>
                        <td>{{ $student->year_of_graduation }}</td>
                    </tr>
                </table>

                <form action="{{route('generate-pdf.show',$student->id)}}">
                    <div class="form-group mb-4 text-center">
                        <input type="submit" class="btn btn-primary" value="Download Certificate" name="" id="">
                    </div>
                </form>
            </div>

        </div>
    </div>


@endpush
