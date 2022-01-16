@extends('home_layout')
@section('content')

<main class="main">
    <div class="page-content">
        <div class="container">
            <div class="row" >
                <h2 style="margin-left: 40%;margin-top:20px" class="title">Kết quả tìm kiếm được là</h2><!-- End .title -->
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="products mb-3">
                        <div class="row justify-content-center">
                            @foreach ($product as $key => $pro)

                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 mt-2">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                            <img src="{{asset('public/upload/product/'.$pro->product_image)}}" alt="Product image" class="product-image">
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
                                        <h3 class="product-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}"> {{$pro->product_name}}</a></h3><!-- End .product-title -->
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
                        </div><!-- End .row -->
                    </div><!-- End .products -->


                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                           {{$product ->links()}}
                        </ul>
                    </nav>
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Bộ Lọc Tìm Kiếm :</label>
                            {{-- <a href="#" class="sidebar-filter-clear">Clean All</a> --}}
                        </div><!-- End .widget widget-clean -->
                      <!-- End .widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Danh Mục
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">

                                        <div class="filter-item">

                                            @foreach ($cate_product as $key => $cate)



                                                <div >

                                                <label ><a href="{{URL::to('/show-category-home/'.$cate['category_id'])}}">{{$cate['category_name']}}</a></label>
                                                </div>


                                            <!-- End .custom-checkbox -->
                                            @endforeach

                                        </div><!-- End .filter-item -->

                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                                    Loại Sản Phẩm
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">

                                            @foreach ($cate_type_product as $key => $cate_type)

                                            <div >
                                                <label ><a href="{{URL::to('/show-category-type-home/'.$cate_type['category_type_id'])}}">{{$cate_type['category_type_name']}}</a></label>
                                                </div><!-- End .custom-checkbox -->
                                            @endforeach
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
