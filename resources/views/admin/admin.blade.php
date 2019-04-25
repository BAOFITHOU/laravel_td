<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thông Báo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script type="text/javascript" src="vendor/bootstrap.js"></script>
  <script type="text/javascript" src="js/1.js"></script>
  <link rel="stylesheet" href="vendor/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <div class="row">
    <div class="ndadmin">
      <div class="tab" style="height: 100vh;background-color:white;">

        <center>
          <h3 style="margin: 0px;height: 60px;padding: 10px;font-weight: bold">Trang quản trị</h3>
        </center>
        <button class="tablinks" style="padding-left: 10%" onclick="openCity(event, 'Paris')">
          <i class="fas fa-tasks"></i>
          Danh sách tin tuyển dụng
        </button>
        <button class="tablinks" style="padding-left: 10%" onclick="openCity(event, 'chuaduyet')">
          <i class="fa fa-question" aria-hidden="true"></i>
          Tin tuyển dụng chưa duyệt
        </button>
        <button class="tablinks" style="padding-left: 10%" onclick="openCity(event, 'daduyet')">
          <i class="fa fa-check" aria-hidden="true"></i>
          Tin tuyển dụng đã duyệt
        </button>
        <button class="tablinks" style="padding-left: 10%;" onclick="openCity(event, 'London')">
          <i class="fa fa-file" aria-hidden="true"></i>
          

          Danh sách ứng viên được duyệt CV
          {{--  <span class="badge badge-primary">1</span> --}}
        </button>
        <button class="tablinks" style="padding-left: 10%" onclick="openCity(event, 'Tokyo')">
          <i class="fas fa-address-book"></i> 
          Quản lý tài khoản
        </button>
        <button class="tablinks" style="padding-left: 10%" onclick="openCity(event, 'logout')">
          <li class="nav-item dropdown" style="list-style-type: none">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user"></i>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a> 
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-right: 30px;">
                  <ul style="list-style-type: none;padding:5px;width: auto;">
                    {{-- <li><a class="dropdown-item" style="padding: 11px" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Thông tin tài khoản') }}
                    </a>
                  </li> --}}
                  <li><a class="dropdown-item" style="padding: 11px" href="{{ route('verification.resend') }}">
                    {{-- onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" --}}
                    {{ __('Đổi Mật Khẩu') }}
                  </a>
                </li> 
                <li>
                  <a class="dropdown-item" style="padding: 11px" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Đăng Xuất') }}
                </a>
              </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div> 
        </li>
        </button>
      </div>
      <div id="London" class="tabcontent" style="height: 100vh">
        <div class="up3" style="min-height:490px;padding: 0px">
          <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center>
              <p href="">DÁNH SÁCH ỨNG VIÊN ĐƯỢC DUYỆT CV ({{ $dem }} CV)</p>
            </center>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Tên sinh viên</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Khoa</th>
                    <th scope="col">Ngày được duyệt</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cvduocduyet as $cvduocduyets)
                  <tr>
                    <td>{{ $cvduocduyets->cvs->thongtinsv->users->name }}</td>
                    <td>{{ $cvduocduyets->tintd->thongtinntd->users->name }}</td>
                    <td>{{ $cvduocduyets->cvs->nganh->tennganh }}</td>
                    <td>{{ $cvduocduyets->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>  
          </div>
        </div>
        <div style="text-align: center;">
          {!! $cvduocduyet->links() !!}
        </div>
      </div>
      <div id="Paris" class="tabcontent" style="height: 100vh">
        <div class="up3" style="min-height:490px;padding: 0px">
          <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center>
              <p href="">DANH SÁCH TIN TUYỂN DỤNG</p>
            </center>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tiêu đề tin</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alltintd as $alltintds)
                  <tr>
                    <th scope="row">{{$alltintds->id}}</th>
                    <td>{{$alltintds->tieudetin}}</td>
                    <td>{{$alltintds->thongtinntd->tencongty}}</td>
                    <td><a href="{{ route('duyettin',$alltintds->id)}}" class="btn btn-success">Xem</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="chuaduyet" class="tabcontent" style="height: 100vh">
        <div class="up3" style="min-height:490px;padding: 0px">
          <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center>
              <p href="">DANH SÁCH TIN CHƯA DUYỆT</p>
            </center>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tiêu đề tin</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tinchuaduyet as $tinchuaduyets)
                  <tr>
                    <th scope="row">{{$tinchuaduyets->id}}</th>
                    <td>{{$tinchuaduyets->tieudetin}}</td>
                    <td>{{$tinchuaduyets->thongtinntd->tencongty}}</td>
                    <td><a href="{{ route('duyettin',$tinchuaduyets->id)}}" class="btn btn-success">Xem</a></td>
                    <!-- <td><a href="" class="btn btn-success">Xem</a></td> -->
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="daduyet" class="tabcontent" style="height: 100vh">
        <div class="up3" style="min-height:490px;padding: 0px">
          <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center>
              <p href="">DANH SÁCH TIN ĐÃ DUYỆT</p>
            </center>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Tiêu đề tin</th>
                   <th scope="col">Tên công ty</th>
                   <th scope="col">Hành động</th>
                 </tr>
               </thead>
               <tbody>
                @foreach($tindaduyet as $tindaduyets)
                <tr>
                  <th scope="row">{{$tindaduyets->id}}</th>
                  <td>{{$tindaduyets->tieudetin}}</td>
                  <td>{{$tindaduyets->thongtinntd->tencongty}}</td>
                  <td><a href="{{ route('duyettin',$tindaduyets->id)}}" class="btn btn-success">Xem</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div id="Tokyo" class="tabcontent" style="height: 100vh;overflow: scroll;">
      <div class="up3" style="min-height:490px;padding: 0px">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
            <p href="">TÀI KHOẢN NHÀ TUYỂN DỤNG</p>
          </center>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tên chủ tài khoản</th>
                  <th scope="col">Email</th>
                  <th scope="col">Ngày tạo tài khoản</th>
                </tr>
              </thead>
              <tbody>
                @foreach($taikhoanntd as $taikhoanntds)
                @foreach($taikhoanntds->thongtinntd as $tks)
                <tr>
                  <th scope="row">{{ $taikhoanntds->id }}</th>
                  <td>{{ $taikhoanntds->name }}</td>
                  <td>{{ $taikhoanntds->email }}</td>
                  <td>{{ $taikhoanntds->created_at }}</td>
                </tr>
                @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="up3" style="min-height:490px;padding: 0px">
        <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
          <center>
            <p href="">TÀI KHOẢN ỨNG VIÊN</p>
          </center>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tên chủ tài khoản</th>
                  <th scope="col">Last</th>
                  <th scope="col">Ngày tạo tài khoản</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($taikhoanuv as $taikhoanuvs)
                <tr>
                  <th scope="row">{{ $taikhoanuvs->id }}</th>
                  <td>{{ $taikhoanuvs->name }}</td>
                  <td>{{ $taikhoanuvs->email }}</td>
                  <td>{{ $taikhoanuvs->created_at }}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
</body>
</html>