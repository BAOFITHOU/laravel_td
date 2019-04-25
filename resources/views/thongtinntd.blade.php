@extends('layouts.index')
@section('title')
Nhà tuyển dụng
@endsection 
@section('content')
<base href="{{ asset('') }}">
<div class="main">
  <div class="thanhmenuduoi">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ / </a></li>
          </ol>
        </nav>
        <p></p>
      </div>
    </div>
  </div>
  <br> 
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-right: 0px;">
              <div class="up3xx" style="margin-top: 5px;height: auto">
               @foreach($ntd as $ntds)
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" >
                <center> 
                  <div class="" style="padding-top: 40px">
                    <div  class="photo"><img style="border-radius: 50%;" src="images/{{ $ntds->users->avatar }}" width="150" height="150" alt="Md Alamin Mir" /></div>
                    <h3 class="name"><b>{{ $ntds->tencongty }}</b></h3>
                    <p>Năm thành lập:  {{ $ntds->namthanhlap }}</p>
                    <p>Email:{{ $ntds->users->email }} </p>
                    <p>Website:{{ $ntds->website }}</p>
                    <br>
                  </div>
                </center>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" >
                <div class="inright" style="padding:10px;padding-left: 25px;margin: 10px">
                  <div class="row">
                    <center><h4><u>THÔNG TIN NHÀ TUYỂN DỤNG</u></h4></center>
                    <br>
                    <ul>
                      <li>Công Ty : {{ $ntds->tencongty }}</li>
                      <br>
                      <hr>
                      <li>Địa Chỉ : {{ $ntds->diadiem }}</li>
                      <br>
                      <hr>
                      <li>Quy Mô  : {{ $ntds->quymo }}</li>
                      <br>
                      <hr>
                      <li>Mô tả: {{ $ntds->motacongty }}</li>
                      <hr>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="up3" style="height:510px;height:auto;padding: 0px">
         <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
           <p href="">VIỆC LÀM NHÀ TUYỂN DỤNG ĐÃ ĐĂNG</p>
         </center>
       </div>
       @foreach($tintd as $tintds)
       <div class="row" style="padding: 30px">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
          <a href=""><img src="images/{{ $tintds->thongtinntd->users->avatar }}" style="width:80px;height:80px;border-radius: 50%" alt=""></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <div class="chitietcongviec">
            <a href="{{ route('gettintuyendung',$tintds->id) }}"> <h5 class="text-left">{{ $tintds->tieudetin }}</h5> </a>
            <p>
              <a class="text-left" href="{{ route('getthongtinntd',$tintds->id_ntd) }}"><span>{{ $tintds->thongtinntd->tencongty }}</span></a>
            </p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
              {{ $tintds->diadiem }}</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <div class="chitietcongviec">
              <h5>Số Lượng:{{ $tintds->soluongtuyen }}</h5>
              <p>
                <span>{{ $tintds->hinhthuclamviec->tenhinhthuc }}</span>
              </p>
            </div>
            <p>Ngành:{{$tintds->nganh->tennganh  }}</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <div class="chitietcongviec">
              <h5><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $tintds->hannophoso }}</h5>
              <p>
                <span>Lương:{{ $tintds->mucluong }}</span>
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
</section>
@endsection
