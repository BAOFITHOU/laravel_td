@extends('layouts.index')
@section('title')
Chi tiết danh mục
@endsection
@section('content')
<div class="main">
  <div class="thanhmenuduoi">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('getdanhmucvieclam') }}">Danh Mục Việc Làm /</a></li>
            @foreach($tennganh as $tennganhs)
            <li class="breadcrumb-item"><a href="#">{{ $tennganhs->tennganh }}</a></li>
            @endforeach
          </ol>
        </nav>
        <p></p>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row" >
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="up3" style="height:490px;height:auto;padding: 0px">
          <div class="ttup3" style=" background-color: #DFF0D8 ;height:auto;padding: 15px;margin: 0px">
            <center>
              @foreach($tennganh as $tennganhs)
              <p>{{ $tennganhs->tennganh }}</p>
              @endforeach
            </center>
          </div>
          @foreach($danhmuc as $danhmucs)
          <div class="row" style="padding: 30px">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
              <a href=""><img src="images/{{$danhmucs->thongtinntd->users->avatar}}"style="width:80px;height:80px;border-radius: 50%" alt=""></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="chitietcongviec">
                <a href="{{ route('gettintuyendung',$danhmucs->id) }}"> <h5 class="text-left">{{ $danhmucs->tieudetin }}</h5> </a>
                <p>
                  <a class="text-left" href="{{ route('xemthongtinntd',$danhmucs->id_ntd) }}"><span>{{ $danhmucs->thongtinntd->tencongty }}</span></a>
                </p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                  {{ $danhmucs->diadiem }}</p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="chitietcongviec">
                  <h5>Số Lượng:{{ $danhmucs->soluongtuyen }}</h5>
                  <p>
                    <span>{{ $danhmucs->hinhthuclamviec->tenhinhthuc }}</span>
                  </p>
                </div>
                <p>Ngành:{{$danhmucs->nganh->tennganh  }}</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="chitietcongviec">
                  <h6><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $danhmucs->hannophoso }}</h6>
                  <p>
                    <span>Lương:{{ $danhmucs->mucluong }}</span>
                  </p>
                </div>
              </div>
            </div>
            <hr>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection