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
					<a class="navbar-brand" href="{{ route('trangchu') }}"><i style="font-size: 25px" class="fas fa-home "></i></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
<form action="{{route('find')}}">
<ul class="nav navbar-nav">
    <li>
		<input class="form-control mr-sm-2" name="search" id="search-input" type="search" placeholder="Search" aria-label="Search">
	</li>
	<li><button class="btn btn-outline-success my-2 my-sm-0 search" type="submit"><i class="fas fa-search"></i></button></li>
</ul>
    </form>

<ul class="nav navbar-nav navbar-right">
<li><a href="{{route('trangchuuv')}}"><i class="fa fa-users" aria-hidden="true"></i>
Ứng Viên</a></li>
<ul class="nav navbar-nav navbar-right">
<li><a href="{{route('trangchuntd')}}"><i class="fas fa-user-secret"></i>Nhà Tuyển Dụng</a></li>
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
</div>
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</header> 