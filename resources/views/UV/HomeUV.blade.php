@extends('layouts.indexuv')
@section('title')
Trang ứng viên
@endsection 
@section('content') 
<div class="main">
    <div class="thanhmenuduoi">
        <div class="container">
            <div class="row">
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang chủ /</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng viên</a></li>
                  </ol>
              </nav>
              <p></p>
          </div> 
      </div>
  </div>
  <div class="container">
    <div class="row">
        <h3 class="text-center">BẮT ĐẦU TÌM VIỆC CHỈ VỚI 3 BƯỚC</h3>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="up3 text-center">
                <p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-user-circle"></i></p>
                <p><b>Hoàn Thiện Thông Tin Cá Nhân Của Bạn</b></p>
                <i>Hãy cung cấp đầy đủ thông tin cá nhân của bạn</i>
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="up3 text-center">
                <p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-address-card"></i></p>
                <p><b>Tạo CV Cho Riêng Bạn</b></p>
                <i>Hãy tự tạo CV mang phong cách của riêng bạn</i>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="up3 text-center">
                <p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-check-double"></i></p>
                <p><b>Nộp CV & Đợi tin trúng tuyển</b></p>
                <i>Tìm kiếm ngành nghề phù hợp với bạn và nộp CV</i>
            </div>
        </div>
    </div>  
</div>
<div class="container">
    <div class="row">  
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-right: 0px;">
                    <div class="up3xx" style="margin-top: 5px;height: 467px;">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">   
                            <center>
                                <div class="avatar" style="padding-top: 40px">
                                    <div class="photo"><img src="images/{{Auth::user()->avatar}}" width="150" height="150" alt="Md Alamin Mir" /></div>
                                    <center><a href="{{route('upimg')}}"><i type="file" class="fas fa-camera"></i></a>
                                        <br>
                                    </center>
                                    <h3 class="name"><b>{{Auth::user()->name}}</b></h3>
                                    <p>Email:{{Auth::user()->email}} </p>
                                    <br>
                                    @if($checker==1)
                                    <p><a href="Ungvien/suathongtin/{{Auth::id()}}"></i><i class="fas fa-edit" style="font-size: 30px"></i></a></p>
                                    @else
                                    <p><a href="Ungvien/themthongtinuv/{{Auth::id()}}"></i><i class="fas fa-upload" style="font-size: 30px"></i></a></p>
                                    @endif
                                </div>
                            </center>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="inright" style="padding:10px;padding-left: 25px;margin: 10px">
                            <div class="row">
                               <center><h4><u>THÔNG TIN CÁ NHÂN</u></h4></center>
                               <br>
                               <ul>
                                  {{-- {{ ($nhatuyendung)? $nhatuyendung[0]->email:'Chưa cập nhâp' }} --}}

                                  <li>Họ và tên : {{ ($users)? $users[0]->name:'Chưa cập nhâp' }} </li>
                                  <br>
                                  <hr>
                                  <li>Ngày sinh :{{ ($infosv)? $infosv[0]['ngaysinh']:'Chưa cập nhật' }} </li>
                                  <br>
                                  <hr>
                                  <li>Địa chỉ   :{{ ($infosv)? $infosv[0]['diachi']:'Chưa cập nhật' }} </li>
                                  <br>
                                  <hr>
                                  <li>Giới tính :{{ ($infosv)? $infosv[0]['gioitinh']:'Chưa cập nhật' }}</li>
                                  <br>
                                  <hr>
                                  <li>SĐT       :{{ ($infosv)? $infosv[0]['sdt']:'Chưa cập nhật' }} </li>
                                  {{-- @endforeach --}}
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      {{-- 	</div> --}}
  </div> 
</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="up3" style="margin-top: 4px">
       <br>
       <center><h4>THÔNG TIN CV</h4></center>

       <div  style="padding-left: 25%;">
        <br>
        
        <a href="{{route('getdanhsachcv',Auth::id())}}"><i class="fas fa-eye" style="font-size: 30px;color:#29C00B;padding: 10px;"></i>Xem danh sách CV</a>
        <br/>
        <a href="{{route('getthemthongtincv')}}"><i class="fa fa-plus" aria-hidden="true"
           style="font-size: 30px;color:#29C00B;padding: 10px;"></i>Tạo thêm CV</a>
           <br>

       </div>
       @if($demcv!=0)
       <center><p><i>Trạng thái: Bạn có {{$demcv}} cv</i></p></center>
       @else
       <center><p><i>Trạng Thái: Bạn Chưa Upload CV</i></p></center>
       @endif
       <br>
   </div>
