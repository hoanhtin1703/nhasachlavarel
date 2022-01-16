@extends('home_layout')
@section('content')
<main class="main">
    <div class="page-content mt-2">
         <div class="container">
            @foreach ($detail_product as $key => $details)
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active ">
                              <img  width="300px"  style="margin-left:70px" src="{{asset('public/upload/product/'.$details->product_image)}}"  data-gallery="gallery" alt="Product image" >
                              </div>
                              <div class="carousel-item ">
                                <img  width="300px" style="margin-left:70px"  src="{{asset('public/upload/product/'.$details->product_image1)}}"  data-gallery="gallery" alt="Product image" >
                                </div>
                              <div class="carousel-item  ">
                               <img width="300px" style="margin-left:70px" src="{{asset('public/upload/product/'.$details->product_image2)}}"  data-gallery="gallery" alt="Product image" >
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span  style="background-color:#1cc0a0 !important;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span  style="background-color:#1cc0a0 !important;" class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span  class="visually-hidden">Next</span>
                            </button>
                          </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->
@php

    $caculate_star = $details->star_rating*20;
@endphp
                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$details->product_name}}</h1><!-- End .product-title -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width:{{$caculate_star}}%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( Lượt đánh giá :{{$count_comments}} )</a>
                            </div><!-- End .rating-container -->


                            <div class="product-price">
                               {{number_format($details->product_price)}}vnđ
                            </div><!-- End .product-price -->
                            <form action="">
                            @csrf
                            <input type="hidden" value="{{$details->product_id}}" class="cart_product_id_{{$details->product_id}}">
                            <input type="hidden" value="{{$details->product_name}}" class="cart_product_name_{{$details->product_id}}">
                            <input type="hidden" value="{{$details->product_image}}" class="cart_product_image_{{$details->product_id}}">
                            <input type="hidden" value="{{$details->product_price}}" class="cart_product_price_{{$details->product_id}}">

                            <div class="details-filter-row details-row-size">
                                <label for="qty">Số Lượng:</label>
                                <div class="product-details-quantity">
                                    <input type="number" id="qty" class="form-control cart_product_qty_{{$details->product_id}}" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                </div><!-- End .product-details-quantity -->

                            </div><!-- End .details-filter-row -->
                            <label for="" style="color:#1cc0a0">Số Lượng Trong Kho : {{$details->product_quantity}}</label>
                            <div class="product-details-action">
                                @if ($details->product_quantity==0)
                                <input type="button" disabled="disabled" value="HẾT HÀNG" class="btn-product btn-cart add-to-cart" name="add-to-cart">
                                @else
                                <input type="button" value="THÊM VÀO GIỎ HÀNG" class="btn-product btn-cart add-to-cart" data-id_product="{{$details->product_id}}" name="add-to-cart">
@endif

                                {{-- <div class="details-action-wrapper">
                                    <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                    <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                </div><!-- End .details-action-wrapper --> --}}
                            </div><!-- End .product-details-action -->
                        </form>
                            <div class="product-details-footer">
                                {{-- <div class="product-cat">
                                    <span>Category:</span>
                                    <a href="#">Women</a>,
                                    <a href="#">Dresses</a>,
                                    <a href="#">Yellow</a>
                                </div><!-- End .product-cat --> --}}
                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Share:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div>


                    <!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Mổ tả sản phẩm </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Chi tiết sản phẩm</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Đánh Giá</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">

                            <p>{!!$details->product_desc!!}</p>


                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                        <div class="product-desc-content">
                            <h3>Tên Sản Phẩm :{{$details->product_name}}</h3>
                            <h3>Danh Mục :{{$details->category->category_name}}</h3>

                            <h3>Thể Loại :{{$details->category_type->category_type_name}}</h3>
                            <ul>
                                <li><h3>Tác giả:{{($details->product_author)}}</h3></li>
                                <li><h3>Chất Liệu:{{($details->product_material)}}</h3></li>
                                <li><h3>Kích Thước:{{($details->product_size)}}</h3></li>
                                @if (($details->product_pages)!='Không')
                                <li><h3>Số trang:{{($details->product_pages)}}</h3></li>
                                @endif

                                <li><h3>Năm Xuất Bản:{!!date('Y',strtotime($details->public_date))!!}</h3></li>
                                <li><h3>Nhà Xuất Bản:{{($details->public_author)}}</h3></li>
                            </ul>


                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    {{-- <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                        <div class="product-desc-content">
                            <h3>Delivery & returns</h3>
                            <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                            We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane --> --}}
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">

                        <div class="reviews">
                                <div class="ratings">

                                    <div class="ratings-val" style="width:{{$caculate_star}}%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( Lượt đánh giá :{{$count_comments}})</a>
                            </div>
