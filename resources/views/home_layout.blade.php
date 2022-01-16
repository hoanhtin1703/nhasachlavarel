<!DOCTYPE html>
<html lang="en">


<!-- molla/index-20.html  22 Nov 2019 10:01:15 GMT -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BESTIE - SHOP BÁN SÁCH</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/newfrontend/assets/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/newfrontend/assets//favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/newfrontend/assets//favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    {{-- <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css"> --}}
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/skins/skin-demo-20.css')}}">
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/demos/demo-20.css')}}">
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/plugins/nouislider/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/newfrontend/assets/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
<style>

    .header-bottom .menu.sf-arrows>li>.sf-with-ul::after {
    right: 0 !important;
}
.product {

    border:none !important;

}
.discount{
    width: 30px !important !
}
div.stars {
    width: 270px;
    display: inline-block
}

.mt-200 {
    margin-top: 200px
}

input.star {
    display: none
}

label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #4A148C;
    transition: all .2s
}

input.star:checked~label.star:before {
    content: '\f005';
    color: #FD4;
    transition: all .25s
}

input.star-5:checked~label.star:before {
    color: #FD4;
    text-shadow: 0 0 20px rgba(245, 244, 244, 0.151)
}

input.star-1:checked~label.star:before {
    color: rgba(255, 100, 34, 0.562)
}

label.star:hover {
    transform: rotate(-15deg) scale(1.3)
}

label.star:before {
    content: '\f006';
    font-family: FontAwesome
}
.result p:hover{
background-color: #1cc0a0;
color: #fff !important;

}
.result p:hover >a{

color: #fff !important;

}


.menu1  li >a:hover{
    background-color: #1cc0a0;
    color: #fff ;
}
/* .decs p,a,h1,h2,h3,h4,h5,h6{
font-size:15px !important;
font-style: normal !important;
font-weight: 500 !important;
} */

</style>
</head>

<body>

    <div class="page-wrapper">
        <header class="header header-12">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <a href="tel:#"><i class="icon-phone"></i>Call: 0936153997</a>
                        </div><!-- End .header-left -->


                    </div><!-- End .container -->
                </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{URL::to('/')}}" class="logo">
                            <img src="{{asset('public/newfrontend/assets/images/demos/demo-20/BB8E3572-A716-422E-972F-5DA6F045D6A9-removebg-preview.png')}}" alt="Molla Logo" width="150" height="50">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="{{URL::to('/search_info_product')}}" method="post" autocomplete="off">
                              @csrf
                                <div style="position: relative;"  class="header-search-wrapper search-wrapper-wide">

                                    <input type="search" class="form-control" name="search_info" id="keyword" placeholder="Tìm Kiếm Sản Phẩm ..." required>


                                    {{-- <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Departments</option>
                                            <option value="1">Fashion</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Men</option>
                                            <option value="4">- Jewellery</option>
                                            <option value="5">- Kids Fashion</option>
                                            <option value="6">Electronics</option>
                                            <option value="7">- Smart TVs</option>
                                            <option value="8">- Cameras</option>
                                            <option value="9">- Games</option>
                                            <option value="10">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="12">- Cars and Trucks</option>
                                            <option value="15">- Boats</option>
                                            <option value="16">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom --> --}}
                               <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>



                            </div><!-- End .header-search-wrapper -->

                                <div  class="result" ></div>



                            </form>

                        </div><!-- End .header-search -->

                        <div class="header-dropdown-link">
                           <!-- End .compare-dropdown -->
{{--
                            <div class="wishlist">
                                <a href="wishlist.html" title="Wishlist">
                                    <div class="icon">
                                        <i class="icon-heart-o"></i>
                                        <span class="wishlist-count badge">3</span>
                                    </div>

                                </a>
                            </div><!-- End .compare-dropdown --> --}}
                            @if (Session::get('customer_id'))
                            <div class="account">
                                <a href="{{URL::to('/info/'.Session::get('customer_id'))}}"title="Tài Khoản">
                                    <div class="icon">
                                 <i style="margin-left: 20px" class="icon-user"></i>
                                 <p style="color: #1cc0a0 ; font-size:13px">{{Session::get('customer_name')}}</p>
                                   </div>
                                </a>
                        </div>
                            @else
                            <div class="account">
                                <a href="#signin-modal" data-toggle="modal"title="Tài Khoản">
                                    <div class="icon">
                                 <i class="icon-user"></i>
                                 <p>Tài Khoản</p>
                                   </div>
                                </a>
                        </div>
                            @endif

                            @if (Session::get('cart')==null)
                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <div class="icon">
                                        <i class="icon-shopping-cart"></i>
                                        <p>Giỏ Hàng</p>
                                        <span class="cart-count">0</span>

                                    </div>
                                    {{-- <p>Cart</p> --}}
                                </a>