</div>
<div class="inright text-center">

</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="inright text-center">
                <div class="up3" style="height:490px;height:auto;padding: 0px">
                    <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                        <p href="">TÌM KIẾM</p>
                    </div>
                    <center>
                      <form action="{{route('find')}}">
<ul style="list-style-type: none">
    <li>
    <input class="form-control mr-sm-2" style="width: 200px;list-style-type: none" name="search" id="search-input" type="search" placeholder="Search" aria-label="Search">
  </li>
  <br> 

  <li><button class="btn btn-outline-success my-2 my-sm-0 search" style="padding-left: 10px" type="submit"><i class="fas fa-search"></i></button></li>
</ul>
    </form>
                       
                   </center>
                   <hr>
               </div>
           </div>
       </div> 
       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="inright ">
            <div class="up3"style="height:490px;height:auto;padding: 0px">
                <div class="ttup3 text-center" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                    <p href="">VIỆC LÀM PHÙ HỢP</p>
                </div>
                @foreach($viecphuhop as $viecphuhops)
                <div class="row" style="padding: 30px">
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <img src="images/{{ $viecphuhops->thongtinntd->users->avatar }}" style="width:80px;height:80px;border-radius: 50%" alt="">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="chitietcongviec">

                      <a href="{{ route('gettintuyendung',$viecphuhops->id) }}"> <h5 class="text-left">{{ $viecphuhops->tieudetin }}</h5> </a>
                      <p>

                        <a href="{{ route('xemthongtinntd',$viecphuhops->id_ntd) }}" class="text-left"><span>{{ $viecphuhops->thongtinntd->tencongty }}</span></a>

                    </p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                      {{ $viecphuhops->diadiem }}</p>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="chitietcongviec">
                  <h5>Số Lượng:{{ $viecphuhops->soluongtuyen }}</h5>
                  <p>
                    <span>{{ $viecphuhops->hinhthuclamviec->tenhinhthuc }}</span>
                </p>
            </div>
            <p>Ngành:{{$viecphuhops->nganh->tennganh  }}</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="chitietcongviec">
              <h5><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $viecphuhops->hannophoso }}</h5>
              <p>
                <span>Lương:{{ $viecphuhops->mucluong }}</span>
            </p>
        </div>
    </div>
</div> 
<hr>
@endforeach
<div style="text-align: center;">
    {!! $viecphuhop->links() !!}
</div>
<hr>						
</div> 

