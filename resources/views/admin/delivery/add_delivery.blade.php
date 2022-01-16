@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Mã Vận Chuyển</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            {{-- <form method="post" action="{{URL::to('/save-category_type')}}"> --}}
                {{-- {{(csrf_field())}} --}}

              <div class="card-body">
                <form>
                    @csrf
                <div class="form-group">
                    <label for="">Chọn Thành Phố<span style="color:red" >*</span></label>
                    <select name="city" id="city" class="form-control input-sm m-bot15 choose city">

                        <option value="">--Chọn tỉnh thành phố--</option>
                    @foreach($city as $key => $ci)
                        <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                    @endforeach

                </select>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Chọn quận huyện</label>
                      <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                            <option value="">--Chọn quận huyện--</option>

                    </select>
                </div>

                  <div class="form-group">
                    <label for="">Chọn Phường Xã<span style="color:red" >*</span></label>

                     <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                           <option value="">--Chọn xã phường--</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label for="">Phí vận chuyển :</label>
                    <input type="text" type="text" name="fee_ship" class="form-control fee_ship"  placeholder="Tiền phí vận chuyển" aria-describedby="helpId">


                  </div>
                  <div class="form-group">

                    <input type="button"
                      class="form-control add_delivery btn btn-primary "  name="add_delivery" value="Thêm Mã Vận Chuyển" aria-describedby="helpId" placeholder="">

                  </div>
                </form>
              </div>

              <!-- /.card-body -->
              <div id="load_delivery">

            </div>

            {{-- </form> --}}
          </div>

</div>
@endsection
