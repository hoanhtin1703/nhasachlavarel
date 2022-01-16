@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
<div class="row">
<h2>Liệt kê Tài Khoản Người Dùng</h2>

</div>
<div class="row">
    @if (session('message'))
     <div class="alert alert-success">
     <span class="badge badge-pill badge-success">{{(session('message'))}} </span>
     </div>
     @endif
</div>
{{--  --}}
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title">Thêm Người Quản Trị</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>

          </button>

        </div>
        <div class="alert alert-primary print-error-msg" style="display:none" role="alert">
            <ul></ul>
          </div>
        <div class="modal-body">
            <form action="">
                @csrf
         <div class="form-group">
           <label for="">Tên Đăng Nhập</label>
           <input type="text" class="form-control" name="admin_user" id="" aria-describedby="helpId" placeholder=""required>

         </div>
         <div class="form-group">
            <label for="">Tên Người Dùng</label>
            <input type="text" class="form-control" name="admin_name" id="" aria-describedby="helpId" placeholder="" required>

          </div>
          <div class="form-group">
            <label for="">Mật Khẩu</label>
            <input type="text" class="form-control" name="admin_password" id="" aria-describedby="helpId" placeholder="" required>

          </div>
          <div class="form-group">
            <label for=""> Chức vụ</label>
            <select class="form-control  form-select" name="level" id="level">
              <option value="0"> Admin </option>
              <option value="1">Nhân Viên</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary submit">Save changes</button>
        </div>
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
{{--  --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách admin</h3>
              <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Thêm Người Quản Trị</a>
                </ul>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered" id = "Table1">
                <thead>
@php
    $i=0
@endphp
                  <tr>
                    <th >STT</th>
                    <th>Tên </th>
                    <th>Chức vụ</th>
<th></th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $key =>$admin )
                    @php
    $i++;
@endphp
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$admin->admin_name}}</td>
<td><span class="badge bg-success">Người quản trị</span></td>
<td class="project-actions">
    <a class="btn btn-primary btn-sm" href="{{URL::to('/show-profile-admin/'.$admin->admin_id)}}" >
        <i class="fas fa-folder">
        </i>
       Xem hồ sơ
    </a>

    <a class="btn btn-danger btn-sm delete_admin"   onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Người Dùng Này Không ?')" data-id_admin="{{$admin->admin_id}}">
        <i class="fas fa-trash">
        </i>
       Xoá
    </a>
  </td>
                      </tr>
                    @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Danh sách nhân viên</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered" id = "Table2">
                    <thead>
                      <tr>
                        <th >STT</th>
                        <th>Tên </th>
                        <th>Chức vụ</th>
    <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
    $i=0
@endphp
                        @foreach ($asistant as $key =>$asis )
                        @php
        $i++;
    @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$asis->admin_name}}</td>
    <td><span class="badge bg-danger">Nhân Viên</span></td>
    <td class="project-actions">
        <a class="btn btn-primary btn-sm" href="{{URL::to('/show-profile-admin/'.$asis->admin_id)}}">
            <i class="fas fa-folder">
            </i>
           Xem hồ sơ
        </a>
        <input type="hidden" id="assiss_id" value="{{$asis->admin_id}}">
        <a class="btn btn-danger btn-sm delete_assis"  onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Người Dùng Này Không ?')" data-id_asiss="{{$asis->admin_id}}">
            <i class="fas fa-trash">
            </i>
           Xoá
        </a>
      </td>
                          </tr>
                        @endforeach


                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->

              </div>
          <!-- /.card -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách người dùng</h3>
          <br>
              <h3 class="card-title">Tổng :{{$count}} Khách hàng</h3>
              <ul class="pagination pagination-sm float-right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg1">Thêm Khách Hàng</a>
              </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered" id = "Table4">
                <thead style="text-align:center">
                  <tr>
                    <th>STT</th>
                    <th>Tên </th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Chức Vụ</th>
                    <th></th>
                  </tr>
                </thead >
                <tbody style="text-align:center">
                    @php
$i=0
@endphp
                    @foreach ($customer as $key =>$cus )
                    @php
    $i++;
@endphp
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$cus->customer_name}}</td>
                        <td>{{$cus->customer_email}}</td>
                        <td>{{$cus->customer_address}}</td>
<td><span class="badge bg-warning">Khách hàng</span></td>
                          <td class="project-actions">
                            <a class="btn btn-primary btn-sm" href="{{URL::to('/show-profile-customer/'.$cus->customer_id)}}">
                                <i class="fas fa-folder">
                                </i>
                               Xem hồ sơ
                            </a>

                            <a class="btn btn-danger btn-sm delete_customer"  onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Người Dùng Này Không ?')" data-id_customer="{{$cus->customer_id}}">
                                <i class="fas fa-trash">
                                </i>
                               Xoá
                            </a>
                          </td>
                      </tr>
                    @endforeach
              </table>
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>

      <div class="modal fade" id="modal-lg1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title ">Thêm Khách Hàng</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="alert alert-primary print-error-msg" style="display:none" role="alert">
                <ul></ul>
              </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    @csrf

                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Tên Người Dùng</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name"  id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Địa Chỉ Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email"  id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone"  id="inputName2" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Địa Chỉ Nhà</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="address" placeholder="Địa Chỉ Nhà"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Mật Khẩu</label>
                    <div class="col-sm-10">
                      <input type="text" id="password"  class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>



            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary add_customer">Save changes</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
</section>
</div>

  @endsection
