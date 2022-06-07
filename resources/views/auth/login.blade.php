<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Search Engine Meta Data  -->
    <meta name="author" content="{{url('/')}}" />
    <title>Admin Login &dash; {{ getenv('APP_NAME') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{image_url('logo.png')}}"/>
    <!-- Main structure css file -->
    <link  rel="stylesheet" href="{{asset('assets/panel/auth/css/style.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <!-- jquery -->
    <script src="{{asset('assets/libs/js/jquery.min.js')}}"></script>
    <!-- plugins-jquery -->
    <script src="{{asset('assets/libs/js/plugins-jquery.js')}}"></script>
    <!-- plugin_path -->
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2" style="margin-top: 10%">
            <!-- brand-logo start -->
            <!-- authfy-login start -->
            <div class="authfy-login" style="border-radius: 10px">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <h2 class="auth-title">Admin Login</h2>
                    </div>
                    <!-- social login buttons start -->

                    <img src="{{image_url('logo.png')}}" style="width: 100px;height: 100px; border-radius: 50px; margin-bottom: 20px;" alt="">

                    @error('email')
                    <script>
                        $(document).ready(function () {
                            iziToast.error({
                                title: 'Error',
                                message: "{{ $message }}",
                                position: 'topRight',
                            });
                        });
                    </script>
                    @enderror

                    @error('password')
                    <script>
                        $(document).ready(function () {
                            iziToast.error({
                                title: 'Error',
                                message: "{{ $message }}",
                                position: 'topRight',
                            });
                        });
                    </script>
                    @enderror



                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <form name="loginForm" class="loginForm" action="{{route('login')}}" method="POST">
                                @csrf
                                <input type="email" class="form-control email" required name="email" placeholder="Email address">
                                <div class="pwdMask">
                                    <input type="password" required class="form-control password"  name="password" placeholder="Password">
                                    <span class="fa fa-eye-slash pwd-toggle"></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- ./panel-login -->
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->


<!-- for Bootstrap js -->
<script src="{{asset('assets/panel/auth/js/bootstrap.min.js')}}"></script>
<!-- Custom js-->
<script src="{{asset('assets/panel/auth/js/custom.js')}}"></script>
</body>
</html>
