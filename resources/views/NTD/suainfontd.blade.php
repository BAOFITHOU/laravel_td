@extends('layouts.indexntd')
@section('title')
Nhà tuyển dụng
@endsection
@section('content')
<div class="main">
<base href="{{ asset('') }}">
<div class="thanhmenuduoi">
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        @foreach($data as $datas)
        @foreach($datas->thongtinntd as $thongtinntd)
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Trang chủ /</a></li>
          <li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Nhà tuyển dụng /</a></li>
          <li class="breadcrumb-item"><a href="{{ route('getsuathongtinntd',$datas->id) }}">Sửa Thông Tin</a></li>
        </ol>
        @endforeach
        @endforeach
      </nav>
      <p></p>
    </div>
  </div>
</div>  
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="up3" style="padding: 25px">
        <center>
          <h3>SỬA THÔNG TIN NHÀ TUYỂN DỤNG</h3>
        </center>
        <div class="row">
          @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
          @endif
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           @foreach($data as $datas)
           @foreach($datas->thongtinntd as $thongtinntd)
           <form action="{{ route('postsuathongtinntd',$datas->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ $datas->email }}" disabled>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Họ Và Tên</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{$datas->name }}"  name="name">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">Tên Công Ty</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="" value="{{ $thongtinntd->tencongty }}" name="tencongty">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Năm Thành Lập</label>
              <input type="number" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ $thongtinntd->namthanhlap }}" name="namthanhlap">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Website</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ $thongtinntd->website }}" name="website">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">Địa Chỉ</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Nhập địa chỉ công ty" value="{{ $thongtinntd->diadiem }}"name="diadiem" >
            </div>
            <div class="form-row">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Quy Mô Công Ty</label>
                  <input type="number" class="form-control" id="inputEmail4" placeholder="số lượng nhân viên công ty" value="{{ $thongtinntd->quymo }}" name="quymo">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Điện Thoại Liên Hệ</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{ $thongtinntd->sdt }}" name="sdt">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Mô tả về công ty</label>
                <textarea class="form-control" id="ycnn" placeholder="Thông Tin Thêm ... " rows="4" name="motacongty">{{$thongtinntd->motacongty }}</textarea>
              </div>
            </div>
            <center>
              <div class="form-group">
                <div class="form-check">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
              {{-- <div class="link" style="width: 60px;height: 25px;border:1px solid grey;border-radius: 10px;margin: 10px"><a href="{{route('backin')}}">Hủy</a></div> --}}
              <a href="{{route('trangchuntd')}}" style="border: 1px solid grey;margin-left:10px" class="btn btn-toolbar">Quay lại</a>
{{--               <hr> --}}
            </center>
            @endforeach 
            @endforeach
          </form>
        </div>

      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

  </div>
</div>
</div>
</div>
@endsection
