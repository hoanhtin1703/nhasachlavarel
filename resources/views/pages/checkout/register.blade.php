@extends('welcome')
@section('content')
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/parallax/bgparallax-07.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>Xin Chào</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Trang Chủ</a></li>
                        <li class="tg-active">Đăng Ký</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- login --}}
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            Contact Us Start
    *************************************-->
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-contactus">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <img src="{{('public/frontend/images/flogo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="{{('public/frontend/images/comingsoon-bg.jpg')}}" alt="">
                    </div>
                   
                    <div style="border: 1px solid rgba(102, 101, 101, 0.11);box-shadow: 10px 1px 1px rgba(102, 101, 101, 0.062) ;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        
                   
                        <form  action="{{URL::to('/add-customer')}}" method="post" >
                            {{csrf_field() }}
                            <div class="form-group">
                              <label for="">Tên Đăng Nhập</label>
                              <input type="text" name="customer_Name" id="" class="form-control" placeholder="Tên Đăng Nhập" aria-describedby="helpId">
                      
                            </div>
                            <div class="form-group">
                                <label for="">Mật Khẩu</label>
                                <input type="password" name="customer_Password" id="" class="form-control" placeholder="Mật khẩu" aria-describedby="helpId">
                        
                              </div>
                              <div class="form-group">
                                <label for="">Email </label>
                                <input type="email" name="customer_Email" id="" class="form-control" placeholder="Địa Chỉ Email" aria-describedby="helpId">
                        
                              </div>
                              <div class="form-group">
                                <label for="">Số Điện Thoại</label>
                                <input type="text" name="customer_Phone" id="" class="form-control" placeholder="Số Điện Thoại" aria-describedby="helpId">
                        
                              </div>
                              
                            
                             <button type="submit" style="width: 100% !important;" class="btn btn-danger "> Đăng Ký</button>
                        </form>
                        <div class="tg-contactdetail">
                            <div  class="tg-sectionhead">
                                <br>    
                                <h2>Bạn đã có tài khoản</h2>
                                <br><br>
                               <a href="{{URL::to('/login-checkout')}}"><button style="width: 100% !important;" class="btn btn-success "> Đăng Nhập</button></a>
                            
                            </div>
                          
                           
                               
                              
                          
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Contact Us End
    *************************************-->
</main>
@endsection