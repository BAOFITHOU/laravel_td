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
  <link rel="stylesheet" href="css/style.css">
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
<a class="navbar-brand" href="{{ route('trangchu') }}"><i class="fas fa-home "></i></a>
</div>
<ul class="nav navbar-nav navbar-right">
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __('Đăng Nhập') }}</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i>{{ __('Đăng Ký') }}</a>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</nav>
<div class="container">
  <div class="row">
  	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  		
  	</div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
     <div class="up3" style="height:370px;padding: 0px">
   <div class="ttup3" style=" background-color: #DFF0D8 ;padding: 15px;margin: 0px">
            <center><p>Đăng Nhập</p></center>
              </div>
                <div class="card-body" style="padding: 30px">
                                            <center> </center>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <br>
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input style="margin: 0px" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                        @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                 <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input style="margin: 0px" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }} </strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            
                                            <center>
                                                <div class="form-group row" >
                                                    <div class="col-md-12 offset-md-4">
                                                        <div class="form-check" >
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Nhớ Mật Khẩu') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-12 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Đăng Nhập') }}
                                                        </button>
                                                        <br>
                                                        @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Quên Mật Khẩu?') }}
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form> 
                                            </center>


                                        </div> 
     		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    	
    </div>
  </div>
</div>
<center style="padding: 20px"><p>Bạn chưa có tài khoản ? <a href="{{ route('register') }}"><u>Đăng ký ngay</u></a></p></center>
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