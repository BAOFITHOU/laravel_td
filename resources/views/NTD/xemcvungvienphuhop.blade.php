@extends('layouts.index')
@section('title')
Thông tin ứng viên
@endsection
@section('content')
<div class="thanhmenuduoi">
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Trang Chủ</a></li>
          <li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Tuyển Dụng</a></li>
          <li class="breadcrumb-item"><a href="">Thông Tin Ứng Viên</a></li>
        </ol>
      </nav>
      <p></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="backin">

  </div>
</div>
<div class="container" style="padding-bottom: 30px">
  <div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-right: 0px;">
          <div class="up3xx" style="margin-top: 5px;height: 467px;">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
              @foreach($thongtin as $thongtins)
              <center>
                <div class="avata" style="padding-top: 40px">
                  <div class="photo"><img src="images/no-avatar.jpg" width="150" height="150" alt="Md Alamin Mir" /></div>
                  <center><a href=""></a>
                    <br>
                  </center>
                  <h3 class="name"><b></b></h3>
                  <h4 class="job">
                  </h4>
                 
                  <br>
                </div>
              </center>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="inright" style="padding:10px;padding-left: 25px;margin: 10px">
                <div class="row">
                  <center><h4><u>THÔNG TIN CV</u></h4></center>
                  <br>
                  <ul>
                    <li>Họ và tên : {{  $thongtins->thongtinsv->users->name }}</li>
                    <br>
                    <hr>
                    <li>Ngày sinh : {{ $thongtins->thongtinsv->ngaysinh }}</li>
                    <br>
                    <hr>
                    <li>Địa chỉ   : {{ $thongtins->thongtinsv->diachi }}</li>
                    <br>
                    <hr>
                    <li>Giới tính : {{ $thongtins->thongtinsv->gioitinh }}</li>
                    <br>
                    <hr>
                    <li>Trình độ  : {{ $thongtins->thongtinsv->trinhdo->tentrinhdo }}</li>
                    <br>
                    <hr>
                    <li>Mức lương mong muốn  : {{ $thongtins->luong }}</li>
                    <br>
                    <hr>
                    <li>Mục tiêu nghề nghiệp  : {{ $thongtins->muctieunghenghiep}}</li>
                    <br>
                    <hr>
                    <li>Kinh nghiệm làm việc  : {{ $thongtins->kinhnghiem }}</li>
                    <br>
                    <hr>
                    <li>Mô tả bản thân  : {{ $thongtins->themmota }}</li>
                    <br>
                    <hr>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="up3" style="margin-top: 4px">
        <br>
        <center><h4>THÔNG TIN LIÊN HỆ</h4></center>
        <div>
          <br>
          @foreach($thongtin as $thongtins)
           <p>Email: {{ $thongtins->thongtinsv->users->email  }} </p>
                  <p>Phone:{{ $thongtins->thongtinsv->sdt}}</p>
          @endforeach
          <br>  
          <p></p>
          <br>
        </div>
        {{-- <center><p><i>Trạng thái:Sinh viên chưa upload CV</i></p></center> --}}
        <br>
      </div>
      <div class="inright text-center">
      </div>
    </div>
  </div>
</div>

@endsection