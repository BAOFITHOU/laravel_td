@extends('layouts.index')
@section('title')
Thêm thông tin sinh viên
@endsection
@section('content')
<div class="main">
<base href="{{ asset('') }}">
    <div class="thanhmenuduoi">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Ứng Viên</a></li>
                        <li class="breadcrumb-item"><a href="#">Thêm Thông Tin</a></li>
                    </ol>
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
                        <h3>THÊM THÔNG TIN CÁ NHÂN</h3>
                    </center>
                    <div class="row">
                         @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
          @endif
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form action="{{ route('getthemthongtinuv',Auth::id()) }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{Auth::user()->email}}" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Họ Và Tên</label>
                                        <input type="text"  name="hoten" class="form-control" id="inputPassword4" placeholder="Password" value="{{Auth::user()->name}}" >
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Ngày Sinh</label>
                                    <input type="date" name="ngaysinh" class="form-control" id="inputAddress" placeholder="Ngày sinh" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Địa Chỉ</label>
                                    <input type="text"  name="diadiem" class="form-control" id="inputAddress2" placeholder="Địa chỉ" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Số Điện Thoại</label>
                                    <input type="text"  name="sdt" class="form-control" id="inputAddress" placeholder="Số điện thoại" >
                                </div>
                                {{-- <div class="form-group col-md-6">
                                    <label for="inputAddress2">Mục Tiêu Nghề Nghiệp</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Nhiều Tiền">
                                </div> --}}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Trình Độ</label>
                                        <select id="inputState" class="form-control" name="trinhdo">
                                            @foreach($trinhdo as $td)
                                            <option  value="{{$td->id}}">{{$td->tentrinhdo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Giới Tính</label>
                                        <select id="inputState" class="form-control" name="gioitinh">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        {{-- <div class="form-group col-md-6">
                                            <label for="inputEmail4">Mức lương mong muốn</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="1000$">
                                        </div> --}}
                                        {{-- <div class="form-group col-md-6">
                                            <label for="inputPassword4">Kinh nghiệm làm việc</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Password" value="5 Năm">
                                        </div> --}}
                                    </div>
                                </div>
                               
                                {{-- <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Mô tả về bạn</label>
                                        <textarea class="form-control" id="ycnn" placeholder="Thông Tin Thêm ... " rows="4"></textarea>
                                    </div>
                                </div> --}}
                                <center>
                                
                                  <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">XÁC NHẬN </button>
                                    <button type="submit" class="btn btn-basic">HỦY</button>
                                    <hr>
                                </div>
                            </div>
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