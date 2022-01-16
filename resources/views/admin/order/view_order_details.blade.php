@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
        <h2 style="text-align:center;">Thông Tin Vận Chuyển</h2>
        <div class="row mt-4">

              <div class="col">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Tên người vận chuyển</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Ghi chú</th>
                            <th>Hình thức thanh toán</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>


            <td>{{$shipping->shipping_name}}</td>
            <td>{{$shipping->shipping_address}}</td>
             <td>{{$shipping->shipping_phone}}</td>
             <td>{{$shipping->shipping_email}}</td>
             <td>{{$shipping->shipping_notes}}</td>
             <td>@if($shipping->shipping_method==0) Chuyển khoản @else Tiền mặt @endif</td>


                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
          </div>
          <br>
          <h2 style="text-align:center;">Chi Tiết Đơn Hàng</h2>
          <div class="row mt-2">
            <div class="col-12">
              <div class="card">
                <div class="card-header">


                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                          <th>STT</th>
                        <th style="width: 50px !important">Tên sản phẩm</th>
                        <th>Số lượng trong kho</th>

                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Tổng tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        $total = 0;
                        // $total_fee=0;
                        // $demo =1000000;
                        @endphp
                        @foreach($order_details as $key => $details)

                        @php
                        $i++;
                        $subtotal = $details->product_price*$details->product_sales_quantity;
                        $total+=$subtotal;
                        $coupon_fee =$counpon_price;
                        $fee = str_replace('.','',$details->product_feeship);
                        // $total_fee +=$fee;
                        // $fm_fee= number_format($total_fee,0,'.','');
                        // $sumtotal = number_format($total,0,'','.');
                        $sum =number_format($fee+$total-$coupon_fee,0,'.','.');
                        $sum_deft = $fee+$total-$coupon_fee;

                    @endphp
                      <tr class="color_qty_{{$details->product_id}}"">
                        <td><i>{{$i}}</i></td>
                        <td>{{$details->product_name}}</td>
                        <td>{{$details->product->product_quantity}}</td>
                        {{-- <td>@if($details->product_coupon!='no')
                            {{$details->product_coupon}}
                            @else
                            Không mã
                            @endif
                        </td> --}}

                        <td>
<input type="hidden" name="order_detail_id" value= "{{$details->order_details_id}}">
                            <input style="width:40px" type="number" min="1" {{$order_status==2 ? 'disabled' : ''}} class="order_qty_{{$details->product_id}}" value="{{$details->product_sales_quantity}}" name="product_sales_quantity">

                            <input type="hidden" name="order_qty_storage" class="order_qty_storage_{{$details->product_id}}" value="{{$details->product->product_quantity}}">

                            <input type="hidden" name="order_code" class="order_code" value="{{$details->order_code}}">

                            <input type="hidden" name="order_product_id" class="order_product_id" value="{{$details->product_id}}">

                           @if($order_status!=2)

                            <button style="width:100px" class="btn btn-success update_quantity_order" data-product_id="{{$details->product_id}}" name="update_quantity_order">Cập nhật</button>

                          @endif

                          </td>
                          <td>{{number_format($details->product_price ,0,',','.')}}vnđ</td>
                          <td>{{number_format($subtotal ,0,',','.')}}vnđ</td>
                      </tr>
                      @endforeach
                      <tr>
                          <td colspan="2">
                            Tổng cộng : {{number_format($total,0,',','.')}}vnđ <br>
                            Phí Giảm Giá :{{number_format($counpon_price,0,',','.')}}vnđ<br>
                            Phí vận chuyển : {{number_format($fee,0,'.','.')}}vnđ</br>
                            Thanh toán: {{$sum}}vnđ
                            <input type="hidden" name="sum"  value="{{$sum_deft}}">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                            @foreach($order as $key => $or)
                              @if($or->order_status==1)
                              <form>
                                 @csrf
                                <select class="form-select order_details">
                                  <option value="">----Chọn hình thức đơn hàng-----</option>
                                  <option id="{{$or->order_id}}" selected value="1">Chưa xử lý</option>
                                  <option id="{{$or->order_id}}" value="2">Đã xử lý-Đã giao hàng</option>

                                </select>
                              </form>
                              @elseif($or->order_status==2)
                              <form>
                                @csrf
                                <select class="form-select order_details">
                                  <option value="">----Chọn hình thức đơn hàng-----</option>
                                  <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                                  <option id="{{$or->order_id}}" selected value="2">Đã xử lý-Đã giao hàng</option>

                                </select>
                              </form>
                              @endif
                              @endforeach


                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    </section>
</div>
@endsection
