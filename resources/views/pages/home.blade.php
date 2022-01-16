@extends('home_layout')
@section('content')

<main class="main">
<div class="container">
<div class="row " >
<div class="col " >

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" >
        <div class="carousel-inner">
            @php
                $i=0
            @endphp

            @foreach ($banner as $bn)
            @if ($i==0)
            <div class="carousel-item  active">
            @else
            <div class="carousel-item">
                @endif
                <img src="{{asset('public/upload/product/'.$bn->banner_image)}}" alt="slider">
            </div>
            @php
            $i++;
        @endphp
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- <div class="owl-carousel carousel-equal-height owl-simple" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 10
                    }'>
                    @foreach ($banner as $bn)
                    <div>
                        <img src="{{asset('public/upload/product/'.$bn->banner_image)}}" alt="slider">
                    </div>
                    @endforeach

</div> --}}
</div>
</div>
<div class="bestseller-products bg-light pt-5 pb-5 mb-5" data-aos="fade-up"  data-aos-duration="2000" >
    <div class="block">
        <div class="block-wrapper ">
            <div class="container">
                <div class="heading heading-flex">
                    <div class="heading-left">
                        <h2 class="title">SẢN PHẨM ĐƯỢC ĐÁNH GIÁ NHIỀU NHẤT</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <a href="{{URL::to('/home-all-product')}}" class="title-link">ĐẶT MUA NGAY<i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .heading-right -->
                </div><!-- End .header-flex -->

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

                    @foreach ($product_hight as $pro_high)

                    @php

                    $caculate_star = $pro_high->star_rating*20;
                @endphp
                    <div class="product">
                        <span class="product-label label-new">Mới</span>
                        <figure class="product-media"  >
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$pro_high->product_id)}}">

                                <img src="{{asset('public/upload/product/'.$pro_high->product_image)}}"  alt="Product image" style="height:252px !important" class="product-image">
                            </a>
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                by <a href="#">{{$pro_high->public_author}}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$pro_high->product_id)}}">{{$pro_high->product_name}}<br></a></h3><!-- End .product-title -->
                            <div class="product-price">
                                {{number_format($pro_high->product_price)}}vnđ
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width:{{$caculate_star}}%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->

                            </div>
                            <div class="product-footer">
                                <!-- End .rating-container -->
                               <!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
     @endforeach
                    <!--  -->
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .block-wrapper -->
    </div><!-- End .block -->
