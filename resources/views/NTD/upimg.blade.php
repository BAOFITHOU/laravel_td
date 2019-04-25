@extends('layouts.index')
@section('title')
Up avatar 
@endsection
@section('content') 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="main">
<base href="{{ asset('') }}">
    <div class="thanhmenuduoi">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ /</a></li>
                        <li class="breadcrumb-item"><a href="#">Nhà Tuyển Dụng /</a></li>
                        <li class="breadcrumb-item"><a href="#">Sửa Thông Tin </a></li>
                    </ol>
                </nav>
                <p></p>
            </div>
        </div>
    </div> 

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="up3" style="padding: 25px">

                    <center>
                        <h3>Cập nhật ảnh đại diện</h3>
                    </center>
                    <div class="row">
                         @if(session('thongbao'))
          <div class="alert alert-success">
            <p>{{session('thongbao')}}</p>
          </div> 
          @endif
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <form enctype="multipart/form-data" action="{{ route('upntd',Auth::id())}}" method="post">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                <center>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <img src="images/{{Auth::user()->avatar}}" alt="" height="150px" width="150px" id="anhava" style="border-radius: 50%">
                                        <br> 
                                        <label for="inputPassword4">{{Auth::user()->name}}</label>
                                        <center>
                                       <div class="form-row">
                                   <div class="form-group col-md-12">
                                    <label for="exampleFormControlFile1"></label>
                                    <input type="file" class="form-control-file" id="dexemanh" name="filecv">
                                  </div>
                                </div>
                            </center>
                                    </div>
                                </center>
                                </div>
                                
                                <center>
                                
                                  <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary" >Lưu </button>
                                    @if(count($errors)>0)
                                            @foreach($errors->all() as $err)
                                            <p style="color: red;">{{ $err }}</p>    <br>
                                            @endforeach
                                            @endif
                                    
                                </div>
                            </div>
                               
                            </form>
                                 <a href="{{route('trangchuntd')}}" style="border: 1px solid grey;margin-left:10px" class="btn btn-toolbar">Quay lại</a>
                        </center>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
    function dis()
    {
        x= document.getElementById('inputEmail4');
       var y=confirm("bạn đang chuẩn bị hủy");
       if(y)
       {
        x.value="";
        }
    }
    $(document).ready(function() {
        $("#dexemanh").change(function() {
          readURL(this);
        });
    });
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#anhava').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }


</script>
@endsection

