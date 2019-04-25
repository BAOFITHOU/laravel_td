@extends('layouts.indexntd')
@section('title')
Thông Báo 
@endsection
@section('content') 
<div class="main">
  <base href="{{ asset('') }}">
  <div class="thanhmenuduoi">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chủ /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Nhà Tuyển Dụng /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('thongbao') }}">Thông Báo</a></li>
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
       <div class="up3" style="height:490px;height:auto;padding: 0px;margin-top:20px">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
            <p href="">Thông Báo</p>
          </center>
        </div> 
        @foreach($data as $datas)
        <div class="row" style="padding: 30px;margin: 20px">
          <ul>
            <li>  Ứng viên <span style="color: red;">"{{ $datas->cvs->thongtinsv->users->name }}"</span> đã nộp cv vào tin <span style="color: red;">"{{ $datas->tintd->tieudetin }}"</span> của bạn
              <a href="nhatuyendung/xemungvien/{{ $datas->cvs->id  }}/{{ $datas->id_tin }}">Xem thông tin ứng viên</a>
              <a href="{{ route('getxemtin',$datas->id_tin) }}">Xem tin</a>
              <span>{{ $datas->created_at }}</span></li>
            </ul>
          </div>
          <hr>
          @endforeach
          <div style="text-align: center;">
                {!! $data->links() !!}
              </div>
        </div>
      </div>    
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
      </div>
    </div>
  </div>
  @endsection

