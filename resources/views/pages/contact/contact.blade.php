@extends('home_layout')
@section('content')
<main class="main container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="#">Liên Hệ</a></li>

            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('https://image.freepik.com/free-photo/book-library-with-open-textbook_1150-5924.jpg')">
            <h1 class="page-title text-white">LIÊN HỆ<span class="text-white">HÃY NÓI VỚI CHÚNG TÔI</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <h2 class="title mb-1">Thông tin liên hệ</h2><!-- End .title mb-2 -->
                    <p class="mb-3">Cuốn sách tốt nhất cho bạn là cuốn sách nói nhiều nhất với bạn vào lúc bạn đọc nó. Tôi không nói tới cuốn sách cho bạn nhiều bài học nhất mà là cuốn sách nuôi dưỡng tâm hồn bạn. Và điều đó phụ thuộc vào tuổi tác, trải nghiệm, nhu cầu về tâm lý và tinh thần.</p>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="contact-info">
                                <h3>BESTIE LIBRARY SHOP</h3>

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-map-marker"></i>
                                        470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i>
                                        <a href="tel:#">0936153997 </a>
                                    </li>
                                    <li>
                                        <i class="icon-envelope"></i>
                                        <a href="mailto:#">hatin.20it6@vku.udn..vn</a>
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-7 -->

                        <div class="col-sm-5">
                            <div class="contact-info">
                                <h3>BESTIE LIBRARY SHOP</h3>

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-clock-o"></i>
                                        <span class="text-dark">Thứ Hai-Thứ Bảy</span> <br>11am-7pm
                                    </li>
                                    <li>
                                        <i class="icon-calendar"></i>
                                        <span class="text-dark">Chủ Nhật</span> <br>11am-6pm
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-5 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-6 -->
                <div class="col-lg-6">
                    <h2 class="title mb-1">ĐẶT CÂU HỎI CỦA BẠN TẠI ĐÂY ?</h2><!-- End .title mb-2 -->
                    <p class="mb-2">HÃY ĐIỀN THÔNG TIN CỦA BẠN ĐỂ CHÚNG TÔI CÓ THỂ LIÊN LẠC VỚI BẠN</p>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        <form >
                @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Tên Của Bạn</strong>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Tên của bạn" ">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Địa Chỉ Email</strong>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" >

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Số Điện Thoại</strong>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Số điện thoại" >

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cmessage" class="sr-only">Lời Nhắn</label>
                                        <textarea class="form-control" name="subject" cols="30" rows="4" id="subject" required placeholder="Lời Nhắn Của Bạn Đến Chúng Tôi"></textarea>


                                    </div>
                                </div>

                            </div>


                            <div class="form-group text-center">
                                <button class="btn btn-success btn-contact ">Gửi</button>
                            </div>
                        </form>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <hr class="mt-4 mb-5">

            <!-- End .stores -->
        </div><!-- End .container -->
        <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.738711613717!2d108.25104871416863!3d15.975015746200757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1637770234061!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><!-- End #map -->
    </div><!-- End .page-content -->
</main>
@endsection
