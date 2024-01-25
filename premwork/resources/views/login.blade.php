<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | SIPENSI-SPED </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>SIPENSI-SPED</h3>
                <h4>Sistem Informasi Pendidikan Spesial</h4>
                <h4>Special Education</h4>
                <br>

                <p>Silahkan login untuk mengakses data.</p>

            </div>
            <div class="content-error">
                @if(isset($_GET['alert']))
                    @if($_GET['alert'] == "gagal")
                        <div class="alert alert-danger">LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>
                    @elseif($_GET['alert'] == "logout")
                        <div class="alert alert-success">ANDA TELAH BERHASIL LOGOUT</div>
                    @elseif($_GET['alert'] == "belum_login")
                        <div class="alert alert-warning">ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>
                    @endif
                @endif

                <div class="hpanel">
                    <div class="panel-body">
                        <br>
                        <br>
                        <center>
                            <h4>LOGIN USER</h4>
                        </center>
                        <br>
                        <br>

                        <form action="{{ url('/showGuru') }}" method="get" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Nomor Induk</label>
                                <input type="text" placeholder="Nomor Induk" title="Please enter you username"
                                    required="required" autocomplete="off" name="username" id="username"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******"
                                    required="required" autocomplete="off" name="password" id="password"
                                    class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                        </form>

                        <br>

                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © {{ date('Y') }}. All rights reserved.</p>
                <p class="text-muted">Sistem Informasi Pendidikan Spesial - Special Education.</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck-active.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
