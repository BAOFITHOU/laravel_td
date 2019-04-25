@extends('layouts.indexntd')
@section('title')
Sửa tin tuyển dụng
@endsection
@section('content')
<base href="{{ asset('') }}">
<div class="main">
<div class="thanhmenuduoi">
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          @foreach($data as $datas)
          <li class="breadcrumb-item"><a href="#">Trang chủ /</a></li>
          <li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Nhà tuyển dụng /</a></li>
          <li class="breadcrumb-item"><a href="{{ route('getsuatintuyendung',$datas->id) }}">Sửa Tin Tuyển Dụng</a></li>
          @endforeach
        </ol>
      </nav>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="up3"  style="height:715px;height:auto;margin-top:0px;padding: 0px">
        <div class="ndtt text-center">
          <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <p href="">SỬA TIN TUYỂN DỤNG</p>
          </div> 
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(session('thongbao'))
            <div class="alert" style="color:blue;margin-top: 10px">
              {{session('thongbao')}} <i class="fa fa-check" aria-hidden="true"></i>
            </div>
            @endif
          </div>
          @foreach($data as $datas)
          {{-- {{ dd($datas->thongtinntd->id_account)}} --}}
 
          @if(($datas->thongtinntd->id_account)==Auth::id())
        
      
          <form action="{{ route('postsuatintuyendung',$datas->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="row" style="padding: 35px">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                  <small><p class="text-left">*Tiêu đề tin</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="vttuyen" value="{{$datas->tieudetin }}" placeholder="Tiêu đề tin" name="tieudetin">
                    </div>
                  </div>
                </div> 
                <div class="row">
                  <small><p class="text-left">*Ngành</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <select class="form-control" id="sel1" name="nganh">
                        @foreach($nganh as $nganhs)
{{--                         @if($datas->id_nganh == $nganhs->id)
                        {{ "selected" }}
                        @endif --}}
                        <option value="{{ $nganhs->id }}">{{ $nganhs->tennganh }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Vị trí tuyển dụng</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="vttuyen" value="{{ $datas->vitrituyendung }}" placeholder="Vị Trí Cần Tuyển" name="vitrituyendung">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Địa điểm làm việc</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="ddlv" value="{{ $datas->diadiem }}" placeholder="Địa Điểm Làm Việc" name="diadiem">
                    </div> 
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Số lượng tuyển</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="number" class="form-control" id="slct" value="{{ $datas->soluongtuyen }}" placeholder="Số Lượng Cần Tuyển" name="soluongtuyen">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Liên hệ</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type=text" class="form-control" id="dtlh" placeholder="Điện Thoại Liên Hệ" value="{{ $datas->lienhe }}" name="lienhe">
                    </div>
                  </div>
                </div>
                <div class="row"> 
                  <small><p class="text-left">*Hình thức làm việc</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <select class="form-control" id="htlv" name="hinhthuclamviec">
                        @foreach($hinhthuclamviec as $htlv)
                        {{-- @if($datas->id_hinhthuc == $htlv->id)
                        {{ "selected" }}
                         @endif --}}
                        <option value="{{ $htlv->id }}">{{ $htlv->tenhinhthuc }}</option>
                        @endforeach
                      </select>
                    </div>                        
                  </div>
                </div>        
                <div class="row">
                  <small><p class="text-left">*Mức lương</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input {{-- type="number" --}} class="form-control" id="mlmm" value="{{ $datas->mucluong }}" placeholder="Mức Lương" name="mucluong">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                 {{--  <small><p class="text-left">*Hạn nộp hồ sơ</p></small> --}}
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    {{-- <div class="form-group">
                                            <input class="form-control" type="date" placeholder="Hạn Nộp Hồ Sơ" value="{{ $datas->hannophoso }}" id="example-date-input" name="hannophoso">
                      <input class="form-control" type="date" placeholder="Hạn Nộp Hồ Sơ" value="{{ $datas->hannophoso }}"  name="hannophoso">
                    </div> --}}
                  </div>
                </div>  
                <input type="hidden" value="{{ $datas->thongtinntd->id }}" name="ntd">  
                <div class="row">
                  <small><p class="text-left">*Mô tả công việc</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="form-group">
                        <textarea class="form-control" id="mtcv" placeholder="Mô tả công việc" rows="4" value="{{ $datas->motacongviec }}" name="motacongviec">{{ $datas->motacongviec }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Yêu cầu ngoại ngữ</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="form-group">
                        <textarea class="form-control" id="ycnn" placeholder="Yêu Cầu Ngoại Ngữ" rows="4" value="{{ $datas->yeucaungoaingu }}" name="yeucaungoaingu">{{ $datas->yeucaungoaingu }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Yêu cầu hồ sơ</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="form-group">
                        <textarea class="form-control" id="ycnn" placeholder="{{ $datas->yeucauhoso }}" cols="50" rows="4" value="{{ $datas->yeucauhoso }}" name="yeucauhoso">{{ $datas->yeucauhoso }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Quyền lợi</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" id="ql" placeholder="{{ $datas->quyenloi  }}" rows="5" value="{{ $datas->quyenloi}}" name="quyenloi">{{ $datas->quyenloi  }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <small><p class="text-left">*Trình độ</p></small>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <select class="form-control" id="yctd" value="faculty" name="trinhdohocvan">
                        @foreach($trinhdo as $trinhdos)
                        <option value="{{ $trinhdos->tentrinhdo }}">{{ $trinhdos->tentrinhdo }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>   
                </div>
              </div> 
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-success btn-outline-danger">Sửa tin</button> 
                 <a href="{{route('trangchuntd')}}" style="border: 1px solid grey;margin-left:10px" class="btn btn-toolbar">Quay lại</a>
           {{-- <a type ="submit">Sửa tin</a> --}}
           {{-- <a href=""><i class="fa fa-paper-plane" aria-hidden="true" ></i> Sửa tin</a> --}}
            @else
          <center><h3>Xin lỗi bạn không có quyền sửa tin này</h3></center>
          @endif
            @endforeach
         

          </form>


        </div> <br>
      </div>
    </div>
  </div>
</div>
</div>
@endsection