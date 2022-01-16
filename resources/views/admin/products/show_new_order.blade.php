@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><button onclick="return false" class="btn btn-primary">Đơn Hàng Mới</button></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered" id="Table1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã Đơn Hàng</th>
                                <th>Tên Khách Hàng</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Ảnh Sản Phẩm</th>
                                <th>Giá Tiền</th>
                                <th>Số Lượng</th>
                                <th>Trạng Thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                        @foreach ($order1 as $order )
                        @php
                        $i++;
                    @endphp
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td scope="row">{{$order->order_code}}</td>
                                        <td scope="row">{{$order->customer->customer_name}}</td>
                                        <td scope="row">{{$order->product_name}}</td>
                                        <td><img src="public/upload/product/{{ $order->product->product_image }}" height="100" width="100"></td>
                                        <td scope="row">{{number_format($order->product_price)}}vnđ</td>
                                        <td scope="row">{{$order->product_sales_quantity}}</td>
                                        <td><span class="badge bg-success">Đơn Hàng Mới</span></td>
                                        <td><a  href="{{URL::to('/view-order/'.$order->order_code)}}" class="btn btn-info">Duyệt </a></td>
                                        {{-- <td scope="row">{{}}</td> --}}

                                        {{-- $order_code1 = Order::where('order_status',2)->get(); --}}
                        {{-- @foreach ($coupon as $coupon1)

                          @if ($order->product_counpon == $coupon1['counpon_code'])
                               <td>{{$coupon1['price_discount']}}</td>
                          @endif
                        @endforeach --}}


                                    </tr>

                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->

                  </div>
                  <!-- /.card -->


                  <!-- /.card -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
        </div>
    </section>
</div>
@endsection
