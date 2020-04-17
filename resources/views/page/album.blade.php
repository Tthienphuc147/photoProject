@extends('masterPage')
@section('content')
<div class="block-choose-img">
    <div class="container">
        <div class="row block-upload-img">
            <div class="col-md-6 img-wall">
                <button class="btn-default BtnLarge"> Chọn hình cho tranh treo tường</button>
            </div>
            <div class="col-md-6 img-book">
                <button class="btn-default BtnLarge">Chọn hình cho book</button>
            </div>
        </div>
        <div class="row list-img">
            <div class="col-md-3">
                <div class="img-after-upload">
                    <img src="/public/home/img/elements/feedback1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-after-upload">
                    <img src="/public/home/img/elements/feedback1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-after-upload">
                    <img src="/public/home/img/elements/feedback1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-after-upload">
                    <img src="/public/home/img/elements/feedback1.jpg" alt="">
                </div>
            </div>
        </div>

    </div>

</div>
<div class="fix-order">Đặt hàng</div>

@endsection

