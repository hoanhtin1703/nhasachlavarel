@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><button onclick="return false" class="btn btn-primary">Danh sách sản phẩm đã bán</button></h3>
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
                                <th>Ngày giờ</th>
                                <th></th>
                                <th>Trạng Thái</th>

                            </tr>
                        </thead>
                        <tbody style="text-align:center">
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

                                        <td>{!!date('d/m/Y',strtotime($order->order->created_at))!!}</td>
                                        <td  style="text-align: center"> <a href="{{URL::to('/view-order/'.$order->order_code)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xem Chi Tiết" ><i style="color: rgb(7, 9, 107)" class="far fa-eye"></i></a></td>

                                        <td><span class="badge bg-danger">Đã Bán</span></td>
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
