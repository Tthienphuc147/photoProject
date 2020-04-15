<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/img/favicon.ico') }}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/css/vendors.css') }}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/css/style.css') }}" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{ asset('/public/assets/img/loader/loader.svg') }}" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            @include('admin.block.header')
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Quản lý</li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-user"></i><span class="nav-title">Khách hàng</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách khách hàng</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới khách hàng</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-receipt"></i><span class="nav-title">Gia hạn web trọn gói</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách gia hạn web</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-soundcloud"></i><span class="nav-title">Hosting</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách hosting</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới hosting</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-server"></i><span class="nav-title">Tên miền</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách tên miền</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới tên miền</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-clipboard"></i><span class="nav-title">Fanpage</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách Fanpage</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới Fanpage</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-facebook"></i><span class="nav-title">Quảng cáo Facebook</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách quảng cáo FB</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-google"></i><span class="nav-title">Quảng cáo Google</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách quảng cáo Google</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-world"></i><span class="nav-title">Website</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách thông tin quản lý</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    @yield('content')
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->

            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="{{ asset('/public/assets/js/vendors.js') }}"></script>

    <!-- custom app -->
    <script src="{{ asset('/public/assets/js/app.js') }}"></script>
</body>


</html>
