@extends('layouts.indexuv')
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
            <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng viên /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('thongbaouv')}}">Thông Báo</a></li>
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
            <p href="">Thông Báo</p>
          </center>
        </div> 
        <hr>
        <div class="row" style="padding: 30px;margin: 20px">
          <ul>
            @foreach($data as $datas)
            <li>Bạn vừa được nhà tuyển dụng 
              <span style="color: red;">"{{ $datas->tintd->thongtinntd->tencongty }}"</span> 
              xác nhận cv <span style="color: red;">"{{ $datas->cvs->vitrimongmuon }}"</span> ngành <span style="color: red;">"{{ $datas->cvs->nganh->tennganh }}"</span> 
              <a href="{{ route('getthongtinntd',$datas->tintd->id_ntd) }}">Xem thông tin nhà tuyển dụng</a>
              <a href="{{ route('gettintuyendung',$datas->id_tin) }}">Xem tin</a>
              <span>{{ $datas->created_at }}</span></li>
              <hr>
              @endforeach
              <div style="text-align: center;">
                {!! $data->links() !!}
              </div>
            </ul>
          </div>
          <hr>
        </div>
      </div>    
    </div>
  </div>
  @endsection

