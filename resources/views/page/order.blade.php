@extends('masterPage')
@section('content')
<form action="">
    <div class="form-checkout">
        <div class="container">
            <!--  -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Họ và tên *</label>
                            <input type="text" class="form-control" id="firstName"
                                placeholder="Họ và tên của bạn..." value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="lastName">Số điện thoại *</label>
                            <input type="text" class="form-control" id="lastName"
                                placeholder="Số điện thoại của bạn..." value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Email </label>
                            <input type="text" class="form-control" id="firstName"
                                placeholder="Email của bạn..." value="" required="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="lastName">Tỉnh/ Thành phố *</label>
                            <input type="text" class="form-control" id="lastName"
                                placeholder="Nhập tỉnh thành phố của bạn..." value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Quận/ Huyện *</label>
                            <input type="text" class="form-control" id="firstName"
                                placeholder="Nhập quận/ huyện của bạn..." value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="lastName">Phường, xã, thị trấn *</label>
                            <input type="text" class="form-control" id="lastName"
                                placeholder="Nhập phường, xã, thị trấn..." value="" required="">
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3 text-center">
                    <button class="btn btn-primary">Hủy</button>
                    <button class="btn btn-default">Đăng</button>
                </div>
            </div>
        </div>
</form>
@endsection

