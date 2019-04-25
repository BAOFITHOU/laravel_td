@extends('layouts.indexuv')
@section('title')
Thêm CV
@endsection
@section('content') 
<base href="{{ asset('') }}">
<div class="main">
    <div class="thanhmenuduoi">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ /</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng Viên /</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('getthemthongtincv') }}">Thông Tin CV</a></li>
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
                        <h3>VIẾT CV</h3>
                    </center>
                    <div class="row">
                       @if(session('thongbao'))
                       <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div> 
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form action="{{ route('getthemthongtincv') }}" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Vị trí làm việc mong muốn</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="vitrimongmuon">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Địa điểm làm việc mong muốn</label>
                                    <input type="text" class="form-control"  name="diadiemmongmuon">
                                </div>
                            </div>
                            @foreach($thongtinuv as $thongtinuvs)
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Mức lương tối thiểu mong muốn</label>
                                <input type="number" name="luong" class="form-control" id="inputAddress" value="" placeholder="Mức lương mong muốn" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Mục tiêu nghề nghiệp</label>
                                <input type="text"  name="muctieunghenghiep" class="form-control" id="inputAddress2" value="" placeholder="Mục tiêu nghề nghiệp" name="muctieunghenghiep" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Kinh nghiệm làm việc</label>
                                <input type="text"  name="kinhnghiem" value="" class="form-control" id="inputAddress" placeholder="Kinh nghiệm làm việc" >
                            </div>
                            <input type="hidden" value="{{$thongtinuvs->id}}" name="id_masv">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Mô tả bản thân</label>
                                <textarea type="text" class="form-control" id="inputPassword4" rows="4" placeholder="Mô tả bản thân" name="themmota" value=""></textarea>
                            </div>
                            @endforeach
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
                            @if(count($errors)>0)
                            @foreach($errors->all() as $err)
                            <p style="color: red;">{{ $err }}</p>    <br>
                            @endforeach
                            @endif
                        </div>
                        <center>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">XÁC NHẬN </button>
                                <a href="{{route('trangchuuv')}}" class="btn btn-basic" style="border: 1px solid grey">HỦY</a>
                                <hr>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection