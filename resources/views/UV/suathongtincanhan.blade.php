@extends('layouts.indexuv')
@section('title')
Sửa thông tin sinh viên
@endsection
@section('content') 
<div class="main">
    <base href="{{ asset('') }}">
    <div class="thanhmenuduoi">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ /</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng Viên /</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('getsuathongtinungvien',Auth::id()) }}">Sửa Thông Tin</a></li>
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
                        <h3>SỬA THÔNG TIN CÁ NHÂN</h3>
                    </center>
                    <br>
                    <div class="row">
                     @if(session('thongbao'))
                     <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div> 
                    @endif
                    @foreach($thongtinuv as $thongtinuvs)
                    @if(($thongtinuvs->id_account)==Auth::id())
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form action="{{ route('getsuathongtinungvien',Auth::id()) }}" method="post">
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
                                <input type="date" name="ngaysinh" class="form-control" id="inputAddress" value="{{$thongtinuvs->ngaysinh}}" placeholder="Ngày sinh" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Địa Chỉ</label>
                                <input type="text"  name="diadiem" class="form-control" id="inputAddress2" value="{{$thongtinuvs->diachi}}" placeholder="Địa chỉ" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Số Điện Thoại</label>
                                <input type="text"  name="sdt" value="{{$thongtinuvs->sdt}}" class="form-control" id="inputAddress" placeholder="Số điện thoại" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Trình độ ngoại ngữ</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="trình độ nn" name="ngoaingu" value="5 Năm">
                            </div>

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
                                </div>
                            </div>
                            <center>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">Xác nhận </button>
                                   <a href="{{ route('trangchuuv')}}" style="border: 1px solid grey;margin-left: 2px" class="btn btn-toolbar">Quay lại</a>
                                </div>
                            </div>
                        </center>
                        @else
                        <center><span><h3>Bạn không có quyền sửa thông tin này</h3></span></center>
                        @endif
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection