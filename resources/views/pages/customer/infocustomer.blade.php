@extends('home_layout')
@section('content')
<div class="container mt-2">
    <main class="main">
        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">

@include('elements.sidebar_infocustomer')
                        <div class="col-md-10 col-lg-10">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                                    <div class="container rounded bg-white  mb-5" style="border: 1px solid rgba(75, 73, 73, 0.178) ;box-shadow: 2px 2px 5px rgba(95, 94, 94, 0.459)">
                                        <div class="row">
                                            <div class="col-md-3 border-right">
                                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png"><span class="font-weight-bold">{{$cus_info->customer_name}}</span><span class="text-black-50">{{$cus_info->customer_email}}</span><span> </span></div>
                                            </div>
                                            <div class="col-md-7 border-right">
                                                <div class="p-3 py-5">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h4 class="text-right">Hồ sơ cá nhân</h4>
                                                    </div>
                                                    <form >
                                                        @csrf
                                                         <input type="hidden" id=id value="{{$cus_info->customer_id}}">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <strong>Tên Của Bạn</strong>
                                                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$cus_info->customer_name}}" >

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <strong>Địa Chỉ Email</strong>
                                                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{$cus_info->customer_email}}" >

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <strong>Số Điện Thoại</strong>
                                                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Số Điện Thoại"  value="{{$cus_info->customer_phone}}">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <strong>Địa Chỉ:</strong>
                                                                                <input type="text" name="phone" id="address" class="form-control" placeholder="Địa Chỉ" value="{{$cus_info->customer_address}}" >

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    <div class="row m-3">

                                                        <div class="accordion accordion-icon" id="accordion-3">
                                                            <div class="card">
                                                                <div class="card-header" id="heading3-1">
                                                                    <h2 class="card-title">
                                                                        <a role="button" data-toggle="collapse" href="#collapse3-1" aria-expanded="true" aria-controls="collapse3-1">
                                                                            <i class="fas fa-user-shield"></i>Thay đổi mật khẩu
                                                                        </a>
                                                                    </h2>
                                                                </div><!-- End .card-header -->
                                                                <div id="collapse3-1" class="collapse show" aria-labelledby="heading3-1" data-parent="#accordion-3">
                                                                    <div class="card-body">
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-12"><label class="labels">Mật khẩu hiện tại</label><input type="text" class="form-control"  ></div>
                                                                            <div class="col-md-12"><label class="labels">Mật khẩu mới</label><input type="text" class="form-control"  ></div>

                                                                        </div>.
                                                                    </div><!-- End .card-body -->
                                                                </div><!-- End .collapse -->
                                                            </div><!-- End .card -->

                                                            <!-- End .card -->
                                                        </div><!-- End .accordion -->

                                                </div>
                                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button save-profile" type="button">Cập Nhật Thông Tin</button></div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                                    <div class="row">
                                        <div class="col">
                                            @if (isset($cou))


                                            <h3 style="text-align:center"><a href="javascript:void(0)"> CHƯA CÓ ĐƠN HÀNG NÀO</a></h3>
                                              <img style="margin-left: 35%" width="200px" src="{{asset('public/frontend/images/products/emty-cart.png')}}" alt="">
                                              <br>
                                              @else
                                            <div class="col-lg-12 col-sm-12">
								    			<div class="card card-dashboard">
								    				<div class="card-body">
								    					<h3 style="text-align: center" class="card-title summary-total">Thông Tin Vận Chuyển</h3><!-- End .card-title -->
								    				</div><!-- End .card-body -->
								    			</div><!-- End .card-dashboard -->
								    		</div>
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr style="text-align:center">
                                                        <th>Tên người vận chuyển</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Email</th>
                                                        <th>Ghi chú</th>
                                                        <th>Hình thức thanh toán</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                  <tr style="text-align:center">

                                                        <td>{{$shipping->shipping_name}}</td>
                                                        <td>{{$shipping->shipping_address}}</td>
                                                         <td>{{$shipping->shipping_phone}}</td>
                                                         <td>{{$shipping->shipping_email}}</td>
                                                         <td>{{$shipping->shipping_notes}}</td>
                                                         <td>@if($shipping->shipping_method==0) Chuyển khoản @else Tiền mặt @endif</td>
                                                  </tr>
                                                </tbody>
                                              </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 style="text-align: center" class="card-title summary-total">Chi Tiết Đơn Hàng</h3><!-- End .card-title -->
                                                </div><!-- End .card-body -->
                                            </div>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                  <tr style="text-align:center">
                                                    <th>STT</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Hình Ảnh Sản Phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá sản phẩm</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Ngày đặt hàng</th>
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
                                                    // // $fm_fee= number_format($total_fee,0,'.','');
                                                    // // $sumtotal = number_format($total,0,'','.');
                                                    $sum =number_format($fee+$total-$coupon_fee,0,'.','.');

                                                @endphp
                                                  <tr style="text-align:center">
                                                    <td><i>{{$i}}</i></td>
                                                  <td>{{$details->product_name}}</td>
                                                  <td ><img style="margin-left: 17px" src="{{asset('public/upload/product/'.$details->product->product_image)}}"" width="50px"></td>
                                                  {{-- <td>@if($details->product_coupon!='no')
                                                      {{$details->product_coupon}}
                                                      @else
                                                      Không mã
                                                      @endif
                                                  </td> --}}
                                                  <td>
                                                    {{$details->product_sales_quantity}}
                                                   </td>
                                                   <td > {{number_format($details->product_price ,0,',','.')}}vnđ</td>
                                                   <td >{{number_format($subtotal ,0,',','.')}}vnđ</td>
                                                   @foreach ($order as $key => $ord)

                                                   <td >
                                                       <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($ord->created_at))!!}</a>
                                                   </td>
                                                   @endforeach
                                                   @endforeach

                                                   <tr>

                                                    <td colspan="7">
                                                      Tổng cộng : {{number_format($total,0,',','.')}}vnđ <br>
                                                      Phí Giảm Giá :-{{number_format($counpon_price,0,',','.')}}vnđ<br>
                                                      Phí vận chuyển : {{number_format($fee,0,'.','.')}}vnđ</br>
                                                      Tổng Thanh toán: {{$sum}}vnđ
                                                  </td>
                                                   {{-- <td >
                                                     <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($order_created_at))!!}</a>
                                                 </td> --}}
                                               </tr>


                                                </tbody>
                                              </table>
                                              @endif
                                        </div>
                                    </div>
                                </div><!-- .End .tab-pane-->
                                <div class="tab-pane fade" id="tab-downloads" role="tabpanel" aria-labelledby="tab-downloads-link">
                                    <div class="row">
                                        <div class="col">
                                            @if (isset($cou))


                                            <h3 style="text-align:center"><a href="javascript:void(0)"> CHƯA CÓ ĐƠN HÀNG NÀO</a></h3>
                                              <img style="margin-left: 35%" width="200px" src="{{asset('public/frontend/images/products/emty-cart.png')}}" alt="">
                                              <br>
                                              @else
                                            <table class="table table-hover " id="myTable">
                                                <thead>
                                                  <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình Ảnh Sản Phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá sản phẩm</th>

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
                                                 <tr>
                                                    <td><i>{{$i}}</i></td>
                                                    <td>{{$details->product_name}}</td>
                                                    <td><img src="{{asset('public/upload/product/'.$details->product->product_image)}}" width="50px"></td>
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

                                                      <td >

                                                        <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($details->order->created_at)) !!}</a>
                                                    </td>
                                                    <td >
                                                        {{-- @foreach ($order as $key => $value)
                                                        @endforeach --}}


                                                            @if ($details->order->order_status==1)
                                                            <a style="color:#77b748 !important">Đang Vận Chuyển</a>
                                                            @else
                                                            <a style="color:red !important">Đã Giao Hàng</a>
                                                            @endif

                                                    </td>
                                                  </tr>
                                                  @endforeach
                                                </tbody>
                                              </table>
                                              @endif
                                        </div>
                                        {{-- {{$store_order_details ->links()}} --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                                    <div class="banner-group mb-2" data-aos="fade-up"  data-aos-duration="5000">
                                        <div class="container">
                                            <div class="heading heading-flex">
                                                <div class="heading-center">
                                                    <h2 class="title">MÃ GIẢM GIÁ HẰNG NGÀY</h2><!-- End .title -->
                                                </div><!-- End .heading-left -->

                                               <!-- End .heading-right -->
                                            </div>
                                            <div class="row justify-content-center">
                                                @foreach ($coupon as $cou)
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="banner banner-overlay">
                                                        <a href="javascript:void(0)">
                                                            <img src="{{asset('public/newfrontend/assets/images/demos/demo-20/ticket.png')}}" alt="Banner">
                                                        </a>

                                                        <div class="banner-content">

                                                            <h3 class="banner-title text-white" style="text-transform: uppercase; font-size:19px"><a href="#"> {{$cou->counpon_name}}<br>-{{number_format($cou->price_discount , 0, ',', '.')}}vnđ</a></h3>
                                                            <h4 class="banner-subtitle text-white" style="text-align:center;" ><a href="javascript:void(0)" class="btn btn-danger" style="background-color: #D06224 !important; text-transform: uppercase;text-align:center;">{{$cou->counpon_code}}</a></h4>
                                                            {{-- <a href="#" class="btn btn-outline-white-3 banner-link">Đặt mua ngay thôi<i class="icon-long-arrow-right"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div><!-- End .col-lg-3 -->
                                                @endforeach
                                               <!-- End .col-lg-3 -->

                                               <!-- End .col-lg-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .container -->
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                                    <p>No order has been made yet.</p>
                                    <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-downloads" role="tabpanel" aria-labelledby="tab-downloads-link">
                                    <p>No downloads available yet.</p>
                                    <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                                    <p>The following addresses will be used on the checkout page by default.</p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Billing Address</h3><!-- End .card-title -->

                                                    <p>User Name<br>
                                                    User Company<br>
                                                    John str<br>
                                                    New York, NY 10001<br>
                                                    1-234-987-6543<br>
                                                    yourmail@mail.com<br>
                                                    <a href="#">Edit <i class="icon-edit"></i></a></p>
                                                </div><!-- End .card-body -->
                                            </div><!-- End .card-dashboard -->
                                        </div><!-- End .col-lg-6 -->

                                        <div class="col-lg-6">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->

                                                    <p>You have not set up this type of address yet.<br>
                                                    <a href="#">Edit <i class="icon-edit"></i></a></p>
                                                </div><!-- End .card-body -->
                                            </div><!-- End .card-dashboard -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Last Name *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Display Name *</label>
                                        <input type="text" class="form-control" required>
                                        <small class="form-text">This will be how your name will be displayed in the account section and in reviews</small>

                                        <label>Email address *</label>
                                        <input type="email" class="form-control" required>

                                        <label>Current password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control">

                                        <label>New password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control">

                                        <label>Confirm new password</label>
                                        <input type="password" class="form-control mb-2">

                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SAVE CHANGES</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                    </form>
                                </div><!-- .End .tab-pane --> --}}
                            </div>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .dashboard -->
        </div><!-- End .page-content -->
    </main>
</div>
@endsection
