@extends('layouts.indexuv')
@section('title')
Danh sách việc đã ứng tuyển
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
            <li class="breadcrumb-item"><a href="{{ route('viecdaungtuyen') }}">Việc đã ứng tuyển</a></li>
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
            <p href="">Danh sách việc đã ứng tuyển</p>
          </center>
        </div>
        @foreach($data as $tingap)
        <div class="row" style="padding: 30px">
         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
           <img src="images/{{ $tingap->tintd->thongtinntd->users->avatar }}" style="width:80px;height:80px;border-radius: 50%" alt="">
         </div>
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="chitietcongviec">
            <a href="{{ route('gettintuyendung',$tingap->tintd->id) }}"><h5 class="text-left">{{ $tingap->tintd->tieudetin }}</h5> </a>
            <p>
              <a class="text-left" href="{{route('xemthongtinntd',$tingap->tintd->thongtinntd->id) }}"><span>{{ $tingap->tintd->thongtinntd->tencongty }}</span></a>
            </p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
              {{ $tingap->tintd->diadiem }}</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="chitietcongviec">
              <h5>Số Lượng:{{ $tingap->tintd->soluongtuyen }}</h5>
              <p>
                <span>{{ $tingap->tintd->hinhthuclamviec->tenhinhthuc }}</span>
              </p>
            </div> 
            <p>Ngành:{{$tingap->tintd->nganh->tennganh  }}</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="chitietcongviec">
              <h5><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $tingap->tintd->hannophoso }}</h5>
              <p>
                <span>Lương:{{ $tingap->tintd->mucluong }}</span>
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