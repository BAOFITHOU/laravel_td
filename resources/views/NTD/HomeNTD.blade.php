@extends('layouts.indexntd')
@section('title')
Nhà tuyển dụng   
@endsection 
@section('content') 
<base href="{{ asset('') }}">
<div class="main"> 
	<div class="ndxxx">
		<section> 
			<div class="thanhmenuduoi">
				<div class="container">
					<div class="row">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang chủ /</a></li>
								<li class="breadcrumb-item"><a href="{{ route('trangchuntd') }}">Nhà tuyển dụng</a></li>
							</ol>
						</nav>
						<p></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<h3 class="text-center">Tuyển dụng nhanh chóng, dễ dàng và hiệu quả hơn </h3>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="up3 text-center">
							<p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="far fa-list-alt"></i></p>
							<h3><b>300.000 +
							Hồ sơ ứng tuyển</b></h3>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="up3 text-center">
							<p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-user-circle"></i></p>
							<h3><b>100.000 +
							Người tìm việc</b></h3>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="up3 text-center">
							<p style="font-size: 40px;color:#29C00B;padding: 10px;"><i class="fas fa-check-double"></i></p>
							<h3><b>12.000.000 +
							Lượt ứng tuyển</b></h3>
						</div>
					</div>
				</div> 
			</section>
			<section>  
				<div class="container">
					<div class="row"> 
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="up3xx" style="margin-top: 5px;height: 467px;height: auto">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<center>
												<div class="avata" style="padding-top: 40px">
													<div class="photo"><img  style="border-radius: 50%" src="images/{{Auth::user()->avatar}}
														" width="150" height="150" alt="Md Alamin Mir" /></div>
														<center><a href="{{route('upimgntd')}}"><i class="fas fa-camera"></i></a><br></center>
														<h3 class="name"><b></b></h3>								
														<h4 class="job">{{ ($thongtinntd)? $thongtinntd[0]['tencongty']:'Chưa câp nhâp' }}</h4>
														<h4 class="job">{{-- {{ $data->sdt }} --}}</h4>
														<p>Email: {{ ($nhatuyendung)? $nhatuyendung[0]->email:'Chưa câp nhâp' }}</p>
														<p>Phone: {{ ($thongtinntd)? $thongtinntd[0]['sdt']:'Chưa câp nhâp' }}</p>
														<br>
														@if($checker==1)
														<p><a href="nhatuyendung/suathongtinntd/{{Auth::id()}}"></i><i class="fas fa-edit" style="font-size: 30px"></i></a></p>
														@else
														<p><a href="nhatuyendung/themthongtin/{{Auth::id()}}"></i><i class="fas fa-upload" style="font-size: 30px"></i></a></p>
														@endif
													</div>
												</center>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" >
												<div class="inright" style="padding:10px;padding-left: 25px;margin: 10px">
													<div class="row">
														<center>
															<h4><u>THÔNG TIN NHÀ TUYỂN DỤNG</u></h4>
														</center>
														<br>
														<ul>
															<li>Công Ty :{{ ($thongtinntd)? $thongtinntd[0]['tencongty']:'Chưa câp nhâp' }}</li>
															<br>
															<hr>
															<li>Địa Chỉ :{{ ($thongtinntd)? $thongtinntd[0]['diadiem']:'Chưa câp nhâp' }}</li>
															<br>
															<hr>
															<li>Quy Mô : {{ ($thongtinntd)? $thongtinntd[0]['quymo']:'Chưa câp nhâp' }}</li>
															<br>
															<hr>
															<li>Mô tả: {{ ($thongtinntd)? $thongtinntd[0]['motacongty']:'Chưa câp nhâp' }}</li>
															<hr>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
									<div class="up3" style="height:490px;height:auto;padding: 0px">
										<div class="inright text-center">
											<div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
												<p href="">TÌM KIẾM</p>
											</div>
											<center> 
												<form class="form-inline my-2 my-lg-1" action="{{ route('filter') }}" method="post"> 
													<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
												
													<select class="form-control" style="width:200px" name="timkiem" id="timkiem">
														@foreach($nganh as $nganhs)
														<option value="{{ $nganhs->id }}">{{ $nganhs->tennganh }}</option>
														@endforeach
													</select>
													<br>
													<button style="margin-left: 0px" class="btn btn-outline-success my-2 my-sm-0 search" type="submit"><i class="fas fa-search"></i></button>
												</form>
											</center>
											<hr>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
									<div class="up3" style="padding: 0px;height:auto;">
										<div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
											<center>
												<p href="">ỨNG VIÊN GẦN CÔNG TY</p>
											</center>
										</div> 
										<div class="nd" >  
											@foreach($sv as $sv)
											<div class="row">
												<div class="tiin" style="padding: 15px;margin-left: 20px">
													<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
														<img src="images/{{$sv->users->avatar }}" style="width:70px;height:70px;border-radius: 50%" alt="">
													</div>
													<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
														<div class="tinbasic">
						<p><a href="nhatuyendung/xemuvphuhop/{{$sv->id}}">{{$sv->users->name }}</a></p> {{-- 
						<p>{{ $sv->sdt }}</p> --}}
						<p class="cuttext">{{ $sv->users->email }}</p>
					</div>	
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa Điểm:{{$sv->diachi }} </p>
					
					<p>SDT:{{ $sv->sdt}} </p>
					
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<p class="text-center">{{$sv->ngaysinh}}</p>
					<a class="btn btn-primary"  href="nhatuyendung/xemuvphuhop/{{$sv->id}}"><i class="fas fa-eye"></i> Xem chi tiết</a>
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
</div>
</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="up3" style="height:715px;height:auto;margin-top:0px;padding: 0px">
					<div class="ndtt text-center">
						<div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
							<p href="">ĐĂNG TIN TUYỂN DỤNG</p>
						</div>
						{{-- //Form --}}
						<form action="{{ route('postdangtintuyendung') }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
							<div class="row" style="padding: 35px">
								@if(count($errors)>0)
								@foreach($errors->all() as $err)
								<p style="color: red;">{{ $err }}</p>	 <br>
								@endforeach
								@endif
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									@if(session('thanhcong'))
									<div class="alert" style="color:blue;margin-top: 10px">
										{{session('thanhcong')}} <i class="fa fa-check" aria-hidden="true"></i>
									</div>
									@endif
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<textarea type="text" class="form-control" rows="4" id="vttuyen" value="" placeholder="Tiêu đề tin" name="tieudetin"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<select class="form-control" id="sel1" name="nganh">	
													{{-- <option><i class="fas fa-ellipsis-v">Chọn Ngành</i></option> --}}
													@foreach($nganh as $nganhs)
													<option value="{{ $nganhs->id }}">{{ $nganhs->tennganh }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<input type="text" class="form-control" id="vttuyen" placeholder="Vị Trí Cần Tuyển" name="vitrituyendung">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">

												<input type="text" class="form-control" id="ddlv" placeholder="Địa Điểm Làm Việc" name = "diadiem">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<input type="number" class="form-control" id="slct" value="" placeholder="Số  Lượng Cần Tuyển" name="soluongtuyen">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<input type=text" class="form-control" id="dtlh" placeholder="Điện Thoại Liên Hệ" value="" name="lienhe">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<select class="form-control" id="htlv" name="hinhthuclamviec">

													@foreach($hinhthuclamviec as $htlv)
													<option value="{{ $htlv->id }}">{{ $htlv->tenhinhthuc }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<input type="number" class="form-control" id="mlmm" value="" placeholder="Mức Lương" name="mucluong">
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<input class="form-control" type="date" placeholder="Hạn Nộp Hồ Sơ" value="" id="example-date-input" name="hannophoso">
											</div>
											@foreach($thongtinntd as $thongtinntds)

											<input type="hidden" value="{{ $thongtinntds['id']}}" name="ntd">
											@endforeach
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<div class="form-group">
													<textarea  class="form-control" id="ychs" placeholder="Yêu cầu hồ sơ" rows="4" name="yeucauhoso"></textarea >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<div class="form-group">
													<textarea  class="form-control" id="mtcv" placeholder="Mô tả công việc"  rows="3"  name="motacongviec"></textarea >
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<div class="form-group">
												
													<textarea  class="form-control" id="ycnn" placeholder="Yêu Cầu Ngoại Ngữ" rows="3" name="yeucaungoaingu"></textarea >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<textarea class="form-control" id="ql" placeholder="Quyền Lợi" rows="3" name="quyenloi"></textarea >
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<select class="form-control" id="yctd" name="trinhdohocvan">
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

<button type="submit" class="btn btn-success btn-outline-danger nutbam">&nbspĐăng Bài</button>
</form>
{{-- Form --}}
</div>
<br>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	<div class="up3" style="margin-top:0px;padding: 0px">
		<div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
			<center>
				<p href="">DANH SÁCH TIN ĐÃ ĐĂNG</p>
			</center>
		</div>
		<div class="nd">
			<div class="row">
				@foreach($thongtinntd as $key => $tindadangs)
				@foreach($tindadangs['tintd'] as $key => $tdds)
				<div class="row">
					
					<div class="tiin" style="padding: 15px;margin-left: 20px">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-5">
							<p ><a class="cuttext" href="{{ route('getxemtin',$tdds['id']) }}">
							{{ $tdds['tieudetin'] }}</a></p>
							<p>Vị trí: {{ $tdds['vitrituyendung'] }}</a></p>
							<p>Số lượng:{{ $tdds['soluongtuyen'] }}</p>
							{{-- <i><a href="" style="color: green">{{ $tindadangs->tencongty }}</a></i> --}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	{{-- </div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> --}}
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa Điểm:{{ $tdds['diadiem'] }}</p>
			<p><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $tdds['hannophoso'] }}</p>
			<p>$ {{ $tdds['mucluong'] }}</p>
		</div>	
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
			
			<center>
				<p><a href="{{ route('getxemtin',$tdds['id']) }}" class="btn btn-primary" style="margin-bottom: 1px"><i class="fas fa-eye">Xem</i></a>
					<a href="{{ route('getsuatintuyendung',$tdds['id']) }}" class="btn btn-success" style="margin-bottom: 1px"><i class="far fa-edit"> Sửa</i></a>
					<a name="delete" onclick="var x=confirm('Bạn có muốn xóa ?'); return x;" href="{{ route('xoatintuyendung',$tdds['id']) }}" class="btn btn-danger"><i class="fas fa-trash-alt"> Xóa</i></a></p>
				</center>
			</div>
		</div>
	</div>
	<hr> 
	@endforeach
	@endforeach
</div>
</div>
</div>

</div>
</div>
</div>
</section>
</div>
</div>
</div> <!-- ndbentrong  -->
</body>

@endsection
