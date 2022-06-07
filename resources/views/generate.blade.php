@extends('layouts.panel.app')

@push('content')

    <div class="col-sm-6 offset-md-3">
        <div class="card mb-5 mb-xl-8" style="border: #a0a0a0 solid thin;">
            <!--begin::Header--><!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->

                <table  align="center" style="border-collapse: collapse; background-image:url('{{image_url('logo2fade.png')}}');padding: 10px; width: 100%" border="0">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td align="left">
                                        <img src="{{image_url('logo.png')}}" style="width: 50px; height: 50px; padding: 5px; margin: 10px;" alt="">
                                    </td>
                                    <td>
                                        <h4 style="margin-top:10px; text-transform:uppercase; text-align: center">
                                            <b>Federal Polytechnic Ede, OSun State Student</b>
                                            <p style="margin-top: 10px;"><b> Student Voting Identity Card</b></p>
                                        </h4>
                                    </td>
                                </tr>
                            </table>
                            <table align="left">
                                <tr>
                                    <td>
                                        <img src="https://www.federalpolyede.edu.ng/passport/Reg{{$student->matric_number}}.jpg" alt="" style="width:120px; margin:10px; height: 120px;">
                                    </td>
                                </tr>
                            </table>

                            <table align="right">
                                <tr>
                                    <td>
                                        {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(120)->generate($student->matric_number); !!}
                                    </td>
                                </tr>
                            </table>



                            <table align="center">
                                <tr>
                                    <td style="padding-bottom: 5px;"><b>Matric Number :</b> {{ strtoupper($student->matric_number) }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 5px;"><b>Full Name :</b> {{ ucwords($student->name) }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 5px;"><b>Department :</b> {{ ucwords($student->department->name) }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 5px;"><b>Level :</b> {{ strtoupper($student->level) }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 5px;"><b>Gender :</b> {{ ucwords($student->sex )}}</td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <div align="center" id="print-div">
            <button class="btn btn-primary" id="id" type="button">Print</button>
        </div>
    </div>

    <script type="text/javascript">
        var a = document.getElementById('print');
        a.addEventListener("click",function(){
            document.getElementById('print-div').style.display="none";
            window.print();
            document.getElementById('print-div').style.display="block";
        });
    </script>

@endpush