</div>
@if ($product_sold)


    <div class="bestseller-products bg-light pt-5 pb-5 mb-5" data-aos="fade-up"  data-aos-duration="3000"  >
        <div class="block">
            <div class="block-wrapper ">
                <div class="container">
                    <div class="heading heading-flex">
                        <div class="heading-left">
                            <h2 class="title">SẢN PHẨM BÁN CHẠY</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <a href="{{URL::to('/home-all-product')}}" class="title-link">ĐẶT MUA NGAY<i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .header-flex -->

                    <div class="owl-carousel carousel-equal-height owl-simple" data-toggle="owl" data-aos-duration="2000"
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

                        @foreach ($product_sold as $pro_sold)

                        @php

                        $caculate_star = $pro_sold->star_rating*20;
                    @endphp
                        <div class="product">
                            <span class="product-label label-new">Mới</span>
                            <figure class="product-media">
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$pro_sold->product_id)}}">

                                    <img src="{{asset('public/upload/product/'.$pro_sold->product_image)}}" alt="Product image" class="product-image">
                                </a>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    by <a href="#">{{$pro_sold->public_author}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$pro_sold->product_id)}}">{{$pro_sold->product_name}}<br></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{number_format($pro_sold->product_price)}}vnđ
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
                </div><!-- End .container -->
            </div><!-- End .block-wrapper -->
        </div><!-- End .block -->
    </div><!-- End .bg-light pt-4 pb-4 -->
    @endif
    <div class="container" data-aos="fade-up"  data-aos-duration="5000">
        <div class="heading heading-flex">
            <div class="heading-left">
                <h2 class="title">SẢN PHẨM MỚI NHẤT</h2><!-- End .title -->
            </div><!-- End .heading-left -->
            <div class="heading-right">
                <a href="{{URL::to('/home-all-product')}}" class="title-link">ĐẶT MUA NGAY<i class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .header-flex -->

        <div class="row"   >
            <div class="col-xl-4">
                <div class="owl-carousel carousel-equal-height owl-simple" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 10
                    }'>
                    @foreach ( $product_new_2 as $pronew2)


                    <div class="product-big" style=" height: 375px !important;
                    ">
                        <img src="https://i.pinimg.com/564x/84/52/82/845282c953ff8859f5c98969f762446f.jpg" alt="Product image" height="100px !important" width="100px !important"class="product-image">

                        <div class="product-wrap">
                            <span class="product-label label-new">Mới</span>
                            <figure class="product-media">
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$pronew2->product_id)}}">
                                    <img src="{{asset('public/upload/product/'.$pronew2->product_image)}}" style="witdth:252px !important ;height:252px !important" alt="Product image" class="product-image">
                                </a>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat " style="color: #1cc0a0">
                                    by <a href="#">{{$pronew2->public_author}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"  style="color: #000000" ><a href="{{URL::to('/chi-tiet-san-pham/'.$pronew2->product_id)}}">{{$pronew2->product_name}} <br>.</a></h3><!-- End .product-title -->
                                <div class="product-price" style="color: #1cc0a0">
                                    {{number_format($pronew2->product_price)}}vnđ
                                </div><!-- End .product-price -->

                               <!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product-wrap -->
                    </div><!-- End .product-big -->
                    @endforeach
                   <!-- End .product-big -->
                </div><!-- End .owl-carousel -->

                <div class="mb-3 d-xl-none"></div><!-- End .mb-3 d-none -->
            </div><!-- End .col-lg-4 -->

            <div class="col-xl-8">
                <div class="block-wrapper ">
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
                                "1200": {
                                    "items":3
                                },
                                "1440": {
                                    "items":4
                                }
                            }
                        }'>
                        @foreach ($product_new as $proew)

                        @php

                        $caculate_star1 = $proew->star_rating*20;
                    @endphp
                        <div class="product">
                            <figure class="product-media">
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$proew->product_id)}}">
                                    <img src="{{asset('public/upload/product/'.$proew->product_image)}}" alt="Product image" class="product-image">
                                </a>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat" style="color: #1cc0a0">
                                    by <a href="#">{{$proew->public_author}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$proew->product_id)}}">{{$pronew2->product_name}} </a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{number_format($proew->product_price)}}vnđ
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width:{{$caculate_star1}}%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->

                                </div>
                              <!-- End .product-footer -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach
                       <!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- End .block-wrapper -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->



    <!-- End .block -->



    <!-- End .container -->


    <div class="blog-posts bg-light pt-4 pb-4" data-aos="fade-up"  data-aos-duration="5000">
        <div class="container">
            <h2 class="title">BÀI VIẾT NỔI BẬT</h2><!-- End .title-lg text-center -->

            <div class="owl-carousel owl-simple" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "items": 3,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":3
                        },
                        "1200": {
                            "items":4
                        }
                    }
                }'>
                @foreach ($blog as $bl)
                <article class="entry">
                    <figure class="entry-media">
                        <a href="{{URL::to('/show-detail-blog/'.$bl->blog_id)}}">
                            <img src="{{asset('public/upload/product/'.$bl->blog_thumnail)}}" alt="Product image" style="width:312px !important;height:312px !important" class="product-image">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta" style="color: #1cc0a0">
                            <a href="#">{{$bl->date_public}}</a>
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="{{URL::to('/show-detail-blog/'.$bl->blog_id)}}">{{$bl->blog_title}}</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content decs">
                            <p >{!!substr($bl->blog_desc,100,400)!!}...</p>
                            <a href="single.html" class="read-more">Xem Thêm...</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
                @endforeach
               <!-- End .entry -->
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .blog-posts -->

    <!-- End .cta-newsletter -->
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->

</main>
@endsection
