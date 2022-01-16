<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Book Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/front-end.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">

	<script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

<style>
		.accordion {
  background-color: rgb(255, 254, 254);

  cursor: pointer;
  padding: 8px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;


}
.accordion >a {
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
	font-weight: 500 !important;
    line-height: 1.5 !important;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
	color: #666 !important
}
.accordion >a:hover {
    color: #77b748 !important;
}
.active1, .accordion:hover {
  background-color: rgb(255, 255, 255);
}

.accordion:after {
  content: '\2212';
  color: #666;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active1:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.tg-bestsellingbooksslider .owl-nav{
	right: 0;
	top: -86px;
	width: auto;
	float: none;
	position: absolute;
}
.tg-bestsellingbooks,
.tg-bestsellingbooks .item{
	width: 100%;
	float: left;
}
.tg-bestsellingbooks .item .tg-postbook{padding:15px 0 0;}
.tg-postbook {
	width: 100%;
	float: left;
	padding: 15px 0;
}
.tg-featureimg {
	margin: 0;
	width: 100%;
	float: left;
	overflow: hidden;
	position: relative;
}
.tg-bookimg{
	width: 100%;
	float: left;
	position: relative;
}
.tg-frontcover {
	z-index: 2;
	width: 100%;
	float: left;
	position: relative;
}
.tg-frontcover:before{
	top: 0;
	left: 0;
	z-index: 3;
	content: '';
	width: 100%;
	height: 100%;
	position: absolute;
	background:
		-moz-linear-gradient(left,
		rgba(0,0,0,0) 8%,
		rgba(0,0,0,0.1) 5%,
		rgba(0,0,0,0) 13%);
	background:
		-webkit-linear-gradient(left,
		rgba(0,0,0,0) 8%,
		rgba(0,0,0,0.1) 5%,
		rgba(0,0,0,0) 13%);
	background:
		linear-gradient(to right,
		rgba(0,0,0,0) 8%,
		rgba(0,0,0,0.1) 5%,
		rgba(0,0,0,0) 13%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#00000000',GradientType=1 );
}
.tg-backcover {
	top: 2%;
	left: 0;
	z-index: 1;
	width: 100%;
	height: 96%;
	overflow: hidden;
	background: #000;
	position: absolute;
}
.tg-backcover img {
	opacity: 0.60;
	display: block;
}
.tg-backcover:after {
	top: 4%;
	right: 3px;
	z-index: 2;
	width: 15px;
	height: 92%;
	content: '';
	position: absolute;

	background: url("{{asset('public/frontend/images/books/bookpattren.png')}}") no-repeat;
	-webkit-background-size: 100% 100%;
	-moz-background-size: 100% 100%;
	-ms-background-size: 100% 100%;
	-o-background-size: 100% 100%;
	background-size: 100% 100%;
}
.tg-bookimg img {
	width: 100%;
	height: auto;
	display: block;
}
.tg-postbook:hover .tg-featureimg { padding: 9px 13px 9px 0; }
.tg-postbook:hover .tg-bookimg {
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transform: perspective(1000px) rotateY(-30deg) rotateZ(0deg);
	-moz-transform: perspective(1000px) rotateY(-30deg) rotateZ(0deg);
	-ms-transform: perspective(1000px) rotateY(-30deg) rotateZ(0deg);
	-o-transform: perspective(1000px) rotateY(-30deg) rotateZ(0deg);
	transform: perspective(1000px) rotateY(-30deg) rotateZ(0deg);
}
.tg-postbook:hover .tg-backcover {left: 18px;}
.tg-featureimg .tg-btnaddtowishlist{
	bottom: 35%;
	left: 0;
	opacity: 0;
	z-index: 4;
	width: 100%;
	margin: 0 0 -17px;
	visibility: hidden;
	position: absolute;
}
.tg-postbook:hover .tg-btnaddtowishlist{
	opacity: 1;
	bottom: 50%;
	visibility: visible;
}
.tg-postbookcontent {
	width: 100%;
	float: left;
	padding: 15px 0 0;
}
.tg-bookscategories {
	width: 100%;
	float: left;
	margin: 0 0 20px;
	font-size: 13px;
	line-height: 13px;
	list-style: none;
	padding: 0 0 8px;
	border-bottom: 1px solid #dbdbdb;
}
.tg-bookscategories li {
	float: left;
	position: relative;
	padding: 0 2px 0 8px;
	line-height: inherit;
	list-style-type: none;
}
.tg-bookscategories li:first-child{padding-left: 0;}
.tg-bookscategories li + li:before {
	left: 0;
	bottom: 0;
	content: ',';
	color: inherit;
	position: absolute;
	font-size: inherit;
	line-height: inherit;
}
.tg-bookscategories li a {
	color: #666;
	display: block;
}
.tg-themetagbox{
	width: 100%;
	float: left;
	margin: 0 0 8px;
	min-height: 16px;
}
.tg-themetag {
	float: left;
	color: #fff;
	padding: 0 5px;
	font-size: 10px;
	line-height: 16px;
	position: relative;
	text-transform: uppercase;
	border-radius: 4px 0 0 4px;
}
.tg-themetag:before {
	top: 0;
	width: 0;
	height: 0;
	left: 100%;
	content: '';
	position: absolute;
	border-left: 5px solid;
	border-top: 8px solid transparent !important;
	border-bottom: 8px solid transparent !important;
}
.tg-booktitle {
	width: 100%;
	float: left;
	padding: 0 0 20px;
}
.tg-booktitle h3 {
	margin: 0;
	font-size: 16px;
	font-weight: 500;
	line-height: 19px;
}
.tg-bookwriter {
	width: 100%;
	float: left;
	font-size: 13px;
	line-height: 13px;
	padding: 0 0 6px;
}
.tg-bookwriter a {color: #666;}
.tg-bestsellingbooks .tg-postbookcontent .tg-stars {
	float: left;
	margin: 0 0 20px;
}
.tg-bookprice {
	width: 100%;
	float: left;
}
.tg-bookprice ins,
.tg-bookprice del {
	float: left;
	font: 500 18px/18px 'Work Sans', Arial, Helvetica, sans-serif;
}
.tg-bookprice del {
	color: #666;
	font-size: 13px;
	padding-left: 10px;
}
.tg-postbookcontent .tg-btn {
	width: 100%;
	margin: 20px 0 0;
}
.tg-postbook.tg-notag .tg-postbookcontent .tg-btn{margin: 44px 0 0;}
.tg-btnround{
	color: #666;
	width: 40px;
	height: 40px;
	float: left;
	overflow: hidden;
	line-height: 38px;
	text-align: center;
	border-radius: 50%;
	margin: 0 0 0 10px;
	border: 1px solid #dcdcdc;
}
.tg-btnround i {
	width: 100%;
	float: left;
	display: block;
	color: inherit;
	font-size: 10px;
	line-height: inherit;

}
.product {

  position: relative;
  z-index: 90;
}

  .ribbon {
    font: bold 15px sans-serif;
    color: #333;
    text-align: center;
    -webkit-transform: rotate(45deg);
    -moz-transform:    rotate(45deg);
    -ms-transform:     rotate(45deg);
    -o-transform:      rotate(45deg);
    position: absolute;
    padding: 7px 0;
    top: 10px;
    right: -40px;
    width: 120px;
    background-color: #77b748;
    border-radius: 5px;
    color: #fff;
    z-index: 90;
  }
  .ribbon1 {
    font: bold 15px sans-serif;
    color: #333;
    text-align: center;
    -webkit-transform: rotate(45deg);
    -moz-transform:    rotate(45deg);
    -ms-transform:     rotate(45deg);
    -o-transform:      rotate(45deg);
    position: absolute;
    padding: 7px 0;
    top: 10px;
    right: -30px;
    width: 120px;
    background-color: #f16945;
    border-radius: 5px;
    color: #fff;
    z-index: 90;

  }



</style>
	{{-- <link rel="preconnect" href="{{asset('public/frontend/https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}"> --}}
{{--
    <link rel="stylesheet" href="{{asset('public/frontend/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/app.css')}}"> --}}

	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> --}}
