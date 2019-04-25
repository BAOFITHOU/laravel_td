@extends('layouts.indexntd')
@section('title')
Danh sách tin đã đăng
@endsection
@section('content') 
<div class="main">
  <base href="{{ asset('') }}">
  <div class="thanhmenuduoi">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Nhà tuyển dụng /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('baidang') }}">Tin đã đăng</a></li>
          </ol>
        </nav>
        <p></p> 
      </div>
    </div>
  </div> 
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="up3" style="height:490px;height:auto;padding: 0px;margin-top:20px">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
            <p >DANH SÁCH TIN ĐÃ ĐĂNG</p>
          </center>
        </div> 
        <div class="row" style="padding: 30px">
          @foreach($tin as $tindadang)
          <div class="row">
            <div class="tiin" style="padding: 15px;margin-left: 20px">
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <img src="images/{{ $tindadang->thongtinntd->users->avatar }}" style="width: 150px;height: 150px;margin-top: -15px;border-radius: 50% ">
              </div> 
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <p><a class="cuttext" href="{{ route('getxemtin',$tindadang->id) }}">
                  {{ $tindadang->tieudetin }}</a></p>
                  <p style="padding-top:15px">Vị trí: {{ $tindadang->vitrituyendung }}</a></p>
                  <p style="padding-top:15px">Số lượng:{{$tindadang->soluongtuyen }}</p>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa Điểm:{{ $tindadang->diadiem }}</p>
                  <p style="padding-top:15px"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $tindadang->hannophoso }}</p>
                  <p style="padding-top:15px">$ {{ $tindadang->mucluong }}</p>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <center>
                    <p><a href="{{ route('getxemtin',$tindadang->id) }}" class="btn btn-primary" style="margin-bottom: 2px"><i class="fas fa-eye"></i> Xem chi tiết</a>
                     <br>
                      <a class="btn btn-success" class="" href="{{ route('getsuatintuyendung',$tindadang->id) }}" style="margin-bottom: 2px"><i class="far fa-edit"></i> Chỉnh sửa</a>
                    <br>
                      <a name="delete" class="btn btn-danger" onclick="var x=confirm('Bạn có muốn xóa ?'); return x;" href="{{ route('xoatintuyendung',$tindadang->id) }}"><i class="fas fa-trash-alt"></i> Xóa</a></p>
                    </center>
                  </div>
                </div>
              </div>
              <hr>
              @endforeach
            </div>
            <hr>
          </div>
        </div>    
      </div>
    </div>
    
    @endsection