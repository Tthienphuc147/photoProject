@extends('admin.masterPage')
@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="user-welcome d-block d-xl-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-xl-0">
                    <h1 class="mb-1">Xin chào ADMIN</h1>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <div class="col-xxl-9 m-b-30">
            <div class="card card-statistics h-100 m-b-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Doanh số bán hàng</h4>
                    </div>
                    <div class="dropdown">
                        <select class="custom-select custom-select-sm" id="inputGroupSelect01">
                            <option selected>Quý 1</option>
                            <option value="1">Quý 2</option>
                            <option value="2">Quý 3</option>
                            <option value="3">Quý 4</option>
                        </select>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div id="crmdemo1"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xxl-3 h-100 ">
            <div class="card card-statistics h-50 m-b-30 bg-primary o-hidden">
                <div class="card-body">
                    <div class="d-flex p-3">
                        <div class="mr-2">
                            <h5 class="text-white mb-1"></h5>
                            <p class="text-white">Last invoice 12 jan</p>
                        </div>
                        <div class="ml-auto">
                            <h3 class="text-white mb-0">$8,963</h3>
                            <p class="text-white">Total earning</p>
                        </div>
                    </div>
                </div>
                <div class="apexchart-wrapper">
                    <div id="jobportaldemo6" class="chart-fit jobportaldemo6"></div>
                </div>
            </div>
            <div class="card card-statistics h-50 m-b-30 bg-pink">
                <div class="card-body">
                    <div class="d-flex p-3">
                        <div class="mr-2">
                            <h4 class="text-white mb-1">Total hours this week</h4>
                            <p class="text-white">You need 10 more hours</p>
                        </div>
                        <div class="ml-auto">
                            <h2 class="text-white">30hr</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
@endsection

