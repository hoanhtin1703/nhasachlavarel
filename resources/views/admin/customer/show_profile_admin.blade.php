@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Thông tin quản trị viên</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <strong><i class="fas fa-info mr-1"></i> Tên Quản Trị Viên</strong>

          <p class="text-muted">
            {{$admin_id->admin_name}}
          </p>

          <hr>

          <strong><i class="fas fa-user-tie mr-1"></i> Chức vụ</strong>

          <p class="text-muted">  @if ($admin_id->level==0) Admin @else Nhân Viên @endif</p>




          <div class="col-12" id="accordion">
            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                           Sửa thông tin
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <form  enctype="multipart/form-data">
                            {{(csrf_field())}}

                          <div class="card-body">

<input type="hidden" id="id"  value="{{$admin_id->admin_id}}">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tên Đăng Nhập</label>
                              <input type="text" id="admin_user" name="banner_title"class="form-control" value="{{$admin_id->admin_user}}" id="exampleInputEmail1" placeholder=" Điền Tên Sản Phẩm" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Người Dùng</label>
                                <input type="text" id="admin_name" name="banner_title"class="form-control" value="{{$admin_id->admin_name}}" id="exampleInputEmail1" placeholder=" Điền Tên Sản Phẩm" required>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="text" id="admin_password" name="admin_password"class="form-control" value="{{($admin_id->admin_password)}}" id="exampleInputEmail1" placeholder=" Điền Tên Sản Phẩm" required>
                              </div>

                            <div class="form-group">
                              <label for=""> Chức vụ</label>
                              <select class="form-control" name="banner_Status" id="level">
            @if ($admin_id->level==0)
            <option selected value="0">
                        Admin
            </option>

            <option value="1">
            Nhân Viên
            </option>
            @else
            <option value="0">
                Admin
            </option>

            <option selected value="1">
            Nhân Viên
            </option>
            @endif


                                    {{-- {{$admin->level}} --}}


                                {{-- <option value="1">Nhân Viên</option> --}}
                              </select>
                            </div>
                          </div>

                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit"  class="btn btn-outline-primary update">Cập nhật</button>
                           <a href="{{URL::to('show-customer')}}" class="btn btn-outline-danger">Trở về</a>
                          </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <!-- /.card-body -->
      </div>


</div>
@endsection
