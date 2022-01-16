<?php

use App\Http\Controllers\HomeController;
// Front-end
Route::get('/','App\Http\Controllers\HomeController@index');
// Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/home-all-product','App\Http\Controllers\HomeController@show_product');
Route::get('/danh-muc-san-pham/{category_type_id}','App\Http\Controllers\CategoryType@show_category_type_home');
Route::get('/chi-tiet-san-pham/{product_ID}','App\Http\Controllers\ProductController@detail_product');
Route::get('/show-blog-home','App\Http\Controllers\HomeController@show_blog');
Route::get('/show-detail-blog/{id}','App\Http\Controllers\HomeController@show_detail_blog');
Route::post('/search_info_product','App\Http\Controllers\HomeController@search_info');
Route::post('/load-comment','App\Http\Controllers\HomeController@load_comment');
Route::post('/sent-comment','App\Http\Controllers\HomeController@send_comment');
Route::post('/auto-complete-ajax','App\Http\Controllers\HomeController@auto_complete');
Route::get('pagination/fetch_data', 'App\Http\Controllers\HomeController@fetch_data');
Route::get('pagination/fetch_data_cate', 'App\Http\Controllers\HomeController@fetch_data_cate');
Route::get('pagination/fetch_data_cate_type', 'App\Http\Controllers\HomeController@fetch_data_cate_type');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::get('/introduce', 'App\Http\Controllers\HomeController@introduce');
Route::post('/send-contact','App\Http\Controllers\HomeController@send_contact');


// Admin Crud
Route::post('/update-admin','App\Http\Controllers\AdminController@update_admin');
Route::post('/update-customer-admin','App\Http\Controllers\AdminController@update_customer');
Route::post('/store-admin','App\Http\Controllers\AdminController@store_admin');
Route::post('/store-customer','App\Http\Controllers\AdminController@store_customer');
Route::post('/delete-admin/{id}','App\Http\Controllers\AdminController@delete_admin');
Route::post('/delete-customer/{id}','App\Http\Controllers\AdminController@delete_customer');
// Back-end
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/show-customer','App\Http\Controllers\AdminController@show_customer');
Route::get('/show-profile-admin/{id}','App\Http\Controllers\AdminController@show_profile');
Route::get('/show-profile-customer/{id}','App\Http\Controllers\AdminController@show_profile_customer');
Route::get('/dashboard','App\Http\Controllers\AdminController@showdashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/show-sold-product','App\Http\Controllers\OrderController@view_soldproduct');
Route::get('/show-new-order','App\Http\Controllers\OrderController@view_new_order');
// Category (Danh Mục Sản Phẩm)
Route::get('/show-category','App\Http\Controllers\CategoryProductController@showCategory');
Route::get('/add-category','App\Http\Controllers\CategoryProductController@addcatogory');
Route::post('/save-category','App\Http\Controllers\CategoryProductController@saveCategory');
Route::get('/edit_category/{category_ID}','App\Http\Controllers\CategoryProductController@editCategory');
Route::get('/delete_category/{category_ID}','App\Http\Controllers\CategoryProductController@deleteCategory');
Route::post('/update-category/{category_ID}','App\Http\Controllers\CategoryProductController@updateCategory');
Route::get('/unactive-category/{category_ID}','App\Http\Controllers\CategoryProductController@unactive_Category');
Route::get('/active-category/{category_ID}','App\Http\Controllers\CategoryProductController@active_Category');
Route::get('/search-category','App\Http\Controllers\CategoryProductController@showCategory');
Route::get('/show-category-home/{category_ID}','App\Http\Controllers\CategoryProductController@show_category_home');
Route::post('/export-csv','App\Http\Controllers\AdminController@export_csv');
// Category Type (Loại Sản Phẩm)
Route::get('/show-category_type','App\Http\Controllers\CategoryType@showCategory_type');
Route::get('/add-category_type','App\Http\Controllers\CategoryType@addCategory_type');
Route::post('/save-category_type','App\Http\Controllers\CategoryType@saveCategory_type');
Route::get('/edit_category_type/{category_type_ID}','App\Http\Controllers\CategoryType@editCategory_type');
Route::get('/delete_category_type/{category_type_ID}','App\Http\Controllers\CategoryType@deleteCategory_type');
Route::post('/update-category_type/{category_type_ID}','App\Http\Controllers\CategoryType@updateCategory_type');
Route::get('/unactive-category_type/{category_type_ID}','App\Http\Controllers\CategoryType@unactive_Category_type');
Route::get('/active-category_type/{category_type_ID}','App\Http\Controllers\CategoryType@active_Category_type');
Route::get('/search-category-type','App\Http\Controllers\CategoryType@showCategory_type');
Route::get('/show-category-type-home/{category_type_ID}','App\Http\Controllers\CategoryType@show_category_type_home');
// Prodcut ( Sản Phẩm)
Route::get('/show-product','App\Http\Controllers\ProductController@show_Product');
Route::get('/add-product','App\Http\Controllers\ProductController@add_Product');
Route::post('/save-product','App\Http\Controllers\ProductController@save_Product');
Route::get('/edit_product/{product_ID}','App\Http\Controllers\ProductController@edit_Product');
Route::get('/delete_product/{product_ID}','App\Http\Controllers\ProductController@delete_Product');
Route::post('/update-product/{product_ID}','App\Http\Controllers\ProductController@update_Product');
Route::get('/unactive-product/{product_ID}','App\Http\Controllers\ProductController@unactive_Product');
Route::get('/active-product/{product_ID}','App\Http\Controllers\ProductController@active_Product');
Route::get('/search','App\Http\Controllers\ProductController@show_Product');
// Cart (Giỏ Hàng)
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-cart/{sessionID}','App\Http\Controllers\CartController@delete_cart');
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');
Route::post('/add-cart-ajax', 'App\Http\Controllers\CartController@add_cart_ajax');


