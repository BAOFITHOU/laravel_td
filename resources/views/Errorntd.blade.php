<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
 <link rel="icon" href="images/signup.png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script type="text/javascript" src="vendor/bootstrap.js"></script>
  <script type="text/javascript" src="js/1.js"></script>  
  <link rel="stylesheet" href="vendor/bootstrap.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="main">
  <nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header text-justify">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Trôi xuống</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{route('home')}}"><i class="fas fa-home "></i></a>
</div>
<ul class="nav navbar-nav navbar-right">
@guest
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __('Đăng Nhập') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i>{{ __('Đăng Ký') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
<i class="fas fa-user"></i>{{ Auth::user()->name }} <span class="caret"></span>
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" style="padding: 11px" href="{{ route('logout') }}"
onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
{{ __('Đăng Xuất') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
</ul>
</div><!-- /.navbar-collapse -->
</nav>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
     <div class="up3" style="height:350px;padding: 0px">
   <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center><p>Sorry!</p></center>
              </div>
                 <div class="info" style="padding: 20px;color: red">
                  <center><h4>Xin lỗi bạn phải là nhà tuyển dụng để xem trang này</h4>
                    <p><a href="{{route('home')}}">Trở về trang chủ</a></p>
                    <p>Hoặc </p>
                    <p><a href="{{route('dkntd')}}">Đăng ký nhà tuyển dụng</a></p></center>
                 </div> 
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        
    </div>
  </div>
</div>

</div>
</body>
<footer class="footer" style="font-family: sans-serif;color: white;background-color:#5EB946">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about">
            <h3>About</h3>
            <p>Website được xây dựng dựa theo đề tài nghiên cứu khoa học sinh viên 2017-2018</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 about">
           
            <h3>Hỗ trợ người tìm việc</h3>
            <p>Liên Hệ : Nguyễn Văn Bảo</p> 
            <p>Điện Thoại : 0363223501</p>
            <p>Email:Baonguyen091099@gmail.com</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 about">
            <h3>Hỗ trợ nhà tuyển dụng</h3>
            <p>Liên Hệ: Trần Mạnh Hùng</p>
            <p>Điện Thoại : 0383443681</p>
            <p>Email:manhhung67891102@gmail.com</p>
        </div>
        </div>
    </footer>
    <style>
        .about 
        {

            height: 250px;
          -webkit-box-shadow: 10px 0px 22px -7px rgba(27,33,4,1);
-moz-box-shadow: 10px 0px 22px -7px rgba(27,33,4,1);
box-shadow: 10px 0px 22px -7px rgba(27,33,4,1);
        }
    </style>
</html>

