@extends('masterPage')
@section('content')
 <!--================Service  Area =================-->
 <section class="service-area area-padding pad-top-0">
    <div class="container">
        <div class="area-heading">
            <h3>Hướng Dẫn <span>Đặt</span> Hàng</h3>
            <p>Chỉ gồm 4 bước đơn giản để mang về ngay sản phẩm cho mình.</p>
        </div>
        <div class="row">

            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon">
                        <span class="flaticon-leaf"></span>
                    </div>
                    <div class="service-content">
                        <h5>Bước 1</h5>
                        <p>Tải hình lên theo phong cách tùy chọn của bạn </p>
                    </div>
                </div>
            </div>

            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon">
                        <span class="flaticon-camera"></span>
                    </div>
                    <div class="service-content">
                        <h5>Bước 2</h5>
                        <p>Kéo qua lại, lên xuống để lấy khung hình ưng ý nhất </p>
                    </div>
                </div>
            </div>


            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon">
                        <span class="flaticon-send"></span>
                    </div>
                    <div class="service-content">
                        <h5>Bước 3</h5>
                        <p>Nhập địa chỉ nhận hàng và thanh toán khi nhận hoặc thanh toán Online </p>
                    </div>
                </div>
            </div>

            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon">
                        <span class="flaticon-balloon"></span>
                    </div>
                    <div class="service-content">
                        <h5>Bước 4</h5>
                        <p>Tranh sẽ được giao cho bên vận chuyển trong ngày kế tiếp để giao cho bạn </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--================About  Area =================-->
<section class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-styleBox">
                    <div class="styleBox-border">
                        <img class="styleBox-img1" src="/public/home/img/background/about1.jpg" alt="">
                    </div>
                    <img class="styleBox-img2" src="/public/home/img/background/about2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 offset-md-0 offset-lg-1">
                <div class="about-content">
                    <h4>Về <br>
                        Chúng Tôi<br>

                    </h4>
                    <p>Được thành lập từ năm 2010, với kinh nghiệm trên 20 năm về ngành thiết kế tranh dán tường
                        khu
                        vực miền Trung
                        và Tây Nguyên.</p>
                    <p>Với đội ngũ nhân viên kỹ thuật năng động, nhiệt tình, sáng tạo, nhiều kinh nghiệm, chuyên
                        môn vững vàng và tay nghề thành thạo chúng tôi cam kết sẽ đem đến cho khách hàng những
                        sản
                        phẩm và dịch vụ tốt nhất</p>

                    <a class="main_btn" href="tel:0782105516">Liên Hệ Ngay</a>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================About Area End =================-->

<!--================Testimonial section Start =================-->
<section class="bg-gray area-padding bg-1" style="margin-bottom: 50px;">
    <div class="container">
        <div class="area-heading">
            <h3>Những <span>Khách Hàng</span> Nói Gì</h3>
            <p>Feedback của khách hàng khi trải nghiệm dịch vụ chúng tôi</p>
        </div>

        <div class="owl-carousel owl-theme testimonial">
            <div class="testimonial__item">
                <div class="row">
                    <div class="col-md-4 offset-0 col-lg-4 offset-lg-l align-self-center">
                        <div class="testimonial__img">
                            <img style="object-fit: cover;" class="" width="262" height="278"
                                src="/public/home/img/elements/feedback1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="testimonial__content">
                            <h3>Văn Tú - Đà Nẵng</h3><span>/</span>
                            <h6>Project manager at IZISoft</h6>
                            <div class="testimonial_para_wrapper">
                                <p class="testimonial__i">Nhiều khi vợ chồng giận nhau, những hình ảnh gợi nhắc
                                    lại
                                    những kỷ niệm đẹp cũng làm
                                    tình hình chiến sự giảm căng thẳng.Đặc biệt dán tranh lên tường không cần
                                    đóng
                                    đinh, không cần khoan tường, quá tiện lợi</p>
                            </div>
                            <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial__item">
                <div class="row">
                    <div class="col-md-4 offset-0 col-lg-4 offset-lg-l align-self-center">
                        <div class="testimonial__img">
                            <img style="object-fit: cover;" class="" width="262" height="278s"
                                src="/public/home/img/elements/feedback1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="testimonial__content">
                            <h3>Văn Tú - Đà Nẵng</h3><span>/</span>
                            <h6>Project manager at IZISoft</h6>
                            <div class="testimonial_para_wrapper">
                                <p class="testimonial__i">Nhiều khi vợ chồng giận nhau, những hình ảnh gợi nhắc
                                    lại
                                    những kỷ niệm đẹp cũng làm
                                    tình hình chiến sự giảm căng thẳng.Đặc biệt dán tranh lên tường không cần
                                    đóng
                                    đinh, không cần khoan tường, quá tiện lợi</p>
                            </div>
                            <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial__item">
                <div class="row">
                    <div class="col-md-4 offset-0 col-lg-4 offset-lg-l align-self-center">
                        <div class="testimonial__img">
                            <img style="object-fit: cover;" class="" width="262" height="278s"
                                src="/public/home/img/elements/feedback1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="testimonial__content">
                            <h3>Văn Tú - Đà Nẵng</h3><span>/</span>
                            <h6>Project manager at IZISoft</h6>
                            <div class="testimonial_para_wrapper">
                                <p class="testimonial__i">Nhiều khi vợ chồng giận nhau, những hình ảnh gợi nhắc
                                    lại
                                    những kỷ niệm đẹp cũng làm
                                    tình hình chiến sự giảm căng thẳng.Đặc biệt dán tranh lên tường không cần
                                    đóng
                                    đinh, không cần khoan tường, quá tiện lợi</p>
                            </div>
                            <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================Testimonial section End =================-->

<!--================ start footer Area  =================-->

<!--================ End footer Area  =================-->


<a href="/album"> <div class="fix-order">Bắt đầu đặt hàng </div></a>
@endsection

