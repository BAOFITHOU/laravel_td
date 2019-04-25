    @extends('layouts.indexntd')
    @section('title')
    Kết Qủa Tìm Kiếm 
    @endsection
    @section('content') 
    <div class="main">
      <base href="{{ asset('') }}">
      <div class="thanhmenuduoi">
        <div class="container">
          <div class="row">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang Chủ /</a></li>
                <li class="breadcrumb-item"><a href="#">Kết quả tìm kiếm</a></li>
                
              </ol> 
            </nav>
            <p></p>
          </div>
        </div>
      </div>

      <?php
      function doimau($str,$search)
      {
        return str_replace($search,"<span style='color:red;'><u><i>$search</u></i></span>",$str);
      }
      ?>
      <div class="container">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="up3" style="height:490px;height:auto;padding: 0px">
              <div class="ttup3 text-center" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                <h4>TÌM KIẾM</h4>
              </div>
              <center>
                <form class="form-inline my-2 my-lg-1" action="{{ route('filter') }}" method="post">

                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                  <input class="form-control mr-sm-2" style="width:200px" id="search" type="search" placeholder="Nhập Từ Khóa" aria-label="Search">
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
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="up3" style="padding: 0px;min-height: 240px">
              <div class="ttup3 text-center" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
                <h4>Kết quả tìm kiếm cho :<span style="color: red"><u><i>{{$search}}</i></u></span></h4>
              </div>
              <div class="row">
               @if(session('thongbao'))
               <div class="alert alert-success">
                <p>{{session('thongbao')}}</p>
              </div> 
              @endif
              @if($x==1) 
              
              <center><h4 style="color: green;padding-top: 50px"><i>Không có kết quả phù hợp.Vui lòng thử lại !</i></h4></center>
              
              @endif
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="nd" >  
                @foreach($uvphuhop as $uvphuhops)
                <div class="row">
                  <div class="tiin" style="padding: 15px;margin-left: 20px">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                      <img src="images/{{$uvphuhops->users->avatar }}" style="width:70px;height:70px;border-radius: 50%" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                      <div class="tinbasic">

                        <p><a href="nhatuyendung/xemuvphuhop/{{$uvphuhops->id_masv}}">{{$uvphuhops->users->name }}</a></p> 
                        <p class="cuttext">{{ $uvphuhops->users->email }}</p>
                      </div>  
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa Điểm:{{$uvphuhops->diachi }} </p>
                      
                      <p>SDT:{{ $uvphuhops->sdt}} </p>
                      
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <p class="text-center">{{$uvphuhops->ngaysinh}}</p>
                      <a class="text-center" href="nhatuyendung/xemuvphuhop/{{$uvphuhops->id}}"><i class="fas fa-eye"></i></a>
                    </div>
                  </div>
                </div>
                <hr>
                @endforeach
                    
              </div>              
            </center>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>
</div>
@endsection