<div class="dropdown-menu dropdown-menu-right">
       <!-- End .product -->
<h5 style="color:#1cc0a0">Bạn Chưa Có Sản Phẩm Trong Giỏ Hàng</h5>
        <!-- End .product -->
</div>
</div>
@else
@php
$total = 0;
@endphp
@foreach(Session::get('cart') as $key => $cart)
    @php
        $subtotal = $cart['product_price']* $cart['product_quantity'] ;
        $total+=$subtotal;

    @endphp
    @endforeach
<div class="dropdown cart-dropdown">
    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        <div class="icon">
            <i class="icon-shopping-cart"></i>
            <p>Giỏ Hàng</p>
            <span class="cart-count">{{count(Session::get("cart"))}}</span>
        </div>
        {{-- <p>Cart</p> --}}
    </a>
<div class="dropdown-menu dropdown-menu-right">
    <div class="dropdown-cart-products">
        @foreach (Session::get('cart') as $key => $value)
        <div class="product">
            <div class="product-cart-details">
                <h4 class="product-title">
                    <a href="javascript::void(0)" title="">{{$value['product_name']}}</a>
                </h4>

                <span class="cart-product-info">
                    <span class="cart-product-qty">{{$value['product_quantity']}}</span>
                   x {{number_format($value['product_price'])." ".'vnđ'}}
                </span>
            </div><!-- End .product-cart-details -->

            <figure class="product-image-container">
                <a href="product.html" class="product-image">
                    <img src="{{asset('public/upload/product/'.$value['product_image'])}}" alt="product">
                </a>
            </figure>
            {{-- <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a> --}}
        </div><!-- End .product -->
@endforeach
       <!-- End .product -->
    </div><!-- End .cart-product -->
<p><a href=""></a></p>
    <div class="dropdown-cart-total">
        <span>Tổng</span>

        <span class="cart-total-price">{{number_format($total).' '.'vnd'}}</span>
    </div><!-- End .dropdown-cart-total -->

    <div class="dropdown-cart-action">
        <a href="{{URL::to('/show-cart')}}" class="btn btn-primary"> Giỏ Hàng</a>
                <?php
                $customer_id = Session::get('customer_id');
                if($customer_id != null) {

                ?>
                <a href="{{URL::to('/checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>

                <?php
                }else {

                ?>
                 <a href="#signin-modal" data-toggle="modal" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>

                <?php

                }
                ?>

    </div><!-- End .dropdown-cart-total -->
