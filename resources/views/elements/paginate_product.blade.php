
<div class="products mb-3">
    <div class="row justify-content-center">

        @foreach ($product as $key => $pro)
        <div class="col-6 col-md-4 col-lg-4 col-xl-3 mt-2">
            <div class="product product-7 text-center">
                @if ($pro->product_quantity < 2)
                <span class="product-label label-sale">Sắp Hết Hàng</span>
                @elseif($pro->product_quantity ==0)
                <span class="product-label label-sale">Hết Hàng</span>
                @else
                <span class="product-label label-new">Mới</span>
                @endif
                <figure class="product-media">

                    <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
                        <img src="{{asset('public/upload/product/'.$pro->product_image)}}" style="height=252px !important" alt="Product image" class="product-image">
                    </a>

                    {{-- <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action --> --}}
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat" style="color:#1cc0a0;">
                        <a href="javascript:void(0)" >{{$pro->category->category_name}}</a>
                    </div><!-- End .product-cat -->
                    <div class="product-cat" style="color:#1cc0a0;">
                        <a href="javascript:void(0)" >{{$pro->category_type->category_type_name}}</a>
                    </div>
                    <h3 class="product-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">{{$pro->product_name}}</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        {{number_format($pro->product_price)}}vnđ
                    </div><!-- End .product-price -->
@php
$caculate_star = $pro->star_rating*20;
@endphp
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width:{{$caculate_star}}%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        {{-- <span class="ratings-text">( 2 Reviews )</span> --}}
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

        @endforeach
        <nav class="mt-1" style="" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
               {{$product ->links()}}
            </ul>
        </nav>
    </div><!-- End .row -->
</div><!-- End .products -->



</div>
