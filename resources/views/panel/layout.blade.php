<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">

    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("admin/plugins/images/favicon.png")}}">
    <!-- Custom CSS -->
    <link href="{{asset("admin/plugins/bower_components/chartist/dist/chartist.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css")}}">
    <!-- Custom CSS -->
    <link href="{{asset("admin/css/style.min.css")}}" rel="stylesheet">

</head>

<body>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="dashboard">
                    <!-- Logo icon -->
                    <b class="logo-icon">

                        <img src="{{asset("admin/plugins/images/firat.jpg")}}" style="width: 50px; height: 50px" alt="homepage" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                 <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset("admin/plugins/images/admin.png")}}" style="margin-top: 5px" alt="homepage" />
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                   href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse menu" id="navbarSupportedContent" data-navbarbg="skin5">

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=" in">
                        <form role="search" method="post" action="{{route('find')}}" class="app-search d-none d-md-block me-3">
                            @csrf
                            <input type="text" placeholder="Ara..." name="findUser"  class="form-control mt-0 border border-info border-2">
                            <button class="btn btn-sm btn-outline-info" style="width: 45px; border-radius: 5px" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li >
                        <a class="profile-pic" href="#">

                           <span class="text-white font-medium">{{\Illuminate\Support\Facades\Auth::user()->ad." ".\Illuminate\Support\Facades\Auth::user()->soyad }}</span></a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>

        </nav>

    </header>

    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('panel.dashboard')}}"
                           aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Anasayfa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('panel.profile')}}"
                           aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Profilim</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('panel.basicTable')}}"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Kullanıcı Tablosu</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.logout')}}"
                           aria-expanded="false">
                            <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                            <span class="hide-menu">Çıkış Yap</span>
                        </a>
                    </li>




                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    @yield("content")
    <footer class="footer text-center"> 2022 © Fırat Üniversitesi Mezun Bilgi Platformu Admin Paneli <a
            href="http://www.firat.edu.tr/tr" target="_blank" style="color: #0b5ed7; font-weight: bolder">Fırat Üniversitesi</a>
    </footer>
<script src="{{asset("admin/plugins/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset("admin/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("admin/js/app-style-switcher.js")}}"></script>
<script src="{{asset("admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js")}}"></script>
<!--Wave Effects -->
<script src="{{asset("admin/js/waves.js")}}"></script>
<!--Menu sidebar -->
<script src="{{asset("admin/js/sidebarmenu.js")}}"></script>
<!--Custom JavaScript -->
<script src="{{asset("admin/js/custom.js")}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset("admin/plugins/bower_components/chartist/dist/chartist.min.js")}}"></script>
<script src="{{asset("admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js")}}"></script>
<script src="{{asset("admin/js/pages/dashboards/dashboard1.js")}}"></script>
</div>
</body>

</html>

