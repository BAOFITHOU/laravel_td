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
          @foreach($thongtin as $thongtins)
          @foreach($layid as $layids)
          <li class="breadcrumb-item"><a href="">Trang chủ /</a></li>
          <li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Tuyển dụng /</a></li>
          <li class="breadcrumb-item"><a href="{{-- {{ route('xemungvien',$thongtins->id,$layids->id_tin) }} --}}">Thông tin ứng viên</a></li>
          @endforeach
          @endforeach
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
          <div class="up3xx" style="margin-top: 5px;height: 512px;">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
              @foreach($thongtin as $thongtins)
              <center>
                <div class="avata" style="padding-top: 40px">
                  <div class="photo"><img style="border-radius: 50%;" src="images/{{ $thongtins->thongtinsv->users->avatar }}" width="150" height="150" alt="Md Alamin Mir" /></div>
                  <center>
                    <br>
                  </center>
                  <h3 class="name"><b></b></h3>
                  <h4 class="job">
                  </h4>
                  <p>Email: {{ $thongtins->thongtinsv->users->email  }} </p>
                  <p>Phone:{{ $thongtins->thongtinsv->sdt}}</p>
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
                    <br>

                 
                    
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
        <center><h4>THÔNG TIN CV</h4></center>
        <div>
          <br>
          <center> 
          @if($h==1)
                @foreach($layid as $layids)
                    <form action="{{ route('postxemcvthat') }}" method="post">
                      {{ csrf_field() }}
                      <a href="cv/{{$thongtins->tenfilecv}}"><i class="fas fa-eye" style="font-size: 30px;color:#12E10D;padding: 10px;"></i>Xem CV</a>
                      <br/>
                      <a href="{{route('down',$thongtins->tenfilecv)}}"><i class="fas fa-download" style="font-size: 30px;color:#12E10D;padding: 10px;"></i>Tải Xuống CV</a>
                      <br>
                      <input type="hidden" value="{{ $layids->id }}" name="idid">
                      <button type="submit" class="btn btn-danger"> Active</button>
                      <br>
                      <div class="leftcv text-left" style="padding-left: 10%;padding-top: 40px">
                      <li><b>Mức lương mong muốn</b>: {{ $thongtins->luong }}</li>
                      <br>
                      <li><b>Mục tiêu nghề nghiệp</b>: {{ $thongtins->muctieunghenghiep}}</li>
                      <br>
                      <li><b>Kinh nghiệm</b>: {{ $thongtins->kinhnghiem }}</li>
                      <br>
                      <li><b>Mô tả bản thân:</b>{{ $thongtins->themmota }}</li>
                      </div>
                    </form>
                @endforeach 
          @else
                @foreach($layid as $layid)
                    <form action="{{ route('postbocvthat') }}" method="post">
                      {{ csrf_field() }}
                      <a href="cv/{{$thongtins->tenfilecv}}"><i class="fas fa-eye" style="font-size: 30px;color:#12E10D;padding: 10px;"></i>Xem CV</a>
                      <br/>
                      <a href="{{route('down',$thongtins->tenfilecv)}}"><i class="fas fa-download" style="font-size: 30px;color:#12E10D;padding: 10px;"></i>Tải Xuống CV</a>
                      <br>
                      <input type="hidden" value="{{ $layid->id }}" name="idid">
                      <button type="submit" onclick="var x=confirm('Bạn có muốn bỏ cv này không ?'); return x;" class="btn btn-warning"> Bỏ duyệt CV</button>
                      <br>
                      <div class="leftcv text-left" style="padding-left: 10%;padding-top: 40px">
                      <li><b>Mức lương mong muốn</b>: {{ $thongtins->luong }}</li>
                      <br>
                      <li><b>Mục tiêu nghề nghiệp</b>: {{ $thongtins->muctieunghenghiep}}</li>
                      <br>
                      <li><b>Kinh nghiệm</b>: {{ $thongtins->kinhnghiem }}</li>
                      <br>
                      <li><b>Mô tả bản thân:</b>{{ $thongtins->themmota }}</li>
                      </div>
                    </form>
                @endforeach
          @endif
          </center>
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
</div>
@endsection