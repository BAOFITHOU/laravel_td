@extends('layouts.indexuv')
@section('title')
Sửa CV
@endsection
@section('content') 
<base href="{{ asset('') }}">
<div class="main">
    <div class="thanhmenuduoi">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @foreach($cvs as $cvss)
                        <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ /</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng Viên /</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('getdanhsachcv') }}">Danh sách CV /</a></li>
                        <li class="breadcrumb-item"> <a href="{{ route('getsuacv',$cvss->id) }}">Sửa CV</a>
                        @endforeach
                    </ol>
                </nav>
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
                        <h3>SỬA CV</h3>
                    </center>
                    <br>
                    <div class="row">
                       @if(session('thongbao'))
                       <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div> 
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        @foreach($cvs as $cvss)
                        <form action="Ungvien/suacv/{{$cvss->id }}" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Vị trí làm việc mong muốn</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="vitrimongmuon" value="{{ $cvss->vitrimongmuon }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Địa điểm làm việc mong muốn</label>
                                    <input type="text" class="form-control"  name="diadiemmongmuon" value="{{ $cvss->diadiemmongmuon }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Mức lương tối thiểu mong muốn</label>
                                <input type="number" name="luong" class="form-control" id="inputAddress"  placeholder="Mức lương mong muốn" required value="{{ $cvss->luong }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Mục tiêu nghề nghiệp</label>
                                <input type="text"  name="muctieunghenghiep" class="form-control" id="inputAddress2" value="{{ $cvss->muctieunghenghiep }}" placeholder="Mục tiêu nghề nghiệp" name="muctieunghenghiep" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Kinh nghiệm làm việc</label>
                                <input type="text"  name="kinhnghiem" value="{{ $cvss->kinhnghiem }}" class="form-control" id="inputAddress" placeholder="Kinh nghiệm làm việc" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Mô tả bản thân</label>
                                <textarea type="text" class="form-control" id="inputPassword4" rows="4"  name="themmota"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Ngành nghề muốn ứng tuyển</label>
                                    <select id="inputState" class="form-control" name="nganh">
                                        @foreach($nganh as $tds)
                                        <option  value="{{$tds->id}}">{{$tds->tennganh}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                             <div class="form-group col-md-6">
                                <label for="exampleFormControlFile1">Chọn file CV</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filecv">
                            </div>
                        </div>
                        <center>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                                <a class="btn btn-default" href="{{route('huy')}}" class="btn btn-basic">Quay lại</a>
                            </div>
                        </div>
                    </center>
                </form>
                @endforeach
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