</div>
</div>
@endif

                                <!-- End .dropdown-menu -->

                            <!-- End .cart-dropdown -->

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div style="background-color: #333; display: flex; width: 100%;">
                        <div class="header-left">
                            <div class="dropdown category-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                   DANH MỤC SẢN PHẨM
                                </a>

                                <div class="dropdown-menu">
                                    <nav class="side-nav">
                                        <ul class="menu-vertical sf-arrows menu1">
                                            @foreach ($cate_product as $cate)


                                            <li class="item-lead"><a href="{{URL::to('/show-category-home/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>

                                            @endforeach
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div>

                        <div class="header-center">

                            <nav class="main-nav">
                                <ul style="margin-right: 50x !important;" class="menu sf-arrows">

                                    <li>
                                        <a href="{{URL::to('/home-all-product')}}" >Sản Phẩm</a>
                                    </li>
                                      <!-- End .megamenu megamenu-md -->

                                    <li>

                                        <a href="{{URL::to('/introduce')}}">Giới Thiệu</a>

                                    </li>

                                    <li>
                                        <a href="{{URL::to('/show-blog-home')}}" >Blog </a>


                                    </li>
                                    <li>
                                        <a href="{{URL::to('/contact')}}" >Liên Hệ</a>


                                    </li>
                                    @if (Session::get('customer_id'))
                                    <li>
                                        <a href="{{URL::to('/checkout')}}" >Thanh Toán</a>

                                    </li>
                                    @else
                                    <li>
                                        <a  href="#signin-modal" data-toggle="modal" >Thanh Toán</a>
                                    </li>

                                    @endif

                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div>
                        <div class="header-right">
{{--
                            <i class="icon-phone"></i>   <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</p>
                            <a href="tel:#">HOTLINE:0936153997 </a> --}}
                            <i class="icon-phone"></i> </i><p>HOTLINE:0936153997</p>
                    </div>

                       <!-- End .header-right -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

