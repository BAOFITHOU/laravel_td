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
					<a class="navbar-brand"  href="{{route('trangchu')}}"><i  style="font-size: 25px"  class="fas fa-home  title="Trang Chủ""></i></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
					<form action="{{route('find')}}">
						<ul class="nav navbar-nav">
							<li>
								<input class="form-control mr-sm-2" name="search" id="search-input" type="search" placeholder="Search" aria-label="Search">
							</li>
							<li><button class="btn btn-outline-success my-2 my-sm-0 search" type="submit" title="Tìm kiếm"><i class="fas fa-search" ></i></button></li>
						</ul>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<ul class="nav navbar-nav"> 
							<li><a href="{{route('viecdaungtuyen')}}"><i class="fas fa-file-upload "></i>Việc làm đã ứng tuyển </a></li>
							<li><a href="{{route('thongbaouv')}}"><i class="fa fa-bell" aria-hidden="true"></i>Thông báo </a></li>
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user"></i>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a> 
								
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

<a class="dropdown-item" style="padding: 11px" href="{{ route('logout') }}"
onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
{{ __('Đăng Xuất') }}
</a>
<form id="reset-form" action="{{ route('reset') }}" method="GET" style="display: none;">
@csrf
</form>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
				</li>
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</header>