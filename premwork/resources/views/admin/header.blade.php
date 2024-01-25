<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - SIPENSI-SPED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">

    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="path-to-main-logo-image" alt="Main Logo" /></a>
                <strong><a href="index.html"><img src="../assets/img/logo/logosn.png" alt="Secondary Logo" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="{{ url('showKategori') }}" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Data Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('showGuru') }}" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Data Guru</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('showSiswa') }}" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('showKelas') }}" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Data Kelas</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('showHistoryMasuk') }}" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Riwayat Masuk</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('showHistoryKeluar') }}" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Riwayat Keluar</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('user.login') }}" aria-expanded="false">
                                <span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Sistem Informasi Pendidikan Spesial - Special Education (SIPENSI-SPED)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