{{-- Main --}}
@yield('content')
        <!-- End .main -->

        <footer class="footer footer-2">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-12 col-lg-6 col-xl-5">
	            			<div class="widget widget-about">
                                <img src="{{asset('public/newfrontend/assets/images/demos/demo-20/BB8E3572-A716-422E-972F-5DA6F045D6A9-removebg-preview.png')}}" alt="Molla Logo" width="150" height="50">
	            				<p>Chỉ có sách mới cho ta biết tới sự thật, cái đẹp hoàn mỹ và tình yêu". "Sách là một phép thuật di động độc đáo"... Có rất nhiều những câu nói hay về sách và có lẽ chẳng từ ngữ nào có thể diễn tả được hết tầm quan trọng, lợi ích, giá trị của những cuốn sách. Hãy cùng chúng tôi tham khảo một vài câu nói hay về sách dưới đây để cùng cảm nhận bạn nhé. </p>


	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-lg-6 col-xl-7">
                            <div class="row">
        	            		<div class="col-sm-4">
        	            			<div class="widget">
        	            				<h4 class="widget-title">Thông Tin Về Chúng Tôi</h4><!-- End .widget-title -->

        	            				<ul class="widget-list">
        	            					<li><a href="about.html">Về BESTIE SHOP</a></li>
        	            					<li><a href="#">Chính Sách Bảo Mật</a></li>
        	            					<li><a href="faq.html">Điều Khoản Và Dịch Vụ</a></li>
        	            					<li><a href="contact.html">Liên Hệ</a></li>

        	            				</ul><!-- End .widget-list -->
        	            			</div><!-- End .widget -->
        	            		</div><!-- End .col-sm-4 col-lg-3 -->

        	            		<div class="col-sm-4">
        	            			<div class="widget">
        	            				<h4 class="widget-title">Hỗ Trợ</h4><!-- End .widget-title -->

        	            				<ul class="widget-list">
        	            					<li><a href="#">Hotline:0936153997</a></li>
        	            					<li><a href="#">Cách Thức Đặt Hàng</a></li>
        	            					<li><a href="#">Các Câu Hỏi Thường Gặp</a></li>
        	            					<li><a href="#">Chính Sách Đổi Trả</a></li>

        	            				</ul><!-- End .widget-list -->
        	            			</div><!-- End .widget -->
        	            		</div><!-- End .col-sm-4 col-lg-3 -->

        	            		<div class="col-sm-4">
        	            			<div class="widget">
        	            				<h4 class="widget-title">Tài Khoản</h4><!-- End .widget-title -->

        	            				<ul class="widget-list">
        	            					<li><a href="login.html">Đăng Nhập</a></li>
        	            					<li><a href="cart.html">Xem Giỏ Hàng</a></li>
        	            					<li><a href="wishlist.html">Xem Hồ Sơ</a></li>

        	            					<li><a href="#">Hỗ Trợ</a></li>
        	            				</ul><!-- End .widget-list -->
        	            			</div><!-- End .widget -->
        	            		</div><!-- End .col-sm-4 col-lg-2 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-6 col-xl-7 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2021 BETIES LIBRARY SHOP.</p><!-- End .footer-copyright -->
	        		<!-- End .footer-menu -->

	        		<div class="social-icons social-icons-color">
	        			<span class="social-label">Social Media</span>
    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button  style="background-color: #1cc0a0 !important;" id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">Elements</a>
                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Đăng Nhập</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Đăng Ký</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form id="login">
                                        @csrf
                                        <div class="form-group">
                                            <label for="singin-email"> Địa Chỉ Email *</label>
                                            <input type="email" class="form-control" class="email" id="singin-email" placeholder="Nhập emmail của bạn tại đây" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" class="pass" id="singin-password" placeholder="Nhập Password của bạn tại đây" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button style="width:100%;text-decoration: none"  type="submit" class="btn btn-primary login">
                                                <span>Đăng Nhập</span>
                                            </button>

                                            {{-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox --> --}}

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <div class="alert alert-primary print-error-msg" style="display:none" role="alert">
                                        <ul></ul>
                                      </div>
                                    <form action="#" id = "registration">
                                        @csrf
                                        <div class="form-group">
                                            <label for="register-email">Tên Đăng Nhập*</label>
                                            <input type="text" class="form-control"  placeholder="Điền Tên Đăng Nhập" name="user" >
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Địa Chỉ Email</label>
                                            <input type="email" class="form-control"  placeholder="Điền Địa Chỉ Email" name="email" >
                                        </div>
                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control"  placeholder="Điền Password" name="password" id="password" >
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Số Điện Thoại*</label>
                                            <input type="text" class="form-control"  placeholder="Số Điện Thoại" name="phone">
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2 btn-submit">
                                                <span>Đăng Ký</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>


                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->


    <!-- Plugins JS File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://lh3.googleusercontent.com/EK-im4kae8Y_hTbayM-dpaShdqMHhRJsBQgxP7QuM8TRpHcAXEcFGkWk0X2sSBWwvCAcwzCbMg-dyWYN14IshWS7Q6-b9j8OmQ4IlZNJdIY0FGGd7DdtkP0iYtZIa9QvLvbQBS7JafEVLeGXG0GAuWkf8t1VYZNnUtceV6hGCnrCqy2_E0u9q4p7eMeC5hH4Cbca4r6A_xy5x-ksHyjyWI4a6Fb54parVLSxNnrE7PGEysyJz9uvpwTDRQg3Y3GX9OQ_OTwC740R7OBs97adjLzuWTihabECZbg3yIOeHFETb6mXXBi5nfSbpzOVI96Ex0rfryp64wFggiIdh0Atk6hw7LkwWlonpjh3pVTzJ6U-pWAgbrONeUPZT_DtDyZEE-lBlkh5npZ_u8V8MKDC6ccvffKPKSS1mKM3pGsqC9Cb7PsvHPmx5xwvuDSFSPFrYR54vguS56RV3x_AFHsdZSdTu5H0BAKFkCXk4FI0Pae2ViE1WXJ6XNclaZWoHg_fKe1SzMmnAsqvjZC2JpzFKSUbtPF9KIczuHMJP2HHgo1S_vQx31t_Kh_DpOgMPxQ64bUQBN68NWzPkzDsSUhWDFa9jXv3Q8wrYaEgz5rjatyOvYtnsgFp9k_WGoVwa-dOaFYZPeJB3Taa0FmA7k6bwUcpfH8EbyIr6BNbql0N7-wXD8onUDGzaFuNlQbgL0cNTpRYVHIjDCb6oXAF0VRS4BE=w49-h52-no?authuser=0" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
    <script src="{{asset('public/newfrontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/owl.carousel.min.js')}}"></script>
    {{-- <script src="{{asset('public/newfrontend/assets/js/jquery.magnific-popup.min.js')}}"></script> --}}
    <script src="{{asset('public/newfrontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/nouislider.min.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/wNumb.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/jquery.elevateZoom.min.js')}}"></script>

    <!-- Main JS File -->
    <!-- Main JS File -->
    <script src="{{asset('public/newfrontend/assets/js/main.js')}}"></script>
    <script src="{{asset('public/newfrontend/assets/js/demos/demo-20.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>

