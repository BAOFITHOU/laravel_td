@extends('layouts.index')
@section('title')
Trang tuyển dụng
@endsection
@section('content')
<base href="{{ asset('') }}">
<div class="thanhmenuduoi">

              {{--   @foreach($thongtin as $tt) --}}
                {{--  @foreach($tt->user as $user) --}}
               {{--  @foreach($tt->cvs as $cvs) --}}
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{-- {{ route('trangchu') }} --}}">Trang Chủ</a></li>
          <li class="breadcrumb-item"><a href="#">Tuyển Dụng</a></li>
          <li class="breadcrumb-item"><a href="#">Thông Tin Ứng Viên</a></li>
        </ol>
      </nav>
      <p></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="backin">
    <a href=""><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay Lại Trang Trước</a>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="slidebar" style="padding-top: 10px">
            <div class="avatar">
              <img src="images/{{-- {{  $tt->avatar}} --}}" width="150" height="150" alt="Md Alamin Mir" />
              {{-- @foreach($name as $name) --}}
              <h3 class="name"><b>name</b></h3>
              <h4 class="job">Web Developer</h4>
              <p>Email:  </p>
              <p>Phone: </p>
              <p>Địa Chỉ: </p>
              <br>
              <p><a href=""></i><i class="fas fa-edit" style="font-size: 30px"></i></a></p>
              {{-- @endforeach --}}
            </div><!-- .avatar -->
          </div>
        </div>
        <div class="up3" style="height: 490px;background-color: #E3FAE7">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="border-left:1px dotted #DFD8D8 ">
            <div class="up3" style="margin-top: 5px;height: 467px">
              <div class="inright" style="padding:10px;padding-left: 25px;margin: 10px">

                <div class="row">
                  <center>
                    <h4><u>THÔNG TIN CÁ NHÂN</u></h4>
                  </center>
                  <br>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul style="list-style-type: none">

                      <li>Họ Và Tên :</li>
                      <hr>
                      <li>Ngày Sinh :</li>
                      <hr>
                      <li>Địa Chỉ:</li>
                      <hr>
                      <li>Giới Tính:</li>
                      <hr>
                      <li>Số Điện Thoại:</li>
                      <hr>
                      <li>Kinh Nghiệm:</li>
                      <hr>
                    </ul>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul style="list-style-type: none">
                      <li>{{-- {{ $tt->user->name }} --}}</li>
                      <hr>
                      <li>{{-- {{ $tt->ngaysinh }} --}}</li>
                      <hr>
                      <li>{{-- {{ $tt->diachi }} --}}</li>
                      <hr>
                      <li>{{-- {{ $tt->gioitinh }} --}}</li>
                      <hr>
                      <li>{{-- {{ $tt->sdt }} --}}</li>
                      <hr>
                      <li>{{-- {{ $cvs->kinhnghiem }} --}}</li>
                    </ul>
                    <hr>
                  </div>
                </div>
               {{--  @endforeach
                @endforeach --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="up3">
        <br>
        <center>
          <h4>THÔNG TIN CV</h4>
        </center>

        <div style="padding-left: 100px;">
          <br>

          <a href=""><i class="fas fa-eye" style="font-size: 30px;color:#12E10D;padding: 10px;"></i>Xem CV</a>
          <br />
          <a href=""><i class="fas fa-download" style="font-size: 30px;color:#12E10D;padding: 10px;"></i>Tải Xuống CV</a>
          <br>
          <br>

          <p></p>
          <br>
        </div>
        <center>
          <p><i>Trạng Thái: Sinh Viên Chưa Upload CV</i></p>
        </center>
        <br>
      </div>

    </div>
  </div>
</div> <!-- khối 2 -->
@endsection
