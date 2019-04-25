    @extends('layouts.indexuv')
    @section('title')
    Kết quả tìm kiếm
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
                <li class="breadcrumb-item"><a href="{{ route('trangchuuv') }}">Ứng Viên /</a></li>
                <li class="breadcrumb-item"><p >Kết quả tìm kiếm</p></li>

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
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
             @foreach($viecphuhop as $viecphuhops)

             <div class="row" style="padding: 30px">
              <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

              {{--   <a href=""><img src="images/{{ $viecphuhop->thongtinntd->users->avatar }}" style="width:80px;height:80px;border-radius: 50%" alt=""></a> --}}
               <a href="Ungvien/chitiettintuyendung/{{$viecphuhops->id}}"> <h5 class="text-left">{!! doimau($viecphuhops->tieudetin,$search) !!}</h5> </a>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                    {{ $viecphuhops->diadiem }}</p>
                     <h5>Số Lượng:{{ $viecphuhops->soluongtuyen }}</h5>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="chitietcongviec">
                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $viecphuhops->hannophoso }}</h5>
                    <p>
                      <span>Lương:{{ $viecphuhops->mucluong }}</span>
                    </p>
                  {{--   <a href="{{ route('getthongtinntd',$viecphuhop->id_ntd) }}" class="text-left"><span>{!! doimau($viecphuhop->thongtinntd->tencongty,$search) !!}</span></a> --}}
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                  <div class="chitietcongviec">
                      <a class="btn btn-primary" href="Ungvien/chitiettintuyendung/{{$viecphuhops->id}}">Xem chi tiết</a>
                    <p>
                      {{-- <span>{{ $viecphuhop->hinhthuclamviec->tenhinhthuc }}</span> --}}
                    </p>
                  </div>
                  {{-- <p>Ngành:{!! doimau($viecphuhop->nganh->tennganh,$search) !!}</p> --}}
                </div>
                
              </div>
              <hr>

              @endforeach   
                <div style="text-align: center;">
                  {{ $viecphuhop->links() }}
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
