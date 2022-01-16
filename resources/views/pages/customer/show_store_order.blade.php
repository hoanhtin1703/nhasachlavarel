@extends('welcome')
@section('content')
<main style="margin-top:-70px" id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            News Grid Start
    *************************************-->
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div style="box-shadow: 2px 2px 20px rgba(172, 169, 169, 0.644); border-radius: 10px;padding-top:10px " class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            @if (isset($cou))


                          <h3 style="text-align:center"><a href="javascript:void(0)">Bạn Chưa có đơn hàng nào</a></h3>
                            <img style="margin-left: 35%" width="200px" src="{{asset('public/frontend/images/products/emty-cart.png')}}" alt="">
                            <br>
                            <a style="margin:0px 0px 10px 35%  " href="" class="tg-btn ">Đặt Mua Sản Phẩm</a>


                          @else
                            <div class="tg-products">
                                <div>
                                    <h3 style="text-align: center;"><span>Đơn Hàng Đã Đặt</span></h3>
                                </div>
                                <br>
                                <div>
                                  <table class="table table-striped table-inverse" ">
                                      <thead class="thead-inverse">
                                          <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình Ảnh Sản Phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Tổng tiền</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Trạng thái </th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                            @php
                                            $i = 0;
                                            $total = 0;
                                            $total_fee=0;

                                            @endphp
                                            @foreach($store_order_details as $key => $details)

                                            @php
                                            $i++;
                                            $subtotal = $details->product_price*$details->product_sales_quantity;
                                            $total+=$subtotal;

                                            $fee = str_replace('.','',$details->product_feeship);
                                            $total_fee +=$fee;
                                            // $fm_fee= number_format($total_fee,0,'.','');
                                            // $sumtotal = number_format($total,0,'','.');
                                            $sum =number_format($total_fee+$total,0,'.','.');

                                        @endphp
                                           <tr class="color_qty_{{$details->product_id}}"">
                                            <td><i>{{$i}}</i></td>
                                            <td>{{$details->product_name}}</td>
                                            <td><img src="{{asset('public/upload/product/'.$details->product->product_image)}}"" width="50px"></td>
                                            {{-- <td>@if($details->product_coupon!='no')
                                                {{$details->product_coupon}}
                                                @else
                                                Không mã
                                                @endif
                                            </td> --}}

                                            <td>

                                               {{$details->product_sales_quantity}}

                                              </td>
                                              <td>{{number_format($details->product_price ,0,',','.')}}vnđ</td>
                                              {{-- <td>{{($details->product_feeship)}}vnđ</td> --}}
                                              <td>{{number_format($subtotal ,0,',','.')}}vnđ</td>
                                              <td >
                                                <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($order_created_at))!!}</a>
                                            </td>
                                            <td >
                                                {{-- @foreach ($order as $key => $value)
                                                @endforeach --}}


                                                    @if ($details->order->order_status==1)
                                                    <a>Đang Vận Chuyển</a>
                                                    @else
                                                    <a style="color:red !important">Đã Giao Hàng</a>
                                                    @endif

                                            </td>
                                          </tr>
                                          @endforeach
                                          {{-- <tr>
                                              <td colspan="2">
                                                Tổng cộng : {{number_format($total,0,',','.')}}vnđ <br>
                                                Phí vận chuyển : {{number_format($total_fee,0,'.','.')}}vnđ</br>
                                                Tổng Thanh toán: {{$sum}}vnđ
                                            </td>

                                          </tr> --}}
                                            {{-- <tr>  @foreach ($order as $key => $ord)
                                                @endforeach
                                                <td colspan="2">
                                                    Ngày Đặt Hàng  : <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($ord->created_at))!!}</a>
                                                </td>
                                                <td colspan="5">
                                                    @if ($ord->order_status ==1)
                                                    Trạng Thái Hoá Đơn : <a href="javascript:void(0)">Đang Chờ Xử Lý</a>
                                                    @else
                                                    Trạng Thái Hoá Đơn : <a style="color:red !important" href="javascript:void(0)">Đã Giao Hàng</a>
                                                    @endif

                                                </td>

                                            </tr> --}}
                                          </tbody>
                                  </table>
                                </div>

                            </div>
                            @endif
                        </div>
                    </div>
                    @include('elements.sidebar_infocustomer')
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            News Grid End
    *************************************-->
</main>
@endsection
