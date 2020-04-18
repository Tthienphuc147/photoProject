@extends('masterPageOrder')
@section('content')
<div class="container">
    <div class="form-checkout">
        <p class="title-checkout">Bạn đã đặt hàng thành công</p>
        <div class="contain-attr">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p class="title-order">Thông tin đơn hàng</p>
                    <div class="row detail-order">
                        <div class="col-md-3 mb-3 quality">
                            Số lượng: {{$data->quanity}}
                        </div>
                        <div class="col-md-9 mb-3 price text-right">
                            {{$data->quanity * 100000}} vnd
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-3 offset-md-1">
                    <p class="title-address-order">Địa chỉ nhận hàng</p>
                    <div class="address-order">
                        <p>{{$data->ten_khach_hang}}</p>
                        <p>{{$data->so_dien_thoai}}</p>
                        <p>{{$data->location}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