<script src="{{asset('public/newfrontend/assets/js/aos.js')}}"></script>

<script>
    AOS.init();
  </script>
{{-- đănng nhập --}}
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('submit', '#login', function(event) {
    event.preventDefault();
        var email = $("input[name='singin-email']").val();
        var password = $("input[name='singin-password']").val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url : '{{url('/login-member')}}',
                method: 'POST',
                data:{email:email,password:password,_token:_token},
                success:function(response){
                    if (response ==1) {
                        swal("Đăng Nhập Thành Công!", "", "success");
                        window.setTimeout(function(){
                                    window.location.href = "{{url('/')}}"
                                    } ,1000);
                    }else{
                        swal("Xin Lỗi!", "Có gì đó không đúng xin mời thử lại!", "error");
                    }
                 }

        })
      })
  });

</script>
{{-- Thêm giỏ hàng --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('.add-to-cart').click(function(){
            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_quantity = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();
            console.log(cart_product_quantity);
            $.ajax({
                url: '{{url('/add-cart-ajax')}}',
                type: "POST",
                data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_quantity,_token:_token},
                success: function(){

                    swal({
                            title: "Thêm vào giỏ hàng thành công",
                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                            type: 'success',
                            showCancelButton: true,
                            cancelButtonText: "Xem tiếp",
                            cancelButtonClass: "btn btn-info",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Đi đến giỏ hàng",
                            closeOnConfirm: false,
                        },
                        function() {
                            window.location.href = "{{url('/show-cart')}}";

                        });

                }

            });
        });
    });