</head>
<body class="tg-home tg-homeone">

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addnav">
								<li>
									<a href="javascript:void(0);">
										<i class="icon-envelope"></i>
										<em>Contact</em>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icon-question-circle"></i>
										<em>Help</em>
									</a>
								</li>
							</ul>
							<div class="dropdown tg-themedropdown tg-currencydropdown">
								<a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-earth"></i>
									<span>Currency</span>
								</a>
								<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
									<li>
										<a href="javascript:void(0);">
											<i>£</i>
											<span>British Pound</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i>$</i>
											<span>Us Dollar</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i>€</i>
											<span>Euro</span>
										</a>
									</li>
								</ul>
							</div>

							<div class="tg-userlogin">
								<div class="dropdown tg-themedropdown tg-currencydropdown">
									<?php
										$customer_id = Session::get('customer_id');
										$customer_name = Session::get('customer_name');
										if($customer_id != null) {

										?>
									<a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="far fa-user"></i>
										<span> Xin Chào : <?php echo $customer_name?></span>
									</a>

										<?php
										}else {

										?>
										<a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="far fa-user"></i>
											<span> Xin Mời Đăng Nhập</span>
										</a>
										<?php

									}
									?>

									<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">

										<?php
										$customer_id = Session::get('customer_id');

										if($customer_id != null) {

										?>
                                        <li>
											<a href="{{URL::to('/info/'.$customer_id)}}">
												<i class="far fa-id-badge"></i>
												<span>Hồ Sơ</span>
											</a>
										</li>

									<li>
										<a href="{{URL::to('/logout-checkout')}}">
											<i class="fas fa-sign-out-alt"></i>
											<span>Đăng Xuất</span>
										</a>
									</li>
										<?php
										}else {

										?>
										<li>
											<a href="{{URL::to('/login-checkout')}}">
												<i class="fas fa-lock"></i>
												<span>Đăng Nhập</span>
											</a>
										</li>
										<?php

										}
										?>


									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index-2.html"><img src="{{asset('public/frontend/images/logo.png')}}" alt="company name here"></a></strong>

							<div id="quickview">
                                @if (Session::has("cart") == null)

                                <div class="tg-wishlistandcart">
                                    {{-- <div class="dropdown tg-themedropdown tg-wishlistdropdown">
                                        <a href="javascript:void(0);" id="tg-wishlisst" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="tg-themebadge">3</span>
                                            <i class="icon-heart"></i>
                                            <span>Wishlist</span>
                                        </a>
                                        <div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-wishlisst">
                                            <div class="tg-description"><p>No products were added to the wishlist!</p></div>
                                        </div>
                                    </div> --}}
                                    <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                        <a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="tg-themebadge">0</span>
                                            <i class="icon-cart"></i>
                                            <span>0vnđ</span>
                                        </a>
                                        <div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
                                            <div class="tg-description"><p>Không có sản phẩm nào trong giỏ hàng</p></div>

                                        </div>
                                    </div>
                                </div>

                                @endif

								@if(Session::has("cart") != null)
								@php
                                $total = 0;
                                @endphp
                                @foreach(Session::get('cart') as $key => $cart)
                                    @php
                                        $subtotal = $cart['product_price']* $cart['product_quantity'] ;
                                        $total+=$subtotal;

                                    @endphp
									@endforeach

									<div class="tg-wishlistandcart">
										<div class="dropdown tg-themedropdown tg-wishlistdropdown">
											<a href="javascript:void(0);" id="tg-wishlisst" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="tg-themebadge">3</span>
												<i class="icon-heart"></i>
												<span>Wishlist</span>
											</a>
											<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-wishlisst">
												<div class="tg-description"><p>No products were added to the wishlist!</p></div>
											</div>
										</div>




										<div class="dropdown tg-themedropdown tg-minicartdropdown">
											<a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@if(Session::has("cart") != null)
												<span id="total-quantity-show" class="tg-themebadge">{{count(Session::get("cart"))}}</span>

												@else
												<span id="total-quantity-show">0</span>

												@endif
												<i class="icon-cart"></i>

							       <span> {{number_format($total).' '.'vnd'}} </span>
											</a>

											<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
												<div class="tg-minicartbody">
													@foreach (Session::get('cart') as $key => $value)

													<div class="tg-minicarproduct">

														<figure>
															<img src="{{asset('public/upload/product/'.$value['product_image'])}}" width="50px" alt="image description">
														</figure>
														<div class="tg-minicarproductdata">
															<h5><a href="javascript:void(0);">{{$value['product_name']}}</a></h5>
															<h6><a href="javascript:void(0);">{{number_format($value['product_price'])." ".'vnđ'}} * {{$value['product_quantity']}}</a></h6>
														</div>

													</div>
													@endforeach


												</div>
												<div class="tg-minicartfoot">
													{{-- <a class="tg-btnemptycart" href="javascript:void(0);">
														<i class="fa fa-trash-o"></i>
														<span>Clear Your Cart</span>
													</a> --}}
													<span class="tg-subtotal">Tổng Tiền <strong>{{number_format($total).' '.'vnd'}}</strong></span>


													<div class="tg-btns">
														<a class="tg-btn tg-active" href="{{URL::to('/show-cart')}}">Xem Giỏ Hàng</a>


														<?php
															$customer_id = Session::get('customer_id');
															if($customer_id != null) {

															?>

														<a class="tg-btn tg-active" href="{{URL::to('/checkout')}}">Thanh Toán</a>
															<?php
															}else {

															?>
															 <a class="tg-btn tg-active" href="{{URL::to('/login-checkout')}}">Thanh Toán</a>
															<?php

															}
															?>
													</div>
												</div>
											</div>
										</div>
									</div>

									@endif
							</div>
							<div class="tg-searchbox">
								<form class="tg-formtheme tg-formsearch" action="{{URL::to('/search_info_product')}}" method="post">
											{{csrf_field()}}
									<fieldset>
										<input type="text" name="search_info" class="typeahead form-control" placeholder="Tìm Kiếm Sản Phẩm">
										<button type="submit"><i class="icon-magnifier"></i></button>
									</fieldset>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										{{-- <li class="menu-item-has-children menu-item-has-mega-menu">
											<a href="javascript:void(0);">All Categories</a>
											<div class="mega-menu">
												<ul class="tg-themetabnav" role="tablist">
													<li role="presentation" class="active">
														<a href="#artandphotography" aria-controls="artandphotography" role="tab" data-toggle="tab">Art &amp; Photography</a>
													</li>
													<li role="presentation">
														<a href="#biography" aria-controls="biography" role="tab" data-toggle="tab">Biography</a>
													</li>
													<li role="presentation">
														<a href="#childrensbook" aria-controls="childrensbook" role="tab" data-toggle="tab">Children’s Book</a>
													</li>
													<li role="presentation">
														<a href="#craftandhobbies" aria-controls="craftandhobbies" role="tab" data-toggle="tab">Craft &amp; Hobbies</a>
													</li>
													<li role="presentation">
														<a href="#crimethriller" aria-controls="crimethriller" role="tab" data-toggle="tab">Crime &amp; Thriller</a>
													</li>
													<li role="presentation">
														<a href="#fantasyhorror" aria-controls="fantasyhorror" role="tab" data-toggle="tab">Fantasy &amp; Horror</a>
													</li>
													<li role="presentation">
														<a href="#fiction" aria-controls="fiction" role="tab" data-toggle="tab">Fiction</a>
													</li>
													<li role="presentation">
														<a href="#fooddrink" aria-controls="fooddrink" role="tab" data-toggle="tab">Food &amp; Drink</a>
													</li><li role="presentation">
														<a href="#graphicanimemanga" aria-controls="graphicanimemanga" role="tab" data-toggle="tab">Graphic, Anime &amp; Manga</a>
													</li>
													<li role="presentation">
														<a href="#sciencefiction" aria-controls="sciencefiction" role="tab" data-toggle="tab">Science Fiction</a>
													</li>
												</ul>
												<div class="tab-content tg-themetabcontent">
													<div role="tabpanel" class="tab-pane active" id="artandphotography">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="biography">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="childrensbook">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="craftandhobbies">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="crimethriller">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fantasyhorror">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fiction">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fooddrink">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="graphicanimemanga">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="sciencefiction">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="{{asset('public/frontend/images/img-01.png')}}" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li> --}}
										<li class=" current-menu-item">
											<a href="{{URL::to('/')}}">Trang Chủ</a>

										</li>
										<li class="menu-item-has-children">
											<a href="{{URL::to('/home-all-product')}}">Sản Phẩm</a>
										</li>
										<li><a href="products.html">Sản Phẩm Bán Chạy</a></li>
										<li><a href="products.html">Tuần Lễ Siêu Sale</a></li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Tin Tức</a>
											<ul class="sub-menu">
												<li><a href="newslist.html">Tin Tức Mới</a></li>
												<li><a href="newsgrid.html">Blog</a></li>
												<li><a href="newsdetail.html">Vieo</a></li>
											</ul>
										</li>
										<li><a href="contactus.html">Liên Hệ</a></li>
										{{-- <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);"><i class="icon-menu"></i></a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="aboutus.html">Products</a>
													<ul class="sub-menu">
														<li><a href="products.html">Products</a></li>
														<li><a href="productdetail.html">Product Detail</a></li>
													</ul>
												</li>
												<li><a href="aboutus.html">About Us</a></li>
												<li><a href="404error.html">404 Error</a></li>
												<li><a href="comingsoon.html">Coming Soon</a></li>
											</ul>
										</li> --}}
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
@yield('content')
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-clientservices">
								<li class="tg-devlivery">
									<span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Nhanh Chóng</h3>
										<p>Giao Hàng Nhanh</p>
									</div>
								</li>
								<li class="tg-discount">
									<span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Giá Cả Phải Chăng</h3>
										<p>Mã Giảm Giá Mỗi Ngày</p>
									</div>
								</li>
								<li class="tg-quality">
									<span class="	tg-clientserviceicon"><i class="icon-leaf"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Chất Lượng Cao</h3>
										<p>Uy Tín - Tin Dùng</p>
									</div>
								</li>
								<li class="tg-support">
									<span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Hỗ Trợ 24/7</h3>
										<p>Giải Đáp Khách Hàng</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="tg-threecolumns">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="{{asset('public/frontend/images/flogo.png')}}" alt="image description"></a></strong>
									<ul class="tg-contactinfo">
										<li>
											<i class="icon-apartment"></i>
											<address>Khu Đô thị Đại học Đà Nẵng, Đường Nam Kỳ Khởi Nghĩa, quận Ngũ Hành Sơn, TP. Đà Nẵng</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>
												<em>0092020229</em>

											</span>
										</li>
										<li>
											<i class="icon-clock"></i>
											<span>Mở cửa 24/7</span>
										</li>
										<li>
											<i class="icon-envelope"></i>
											<span>
												<em><a href="mailto:support@domain.com">tinake@vku.udn.vn</a></em>
												<em><a href="mailto:info@domain.com">daotao@vku.udn.vn</a></em>
											</span>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgetnavigation">
									<div class="tg-widgettitle">
										<h3>Có Thể Bạn Quan Tâm</h3>
									</div>
									<div class="tg-widgetcontent">
										{{-- <ul>
											<li><a href="javascript:void(0);">Terms of Use</a></li>
											<li><a href="javascript:void(0);">Terms of Sale</a></li>
											<li><a href="javascript:void(0);">Returns</a></li>
											<li><a href="javascript:void(0);">Privacy</a></li>
											<li><a href="javascript:void(0);">Cookies</a></li>
											<li><a href="javascript:void(0);">Contact Us</a></li>
											<li><a href="javascript:void(0);">Our Affiliates</a></li>
											<li><a href="javascript:void(0);">Vision &amp; Aim</a></li>
										</ul> --}}
										{{-- <ul>
											<li><a href="javascript:void(0);">Our Story</a></li>
											<li><a href="javascript:void(0);">Meet Our Team</a></li>
											<li><a href="javascript:void(0);">FAQ</a></li>
											<li><a href="javascript:void(0);">Testimonials</a></li>
											<li><a href="javascript:void(0);">Join Our Team</a></li>
										</ul> --}}
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgettopsellingauthors">
									<div class="tg-widgettitle">
										<h3>Tác Giả</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<figure><a href="javascript:void(0);"><img src="{{asset('public/frontend/images/author/imag-09.jpg')}}" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Hồ Anh Tín</a></h4>

												</div>
											</li>
											<li>
												<figure><a href="javascript:void(0);"><img src="{{asset('public/frontend/images/author/imag-10.jpg')}}" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Tăng Thượng Phúc</a></h4>

												</div>
											</li>
											<li>
												<figure><a href="javascript:void(0);"><img src="{{asset('public/frontend/images/author/imag-11.jpg')}}" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Phạm Nguyễn Khánh Vy</a></h4>

												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-newsletter">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h4>Gửi Phản Hồi Về Cho Chúng Tôi!</h4>
							<h5>Những Lời Đóng Góp Của Bạn Là Động Lực Cho Chúng Tôi </h5>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							{{-- <form class="tg-formtheme tg-formnewsletter">
								<fieldset>
									<input type="email" name="email" class="form-control" placeholder="Điền Emmail Của Bạn">

									<button type="button"><i class="icon-envelope"></i></button>

								</fieldset>
								<div class="form-group tg-hastextarea">
									<textarea placeholder="Comment"></textarea>
								</div>
							</form> --}}
							<form class="tg-formtheme tg-formcontactus">

								<fieldset>
									<div style="width: 100%;" class="form-group">
										<input type="text" name="first-name" class="form-control" placeholder="Email ">
									</div>

									<div class="form-group tg-hastextarea">
										<textarea style="height: 100px;"></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="tg-btn tg-active">Gửi</button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="icon-chevron-up"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-paymenttype"><img src="{{asset('public/frontend/images/paymenticon.png')}}" alt="image description"></span>

						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!-- JavaScript -->

	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
	<script src="{{asset('public/frontend/js/vendor/jquery-library.js')}}"></script>
	<script src="{{asset('public/frontend/js/vendor/bootstrap.min.js')}}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.vide.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/countdown.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery-ui.js')}}"></script>
	<script src="{{asset('public/frontend/js/parallax.js')}}"></script>
	<script src="{{asset('public/frontend/js/countTo.js')}}"></script>
	<script src="{{asset('public/frontend/js/appear.js')}}"></script>
	<script src="{{asset('public/frontend/js/gmap3.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
			this.classList.toggle("active1");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			}
		  });
		}
		</script>
		<!-- <script>
			function AddCart(id){
				$.ajax({
				url:"{{url('/add-cart-ajax')}}/" +id,
				type: 'get',
				success: function(response){
				Render(response);
				swal("Đã thêm vào giỏ hàng!", "", "success");
				}
			});

			}
			function Render(response){
				$("#quickview").empty();
				$("#quickview").html(response);
			   {{-- $("#total-quantity-show").text($("#total-quantity").val()); --}}

			}
		</script> -->
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
        }
    });
});
    })
