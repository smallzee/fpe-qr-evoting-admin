<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <title>{{ $page_title }} - {{ env('APP_NAME') }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <link rel="shortcut icon" href="{{image_url('logo.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets/panel/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{url('assets/panel/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{asset('assets/panel/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('assets/libs/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="dark-mode header-tablet-and-mobile-fixed aside-enabled">
<!--begin::Main-->

@include('layouts.panel.header')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            @include('flash')

            <div class="row gy-5 g-xl-8">
            @stack('content')
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

@include('layouts.panel.footer')

<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/panel/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/panel/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset('assets/panel/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/panel/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/panel/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/panel/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/panel/js/custom/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/panel/js/custom/intro.js')}}"></script>

<script>
    $('#name').on('keyup', function (e) {
        //alert("key up");
        e.preventDefault();
        var str = $(this).val();
        str = str.replace(/\W+(?!$)/g, '-').toLowerCase();
        str = str.replace(/\W$/, '').toLowerCase();
        $('#slug').val(str);
    });
</script>

</body>
<!--end::Body-->
</html>
