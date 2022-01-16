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
                        <li class="tg-active">Đăng Nhập</li>
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


                        <form class="tg-formtheme tg-formcontactus " action="{{URL::to('/login-member')}}" method="post">
                           {{ csrf_field() }}
                           <?php
                         $message=Session::get('massage');
                       if($message){
                           Session::put('massage',null);
                           echo'  <div class=" alert alert-danger ">';

                           echo $message;

                           echo'</div>';
                       }
                       ?>
                            <div class="form-group">
                              <label for="">Địa Chỉ Email</label>
                              <input type="email" name="customer_email" id="" class="form-control" placeholder="Địa Chỉ Email" aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Mật Khẩu</label>
                                <input type="password" name="customer_password" id="" class="form-control" placeholder="Mật khẩu" aria-describedby="helpId">

                              </div>

                                  <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >
                                              Nhớ Đăng Nhập
                                            </label>
                                          </div>
                                      </div>

                                      <div class="col-md-4">
                                       <a href="">Quên mật khẩu ?</a>
                                      </div>
                                  </div>

                             <button style="width: 100% !important;" class="btn btn-success "> Đăng Nhập</button>
                        </form>
                        <div class="tg-contactdetail">
                            <div class="tg-sectionhead">
                                <h2>Bạn chưa có tài khoản</h2><br>
                                <a href="{{URL::to('/register-checkout')}}">Đăng ký ngay</a>
                                <br>
                                <ul class="tg-socialicons">
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                </ul>
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
