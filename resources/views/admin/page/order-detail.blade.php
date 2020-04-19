@extends('admin.masterPage')
@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <form action="/quantri/order/update" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <input type="hidden" placeholder="" name="id" class="form-control" value='{{$data->id_order}}'>
            <div class="form-checkout form-checkout-admin">
                <p class="title-checkout .title-checkout-admin ">Thông tin đơn hàng</p>
                <div class="contain-attr">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p class="title-order">Đơn hàng</p>
                            <div class="row detail-order">
                                <div class="col-md-12 mb-3 quality">
                                    Bộ ảnh tranh treo tường
                                </div>

                            </div>
                            <div class="row ">
                                @foreach ($dataImage as $item)
                                <div class="col-md-4 d-flex flex-column mt-2 ml-2 align-content-center">
                                    <img src="/{{$item->image_url}}" alt="" width="80px" height="80px" class="mt-2">
                                    <a href="/{{$item->image_url}}" download class="mt-2"><button class="btn btn-sm btn-success" type="button">Download</button></a>
                                </div>
                                @endforeach



                            </div>
                            <div class="row detail-order mt-2">
                                <div class="col-md-3 mb-3 quality">
                                    <span class="font-weight-bold">Số lượng</span>: {{$data->quanity}}
                                </div>
                                <div class="col-md-9 mb-3 price text-right">
                                    <span class="font-weight-bold">Thành tiền</span>: {{$data->quanity * 100000}} vnd
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mb-3 offset-md-1">
                            <p class="title-address-order">Thông tin đơn hàng</p>
                            <div class="address-order">
                                <p class="mt-2"><span class="font-weight-bold">Tên khách hàng: </span> {{$data->ten_khach_hang}}</p>
                                <p class="mt-2"><span class="font-weight-bold">Số điện thoại: </span>{{$data->so_dien_thoai}}</p>
                                <p class="mt-2"><span class="font-weight-bold">Địa chỉ gửi hàng: </span>{{$data->location}}</p>
                                <p class="mt-2"><span class="font-weight-bold">Trạng thái đơn hàng</span></p>
                                <select value="{{$data->status}}" name="status" id="" class="select-status">
                                    <option  value="{{$data->status}}">{{$data->status_name}}</option>
                                    @foreach ($dataStatus as $item)
                                    <option  value="{{$item->id}}">{{$item->status_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-dark-gray">Cập nhật trạng thái</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@endsection

