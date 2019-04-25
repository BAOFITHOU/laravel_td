<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\tbltintd; 
use App\tblchitiettintuyendung;  
use App\tblnganh;  
use App\tblthongtinsv; 
use App\tblthongtinntd;
use App\User;
use App\tbltrinhdo;
use App\tblketquatuyendung;
use App\tblcv;
use Illuminate\Support\Facades\Auth;
use DB; 
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class UVController extends Controller 
{
 public function thongbaouv(){
  $layidsv = tblthongtinsv::select('id')->where('id_account',Auth::id())->pluck('id')->first();
  $idkq = tblketquatuyendung::select('id_cv')->get()->toArray();
  $layidcv = tblcv::select('id')->whereIn('id',$idkq)->where('id_masv',$layidsv)->get()->toArray();
  $data = tblketquatuyendung::whereIn('id_cv',$layidcv)->where('id_trangthai',1)->orderBy('created_at','DESC')->paginate(6);
    // dd($data);
  return view('UV.thongbaouv',['data'=>$data]);
}
public function nopcv(Request $request)
{
  return tblketquatuyendung::create([

    'id_cv'=> $request->input('idcv'), 
    'id_tin' => $request->input('tin'),
    'id_trangthai' => $request->input('trangthai'),  
  ]);
}
public function upimg()
{
  return view('UV.upimg');
}
public function upx(Request $request,$id)
{
  $this->validate($request,
    [
      'filecv' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
    ],
    [
      'filecv.required'=>'Vui lòng up ảnh cần thay',
      'filecv.mimes'=>'Định dạng không hợp lệ',
      'filecv.max'=>'Dung lượng file lớn',
    ]);
  if ($request->hasFile('filecv')) {
    $file = $request->file('filecv');
    $name = $file->getClientOriginalName();
    $Hinh = str_random(4)."_".$name;

    while(file_exists("../public/images/".$Hinh))
    {
      $Hinh = str_random(4)."_".$name;
    }
    $file->move("../public/images",$Hinh);

    $user = DB::table('users')->where('id',$id)->update([
      'avatar' => $Hinh,
    ]); 
    return redirect('Ungvien/imgcv')->with('thongbao','Cập nhật ảnh đại diện thành công');
  }
}
public function getthongtinntd($id){
  $ntd = tblthongtinntd::where('id',$id)->get();
  $tintd = tbltintd::where('id_ntd',$id)->orderBy('hannophoso','DESC')->get();
  return view('UV.thongtinntd',['ntd'=>$ntd,'tintd'=>$tintd]);
}
public function getinfoUV()
{
 $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
 $cntt        = tbltintd::where('id_nganh',1)->whereDate('hannophoso', '>=', $date)->count();
 $cnsh        = tbltintd::where('id_nganh',2)->whereDate('hannophoso', '>=', $date)->count();
      // Cái này hiện ra trang chủ
 $tcnh        = tbltintd::where('id_nganh',3)->whereDate('hannophoso', '>=', $date)->count();
 $cnktdtvt    = tbltintd::where('id_nganh',4)->whereDate('hannophoso', '>=', $date)->count();
 $luat        = tbltintd::where('id_nganh',5)->whereDate('hannophoso', '>=', $date)->count();
 $ktruc       = tbltintd::where('id_nganh',6)->whereDate('hannophoso', '>=', $date)->count();
      // Cái này hiện ra trang chủ
 $qtkd        = tbltintd::where('id_nganh',7)->whereDate('hannophoso', '>=', $date)->count();
 $luatkt = tbltintd::where('id_nganh',8)->whereDate('hannophoso', '>=', $date)->count();
      // Cái này hiện ra trang chủ
 $tkcn = tbltintd::where('id_nganh',9)->whereDate('hannophoso', '>=', $date)->count();
      // Cái này hiện ra trang chủ
 $nna = tbltintd::where('id_nganh',10)->whereDate('hannophoso', '>=', $date)->count();
 $nnt = tbltintd::where('id_nganh',11)->whereDate('hannophoso', '>=', $date)->count();
      // Cái này hiện ra trang chủ
 $qtdvdlvlh = tbltintd::where('id_nganh',12)->whereDate('hannophoso', '>=', $date)->count();
 $ktoan = tbltintd::where('id_nganh',13)->whereDate('hannophoso', '>=', $date)->count();
      // Cái này hiện ra trang chủ
 $cnktdkvtdh = tbltintd::where('id_nganh',14)->whereDate('hannophoso', '>=', $date)->count();
 $cntp = tbltintd::where('id_nganh',15)->whereDate('hannophoso', '>=', $date)->count();
 $luatqt = tbltintd::where('id_nganh',16)->whereDate('hannophoso', '>=', $date)->count();
 $khac = $cnsh + $cnktdtvt + $luat + $ktruc + $luatkt + $nnt + $ktoan + $cntp + $luatqt;
 $tingap = tbltintd::with('nganh','hinhthuclamviec')->orderBy('hannophoso','ASC')->take(4)->get();
 $nganhnoibat = tblnganh::where('noibat',1)->orderBy('id')->get();
 $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
 $infolocation = tblthongtinsv::select('diachi')->where('id_account',Auth::id())->get()->pluck('diachi')->first();
 $viecphuhop = tbltintd::where('diadiem','like',"%".$infolocation)->whereDate('hannophoso', '>=', $date)->orderBy('hannophoso','ASC')->paginate(3);
 $users = User::with('thongtinsv')->where('id',Auth::id())->get();
 $infosv =  tblthongtinsv::with('cvs')->where('id_account',Auth::id())->get()->toArray();
 $check = tblthongtinsv::select('id')->where('id_account',Auth::id())->pluck('id')->first();
   //Danh mục ngành chỗ ô tìm kiếm
 $nganh = tblnganh::all(); 
 if(empty($check)){
  $checker= 0;
}
else{
  $checker =1;
}
$layidsv = tblthongtinsv::select('id')->where('id_account',Auth::id())->pluck('id')->first();
$dem = tblcv::where('id_masv',$layidsv)->get();
$demcv = count($dem);
    //dd($demcv);
return view('UV.HomeUV',['demcv'=>$demcv,'tingap'=>$tingap,'cntt'=>$cntt,'tcnh'=>$tcnh,'qtkd'=>$qtkd,'tkcn'=>$tkcn,'nna'=>$nna,'qtdvdlvlh'=>$qtdvdlvlh,'cnktdkvtdh'=>$cnktdkvtdh,'khac'=>$khac,'nganhnoibat'=>$nganhnoibat,'infosv'=>$infosv,'viecphuhop'=>$viecphuhop,'users'=>$users,'checker'=>$checker,'nganh'=>$nganh]); 
}
public function getthemthongtinuv($id){

  $trinhdo = tbltrinhdo::all();
  $nganh=tblnganh::all();
  return view('UV.themthongtinsv',['trinhdo'=>$trinhdo,'nganh'=>$nganh]);
}
public function postthemthongtinuv(Request $request,$id){
  $user = DB::table('users')->where('id',$id)->update([
    'name' =>Auth::user()->name
  ]);

    // dd($request->input('quymo')); 
  $ttuv = DB::table('tbl_thongtinsv')->insert([
    'ngaysinh'=>$request->input('ngaysinh'),
    'id_account'=>Auth::id(),
    'sdt'    =>$request->input('sdt'),
    'diachi'    =>$request->input('diadiem'),
    'gioitinh' =>$request->input('gioitinh'),
    'id_trinhdo' =>$request->input('trinhdo')

  ]); 
  
  return redirect('Ungvien/trangchu');

}
public function getsuathongtinungvien($id){
  $thongtinuv = tblthongtinsv::where('id_account',$id)->get();
  $nganh = tblnganh::all();
  $trinhdo = tbltrinhdo::all();
  return view('UV.suathongtincanhan',['thongtinuv'=>$thongtinuv,'nganh'=>$nganh,'trinhdo'=>$trinhdo]);
}

public function postsuathongtinungvien(Request $request,$id){
  $user = DB::table('users')->where('id',$id)->update([
    'name' =>$request->input('hoten')
  ]);
    // dd($request->input('quymo'));
  $ttntd = DB::table('tbl_thongtinsv')->where('id_account',$id)->update([
    'ngaysinh'  =>$request->input('ngaysinh'),
    'gioitinh'=>$request->input('gioitinh'),
    'sdt'    =>$request->input('sdt'),
    'diachi'    =>$request->input('diadiem'),
    'trinhdongoaingu'      =>$request->input('ngoaingu'),
    'id_trinhdo'        =>$request->input('trinhdo'),

  ]);
  return redirect()->back()->with('thongbao','Sửa thông tin cá nhân thành công');
  // return redirect('Ungvien/suathongtin/'.$id)->with('thongbao','Sửa thông tin cá nhân thành công');
}
public function getthemthongtincv(){

  $thongtinuv = tblthongtinsv::where('id_account',Auth::id())->get();
  $nganh = tblnganh::all();
  $trinhdo = tbltrinhdo::all();

  return view('UV.vietcv',['thongtinuv'=>$thongtinuv,'nganh'=>$nganh,'trinhdo'=>$trinhdo]);

}
public function postthemthongtincv(Request $request){
 $this->validate($request,
  [
    'filecv' => 'mimes:pdf|max:10000'
  ],
  [

    'filecv.mimes'=>'Định dạng không hợp lệ.Vui lòng up file pdf',

  ]);
 $cvs = new tblcv;
 $cvs->vitrimongmuon = $request->vitrimongmuon;  
 $cvs->diadiemmongmuon = $request->diadiemmongmuon;
 $cvs->muctieunghenghiep = $request->muctieunghenghiep;
 $cvs->themmota = $request->themmota;
 $cvs->kinhnghiem = $request->kinhnghiem;
 $cvs->id_nganh = $request->nganh;
 $cvs->luong = $request->luong;
 $cvs->id_masv = $request->id_masv;
 if ($request->hasFile('filecv')) {
  $file = $request->file('filecv');
  $name = $file->getClientOriginalName();
  $Hinh = str_random(4)."_".$name;

  while(file_exists("../public/cv/".$Hinh))
  {
    $Hinh = str_random(4)."_".$name;
  }
  $file->move("../public/cv",$Hinh);
  $cvs->tenfilecv = $Hinh;

}


$cvs->save();

return redirect('Ungvien/themthongtincv')->with('thongbao','Thêm CV thành công');


}
public function getdanhsachcv(){
  $checkid = tblthongtinsv::select('id')->where('id_account', Auth::id())->pluck('id')->first();
  $dscv = tblcv::where('id_masv',$checkid)->orderBy('created_at','DESC')->get();
  
  return view('UV.danhsachcv',['dscv'=>$dscv]);
}
public function getsuacv($id){ 
  $nganh = tblnganh::all();
  $cvs = tblcv::where('id',$id)->get();
  return view('UV.suacv',['cvs'=>$cvs,'nganh'=>$nganh]);
}
public function postsuacv(Request $request,$id){
  $cvs = tblcv::find($id);
  $cvs->vitrimongmuon = $request->vitrimongmuon;
  $cvs->diadiemmongmuon = $request->diadiemmongmuon;
  $cvs->muctieunghenghiep = $request->muctieunghenghiep;
  $cvs->themmota = $request->themmota;
  $cvs->kinhnghiem = $request->kinhnghiem;
  $cvs->id_nganh = $request->nganh;
  $cvs->luong = $request->luong;
  if ($request->hasFile('filecv')) {
    $file = $request->file('filecv');
    $name = $file->getClientOriginalName();
    $Hinh = str_random(4)."_".$name;

    while(file_exists("../public/images/".$Hinh))
    {
      $Hinh = str_random(4)."_".$name;
    }
    $file->move("../public/images",$Hinh);
    $cvs->tenfilecv = $Hinh;  
  }
  $cvs->save();
  return redirect('Ungvien/suacv/'.$id)->with('thongbao','Sửa CV thành công');
}
public function getxoacv($id){
  $cvs = tblcv::find($id);
  $cvs->delete();
  return redirect('Ungvien/dscv')->with('thongbao','Xóa CV thành công');
}
public function huy(){
  return redirect('Ungvien/dscv');
}
public function getdanhmucvieclam(){
        //*
  $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
  $cntt = tbltintd::where('id_nganh',1)->whereDate('hannophoso', '>=', $date)->count();
  $cnsh = tbltintd::where('id_nganh',2)->whereDate('hannophoso', '>=', $date)->count();
        //*
  $tcnh = tbltintd::where('id_nganh',3)->whereDate('hannophoso', '>=', $date)->count();
  $cnktdtvt = tbltintd::where('id_nganh',4)->whereDate('hannophoso', '>=', $date)->count();
  $luat = tbltintd::where('id_nganh',5)->whereDate('hannophoso', '>=', $date)->count();
  $ktruc = tbltintd::where('id_nganh',6)->whereDate('hannophoso', '>=', $date)->count();
        //*
  $qtkd = tbltintd::where('id_nganh',7)->whereDate('hannophoso', '>=', $date)->count();
  $luatkt = tbltintd::where('id_nganh',8)->whereDate('hannophoso', '>=', $date)->count();
        //*
  $tkcn = tbltintd::where('id_nganh',9)->whereDate('hannophoso', '>=', $date)->count();
        //*
  $nna = tbltintd::where('id_nganh',10)->whereDate('hannophoso', '>=', $date)->count();
  $nnt = tbltintd::where('id_nganh',11)->whereDate('hannophoso', '>=', $date)->count();
        //*
  $qtdvdlvlh = tbltintd::where('id_nganh',12)->whereDate('hannophoso', '>=', $date)->count();
  $ktoan = tbltintd::where('id_nganh',13)->whereDate('hannophoso', '>=', $date)->count();
        //*
  $cnktdkvtdh = tbltintd::where('id_nganh',14)->whereDate('hannophoso', '>=', $date)->count();
  $cntp = tbltintd::where('id_nganh',15)->whereDate('hannophoso', '>=', $date)->count();
  $luatqt = tbltintd::where('id_nganh',16)->whereDate('hannophoso', '>=', $date)->count();
  return view('UV.danhmucvieclam',['cnsh'=>$cnsh,'cntt'=>$cntt,'tcnh'=>$tcnh,'qtkd'=>$qtkd,'tkcn'=>$tkcn,'nna'=>$nna,'qtdvdlvlh'=>$qtdvdlvlh,'cnktdkvtdh'=>$cnktdkvtdh,'cnktdtvt'=>$cnktdtvt,'luat'=>$luat,'ktruc'=>$ktruc,'luatkt'=>$luatkt,'nnt'=>$nnt,'ktoan'=>$ktoan,'cntp'=>$cntp,'luatqt'=>$luatqt]);
}
public function getdanhmucvieclamnganh($id){
  $danhmuc = tbltintd::where('id_nganh',$id)->get();
  $tennganh = tblnganh::where('id',$id)->take(1)->get();
  return view('UV.danhmucvieclamnganh',['danhmuc'=>$danhmuc,'tennganh'=>$tennganh]);
}
public function getchitiettintuyendung($id){
  //đầu tiên ta lấy mã sinh viên để tìm kiếm đc những cv có mã sinh viên y hịt thằng đăng nhập
  $layid = Auth::id();
  $layid_masv = tblthongtinsv::select('id')->where('id_account',$layid)->pluck('id')->first();
  //lấy tin có mã tin truyền vào $id để đổ dữ liệu ra view
  $chitiettin = tbltintd::where('id',$id)->get();
  //lấy ra ngành của tin tuyển dụng để lọc ra những cv của thằng đang đăng nhập sao cho đúng ngành đúng CV
  $check = tbltintd::select('id_nganh')->where('id',$id)->pluck('id_nganh')->first();
  //lấy những CV chưa đc nộp vào tin tuyển dụng đó
  $check1 = tblketquatuyendung::select('id_cv')->where('id_tin',$id)->get()->toArray();
  $cvss = tblcv::whereNotIn('id',$check1)->where('id_masv',$layid_masv)->where('id_nganh',$check)->get()->toArray();
  $kiemtracv = tblcv::where('id_masv',$layid_masv)->where('id_nganh',$check)->get()->toArray();
    //Nếu k có CV nào có ngành like ngành của tin tuyển dụng đó thì kt = 1;
  if(empty($kiemtracv)){
    $kt = 1;
  }
    //Nếu có CV thuộc ngành đó thì ;
  if(!empty($kiemtracv)){
      //Nếu có CV thuộc ngành đó nhưng không tồn tại CV chưa nộp
    if(empty($cvss)){
      $kt = 2;
    }
        //Nếu có CV chưa nộp
    else {
      $kt = 3;
    }      
  }
      //Lấy những tin đã đăng của nhà tuyển dụng đó
  $idntd = tbltintd::select('id_ntd')->where('id',$id)->pluck('id_ntd')->first();
  $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
  $tinntddadang = tbltintd::where('id_ntd',$idntd)->whereDate('hannophoso', '>=', $date)->orderBy('hannophoso','DESC')->get();
  return view('UV.chitiettintuyendung',['chitiettin'=>$chitiettin,'tinntddadang'=>$tinntddadang,'cvss'=>$cvss,'kt'=>$kt]);
}
public function postnopcv(Request $request){
  $nopcv = new tblketquatuyendung;
  $nopcv->id_cv = $request->id_cv;
  $nopcv->id_tin = $request->id_tin;
  $nopcv->save();
  $id = (int)$request->id_tin;
  return redirect('Ungvien/chitiettintuyendung/'.$id)->with('thongbao','Nộp CV thành công');
}
public function viecdaut()
{
  // $layidsv=tblthongtinsv::select('id')->where('id_account','=',Auth::id())->pluck('id')->first();
  // $layttcv=tblcv::select('id')->where('id_masv','=',$layidsv)->pluck('id')->first();
  // $laykqtd=tblketquatuyendung::where('id_cv','=',$layttcv)->pluck('id_tin')->all();
  // $tingap =tbltintd::where('id',$laykqtd)->get();
  //dd($tingap);
  $layidsv = tblthongtinsv::select('id')->where('id_account',Auth::id())->pluck('id')->first();
  $idkq = tblketquatuyendung::select('id_cv')->get()->toArray();
  $layidcv = tblcv::select('id')->whereIn('id',$idkq)->where('id_masv',$layidsv)->get()->toArray();
  $data = tblketquatuyendung::whereIn('id_cv',$layidcv)->orderBy('created_at','DESC')->get();
  return view("UV.viecdaungtuyen",['data'=>$data]);
}

}


