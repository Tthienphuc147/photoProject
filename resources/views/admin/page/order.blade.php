@extends('admin.masterPage')
@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="user-welcome d-block d-xl-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-xl-0">
                    <h1 class="mb-1">Quản lý đơn hàng</h1>
                    <div class="row mt">
                        <div class="col-md-12">
                          <div class="content-panel">
                            <table class="table table-striped table-advance table-hover">
                              <thead>
                                <tr>
                                  <th>STT</th>
                                  <th>Tên khách hàng</th>
                                  <th>Email</th>
                                  <th>Số điện thoại</th>
                                  <th>Số lượng</th>
                                  <th>Loại đơn hàng</th>
                                  <th>Thành tiền</th>
                                  <th>Trạng thái</th>
                                  <th>Thao Tác</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($data as $key=>$item)
                                  <tr>
                                  <td >{{$key+1}}</td>
                                    <td >{{$item->ten_khach_hang}}</td>
                                    <td >{{$item->email}}</td>
                                    <td >{{$item->so_dien_thoai}}</td>
                                    <td >{{$item->quanity}}</td>
                                    <td >{{$item->name}}</td>
                                    <td >{{$item->quanity * 100000}} VNĐ</td>
                                    <td >{{$item->status_name}}
                                    </td>
                                    <td>
                                        <a href="/quantri/order/updateview/{{$item->id_order}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                                    </td>
                                  </tr>
                                  @endforeach

                              </tbody>
                            </table>
                          </div>
                          <!-- /content-panel -->
                        </div>
                        <!-- /col-md-12 -->
                      </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">

    </div>
    <!-- end row -->
</div>
@endsection

