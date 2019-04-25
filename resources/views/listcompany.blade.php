<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách Công Ty</title>
 <link rel="icon" href="images/signup.png"> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script type="text/javascript" src="vendor/bootstrap.js"></script>
  <script type="text/javascript" src="js/1.js"></script>  
  <link rel="stylesheet" href="vendor/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cssvietcv.css">
</head>
<body>
<header id="header">
      <div class="menu">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header text-justify">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Trôi xuống</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="Trangchu.html"><i class="fas fa-home "></i></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
              <ul class="nav navbar-nav">
                <li>
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </li>
                <li><button class="btn btn-outline-success my-2 my-sm-0 search" type="submit"><i class="fas fa-search"></i></button></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <!--  <li><a href="" class="dangnhapmenu"><i class="fas fa-user"></i>Tài Khoản : Nguyễn Văn Bảo</a></li> -->
                <ul class="nav navbar-nav">
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user"></i>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-right: 30px;">
                      <ul style="list-style-type: none;padding:5px;width: auto;">
                        <li><a class="dropdown-item" style="padding: 11px" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Thông tin tài khoản') }}
                        </a>
                      </li>
                      <li><a class="dropdown-item" style="padding: 11px" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
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
</div><!-- /.container-fluid -->
</nav>
</div>
</header>
<div class="thanhmenuduoi">
<div class="container">
<div class="row">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
<li class="breadcrumb-item"><a href="#">Danh Sách Công Ty</a></li>
</ol>
</nav>
<p></p>
</div>
</div>
</div>
<div class="container">     
  <div class="backin">
    <br>
      <a href=""><i class="fa fa-arrow-left" aria-hidden="true"></i>  Quay Lại Trang Trước</a>
  </div>
 </div>
 <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="up3" style="height:490px;height:auto;padding: 0px">
        
         <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center><p href="">DANH SÁCH CÔNG TY LIÊN KẾT VỚI WEBSITE</p></center>
              </div>
              <table class="table">
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row"><a href=""><img src="images/HOU.png" style="width:40px;height:50px" alt=""></a></td>
                    <td><div class="chitietcongviec">
                      <h6><a href="">Công Ty TNHH FPTSOFTWARE</a></h6>
                      <p>
                        <span>Năm Thành Lập:1999</span>
                      </p> 
                    </div></td>
                    <td><div class="chitietcongviec">
                      <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội</h6>
                      <p>
                        <span>Quy Mô: 20 Người</span>
                      </p></div></td>
                      <td><div class="chitietcongviec">
                        <h6>Website</h6>
                        <p>
                          <span>Hou.com.vn</span>
                        </p> </div></td>
                      </tr>
                      <tr>
                    <td scope="row"><a href=""><img src="images/HOU.png" style="width:40px;height:50px" alt=""></a></td>
                    <td><div class="chitietcongviec">
                      <h6><a href="">Công Ty TNHH FPTSOFTWARE</a></h6>
                      <p>
                        <span>Năm Thành Lập:1999</span>
                      </p> 
                    </div></td>
                    <td><div class="chitietcongviec">
                      <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội</h6>
                      <p>
                        <span>Quy Mô: 20 Người</span>
                      </p></div></td>
                      <td><div class="chitietcongviec">
                        <h6>Website</h6>
                        <p>
                          <span>Hou.com.vn</span>
                        </p> </div></td>
                      </tr>
                      <tr>
                    <td scope="row"><a href=""><img src="images/HOU.png" style="width:40px;height:50px" alt=""></a></td>
                    <td><div class="chitietcongviec">
                      <h6><a href="">Công Ty TNHH FPTSOFTWARE</a></h6>
                      <p>
                        <span>Năm Thành Lập:1999</span>
                      </p> 
                    </div></td>
                    <td><div class="chitietcongviec">
                      <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội</h6>
                      <p>
                        <span>Quy Mô: 20 Người</span>
                      </p></div></td>
                      <td><div class="chitietcongviec">
                        <h6>Website</h6>
                        <p>
                          <span>Hou.com.vn</span>
                        </p> </div></td>
                      </tr>
                      <tr>
                    <td scope="row"><a href=""><img src="images/HOU.png" style="width:40px;height:50px" alt=""></a></td>
                    <td><div class="chitietcongviec">
                      <h6><a href="">Công Ty TNHH FPTSOFTWARE</a></h6>
                      <p>
                        <span>Năm Thành Lập:1999</span>
                      </p> 
                    </div></td>
                    <td><div class="chitietcongviec">
                      <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội</h6>
                      <p>
                        <span>Quy Mô: 20 Người</span>
                      </p></div></td>
                      <td><div class="chitietcongviec">
                        <h6>Website</h6>
                        <p>
                          <span>Hou.com.vn</span>
                        </p> </div></td>
                      </tr>
                      <tr>
                    <td scope="row"><a href=""><img src="images/HOU.png" style="width:40px;height:50px" alt=""></a></td>
                    <td><div class="chitietcongviec">
                      <h6><a href="">Công Ty TNHH FPTSOFTWARE</a></h6>
                      <p>
                        <span>Năm Thành Lập:1999</span>
                      </p> 
                    </div></td>
                    <td><div class="chitietcongviec">
                      <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội</h6>
                      <p>
                        <span>Quy Mô: 20 Người</span>
                      </p></div></td>
                      <td><div class="chitietcongviec">
                        <h6>Website</h6>
                        <p>
                          <span>Hou.com.vn</span>
                        </p> </div></td>
                      </tr>
                      <tr>
                    <td scope="row"><a href=""><img src="images/HOU.png" style="width:40px;height:50px" alt=""></a></td>
                    <td><div class="chitietcongviec">
                      <h6><a href="">Công Ty TNHH FPTSOFTWARE</a></h6>
                      <p>
                        <span>Năm Thành Lập:1999</span>
                      </p> 
                    </div></td>
                    <td><div class="chitietcongviec">
                      <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội</h6>
                      <p>
                        <span>Quy Mô: 20 Người</span>
                      </p></div></td>
                      <td><div class="chitietcongviec">
                        <h6>Website</h6>
                        <p>
                          <span>Hou.com.vn</span>
                        </p> </div></td>
                      </tr> 
                      
                                  </tbody>
                                </table>
      </div>
    </div>
    
  </div>
</div>
<footer class="footer">
                    <div class="khoi2 text-center" >
                    
                      <p>Đề Tài NCKH Xây dựng Website tuyển dụng dựa trên framework Laravel</p>
                      <p>Trụ sở: 96 Định Công, Q.Thanh Xuân, Hà Nội</p>
                      <h4>Hỗ trợ Nhà tuyển dụng:</h4>
                        <p>- Hotline: (03) 63 223 501 | 
                    - Email: Baonguyen091099@gmail.com</p>
                        <h4>Hỗ trợ Người tìm việc:</h4>
                        <p>- Hotline:  (03) 63 223 501 | 
                        - Email: anbanhuongsua@gmail.com</p>
                    </div> <!-- khối 2 -->
                  </footer>
</body>
</html>
