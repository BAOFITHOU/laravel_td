@extends('layouts.index')
@section('title')
Trang chủ
@endsection
@section('content') 
<div class="main">
	<section>
		<div class="thanhmenuduoi">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ</a></li>
						</ol>
					</nav>
					<p></p>
				</div> 
			</div>
		</div>
		<div class="container">
			<div class="row">
				<br>
				<h3 class="text-center">VIỆC CẦN NGƯỜI - NGƯỜI CẦN VIỆC</h3>
				<br>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="up3 text-center">
						<p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-address-card"></i></p>
						<p><b>Hoàn thiện thông tin cá nhân</b></p>
						<i>Đăng nhập hoặc đăng ký nếu chưa có tài khoản</i>
                                <!-- <p><button type="button" class="btn btn-primary">Hoàn Thiện Ngay</button></p>
                                -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        	<div class="up3 text-center">
                        		<p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-user-circle"></i></p>
                        		<p><b>Ứng viên nộp CV</b></p>
                        		<i>Nhà tuyển dụng có thể lọc, tìm kiếm hồ sơ</i>
                        		<!-- <p><button type="button" class="btn btn-primary">Tạo CV Ngay</button></p> -->
                        	</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        	<div class="up3 text-center">
                        		<p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-check-double"></i></p>
                        		<p><b>Dễ dàng tìm việc</b></p>
                        		<i>Nhanh chóng hiệu quả</i>
                        		<!-- <p><button type="button" class="btn btn-primary">Xem Thông Báo</button></p>	 -->
                        	</div>
                        </div>
                    </div>
                </div>
            </section>
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
            									<h4><a href="danhmucvieclamnganh/1">Công Nghệ Thông Tin</a></h4>
            									<p style="color: grey;font-family: sans-serif;">(
                                                  @if($cntt)
                                                  {{ $cntt }} job
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
                                           <h4><a href="danhmucvieclamnganh/12">Quản trị dịch vụ du lịch và lữ hành</a></h4>
                                           <p style="color: grey;font-family: sans-serif;">(
                                               @if($qtdvdlvlh)
                                               {{ $qtdvdlvlh }} job
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
                                       <h4><a href="danhmucvieclamnganh/9">Thiết kế công nghiệp</a></h4>
                                       <p style="color: grey;font-family: sans-serif;">(
                                           @if($tkcn)
                                           {{ $tkcn }} job
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
                                   <h4><a href="danhmucvieclamnganh/14">Công nghệ kỹ thuật điều khiển và tự động hóa</a></h4>
                                   <p style="color: grey;font-family: sans-serif;">(
                                       @if($cnktdkvtdh)
                                       {{ $cnktdkvtdh }} job
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
                               <h4><a href="danhmucvieclamnganh/10">Ngôn ngữ Anh</a></h4>
                               <p style="color: grey;font-family: sans-serif;">(
                                   @if($nna)
                                   {{ $nna }} job
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
                           <h4><a href="danhmucvieclamnganh/7">Quản trị kinh doanh</a></h4>
                           <p style="color: grey;font-family: sans-serif;">(
                               @if($qtkd)
                               {{ $qtkd }} job
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
                       <h4><a href="danhmucvieclamnganh/3">Tài chính - Ngân hàng</a></h4>
                       <p style="color: grey;">(
                           @if($tcnh)
                           {{ $tcnh }} job
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
                   <h4><a href="{{ route('getdanhmucvieclam') }}">Khác</a></h4>
                   <p style="color: grey;font-family: sans-serif;">(
                       @if($khac)
                       {{ $khac }} job
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
</section><!--  container -->
<section>
   <br>
   <br>
</section>
<br>
<section>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="up3" style="height:490px;height:auto;padding: 0px;margin-top:0px">
               <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                  <center>
                     <p href="">VIỆC CẦN TUYỂN GẤP</p>
                 </center>
             </div>
             @foreach($tingap as $tingaps)
             <div class="row" style="padding: 30px">
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <img src="images/{{ $tingaps->thongtinntd->users->avatar }}" style="width:80px;height:80px;border-radius: 50%" alt="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="chitietcongviec">
                  {{-- {{ route('motconvit',$data->id) }} --}}
                  <a href="{{ route('gettintuyendung',$tingaps->id) }}"> <h5 class="text-left">{{ $tingaps->tieudetin }}</h5> </a>
                  <p>
                    <a class="text-left" href="{{route('getthongtinntd',$tingaps->id_ntd) }}"><span>{{ $tingaps->thongtinntd->tencongty }}</span></a>
                </p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                  {{ $tingaps->diadiem }}</p>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="chitietcongviec">
              <h5>Số Lượng:{{ $tingaps->soluongtuyen }}</h5>
              <p>
                <span>{{ $tingaps->hinhthuclamviec->tenhinhthuc }}</span>
            </p>
        </div> 
        <p>Ngành:{{$tingaps->nganh->tennganh  }}</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="chitietcongviec">
          <h5><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $tingaps->hannophoso }}</h5>
          <p>
            <span>Lương:{{ $tingaps->mucluong }}</span>
        </p>
    </div>
</div>
</div>
<hr> 
@endforeach
<div style="text-align: center;">
    {!! $tingap->links() !!}
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="up3" style="height:490px;height:auto;padding: 0px;margin-top:0px">
       <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
             <p href="">LIÊN KẾT</p>
         </center>
     </div>
     <div class="panel-body">
      <center><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTuy%E1%BB%83n-D%E1%BB%A5ng-HOU-2209404559272176&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"> </iframe>
      </center>
  </div>
</div>
</div>
</div>
</section>
</div>
</div>

@endsection