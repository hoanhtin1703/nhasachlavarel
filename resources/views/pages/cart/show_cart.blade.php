@extends('home_layout')
@section('content')
<main class="main">
<div class="container">
    <div class="page-content">
        @if(session()->has('message'))
        <div class="alert alert-primary mt-2" role="alert">
            {{ session()->get('message') }}
        </div>
    @elseif(session()->has('error'))
         <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <form action="{{URL::to('/update-cart')}}" method="post" enctype="multipart/form">
                        @csrf
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th  style="color: #1cc0a0;width: 50%;">Sản phẩm</th>
                                    <th style="color: #1cc0a0;">Giá tiền</th>
                                    <th style="color: #1cc0a0;">Số lượng</th>
                                    <th style="color: #1cc0a0;">Tổng tiền</th>
                                    <th style="color: #1cc0a0;"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(Session::get('cart')==true)
                                @php
                                $total = 0;
                                @endphp
                                @foreach(Session::get('cart') as $key => $cart)
                                    @php
                                        $subtotal = $cart['product_price']* $cart['product_quantity'] ;
                                        $total+=$subtotal;

                                    @endphp
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('public/upload/product/'.$cart['product_image'])}}" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">{{$cart['product_name']}}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{number_format($cart['product_price']).' '.'vnđ'}}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_quantity']}}" class="result" id="quantity1" name="quantity">
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">{{number_format($subtotal)}}vnđ</td>
                                    <td class="remove-col"><a class="btn-remove" href="{{URL::to('/delete-cart/'.$cart['session_id'] )}}"><i class="icon-close"></i></a></td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="total-col">Tổng Cộng</td>
                                    <td class="total-col"> {{number_format($total)}}vnđ</td>
                                </tr>
                            </tbody>
                            @else
                            <tr colspan="4">

                            <td style="text-align:right" class ="total-col">Chưa Có Sản Phẩm Nào Tại Giỏ Hàng</td>
                                {{-- class="total-col">Chưa Có Sản Phẩm Nào Tại Giỏ Hàng --}}
                            </tr>

                            @endif
                        </table><!-- End .table table-wishlist -->

                        <div class="cart-bottom">
                            <div class="cart-discount">


                                       <button class="btn btn-outline-primary-2" style="padding:10px">Xem Sản Phẩm Khác</button>
                                       <?php
                                       $customer_id = Session::get('customer_id');
                                       if($customer_id != null) {

                                       ?>

                                    <a href="{{URL::to('/checkout')}}" class="btn btn-outline-primary-2" style="padding:10px" >Thanh Toán</a>
                                       <?php
                                       }else {

                                       ?>
                                        <a href="#signin-modal" data-toggle="modal" class="btn btn-outline-primary-2" style="padding:10px" >Thanh Toán</a>
                                       <?php

                                       }
                                       ?>

                                        <!-- .End .input-group-append -->

                            </div><!-- End .cart-discount -->


                        <a style="margin-left:55% !important;:"><button class="btn btn-outline-primary-2"><span>Cập Nhật Giỏ Hàng</span><i class="icon-refresh"></i></button></a>
                    </form>
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div>
</div>
</main>
@endsection