<br>
                            <div class="review" style="overflow:scroll;height: 300px ">

                                <div id=load_comment></div><!-- End .row -->
                            </div><!-- End .review -->

                           <!-- End .review -->
                        </div>
                        <!-- End .reviews -->
                        <form >
                            @csrf
                        <div class="container d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="stars">
                                       <input class="star star-5" id="star-5" value=5 type="radio" name="star" />
                                       <label class="star star-5" for="star-5"></label>
                                       <input class="star star-4"  id="star-4" value=4 type="radio" name="star" />
                                       <label class="star star-4" for="star-4"></label>
                                       <input class="star star-3" id="star-3" value=3 type="radio" name="star" />
                                       <label class="star star-3" for="star-3"></label>
                                       <input class="star star-2" id="star-2" value=2 type="radio" name="star" />
                                       <label class="star star-2" for="star-2"></label>
                                       <input class="star star-1" id="star-1"  value=1 type="radio" name="star" />
                                       <label class="star star-1" for="star-1"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="{{$details->product_id}}" class="comment_product_id">
                        <div class="form-group">
                          <label for=""><h4>Bình luận và đánh giá về sản phẩm này</h4></label>
                          <textarea class="form-control comment" name="" id="" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary sent_comment">Gửi</button>
                        </form>
                        <!-- TODO: This is for server side, there is another version for browser defaults -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->
            @endforeach
<h2 class="title text-center">Có Thể Bạn Sẽ Thích</h2>
<div class="col">
    <div class="owl-carousel carousel-equal-height owl-simple" data-toggle="owl"
    data-owl-options='{
        "nav": false,
        "dots": true,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": {
                "items":2
            },
            "480": {
                "items":2
            },
            "768": {
                "items":3
            },
            "992": {
                "items":4
            },
            "1440": {
                "items":5
            }
        }
    }'>
   <!-- End .product -->

    @foreach ($random_product as $ran)

    @php

    $caculate_star = $ran->star_rating*20;
@endphp
    <div class="product">
        <span class="product-label label-new">Mới</span>
        <figure class="product-media">

            <a href="{{URL::to('/chi-tiet-san-pham/'.$ran->product_id)}}">

                <img src="{{asset('public/upload/product/'.$ran->product_image)}}" alt="Product image" class="product-image">
            </a>
        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">
                by <a href="#">{{$ran->public_author}}</a>
            </div><!-- End .product-cat -->
            <h3 class="product-title"><a href="product.html">{{$ran->product_name}}<br></a></h3><!-- End .product-title -->
            <div class="product-price">
                {{number_format($ran->product_price)}}vnđ
            </div><!-- End .product-price -->
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width:{{$caculate_star}}%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->

            </div>
           <!-- End .product-footer -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
@endforeach
    <!--  -->
</div><!-- End .owl-carousel -->
</div>
            <h2 class="title text-center ">Sản Phẩm Liên Quan</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":4,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>
                @foreach ( $related_products as $key => $relate)
                <div class="product product-7 text-center">
                    <span class="product-label label-new">Mới</span>
                    <figure class="product-media">

                        <a href="{{URL::to('/chi-tiet-san-pham/'.$relate->product_id)}}">
                            <img width="100pxs" src="{{asset('public/upload/product/'.$relate->product_image)}}" alt="Product image" class="product-image">
                        </a>
                        <!-- End .product-action -->
                    </figure><!-- End .product-media -->
                    {{-- <div class="product-action mt-2">
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$relate->product_id)}}" class="btn-product btn-cart"><span>Xem Chi Tiết</span></a>
                    </div> --}}
                    <div class="product-body">
                        <div class="product-cat">
                            <a style="color:#1cc0a0" href="javascript:void(0)">{{$relate->category->category_name}}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="javascript:void(0)">{{$relate->product_name}}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            {{number_format($relate->product_price)}} vnđ
                        </div><!-- End .product-price -->
                        @php
                        $caculate_star_relate = $relate->star_rating*20;
                    @endphp
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: {{$caculate_star_relate}}%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            {{-- <span class="ratings-text">( 2 Reviews )</span> --}}
                        </div><!-- End .rating-container -->


                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                @endforeach
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main>
@endsection
