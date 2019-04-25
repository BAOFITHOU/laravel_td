@extends('layouts.indexuv')
@section('title')
Danh sách CV
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
                        <li class="breadcrumb-item"><a href="{{ route('trangchuuv')}}">Ứng Viên /</a></li>
                        <li class="breadcrumb-item"><a href="{{route('getdanhsachcv',Auth::id())}}">Danh sách CV</a></li>
                    </ol>
                </nav>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="up3" style="text-align: center; padding: 0px;">
                    <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                      <center>
                        <p href="">DANH SÁCH CV</p>
                    </center>
                </div> 
                @if(session('thongbao'))
                <div class="alert alert-info">
                    {{session('thongbao')}}
                </div> 
                @endif
                
           <hr>
           @foreach($dscv as $dscvs)

           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <p><b>CV Ngành:</b>{{ $dscvs->nganh->tennganh }}</p>
                <p style="padding-top: 15px"><b>Vị trí ứng tuyển:</b>{{ $dscvs->vitrimongmuon }}</p>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              <p><b>Kinh nghiệm làm việc:</b>{{ $dscvs->kinhnghiem }}</p>
            <p style="padding-top: 15px"><b>Địa điểm mong muốn:</b>{{ $dscvs->diadiemmongmuon }}</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              <p><b>Mục tiêu nghề nghiệp:</b>{{ $dscvs->muctieunghenghiep }}</p>
              <p ><b>Mô tả:</b>{{ $dscvs->themmota }}</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding: 0px 50px">
            <a href="cv/{{$dscvs->tenfilecv}}" class="btn btn-primary"><i class="fas fa-eye"></i>Xem chi tiết</a>
            <br>
            <a href="Ungvien/suacv/{{ $dscvs->id }}" class="btn btn-success" style="margin-bottom:1px;margin-top: 1px"><i class="far fa-edit"></i> Chỉnh sửa</a>
            <br>
            <a href="Ungvien/xoacv/{{ $dscvs->id }}" onclick="var x=confirm('Bạn có muốn xóa cv này không ?'); return x;" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a>
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