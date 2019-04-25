@extends('layouts.indexntd')
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
           @foreach($chitiettin as $chitiettins)
           <li class="breadcrumb-item"><a href="#">Trang Chủ /</a></li>
           <li class="breadcrumb-item active"><a href="{{ route('trangchuntd') }}">Nhà tuyển dụng /</a></li>
           <li class="breadcrumb-item active"><a href="{{ route('getxemtin',$chitiettins->id) }}">Tin tuyển dụng</a></li>
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
@if(($chitiettins->thongtinntd->id_account)==Auth::id())
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="sendcv text-center">
            
           {{-- <button type="submit" class="btn btn-success nutbam"> --}}
             {{--  <i class="fa fa-paper-plane" aria-hidden="true"></i> Nộp CV --}}
             <a class="btn btn-success" href="{{ route('getsuatintuyendung',$chitiettins->id) }}" style="color: white">Sửa tin</a>
           {{-- </button> --}}
          {{--  <button type="submit" class="btn btn-success nutbam"> --}}
             {{--  <i class="fa fa-paper-plane" aria-hidden="true"></i> Nộp CV --}}
             <a class="btn btn-success" href="{{ route('xoatintuyendung',$chitiettins->id) }}" onclick="var x=confirm('Bạn có muốn xóa ?'); return x;" style="color: white" class="">Xóa tin</a>
          {{--  </button> --}}
@else
<center><span><i>Bạn đang xem tin của nhà tuyển dụng khác</i></span></center> 
@endif
           <br>
           <br>
           <i class="fa fa-phone" aria-hidden="true"></i> Phone: {{ $chitiettins->thongtinntd->sdt }}
           <br>
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
          <div class="container">
            <div class="row">
            </div>
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

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
        <center>
          <p href="">DANH SÁCH ỨNG VIÊN ĐÃ NỘP CV ({{ $dem1 }} CV)</p>
        </center>
      </div>
      <div class="up3" style="text-align: center; padding: 35px;margin-top:0px;">
        <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
           <p><b>Avatar</b></p>  
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
           <p><b>Tên ứng viên</b></p>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
           <p><b>Vị trí mong muốn</b></p>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
           <p><b>Kinh nghiệm</b></p>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
           <p><b>Hành động</b></p>
         </div>
       </div>
       @foreach($cvs as $cvss) 
       <div class="row">
        <hr>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <p><img src="images/{{ $cvss->cvs->thongtinsv->users->avatar }}" style="width:70px;height:70px;border-radius: 50%" alt=""></p>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
          <p>{{ $cvss->cvs->thongtinsv->users->name }}</p>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <p>{{ $cvss->cvs->vitrimongmuon }}</p>
          <p>{{ $cvss->cvs->nganh->tennganh }}</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
          <p>{{ $cvss->cvs->kinhnghiem }}</p> 
        </div> 

        @foreach($chitiettin as $chitiettins)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2"> 
          <a href="nhatuyendung/xemungvien/{{$cvss->cvs->id}}/{{ $chitiettins->id }}" class="baoquanhnut">
            <i class="fas fa-eye"></i> Xem CV</a>
           {{--  <a href="">
              <i class="fas fa-trash-alt"></i></a>
 --}}            </div>
          </div>

          @endforeach
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
            <p href="">DANH SÁCH ỨNG VIÊN ĐÃ DUYỆT ({{ $dem2 }} CV)</p>
          </center>
        </div>
        <div class="up3" style="text-align: center; padding: 35px;margin-top:0px;">
          <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
             <p><b>Avatar</b></p>  
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
             <p><b>Tên ứng viên</b></p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
             <p><b>Vị trí mong muốn</b></p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
             <p><b>Kinh nghiệm</b></p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
             <p><b>Hành động</b></p>
           </div>
         </div>
         @foreach($cvsdaduyet as $cvss) 
       <div class="row">
        <hr>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <p><img src="images/{{ $cvss->cvs->thongtinsv->users->avatar }}" style="width:70px;height:70px;border-radius: 50%" alt=""></p>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
          <p>{{ $cvss->cvs->thongtinsv->users->name }}</p>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <p>{{ $cvss->cvs->vitrimongmuon }}</p>
          <p>{{ $cvss->cvs->nganh->tennganh }}</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
          <p>{{ $cvss->cvs->kinhnghiem }}</p> 
        </div>
        @foreach($chitiettin as $chitiettins)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2"> 
          <a href="nhatuyendung/xemungvien/{{$cvss->cvs->id}}/{{ $chitiettins->id }}" class="baoquanhnut">
            <i class="fas fa-eye"></i> Xem CV</a>
            {{-- <a href="">
              <i class="fas fa-trash-alt"></i></a> --}}
            </div>
          </div> 

          @endforeach
          @endforeach

       </div>
     </div>
   </div>
 </div>
</div>
</div>
<script type="text/javascript">
  function dis()
  {

    var y=confirm("bạn chắc chắn muốn xóa");

 }
</script>
@endsection
