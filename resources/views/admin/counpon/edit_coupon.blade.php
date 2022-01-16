@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Mã Giảm Giá</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1"> Tên Mã Giảm Giá <span style="color:red;">*</span></label>
                  <input type="text" name="counpon_name" value="{{$counpon->counpon_name}}" class="form-control counpon_name" id="exampleInputEmail1" placeholder="Điền tên mã giảm giá" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Mã Giảm Giá <span style="color:red;">*</span></label>
                    <input type="text" value="{{$counpon->counpon_code}}" name="counpon_code"class="form-control counpon_code" id="exampleInputEmail1" placeholder="Điền mã giảm giá" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Số Tiền Giảm Giá<span style="color:red;">*</span> </label>
                    <input type="text" value="{{$counpon->price_discount}}" name="price_discount"class="form-control price_discount" id="exampleInputEmail1" placeholder="Điền số tiền giảm" required>
                  </div>
                <div class="form-group">
                  <label for="">Trạng thái <span style="color:red;">*</span></label>
                  <select class="form-control counpun_status" name="counpun_status" id="">
                    @if ($counpon->counpon_status==0)
                    <option selected value="0">Kích Hoạt </option>
                    <option value="1">Tắt Kích Hoạt</option>
                    @else
                    <option value="0">Kích Hoạt </option>
                    <option selected value="1">Tắt Kích Hoạt</option>
                    @endif


                  </select>
                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary edit_counpon" data-id_counpon="{{$counpon->counpon_id}}">Thêm  </button>
                <a href="{{URL::to('/show-counpon')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection

