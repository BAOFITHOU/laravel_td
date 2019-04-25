@extends('layouts.index')
@section('title')
Danh mục việc làm
@endsection
@section('content')
<div class="thanhmenuduoi">
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang Chủ /</a></li>
          <li class="breadcrumb-item"><a href="#">Danh Mục Việc Làm</a></li>
        </ol>
      </nav>
      <p></p>
    </div>
  </div>
</div> 
<div class="main">
  <br>
  <div class="container">
    <div class="col-md-12 text-center">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/1">Công nghệ thông tin</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($cntt)
                {{ $cntt }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/2">Công nghệ sinh học</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($cnsh)
                {{ $cnsh }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/3">Tài chính - Ngân hàng</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($tcnh)
                {{ $tcnh }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/4">Công nghệ kỹ thuật điện tử - viễn thông</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($cnktdtvt)
                {{ $cnktdtvt }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
           
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/5">Luật</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($luat)
                {{ $luat }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/5">Kiến trúc</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($ktruc)
                {{ $ktruc }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/7">Quản trị kinh doanh</a></h4>
              <p style="color: grey;">(@if($qtkd)
                {{ $qtkd }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/8">Luật kinh tế</a></h4>
              <p style="color: grey;">(@if($luatkt)
                {{ $luatkt }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/9">Thiết kế công nghiệp</a></h4>
              <p style="color: grey;">(@if($tkcn)
                {{ $tkcn }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/10">Ngôn ngữ Anh</a></h4>
              <p style="color: grey;">(@if($nna)
                {{ $nna }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/11">Ngôn ngữ Tiếng Trung</a></h4>
              <p style="color: grey;">(@if($nnt)
                {{ $nnt }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px"> 
              <h4><a href="">Quản trị dịch vụ du lịch và lữ hành</a></h4>
              <p style="color: grey;">(@if($qtdvdlvlh)
                {{ $qtdvdlvlh }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/13">Ngôn ngữ Tiếng Trung</a></h4>
              <h4><a href="">Kế toán</a></h4>
              <p style="color: grey;">(@if($ktoan)
                {{ $ktoan }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/14">Công nghệ kỹ thuật điều khiển và tự động hóa</a></h4>
              <p style="color: grey;">(@if($cnktdkvtdh)
                {{ $cnktdkvtdh }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/15">Công nghệ thực phẩm</a></h4>
              <p style="color: grey;">(@if($cntp)
                {{ $cntp }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="nddanhmucx">
            <div class="noidungicondanhmuc" style="margin: 10px">
              <h4><a href="danhmucvieclamnganh/16">Luật quốc tế</a></h4>
              <p style="color: grey;font-family: sans-serif;">(@if($luatqt)
                {{ $luatqt }} job
                @else
                {{ 'Không có tin' }}
              @endif)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection