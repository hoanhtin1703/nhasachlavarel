
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
									
										
                                        @if(Session::has("Cart") != null)
										<div class="dropdown tg-themedropdown tg-minicartdropdown">
											<a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												@if(Session::has("Cart") != null)
												<span id="total-quantity-show" class="tg-themebadge">{{Session::get('Cart')->totalQuantity}}</span>
												
												@else 
												<span id="total-quantity-show">0</span>
												@endif
												<i class="icon-cart"></i>
												
												<span>{{number_format(Session::get('Cart')->totalPrice)." ".'Vnđ'}}</span>
											</a>
										
											<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
												<div class="tg-minicartbody">
													@foreach (Session::get('Cart')->products as $item)
													<div class="tg-minicarproduct">
													
														<figure>
															<img src="{{asset('public/upload/product/'.$item['productInfo']->product_image)}}" width="50px" alt="image description">
														</figure>
														<div class="tg-minicarproductdata">
															<h5><a href="javascript:void(0);">{{$item['productInfo']->product_name}}</a></h5>
															<h6><a href="javascript:void(0);">{{number_format($item['productInfo']->product_price)." ".'vnđ'}} * {{$item['quantity']}}</a></h6>
														</div>
														
													</div> 
													@endforeach
											
													
												</div>
												<div class="tg-minicartfoot">
													{{-- <a class="tg-btnemptycart" href="javascript:void(0);">
														<i class="fa fa-trash-o"></i>
														<span>Clear Your Cart</span>
													</a> --}}
													<span class="tg-subtotal">Tổng Tiền <strong>{{number_format(Session::get('Cart')->totalPrice)." ".'Vnđ'}}</strong></span>
													{{-- {{number_format($newCart->totalPrice).'vnđ'}} --}}
											
													<div class="tg-btns">
														<a class="tg-btn tg-active" href="javascript:void(0);">View Cart</a>
														<a class="tg-btn" href="javascript:void(0);">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endif