</script>
<script>
    $(document).ready(function(){
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
            var x =  Number(document.getElementById('total').innerHTML);
           var total= x.toFixed(3);
            var _token = $('input[name="_token"]').val();

            if(matp == '' && maqh =='' && xaid ==''){
                alert('Làm ơn chọn để tính phí vận chuyển');
            }else{
                $.ajax({
                url : '{{url('/calculate-fee')}}',
                method: 'POST',
                data:{matp:matp,maqh:maqh,xaid:xaid,total:total,_token:_token},
                success:function(){


                    $('#nt').css("display","none");
                    fetch_delivery();
                    fetch_single_delivery();

                }

                });
            }
    });

});
</script>
<script type="text/javascript">

    $(document).ready(function(){
      $('.send_order').click(function(){
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
                  var shipping_method = $('.payment_select').val();
                  var x =  Number(document.getElementById('load_single_feeship').innerHTML);
                  var order_fee= x.toFixed(3);
                //   var order_coupon = $('.order_coupon').val();
                  var _token = $('input[name="_token"]').val();
                  var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();

                  $.ajax({
                      url: '{{url('/confirm-order')}}',
                      method: 'POST',
                      data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,shipping_method:shipping_method,matp:matp,maqh:maqh,xaid:xaid},
                      success:function(){
                         swal("Đơn hàng", "Đặt Hàng Thanh Công", "success");

                         window.setTimeout(function(){
                                    window.location.href = "{{url('/show-cart')}}"
                                    } ,800);

                        }

                  });




                } else {
                  swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                }

          });


      });
  });


</script>
 <script type="text/javascript">
    $(document).ready(function(){
        $('.delete_delivery').click(function(){
            var _token = $('input[name="_token"]').val();
                $.ajax({
                url : '{{url('/del-fee')}}',
                method: 'GET',
                data:{_token:_token},
                success:function(){
                   location.reload();
                }
                });

    });
});
</script>
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
									title: "Đã thêm sản phẩm vào giỏ hàng",
									text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
									showCancelButton: true,
									cancelButtonText: "Xem tiếp",
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

</html>
