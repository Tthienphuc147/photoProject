@extends('admin.masterPage')
@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="user-welcome d-block d-xl-flex flex-nowrap align-items-center">
                <div class="bg-img mb-2 mb-xl-0 mr-3">
                    <img class="img-fluid rounded" src="/public/assets/img/avtar/06.jpg" alt="user">
                </div>
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
        <div class="col-xxl-6 m-b-30">
            <div class="card card-statistics h-100 m-b-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Total Revenue</h4>
                    </div>
                    <div class="dropdown">
                        <select class="custom-select custom-select-sm" id="inputGroupSelect01">
                            <option selected>1st Quarter</option>
                            <option value="1">2nd Quarter</option>
                            <option value="2">3rd Quarter</option>
                            <option value="3">4th Quarter</option>
                        </select>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div id="crmdemo1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-3 m-b-30">
            <div class="card card-statistics h-100 mb-0">
                <div class="card-body p-3">
                    <div class="row align-items-center mb-3">
                        <div class="col-6">
                            <h2 class="mb-0">66%</h2>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fe fe-thumbs-up text-pink font-20"></i>
                            <p class="d-block ">Project Completed</p>
                        </div>
                        <div class="col">
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-pink" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-6">
                            <h2 class="mb-0">78%</h2>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fe fe-activity text-primary font-20"></i>
                            <p class="d-block ">Project On Going</p>
                        </div>
                        <div class="col">
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-6">
                            <h2 class="mb-0">47%</h2>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fe fe-trending-up text-orange font-20"></i>
                            <p class="d-block ">Project Up coming</p>
                        </div>
                        <div class="col">
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-6">
                            <h2 class="mb-0">59%</h2>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fe fe-trash-2 text-info font-20"></i>
                            <p class="d-block ">Project Canceled</p>
                        </div>
                        <div class="col">
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 59%;" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h2 class="mb-0">85%</h2>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fe fe-trending-up text-success font-20"></i>
                            <p class="d-block ">Your efficiency</p>
                        </div>
                        <div class="col">
                            <div class="progress my-3" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-3 h-100 ">
            <div class="card card-statistics h-50 m-b-30 bg-primary o-hidden">
                <div class="card-body">
                    <div class="d-flex p-3">
                        <div class="mr-2">
                            <h5 class="text-white mb-1">Your project overview</h5>
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

