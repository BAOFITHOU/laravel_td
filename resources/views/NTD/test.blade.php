@extends('layouts.indexntd')
@section('title')
Thông tin ứng viên 
@endsection
@section('content')
<div class="main">
  <div class="thanhmenuduoi">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chủ / </a></li>
            <li class="breadcrumb-item"><a href="#">Tuyển Dụng / </a></li>
            <li class="breadcrumb-item"><a href="#">Thông Tin Ứng Viên</a></li>
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
      @foreach($thongtin as $thongtins)
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="up3xx" style="margin-top: 5px;min-height:500px;height:auto">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
            <center>
              <div class="avata" style="padding-top: 40px">
                <div class="photo"><img src="images/{{$thongtins->users->avatar}}" width="150" height="150" style="border-radius: 50%" alt="avatar" /></div>
                <center><a href=""><i class="fas fa-camera"></i></a>
                  <br>
                </center>
                <h3 class="name"><b></b></h3>
                <h4 class="job">
                </h4>
                <p>Email:  {{ $thongtins->users->email}} </p>
                <p>Phone:{{ $thongtins->sdt}}</p>
                <center><p><i>Trạng thái : Sinh viên có {{$x}} CV</i></p></center>
                <br>
              </div>
            </center>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="inright" style="padding:10px;padding-left: 25px;margin: 10px">
              <div class="row">
                <center><h4><u>THÔNG TIN CÁ NHÂN</u></h4></center>
                <br>
                <ul> 
                  <li>Họ và tên : {{ $thongtins->users->name}}</li>
                  <br>
                  <hr>
                  <li>Ngày sinh : {{ $thongtins->ngaysinh }}</li>
                  <br>
                  <hr>
                  <li>Địa chỉ   : {{ $thongtins->diachi }}</li>
                  <br>
                  <hr>
                  <li>Giới tính : {{ $thongtins->gioitinh }}</li>
                  <br>
                  <hr>
                  
                  <li>Trình độ  : {{ $thongtins->trinhdo->tentrinhdo }}</li>
                  <br>
                  <hr>
                  
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div>
      @endforeach 
    </div>
    <div class="tieudeds" style="margin-top:50px">
      <center><h3 style="margin-top:10px">Danh sách CV của sinh viên</h3></center>
    </div>  
    <div class="container" style="margin-left:0px;">
     <div class="row" style="padding:30px 0px;">
      @foreach($cv as $cv)
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="up3" style="min-height:300px;border-radius: 20px;margin-top: 10px;padding: 20px"> 
          <center>
            <p><a href="cv/{{$cv->tenfilecv}}"><i class="fas fa-eye" style="font-size: 20px;"></i></a>
              <a href=""><i class="fas fa-download" style="font-size: 20px"></i></a></p>
              <h4><b><span>CV Ngành : {{$cv->nganh->tennganh}}</span></b></h4>
              <p><b>Mức lương mong muốn  :</b> {{ $cv->luong }}</p>
              <p><b>Mục tiêu nghề nghiệp  :</b> {{ $cv->muctieunghenghiep}}</p>
              <p><b>Kinh nghiệm  :</b> {{ $cv->kinhnghiem }}</p>
              <p><b>Mô tả thêm :</b> {{ $cv->themmota }}</p>
            </center>
          </div>
        </div>  
        @endforeach
      </div>
    </div>
    <br>
    <br>
  </div>
</div>
@endsection


