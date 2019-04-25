@extends('layouts.index')
@section('title')
Thêm thông tin
@endsection
@section('content')
<base href="{{ asset('') }}">
<div class="main">
<div class="thanhmenuduoi">
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        {{-- @foreach($data as $datas) --}}
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Trang Chủ</a></li>
          <li class="breadcrumb-item"><a href="#">Thêm Thông Tin</a></li>
        
        </ol>
       {{--  @endforeach --}}
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
          <h3>THÔNG TIN NHÀ TUYỂN DỤNG</h3>
        </center>
        <div class="row">
          @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
          @endif
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <form action="{{ route('postthemthongtin',Auth::id()) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{Auth::user()->email}}" disabled>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Họ Và Tên</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="{{Auth::user()->name}}"  name="name">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">Tên Công Ty</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Tên công ty" value="" name="tencongty"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Năm Thành Lập</label>
              <input type="number" class="form-control" id="inputAddress" placeholder="" value="" name="namthanhlap">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Website</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="" name="website">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2">Địa Chỉ</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Nhập địa chỉ công ty" value=""name="diadiem"  required>
            </div>
            <div class="form-row">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Quy Mô Công Ty</label>
                  <input type="number" class="form-control" id="inputEmail4" placeholder="số lượng nhân lực" value="" name="quymo"  required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Điện Thoại Liên Hệ</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Số điện thoại" value="" name="sdt">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Mô tả về công ty</label>
                <textarea class="form-control" id="ycnn" placeholder="Thông Tin Thêm ... " rows="4" name="motacongty"  required></textarea>
              </div>
            </div>
            <center>
              <div class="form-group">
                <div class="form-check">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Xác nhận</button>
             <div class="link" style="width: 60px;height: 25px;border:1px solid grey;border-radius: 10px;margin: 10px"><a href="{{route('trangchuntd')}}">Quay Lại</a></div>
              <hr>
            </center>
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