// Check-out (Thanh Toán)
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::get('/register-checkout','App\Http\Controllers\CheckoutController@login_register');
Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('/save-checkout','App\Http\Controllers\CheckoutController@save_checkout');
Route::post('/login-member','App\Http\Controllers\CheckoutController@login_member');
Route::post('/select-delivery-home','App\Http\Controllers\CheckoutController@select_delivery_home');
Route::post('/calculate-fee','App\Http\Controllers\CheckoutController@calculate_fee');
Route::get('/del-fee','App\Http\Controllers\CheckoutController@del_fee');
Route::post('/select-feeship-home','App\Http\Controllers\CheckoutController@select_feeship_home');
Route::post('/select-single-feeship-home','App\Http\Controllers\CheckoutController@select_single_feeship_home');
Route::post('/confirm-order','App\Http\Controllers\CheckoutController@confirm_order');
Route::post('/register','App\Http\Controllers\CheckoutController@register_customer');
Route::post('/check-counpon','App\Http\Controllers\CheckoutController@check_counpon');
Route::post('/select-single-counpon','App\Http\Controllers\CheckoutController@select_single_counpon');

// Delivery
Route::get('/show-delivery','App\Http\Controllers\DeliveryController@show_delivery');
Route::post('/select-delivery','App\Http\Controllers\DeliveryController@select_delivery');
Route::post('/insert-delivery','App\Http\Controllers\DeliveryController@insert_delivery');
Route::post('/select-feeship','App\Http\Controllers\DeliveryController@select_feeship');
Route::post('/update-delivery','App\Http\Controllers\DeliveryController@update_delivery');
//  Order
Route::get('/order','App\Http\Controllers\OrderController@manage_order');
Route::get('/view-order/{ordercode}','App\Http\Controllers\OrderController@view_order');
Route::post('/update-qty','App\Http\Controllers\OrderController@update_qty');
Route::post('/update-order-qty','App\Http\Controllers\OrderController@update_order_qty');

// Customer
Route::post('/update-profile','App\Http\Controllers\CustomerController@update_proflie');
Route::get('/info/{cus_id}','App\Http\Controllers\CustomerController@show_info');
Route::get('/show-order/{cus_id}','App\Http\Controllers\CustomerController@show_order');
Route::get('/show-store-order/{cus_id}','App\Http\Controllers\CustomerController@show_store_order');
// Counpon (Mã Giảm Giá)
Route::get('/show-add-counpon','App\Http\Controllers\CounponController@show_add_counpon');
Route::get('/show-counpon','App\Http\Controllers\CounponController@show_counpon');
Route::get('/edit-counpon/{cou_id}','App\Http\Controllers\CounponController@edit_counpon');
Route::post('/add-counpon','App\Http\Controllers\CounponController@add_counpon');
Route::post('/update-counpon','App\Http\Controllers\CounponController@update_counpon');
Route::post('/delete-counpon/{id}','App\Http\Controllers\CounponController@delete_counpon');
// Commnent
Route::get('/show-comment','App\Http\Controllers\CommentController@show_comment');
Route::get('/native-comment/{comment_ID}','App\Http\Controllers\CommentController@native_comment');
Route::get('/unnative-comment/{comment_ID}','App\Http\Controllers\CommentController@unnative_comment');
Route::get('/delete-comment/{comment_ID}','App\Http\Controllers\CommentController@delete_comment');
//Blog(Bài viết)
Route::get('/add-blog','App\Http\Controllers\BlogController@add_blog');
Route::get('/show-blog','App\Http\Controllers\BlogController@show_blog');
Route::get('/edit-blog/{blog_id}','App\Http\Controllers\BlogController@edit_blog');
Route::post('/add-blog-ajax','App\Http\Controllers\BlogController@add_blog_ajax');
Route::post('/update-blog','App\Http\Controllers\BlogController@update_blog');
Route::get('/delete-blog/{blog_id}','App\Http\Controllers\BlogController@delete_blog');
Route::get('/native-blog/{blog_id}','App\Http\Controllers\BlogController@native_blog');
Route::get('/unnative-blog/{blog_id}','App\Http\Controllers\BlogController@unnative_blog');
Route::get('/native-highlight/{blog_id}','App\Http\Controllers\BlogController@native_highlight');
Route::get('/unnative-highlight/{comblog_idment_ID}','App\Http\Controllers\BlogController@unnative_highlight');
// Banner
Route::get('/add-banner','App\Http\Controllers\BannerController@add_banner');
Route::get('/show-banner','App\Http\Controllers\BannerController@show_banner');
Route::get('/edit-banner/{banner_id}','App\Http\Controllers\BannerController@edit_banner');
Route::post('/save-banner','App\Http\Controllers\BannerController@save_banner');
Route::post('/update-banner','App\Http\Controllers\BannerController@update_banner');
Route::get('/delete-banner/{banner_id}','App\Http\Controllers\BannerController@delete_banner');
Route::get('/native-banner/{banner_id}','App\Http\Controllers\BannerController@native_banner');
Route::get('/unnative-banner/{banner_id}','App\Http\Controllers\BannerController@unnative_banner');
//Quản lý nhân viên
// Route::get('/add-banner','App\Http\Controllers\BannerController@add_banner');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------s------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/','HomeController@index');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/trangchu', function () {
//     return view('welcome');
// });
