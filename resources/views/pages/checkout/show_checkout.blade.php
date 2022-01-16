@extends('home_layout')
@section('content')
<main class="main">

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
             <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
               @if (Session::get('cart') && Session::get('customer_id'))


                    <div class="row">
                        <div class="col-lg-9">
                        <div class="form-group">
                         <strong><span style="color:red">*</span>Thông Tin Vận Chuyển (Hãy kiểm tra thông tin Của mình . Nếu có sai xót có thể đổi thông tin <a href="{{URL::to('/info/'.Session::get('customer_id'))}}">tại đây</a>)</strong>
                        </div>

                            <!-- End .checkout-title -->
                            <form id="send_order">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <strong>Họ và tên</strong>

                                        <input type="text" value="{{$customer->customer_name}}" class="form-control shipping_name" required name="shipping_name">
                                    </div><!-- End .col-sm-6 -->

                                   <!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <strong>Địa Chỉ Email </strong>
                                <input type="text" value="{{$customer->customer_email}}" class="form-control shipping_email">
                                @if(Session::get('fee'))
                                <input type="hidden" name="order_fee" class="order_fee" name="shipping_email" value="{{Session::get('fee')}}">
                            @endif
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form>
                                            @csrf
                                        <div class="form-group">
                                            <strong>Chọn Thành Phố </strong>

                                            <select class="form-control choose city" name="city" id="city">
                                                <option value="">--Chọn tỉnh thành phố--</option>
                                                @foreach($city as $key => $ci)
                                                <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <strong>Chọn Quận Huyện</strong>

                                            <select class="form-control province choose" name="province"
                                                id="province">
                                                <option value="">--Chọn quận huyện--</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <strong>Chọn Phường Xã</strong>

                                            <select class="form-control wards" name="wards" id="wards">
                                                <option value="">--Chọn xã phường--</option>
                                            </select>
                                        </div>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                                <strong>Địa Chỉ Thường Trú</strong>

                                <input type="text" value="{{$customer->customer_address}}" name="shipping_address" class="form-control shipping_address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <strong>Số Điện Thoại</strong>

                                        <input type="text" value="{{$customer->customer_phone}}" class="form-control shipping_phone" name="shipping_phone" required>
                                    </div><!-- End .col-sm-6 -->

                                    <!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                                <strong>Ghi Chú Về Đơn Hàng </strong>

                                <textarea class="form-control shipping_notes" cols="30" rows="4" name="shipping_notes" placeholder="Điền Nội Dung Ghi Chú Về Đơn Hàng"></textarea>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                @if (Session::get('cart'))
                                @php
                                $total = 0;
                                @endphp
                                <h3 class="summary-title">Chi Tiết Đơn Hàng</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Sản Phẩm</th>
                                            <th>Tổng Tiền</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach (Session::get('cart') as $key => $cart)

                                        @php
                                        $fee_defaul = 30000;
                                        $subtotal = $cart['product_price']* $cart['product_quantity'] ;
                                        $total+=$subtotal;
                                        $calculate = $total + $fee_defaul;

                                        @endphp

                                        <tr>
                                            <td><a href="#">{{$cart['product_name']}} x {{$cart['product_quantity']}}</a></td>
                                            <td>{{ number_format($subtotal,0,'.','.')}}vnđ</td>
                                        </tr>
                                        @endforeach
                                        <tr class="summary-subtotal">
                                            <td>Tổng Cộng:</td>
                                            <td><span id="total">{{ number_format($total,0,'.','.') }}</span>vnđ</td>
                                        </tr>

                                       <!-- End .summary-subtotal -->
                                       <div style="display: none" id= load_single_counpon></div>
                                       <div style="display: none" id= load_single_feeship></div>
                                       <tbody id="load_feeshiping">
                                    </tbody>
                                       @if (Session::get('fee')==null)

                                    <div>
                                     <tr  id="nt" class="summary-total">
                                        <td>Thành Tiền:</td>
                                        <td>{{ number_format($calculate,0,'.','.')}}vnđ</td>
                                    </tr>
                                </div>
                                       @endif

<tr >
<td colspan="3">
    <form>
        @csrf
    <div class="cart-discount">
            <div class="input-group">
                <input type="text" class="form-control fee_counpon" required placeholder="Nhập Mã Giảm Giá">
                <div class="input-group-append">
                    <a style="height:40px !important;" class="btn btn-outline-primary-2 get_counpon" type="submit"><i class="icon-long-arrow-right"></i></a>
                </div><!-- .End .input-group-append -->
            </div><!-- End .input-group -->
    </div>

</form>
</td>



</tr>

                                        <tr>
                                            <td><input class="btn btn-primary calculate_delivery "
                                                type="button" value="Tính Phí Vận Chuyển"></td>
                                            <td></td>
                                        </tr>

                                    </form><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <div class="accordion-summary" id="accordion-payment">
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <h2 class="card-title">
                                                <a role="button" class="payment_select" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" at="1">
                                                  Thanh Toán Bằng Tiền Mặt
                                                  {{-- <input type="hidden" class="payment_select" value="1"> --}}
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-1" class="collapse show " aria-labelledby="heading-1" data-parent="#accordion-payment"  >
                                            <div class="card-body" style="color: #1cc0a0">
                                                Kiện Hàng Sẽ Nhanh Chóng Giao Đến Bạn. Vui Lòng Liên Hệ Với Shipper Để Thanh Toán Trực Tiếp
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                </div><!-- End .accordion -->
                                {{-- <input style="width: 100%" type="button" value="Thanh Toán" name="send_order" class="tg-btn tg-active send_order"> --}}
                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block send-order " name="send_order">
                                    <span class="btn-text">Đơn Hàng Của Bạn</span>
                                    <span class="btn-hover-text">Thanh Toán</span>
                                </button>
                                </form>
                                @else
                                <img style="margin-left: 35%" width="200px" src="{{asset('public/frontend/images/products/emty-cart.png')}}" alt="">
                                @endif
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                    @else
                    <h2 class="text text-center">Bạn chưa có sản phẩm nào để thanh toán</h2>
                    <img style="margin-left:auto;margin-right:auto" width="200px" src="{{asset('public/frontend/images/products/emty-cart.png')}}" alt="">
              <a style="margin-left:45%;margin-right:auto" href="{{URL::to('/home-all-product')}}" class="btn btn-primary">Đặt Mua Ngay</a>
                    @endif
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main>
@endsection
