@extends('home_layout')
@section('content')

<main class="main">

    <div class="page-content">
        <div class="container">
            @if ($count==0)
            <div class="row" >
                <h2 style="margin-left: 40%;margin-top:20px" class="title">Chưa có sản phẩm nào cho thương hiệu này</h2><!-- End .title -->
            </div>
           @include('elements.side_bar_cate_catetype')
    @else
            <div class="row" >
                <h2 style="margin-left: 50%;margin-top:20px" class="title">Thương hiệu :{{$cate_type_product_name->category_type_name}}</h2><!-- End .title -->
            </div>
            <div class="row">

                <div class="col-lg-9">
                    <div id="table_data2">
                        @include('elements.paginate_category_type')
                    </div>

                </div><!-- End .col-lg-9 -->

                @include('elements.side_bar_cate_catetype')<!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        @endif
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
