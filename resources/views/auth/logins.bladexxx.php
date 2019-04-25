                @extends('layouts.app')

                @section('content')
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card"> 
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" style="width:50%">
                                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <h4>Đăng Nhập Ứng Viên</h4></a>
                                    </li>
                                    <li class="nav-item" style="width:50%">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><h4>Đăng Nhập Nhà Tuyển Dụng</h4></a> 
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent" >
                                    <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="card-body" style="padding: 30px">
                                            <center> </center>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }} </strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row" >
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check" >
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <br>
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Nhớ Mật Khẩu') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Đăng Nhập') }}
                                                        </button>

                                                        @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Quên Mật Khẩu?') }}
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                    </div>

                                    <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">        <div class="card-body" style="padding: 30px">

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row" >
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check" >
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <br>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Nhớ Mật Khẩu') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Đăng Nhập') }}
                                                    </button>

                                                    @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Quên Mật Khẩu?') }}
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div> {{-- endcard --}}
                    </div>
                </div>
            </div>
            @endsection