</script>
{{-- đăng ký --}}
<script>
 $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var user = $("input[name='user']").val();
            var email = $("input[name='email']").val();
            var password = $("input[name='password']").val();
            var phone = $("input[name='phone']").val();

            $.ajax({
                url: "{{url('/register')}}",
                type:'POST',
                data: {_token:_token, user:user, email:email, password:password, phone:phone},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        swal("Đăng Ký Thành Công!", "", "success");
                        window.setTimeout(function(){
                                    window.location.href = "{{url('/')}}"
                                    } ,800);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
{{-- Chọn Tỉnh Thành  --}}
<script>

    $(document).ready(function(){

        $('.choose').on('change',function(){
    var action = $(this).attr('id');
    var ma_id = $(this).val();
    var _token = $('input[name="_token"]').val();
    var result = '';

    // alert(action);
    //  alert(matp);
    //   alert(_token);

    if(action=='city'){
        result = 'province';
    }else{
        result = 'wards';
    }
    $.ajax({
        url : '{{url('/select-delivery-home')}}',
        method: 'POST',
        data:{action:action,ma_id:ma_id,_token:_token},
        success:function(data){
           $('#'+result).html(data);
        //    calculate_delivery();


        }

    });

});


    })
</script>
{{-- Tính Phí Vận CHuyển --}}
<script>
    $(document).ready(function(){
        fetch_single_counpon()
        fetch_delivery();
        fetch_single_delivery();
        function fetch_delivery(){
    var _token = $('input[name="_token"]').val();
     $.ajax({
        url : '{{url('/select-feeship-home')}}',
        method: 'POST',
        data:{_token:_token},
        success:function(data){
           $('#load_feeshiping').html(data);

        }
    });
}

function fetch_single_delivery(){
    var _token = $('input[name="_token"]').val();
     $.ajax({
        url : '{{url('/select-single-feeship-home')}}',
        method: 'POST',
        data:{_token:_token},
        success:function(data){
           $('#load_single_feeship').html(data);

        }
    });
}
  $('.calculate_delivery').click(function(){
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var total =  document.getElementById('total').innerHTML;
        //    var total= x.toFixed(3);
            var _token = $('input[name="_token"]').val();

            if(matp == '' && maqh =='' && xaid ==''){
                swal("Cảnh Báo!", "Làm ơn chọn để tính phí vận chuyển!", "warning");
            }else{
                $.ajax({
                url : '{{url('/calculate-fee')}}',
                method: 'POST',
                data:{matp:matp,maqh:maqh,xaid:xaid,total:total,_token:_token},
                success:function(){

                    fetch_delivery();
                    fetch_single_delivery();
                    $('#nt').css("display","none");
                    fetch_single_counpon()

                }

                });
            }
    });

$('.get_counpon').click(function(){
var fee_coupon = $('.fee_counpon').val();
var _token = $('input[name="_token"]').val();
$.ajax({
url : '{{url('/check-counpon')}}',
method: 'POST',
data: {fee_coupon:fee_coupon,_token:_token},
success: function (response) {
    if(response == 1)
    {
        swal("Chú ý!!","Mã Giảm Giá Của Bạn Không Đúng","warning")
    }else{
    fetch_delivery();
    fetch_single_delivery();
    $('#nt').css("display","none");

    }
}

})
})
function fetch_single_counpon(){
    var _token = $('input[name="_token"]').val();
     $.ajax({
        url : '{{url('/select-single-counpon')}}',
        method: 'POST',
        data:{_token:_token},
        success:function(data){
           $('#load_single_counpon').html(data);

        }
    });
}
});
</script>
{{-- Đặt hàng --}}
<script>
    $(document).ready(function(){
        $(".send-order").click(function(e){
            e.preventDefault();
            swal({
            title: "Xác nhận đơn hàng",
            text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Cảm ơn, Mua hàng",
              cancelButtonText: "Đóng,chưa mua",
              closeOnConfirm: false,
              closeOnCancel: false
          },
          function(isConfirm){
               if (isConfirm) {
                  var shipping_email = $('.shipping_email').val();
                  var shipping_name = $('.shipping_name').val();
                  var shipping_address = $('.shipping_address').val();
                  var shipping_phone = $('.shipping_phone').val();
                  var shipping_notes = $('.shipping_notes').val();
                  var shipping_method = $('.payment_select').attr('at');
                  var order_fee =  document.getElementById('load_single_feeship').innerHTML;
                  var order_counpon =  document.getElementById('load_single_counpon').innerHTML;
                //   var order_fee= x.toFixed(3);
                //   var order_coupon = $('.order_coupon').val();
                  var _token = $('input[name="_token"]').val();

                  var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();

                  $.ajax({
                      url: '{{url('/confirm-order')}}',
                      method: 'POST',
                      data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,shipping_method:shipping_method,matp:matp,maqh:maqh,xaid:xaid,order_counpon:order_counpon},
                      success:function(){
                         swal("Đơn hàng", "Đặt Hàng Thanh Công", "success");

                         window.setTimeout(function(){
                                    window.location.href = "{{url('/show-cart')}}"
                                    } ,800);

                        },
                        error:function(){
                            swal("Chú Ý !", "Vui Lòng Điền Đầy Đủ Thông Tin ", "error");
                        }

                  });




                } else {
                  swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                }

          });
        })
    })

</script>
{{-- đánh giá bình luận --}}
<script>
    $(document).ready(function() {
        load_comment();
function load_comment(){
    var _token = $('input[name="_token"]').val();
    var comment_product_id=  $('.comment_product_id').val();
    $.ajax({
url  : '{{url('/load-comment')}}',
method: 'POST',
data:{comment_product_id:comment_product_id,_token:_token},
success: function(data){
$('#load_comment').html(data);
}
})

}
$('.sent_comment').click(function(e){
    e.preventDefault()
    var comment = $('.comment').val();
    var _token = $('input[name="_token"]').val();
    var comment_product_id=  $('.comment_product_id').val();
    if(!$('input[name="star"]:checked').val()){
       var star =0;
    }
    else{
        var star = $('input[name="star"]:checked').val()
    }
    $.ajax({
url  : '{{url('/sent-comment')}}',
method: 'POST',
data:{comment_product_id:comment_product_id,comment:comment,_token:_token,star:star},
success:function(data){
    swal("Xin cảm ơn","Đánh giá của bạn đang được kiểm duyệt","success")
    load_comment();
    $('.comment').val('');

}
    })
})
    })
</script>
{{-- Tìm kiếm --}}
<script>
        $(document).ready(function(){
        $('#keyword').keyup(function(){
            var query = $(this).val();
            if(query!= ''){
                var _token = $('input[name="_token"]').val();
               $.ajax({
                url : '{{url('/auto-complete-ajax')}}',
                method: 'POST',
                data:{query:query,_token:_token},
                success:function(data){
                    $('.result').fadeIn();
                    $('.result').html(data);

                }
                })
            }
            else{
                $('.result').fadeOut();
            }


        })


        $(document).on('click','.search_result',function(){
            $('#keyword').val($(this).text());

            $('.result').fadeOut();

        });
    })
</script>
<script>
    $(document).ready(function(){

     $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);

     });

     function fetch_data(page)
     {
      $.ajax({
          method:'GET',
          url:"{{url('/pagination/fetch_data?page=')}}"+page,
       success:function(data)
       {
        $('#table_data').html(data);
       }
      });
     }

    });
    </script>
    {{-- Phân trang --}}
