@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">

        <div class="row">
            @if (session('message'))
             <div class="alert alert-success">
             <span class="badge badge-pill badge-success">{{(session('message'))}} </span>
             </div>
             @endif
             <div>
                <table  class="table table-bordered table-hover " id="Table1">
                  <thead>
                    <tr>
                      <th >STT</th>
                      <th  >Tên Sản Phẩm</th>
                      <th >Số Lượng Sản Phẩm</th>
                      <th >Giá Sản Phẩm</th>
                      <th >Hình ảnh sản phẩm</th>
                      <th >Thể Loại</th>
                      <th >Danh Mục</th>
                      <th >Trạng Thái</th>
                      <th></th>
                      <th></th>
                      <th>Chức Năng</th>


                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $i = 1;
                      ?>
                    @foreach ($list_product as $key => $product)
                    <tr>
                        <td><?php echo $i++; ?></td>
                      <td >{{($product->product_name)}}</td>
                      <td >
                          @if ($product->product_quantity==0)
                          <span class="badge bg-danger">Hết Hàng</span>
                          @else
                          {{($product->product_quantity)}}
                          @endif

                      </td>
                      <td >{{($product->product_price)}}</td>
                      <td><img src="public/upload/product/{{ $product->product_image }}" height="100" width="100"></td>
                      <td >{{($product->category_type_name)}}</td>
                      <td >{{($product->category_name)}}</td>

                      <td style="text-align:center"><span class="text-ellipsis">
                          <?php
                           if($product->product_status==1){
                            ?>
                            <a href="{{URL::to('/unactive-product/'.$product->product_id)}}" class="btn btn-success"> Hiện</a>
                            <?php
                             }else{
                            ?>
                             <a href="{{URL::to('/active-product/'.$product->product_id)}}"class="btn btn-danger">Ẩn</a>
                            <?php
                           }
                          ?>
                        </span>
                      </td>
                      <td > <a target="_blank" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xem sản phẩm" ><i class="nav-icon far fa-eye"></i></a></td>
                       <td > <a href="{{URL::to('/edit_product/'.$product->product_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Chỉnh sửa sản phẩm" ><i style="color: rgb(59, 211, 12);"  class="nav-icon far fa-edit"></i></a></td>
                        <td > <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Danh Mục Này Không ?')" href="{{URL::to('/delete_product/'.$product->product_id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá sản phẩm ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>

                    </tr>
                    @endforeach

                  </tbody>
                </table>

              </div>
        </div>
  <a href="{{URL::to('/add-product')}}" class="btn btn-outline-primary">Thêm  Sản Phẩm </a>
    </section>
</div>
{{--  --}}


  @endsection




