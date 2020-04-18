@extends('masterPageOrder')
@section('content')
<div class="container">
    <form action="/checkout/update" method="POST">
        {{ csrf_field() }}
        <div class="form-checkout">
            <p class="title-checkout">Nhập đầy đủ thông tin để tiến hành thanh toán</p>
            <div class="contain-attr">
                <input type="hidden" placeholder="" name="id" class="form-control" value='{{$data->id}}'>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="fullname">Họ và tên *</label>
                                <input type="text" class="form-control" id="fullname"
                                value="{{$data->ten_khach_hang}}" name="ten_khach_hang"
                                    placeholder="Họ và tên của bạn..." value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="phone">Số điện thoại *</label>
                                <input type="text" class="form-control" id="phone"
                                value="{{$data->so_dien_thoai}}" name="so_dien_thoai"
                                    placeholder="Số điện thoại của bạn..." value="" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email </label>
                                <input type="text" class="form-control" id="email"
                                value="{{$data->email}}" name="email"
                                    placeholder="Email của bạn..." value="" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="city">Tỉnh/ Thành phố *</label>
                                <select  value="{{$data->province_id}}" name="province_id" name="tinh_thanh" id="selec_addres" onchange="ajaxTinhThanhPho(this.value)" required>
                                    <?php $count = true; ?>
                                    @foreach($tinh_thanhpho as $t_tp)
                                    @if($count)
                                    <option data-display="{{$t_tp->name}}" value="{{$t_tp->province_id}}">{{$t_tp->name}}</option>
                                    <?php  $count = false;?>
                                    @else
                                    <option value="{{$t_tp->province_id}}">{{$t_tp->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="district">Quận/ Huyện *</label>
                                <div id="kq_quan_huyen">
                                    <select value="{{$data->district_id}}" name="district_id" id="selec_addres" class="required" required>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="ward">Phường, xã, thị trấn *</label>
                                <div id="kq_xa_phuong">
                                    <select value="{{$data->ward_id}}" name="ward_id" id="selec_addres" class="required" required>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3 block-address">
                        <label for="address">Địa chỉ *</label>
                        <input type="text" class="form-control" id="address"
                            placeholder="Nhập địa chỉ nhận hàng..."
                            value="{{$data->address}}" name="address"
                            placeholder="Email của bạn..." value="" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3 text-center">
                        <button class="btn btn-clear">Hủy</button>
                        <a href="./order-success.html"><button class="btn btn-submit">Thanh toán</button></a>
                    </div>
                </div>
            </div>
    </form>
</div>
<script>
	function ajaxTinhThanhPho(id_tinh_tp){
		$.ajax({
			type: "GET",
			url: 'ajax_quan_huyen/'+id_tinh_tp,
			success: function( msg ) {
				$('#kq_quan_huyen').html(msg[0]);
				$('#kq_xa_phuong').html(msg[1]);
			}
		});
	}
	function ajaxQuanHuyen(id_quan_huyen){
		$.ajax({
			type: "GET",
			url: 'ajax_xa_phuong/'+id_quan_huyen,
			success: function( msg ) {
				$('#kq_xa_phuong').html(msg);
			}
		});
	}
</script>
@endsection

