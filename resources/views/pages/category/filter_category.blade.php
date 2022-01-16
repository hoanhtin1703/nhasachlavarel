@extends('home_layout')
@section('content')

<main class="main">

    <div class="page-content">
        <div class="container">
            @if ($count==0)
            <div class="row" >
                <h2 style="margin-left: 40%;margin-top:20px" class="title">Chưa có sản phẩm nào cho danh mục này</h2><!-- End .title -->
            </div>
           @include('elements.side_bar_cate_catetype')
    @else
            <div class="row" >
                <h2 style="margin-left: 50%;margin-top:20px" class="title">Danh mục :{{$cate_product_name->category_name}}</h2><!-- End .title -->
            </div>
            <div class="row">

                <div class="col-lg-9">
                    <div id="table_data1">
                        @include('elements.paginate_category')
                    </div>

                </div><!-- End .col-lg-9 -->

                @include('elements.side_bar_cate_catetype')<!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        @endif
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
