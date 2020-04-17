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
                                    <li> <a href='calendar-full.html'>Danh sách đơn hàng</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-image"></i><span class="nav-title">Quản lý ảnh</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách ảnh bìa</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới ảnh bìa</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-user"></i><span class="nav-title">Người quản lý</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Danh sách nhân viên</a> </li>
                                    <li> <a href='calendar-list.html'>Thêm mới nhân viên</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-world"></i><span class="nav-title">Cầu hình trang web</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Quản lý</a> </li>
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
