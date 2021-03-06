@extends('layouts.indexuv')
@section('title')
Chi tiết tin tuyển dụng
@endsection
@section('content')
<div class="main"> 
  <div class="thanhmenuduoi">
    <div class="container">
      <div class="row">
        <div class="div"></div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng Viên /</a></li>
            @foreach($chitiettin as $chitiettins)
            <li class="breadcrumb-item"><a href="{{ route('xemdanhmucvieclam') }}">Danh Mục Việc Làm /</a></li>
            <li class="breadcrumb-item"><a href="{{ route('xemdanhmucvieclamnganh',$chitiettins->id_nganh) }}">{{ $chitiettins->nganh->tennganh }} /</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('gettintuyendung',$chitiettins->id) }}">Tin Tuyển Dụng</a></li>
            @endforeach
          </ol>
        </nav>
        
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach($chitiettin as $chitiettins)
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="up3" style="overflow: hidden;">
          <div class="infobasic">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <div class="ndtt text-center">
                <h1>{{ $chitiettins->tieudetin }}</h1>
                <span>{{ $chitiettins->thongtinntd->tencongty }}</span>
                <br>
                <i class="fa fa-clock-o" aria-hidden="true"></i> Hạn Nộp : {{ $chitiettins->hannophoso }}
                <br>
                

              </div>
            </div> 
          </div>
          {{-- **********************************KHU VỰC CẦN SỬA***************************************** --}}
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="sendcv text-center"> 
             {{-- Nếu có CV thuộc thuộc ngành mà tin tuyển dụng cần thì hiện --}}
             @if($kt ==3) 
             <button data-toggle="collapse" data-target="#demo" class="btn btn-success">Nộp CV</button>
             <form action="Ungvien/chitiettintuyendung/{{$chitiettins->id}}" method="post">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
               <div id="demo" class="collapse">
                <center> 
                  <select style="width: 250px" id="inputState" class="form-control" name="id_cv">  
                    @foreach($cvss as $key => $cvs)
                    <option  value="{{$cvs['id'] }}">CV: {{ $cvs['vitrimongmuon'] }} - {{ $chitiettins->nganh->tennganh }}</option>
                    @endforeach
                   {{--  @foreach($kiemtracv as $key => $cvs)
                    <option  value="{{$cvs['id'] }}">CV: {{ $cvs['vitrimongmuon'] }} - {{ $chitiettins->nganh->tennganh }}</option>
                    @endforeach --}}
                  </select>
                </center>
                <input type="hidden" value="{{ $chitiettins->id }}" name="id_tin">
                <button type="submit" class="btn btn-info" >Xác nhận</button>
              </div>
              <br>
            </form>
            @endif
            {{-- Nếu có CV thuộc ngành đó nhưng nộp hết CV r --}}
            @if($kt == 2)
            <br>
            <button type="textarea" class="btn btn-info" >Bạn đã nộp hết CV</button>
            <br>
            @endif
            {{-- Nếu không có CV nào thuộc ngành đó thì phải tạo CV --}}
            @if($kt ==1)
            <p style="color:blue;"><small>*Bạn chưa có CV cho ngành này</small></p>
            <a href="{{ route('getthemthongtincv') }}" class="btn btn-success">Tạo CV ngay</a>
            <br>
            @endif
            <br>
            @if(session('thongbao'))
            <div class="alert alert-success">
              {{session('thongbao')}}
            </div> 
            @endif
            <i class="fa fa-phone" aria-hidden="true"></i> Phone: {{ $chitiettins->thongtinntd->sdt }}
            <br>
            <i class="fa fa-envelope" aria-hidden="true"></i> Mail: {{ $chitiettins->thongtinntd->users->email }}
            <br>
          </div>
        </div>
        {{-- *****************************************KHU VỰC CẦN SỬA***************************************    --}} 
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="up3">
        <div class="infobasic text-center">
          <img src="images/{{ $chitiettins->thongtinntd->users->avatar }}" alt="" style="width:180px;height:180px;border-radius: 50%">
          <br>
          <h3>{{ $chitiettins->thongtinntd->tencongty }}</h3>
          <p>Trụ Sở : {{ $chitiettins->thongtinntd->diadiem }}</p>
          <p>Năm Thành Lập : {{ $chitiettins->thongtinntd->namthanhlap }}</p>
          <p>Quy Mô Công Ty : {{ $chitiettins->thongtinntd->quymo }}</p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="up3" style="padding: 20px">
        <div class="infobasic">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <p> <i class="fa fa-money" aria-hidden="true"></i><b>&nbsp&nbsp Mức Lương</b>:{{ $chitiettins->mucluong }}</p>
              <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp Yêu Cầu Bằng Cấp : {{ $chitiettins->trinhdohocvan }}</p>
              <p><i class="fa fa-users" aria-hidden="true"></i>&nbsp Số Lượng Cần Tuyển:{{ $chitiettins->soluongtuyen }}</p>
              <p><i class="fa fa-code-fork" aria-hidden="true"></i>&nbsp&nbsp&nbsp Ngành: {{ $chitiettins->nganh->tennganh }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbsp&nbsp&nbsp Địa Điểm : {{ $chitiettins->diadiem }}</p>
              <p><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp&nbsp Hình Thức Làm Việc : {{ $chitiettins->hinhthuclamviec->tenhinhthuc }}</p>
              <p><i class="fa fa-globe" aria-hidden="true"></i></i>&nbsp&nbsp Yêu Cầu Ngoại Ngữ : {{ $chitiettins->yeucaungoaingu }}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3><b>Mô Tả Công Việc</b></h3>
              <p>- {{ $chitiettins->motacongviec }}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3><b>Yêu Cầu Hồ Sơ</b></h3>
              <p>- {{ $chitiettins->yeucauhoso }}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3><b>Quyền Lợi</b></h3>
              <p>- {{ $chitiettins->quyenloi }}</p>
              @endforeach
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="up3" style="height:510px;height:auto;padding: 0px">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
            <p href="">VIỆC LÀM NHÀ TUYỂN DỤNG ĐÃ ĐĂNG</p>
          </center>
        </div>
        <table class="table">
          <thead>
            <tr>
            </tr>
          </thead>
          <tbody>
            @foreach($tinntddadang as $viecphuhop)
            <div class="row" style="padding: 30px">
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <img src="images/{{ $viecphuhop->thongtinntd->users->avatar }}" style="width:80px;height:80px;border-radius: 50%">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="chitietcongviec">
                  <a href="{{ route('gettintuyendung',$viecphuhop->id) }} "> <h5 class="text-left">{{ $viecphuhop->tieudetin }}</h5> </a>
                  <p>
                    <a href="{{ route('xemthongtinntd',$viecphuhop->id_ntd) }}"><span>{{ $viecphuhop->thongtinntd->tencongty }}</span></a>
                  </p>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                    {{ $viecphuhop->diadiem }}</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="chitietcongviec">
                    <h5>Số Lượng:{{ $viecphuhop->soluongtuyen }}</h5>
                    <p>
                      <span>{{ $viecphuhop->hinhthuclamviec->tenhinhthuc }}</span>
                    </p>
                  </div>
                  <p>Ngành:{{$viecphuhop->nganh->tennganh  }}</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="chitietcongviec">
                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $viecphuhop->hannophoso }}</h5>
                    <p>
                      <span>Lương:{{ $viecphuhop->mucluong }}</span>
                    </p>
                  </div>
                </div>
              </div>
              <hr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