<script>
    $(document).ready(function(){

     $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);

     });

     function fetch_data(page)
     {
         var cate_id = $('#cate_id').val();
      $.ajax({

          method:'GET',
          url:"{{url('/pagination/fetch_data_cate?page=')}}"+page,
          data: {'cate_id':cate_id},
       success:function(data)
       {
        $('#table_data1').html(data);
       }
      });
     }

    });
    </script>
    <script>
        $(document).ready(function(){

         $(document).on('click', '.pagination a', function(event){
          event.preventDefault();
          var page = $(this).attr('href').split('page=')[1];
          fetch_data(page);

         });

         function fetch_data(page)
         {
             var cate_type_id = $('#cate_type_id').val();
          $.ajax({

              method:'GET',
              url:"{{url('/pagination/fetch_data_cate_type?page=')}}"+page,
              data: {'cate_type_id':cate_type_id},
           success:function(data)
           {
            $('#table_data2').html(data);
           }
          });
         }

        });
        </script>
        {{-- Gửi Góp ý --}}
        <script>
            $(document).ready(function(){
                $('.btn-contact').click(function(e){
                    e.preventDefault();
                    var  name = $('#name').val();
                    var  email = $('#email').val();
                    var  phone = $('#phone').val();
                    var  subject = $('#subject').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                    method:'POST',
                    url:'{{url('/send-contact')}}',
                    data: {name:name,email:email,phone:phone,subject:subject,_token:_token,_token
                },
                    success:function(data)
                    {
                        swal("Cảm ơn bạn đã đóng góp ý kiến cho chúng tôi!", "", "success");
                      $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                     $('#subject').val('');

                    }
                    });
                })
            })
        </script>
        {{-- Đổi mật khẩu --}}
        <script>
            $(document).ready(function(){
                $('.save-profile').click(function(e){
                    e.preventDefault();
                    var id = $('#id').val();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var address = $('#address').val();
                    var phone = $('#phone').val();
                    var _token = $('input[name="_token"]').val();
                    var url ='{{url('/info')}}';
                    var dltUrl = url+ "/" +id;
                    $.ajax({

                    url: '{{url('/update-profile')}}',
                    method: 'POST',
                    data: {
                        name: name,
                        email: email,
                        address: address,
                        phone: phone,
                        id:id,
                        _token: _token
                    },
                    success: function(data) {
                        swal("Cập Nhật Thông Tin Thành Công!", "", "success");
                        window.setTimeout(function(){
                                    window.location.href = dltUrl
                                    } ,800);

                    }
                    })

                })
            })
        </script>
</body>


<!-- molla/index-20.html  22 Nov 2019 10:01:31 GMT -->
</html>
