@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="http://windows79.com/wp-content/uploads/2021/02/Thay-the-hinh-dai-dien-tai-khoan-nguoi-dung-mac.png"
                           alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{$customer->customer_name}}</h3>

                    <p class="text-muted text-center">Khách hàng</p>

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">1,322</a>
                      </li>
                      <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                      </li>
                      <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                      </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->

                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Đơn hàng gần đây</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Sản Phẩm Đã Đặt</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Thông Tin Cá Nhân</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                          </div>
                          <!-- /.user-block -->
                          @if (isset($cou))


                          <h3 style="text-align:center"><a href="javascript:void(0)"> Chưa có đơn hàng nào</a></h3>
                            <img style="margin-left: 35%" width="200px" src="{{asset('public/frontend/images/products/emty-cart.png')}}" alt="">
                            <br>



                          @else
                          <div class="tg-products">
                            <div >
                                <h3 style="text-align: center;"><span>Thông Tin Vận Chuyển</span></h3>
                            </div>
                            <div>
                                <table class="table table-striped table-inverse table-responsive">
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

                            <div>
                                <h3 style="text-align: center;"><span>Chi Tiết Đơn Hàng</span></h3>
                            </div>
                            <br>
                            <div>
                              <table class="table table-striped table-inverse table-responsive">
                                  <thead class="thead-inverse">
                                      <tr>
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
                                        $total_fee=0;
                                        $demo =1000000;
                                        @endphp
                                        @foreach($order_details as $key => $details)

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
                                          @foreach ($order as $key => $ord)
                                          @endforeach
                                          <td colspan="7">
                                              <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($ord->created_at))!!}</a>
                                          </td>
                                          {{-- <td >
                                            <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($order_created_at))!!}</a>
                                        </td> --}}
                                      </tr>
                                      @endforeach
                                      <tr>
                                          <td colspan="2">
                                            Tổng cộng : {{number_format($total,0,',','.')}}vnđ <br>
                                            Phí vận chuyển : {{number_format($total_fee,0,'.','.')}}vnđ</br>
                                            Tổng Thanh toán: {{$sum}}vnđ
                                        </td>


                                        {{-- <tr>  @foreach ($order as $key => $ord)
                                            @endforeach
                                            <td colspan="7">
                                                Ngày Đặt Hàng  : <a href="javascript:void(0)">{!!date('d/m/Y',strtotime($ord->created_at))!!}</a>
                                            </td>
                                            {{-- <td colspan="5">
                                                @if ($ord->order_status ==1)
                                                Trạng Thái Hoá Đơn : <a href="javascript:void(0)">Đang Chờ Xử Lý</a>
                                                @else
                                                Trạng Thái Hoá Đơn : <a style="color:red !important" href="javascript:void(0)">Đã Giao Hàng</a>
                                                @endif

                                            </td> --}}


                                      </tbody>
                              </table>
                            </div>

                        </div>
                          @endif


                        </div>


                        <!-- /.post -->
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        @if (isset($cou))


                                            <h3 style="text-align:center"><a href="javascript:void(0)"> Chưa có đơn hàng nào</a></h3>
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
                                                 <tr>
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
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                            @csrf
                            <input type="hidden" id="id" value="{{$customer->customer_id}}">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Tên Người Dùng</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" value="{{$customer->customer_name}}" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Địa Chỉ Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" value="{{$customer->customer_email}}" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="phone" value="{{$customer->customer_phone}}" id="inputName2" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Địa Chỉ Nhà</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="address" placeholder="Địa Chỉ Nhà">{{$customer->customer_address}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Mật Khẩu</label>
                            <div class="col-sm-10">
                              <input type="text" id="password" value="{{$customer->customer_password}}" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger submit">Cập Nhật Thông Tin </button>
                              <a href="{{URL::to('show-customer')}}" class="btn btn-outline-primary">Trở về</a>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
    </section>
</div>
@endsection
