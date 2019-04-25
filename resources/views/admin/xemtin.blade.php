@extends('layouts.indexad')
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
          <ol class="breadcrumb"></ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="container">
    @foreach($tintd as $chitiettins)
    <div class="row">
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
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="sendcv text-center">
              @if($check==0)
              <form action="{{ route('pduyettin',$chitiettins->id) }}" method="post">
                {{ csrf_field() }}
              <button class="btn btn-success" type="submit" >Duyệt tin</button>
              <a class="btn btn-success" href=""  style="color: white" role="button" class="">Xóa tin</a>
              </form>
              @else
              <form action="{{ route('pboduyettin',$chitiettins->id) }}" method="post">
                {{ csrf_field() }}
              <button class="btn btn-danger" type="submit" >Bỏ duyệt tin</button>
              <a class="btn btn-success" href=""  style="color: white" role="button" class="">Xóa tin</a>
              </form>
              @endif
              <br>
              <br>
              <i class="fa fa-phone" aria-hidden="true"></i> Phone: {{ $chitiettins->thongtinntd->sdt }}
              <br>
              <i class="fa fa-envelope" aria-hidden="true"></i> Mail: {{ $chitiettins->thongtinntd->users->email }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <div class="up3">
            <div class="infobasic">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <p>
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <b>&nbsp&nbsp Mức Lương</b>: {{ $chitiettins->mucluong }}
                  </p>
                  <p>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp Yêu Cầu Bằng Cấp : {{ $chitiettins->trinhdohocvan }}
                  </p>
                  <p>
                    <i class="fa fa-users" aria-hidden="true"></i>&nbsp Số Lượng Cần Tuyển: {{ $chitiettins->soluongtuyen }}
                  </p>
                  <p>
                    <i class="fa fa-code-fork" aria-hidden="true"></i>&nbsp&nbsp&nbsp Ngành: {{ $chitiettins->nganh->tennganh }}
                  </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbsp&nbsp&nbsp Địa Điểm : {{ $chitiettins->diadiem }}
                  </p>
                  <p>
                    <i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp&nbsp Hình Thức Làm Việc : {{ $chitiettins->hinhthuclamviec->tenhinhthuc }}
                  </p>
                  <p>
                    <i class="fa fa-globe" aria-hidden="true"></i>
                  </i>&nbsp&nbsp Yêu Cầu Ngoại Ngữ : {{ $chitiettins->yeucaungoaingu }}
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>
                  <b>Mô Tả Công Việc</b>
                </h3>
                <p>- {{ $chitiettins->motacongviec }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>
                  <b>Yêu Cầu Hồ Sơ</b>
                </h3>
                <p>- {{ $chitiettins->yeucauhoso }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>
                  <b>Quyền Lợi</b>
                </h3>
                <p>- {{ $chitiettins->quyenloi }}</p>
            @endforeach
              </div>
              <hr>
            </div>

            <div class="container">
              <div class="row"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="row">
          <div class="up3">
            <div class="infobasic text-center">
              <img src="images/{{ $chitiettins->thongtinntd->users->avatar }}" height="200px" width="200px" style="border-radius: 50% " alt="">
              <br>
              <h3>{{ $chitiettins->thongtinntd->tencongty }}</h3>
              <p>Trụ Sở : {{ $chitiettins->thongtinntd->diadiem }}</p>
              <p>Năm Thành Lập : {{ $chitiettins->thongtinntd->namthanhlap }}</p>
              <p>Quy Mô Công Ty : {{ $chitiettins->thongtinntd->quymo }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
{{--   
  <script type="text/javascript">
    function dis()
    {
      x= document.getElementById('delete');
      var y=confirm("bạn chắc chắn muốn xóa");
      if(y==false)
      {
        return true;
      }
      else
      {
       return false;
     }
   }
 </script> --}}

