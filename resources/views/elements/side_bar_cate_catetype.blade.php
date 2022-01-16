<aside class="col-lg-3 order-lg-first">
    <div class="sidebar sidebar-shop">
        <div class="widget widget-clean">



                <label>Bộ lọc tìm kiếm</label>



               <!-- End .heading-right -->


            {{-- <a href="#" class="sidebar-filter-clear">Clean All</a> --}}
        </div><!-- End .widget widget-clean -->
        <!-- End .widget -->
        <div class="widget widget-collapsible">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                 DANH MỤC SẢN PHẨM
                </a>
            </h3><!-- End .widget-title -->

                <div class="collapse show" id="widget-1">
                    <div class="widget-body">
                        <div class="filter-items filter-items-count">
                            @php
                                $i=0;
                            @endphp
                            @foreach ($cate_product as $key => $cate)
                            @php
                                $i++;
                            @endphp
                            <div class="filter-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{$i}}">
                                    <label class="custom-control-label"  for="{{$i}}" ><h3 class="product-title"><a href="{{URL::to('/show-category-home/'.$cate['category_id'])}}">{{$cate['category_name']}}</a></h3></label>
                                </div><!-- End .custom-checkbox -->

                            </div><!-- End .filter-item -->
                        @endforeach
                          <!-- End .filter-item -->
                        </div><!-- End .filter-items -->
                    </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
            </div>
           <!-- End .collapse -->

        <div class="widget widget-collapsible">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
               THỂ LOẠI SẢN PHẨM
                </a>
            </h3><!-- End .widget-title -->

            <div class="collapse show" id="widget-4">
                <div class="widget-body">
                    <div class="filter-items filter-items-count">
                        <div class="filter-item">
                            @php
                            $i=0;
                        @endphp
                            @foreach ($cate_type_product as $key => $cate_type)
                            @php
                            $i++;
                        @endphp
                         <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{$i}}">
                                <label class="custom-control-label"  for="{{$i}}" ><h3 class="product-title"><a href="{{URL::to('/show-category-type-home/'.$cate_type['category_type_id'])}}">{{$cate_type['category_type_name']}}</a></h3></label>
                            </div><!-- End .custom-checkbox -->

                        </div>

                            @endforeach
                        </div><!-- End .filter-item -->
                    </div><!-- End .filter-items -->
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->
    </div><!-- End .sidebar sidebar-shop -->
</aside>