</div>			
</div>
</div>
</div>
<section>
   <div class="container">
      <div class="duyettheodanhmuc">
         <div class="danhmuc">
            <div class="row">
               <div class="main-heading">
                  <div class="container">
                     <center>
                        <h3 style="margin: 20px;">NGÀNH NGHỀ NỔI BẬT </h3>
                    </center>
                </div>
            </div>
        </div> <!-- row duyệt theo danh mục -->
        <div class="col-md-12 text-center">
           <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                 <div class="nddanhmuc">
                    <div class="icondanhmuc">
                       <i class="fas fa-laptop-code subicon"></i>
                   </div>
                   <div class="noidungicondanhmuc" style="margin: 10px">
                       <h4><a href="Ungvien/danhmucvieclamnganh/1">Công Nghệ Thông Tin</a></h4>
                       <p style="color: grey;font-family: sans-serif;">(
                           @if($cntt)
                           {{ $cntt }} tin tuyển dụng
                           @else
                           {{ 'Không có tin' }}
                           @endif
                       )</p>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
             <div class="nddanhmuc">
                <div class="icondanhmuc">
                   <i class="fas fa-plane-departure subicon"></i>
               </div>
               <div class="noidungicondanhmuc" style="margin: 10px">
                   <h4><a href="Ungvien/danhmucvieclamnganh/12">Quản trị dịch vụ du lịch và lữ hành</a></h4>
                   <p style="color: grey;font-family: sans-serif;">(
                       @if($qtdvdlvlh)
                       {{ $qtdvdlvlh }} tin tuyển dụng
                       @else
                       {{ 'Không có tin' }}
                   @endif)</p>
               </div>
           </div>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
         <div class="nddanhmuc">
            <div class="icondanhmuc">
               <i class="fas fa-pencil-alt subicon"></i>
           </div>
           <div class="noidungicondanhmuc" style="margin: 10px">
               <h4><a href="Ungvien/danhmucvieclamnganh/9">Thiết kế công nghiệp</a></h4>
               <p style="color: grey;font-family: sans-serif;">(
                   @if($tkcn)
                   {{ $tkcn }} tin tuyển dụng
                   @else
                   {{ 'Không có tin' }}
               @endif)</p>
           </div>
       </div>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <div class="nddanhmuc">
        <div class="icondanhmuc">
           <i class="fas fa-wrench subicon"></i>
       </div>
       <div class="noidungicondanhmuc" style="margin: 10px">
           <h4><a href="Ungvien/danhmucvieclamnganh/14">Công nghệ kỹ thuật điều khiển và tự động hóa</a></h4>
           <p style="color: grey;font-family: sans-serif;">(
               @if($cnktdkvtdh)
               {{ $cnktdkvtdh }} tin tuyển dụng
               @else
               {{ 'Không có tin' }}
           @endif)</p>
       </div>

   </div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 <div class="nddanhmuc">
    <div class="icondanhmuc">
       <i class="fas fa-language subicon"></i>
   </div>
   <div class="noidungicondanhmuc" style="margin: 10px">
       <h4><a href="Ungvien/danhmucvieclamnganh/10">Ngôn ngữ Anh</a></h4>
       <p style="color: grey;font-family: sans-serif;">(
           @if($nna)
           {{ $nna }} tin tuyển dụng
           @else
           {{ 'Không có tin' }}
       @endif)</p>
   </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 <div class="nddanhmuc">
    <div class="icondanhmuc">
       <i class="fas fa-briefcase subicon"></i>
   </div>
   <div class="noidungicondanhmuc" style="margin: 10px">
       <h4><a href="Ungvien/danhmucvieclamnganh/7">Quản trị kinh doanh</a></h4>
       <p style="color: grey;font-family: sans-serif;">(
           @if($qtkd)
           {{ $qtkd }} tin tuyển dụng
           @else
           {{ 'Không có tin' }}
       @endif)</p>
   </div>

</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 <div class="nddanhmuc">
    <div class="icondanhmuc">
       <i class="fas fa-chart-line subicon"></i>
   </div>
   <div class="noidungicondanhmuc" style="margin: 10px">
       <h4><a href="Ungvien/danhmucvieclamnganh/3">Tài chính - Ngân hàng</a></h4>
       <p style="color: grey;">(
           @if($tcnh)
           {{ $tcnh }} tin tuyển dụng
           @else
           {{ 'Không có tin' }}
       @endif)</p>
   </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 <div class="nddanhmuc">
    <div class="icondanhmuc">
       <i class="fas fa-info-circle subicon"></i>
   </div>
   <div class="noidungicondanhmuc" style="margin: 10px">
       <h4><a href="{{ route('xemdanhmucvieclam') }}">Khác</a></h4>
       <p style="color: grey;font-family: sans-serif;">(
           @if($khac)
           {{ $khac }} tin tuyển dụng
           @else
           {{ 'Không có tin' }}
       @endif)</p>
   </div>
</div>
</div>
</div>
</div><!--  row 12 danh mục -->
</div> <!-- danh mục -->
</div> <!-- content -->
</div>
<br>
<div class="container">
  <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

        <div class="up3" style="height:450px;padding: 0px;margin-top:0px">
            <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                <center><p href="">LIÊN KẾT</p></center>
            </div>	
            <center>
                <div class="panel-body">
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTuy%E1%BB%83n-D%E1%BB%A5ng-HOU-2209404559272176&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="350" style="border:none;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">         
                  </iframe>
              </div>
          </center>
      </div>				
  </div>
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">					
     <div class="up3" style="height:450px;padding: 0px;margin-top:0px">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center><p href="">GÓP Ý</p></center>
        </div>
        <br>		
        <div class="tablein" style="margin-left: 20px;padding: 15px">					   
           <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                 <label for="ddlv"> Họ Tên </label>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                 <div class="form-group">
                    <input type="text" class="form-control" id="ddlv" value="...">
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
             <label for="tieude"> Tiêu Đề </label>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
             <div class="form-group">
                <input type="text" class="form-control" id="tieude" value="...">
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
         <label for="nd"> Nội Dung  </label>
     </div>
     <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
         <div class="form-group">
            <div class="form-group">
               <textarea class="form-control" id="nd" rows="4"></textarea>
           </div>
       </div>
   </div>
   <center>
     <a href="" class="btn btn-success">Gửi</a>
 </center>
 <br>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection