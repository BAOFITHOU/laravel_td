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
use DB; 
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
class TrangChuController extends Controller 
{
    public function down($id)
    {  
        $url = 'cv/'.$id;// đường dẫn đến file
        return Response()->download($url);
    }
    public function gettrangchu()
    {
    	
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
       // $cntt = tbltintd::where('id_nganh',1)->whereDate('hannophoso', '>=', $date)->count();
        
        //*
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
        $khac = $cnsh + $cnktdtvt + $luat + $ktruc + $luatkt + $nnt + $ktoan + $cntp + $luatqt;
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        // $viecphuhop = tbltintd::whereDate('hannophoso', '>=', $date)->orderBy('hannophoso','ASC')->paginate(1);
        $tingap = tbltintd::whereDate('hannophoso', '>=', $date)->orderBy('hannophoso','ASC')->paginate(3);
        $nganhnoibat = tblnganh::where('noibat',1)->orderBy('id')->get();
        return view('home',['tingap'=>$tingap,'cntt'=>$cntt,'tcnh'=>$tcnh,'qtkd'=>$qtkd,'tkcn'=>$tkcn,'nna'=>$nna,'qtdvdlvlh'=>$qtdvdlvlh,'cnktdkvtdh'=>$cnktdkvtdh,'khac'=>$khac,'nganhnoibat'=>$nganhnoibat]);
    }
    public function getthongtinntd($id){
        $ntd = tblthongtinntd::where('id',$id)->get();
        $tintd = tbltintd::where('id_ntd',$id)->orderBy('hannophoso','DESC')->get();
        return view('thongtinntd',['ntd'=>$ntd,'tintd'=>$tintd]);
    }
    // public function gettrangchu($id){
    //     $data = User::with('thongtinsv','cvs')->where('id',$id)->get();
    //     $svs = tblthongtinsv::select('id_nganh')->where('id_account',$id)->pluck('id_nganh')->first();
    //     $ntd = tblthongtinntd::all();
    //     $viecphuhop = tblchitiettintuyendung::with('nganh')->where('id_nganh','=',$svs)->get();
    //     return view('UV.HomeUV',['data'=>$data,'viecphuhop'=>$viecphuhop,'ntd'=>$ntd]);
    // }
    public function gettintuyendung($id){ 
        $tin = tbltintd::with('nganh','hinhthuclamviec')->where('id',$id)->get();
        return view('tintd',['tin'=>$tin]); 
    }
    public function getthongtincanhan($id){
        $thongtincanhan = tblthongtinsv::with('user','cvs','trinhdo')->where('id',$id)->get();
        $trinhdo = tbltrinhdo::all();
        return view('UV.suacv',['thongtincanhan'=>$thongtincanhan,'trinhdo'=>$trinhdo]);
    }
    public function postthongtincanhan(Request $request,$id){
    }
    public function getdanhmucvieclamnganh($id){
        $danhmuc = tbltintd::where('id_nganh',$id)->get();
        $tennganh = tblnganh::where('id',$id)->take(1)->get();
        return view('danhmucvieclamnganh',['danhmuc'=>$danhmuc,'tennganh'=>$tennganh]);
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
        return view('danhmucvieclam',['cnsh'=>$cnsh,'cntt'=>$cntt,'tcnh'=>$tcnh,'qtkd'=>$qtkd,'tkcn'=>$tkcn,'nna'=>$nna,'qtdvdlvlh'=>$qtdvdlvlh,'cnktdkvtdh'=>$cnktdkvtdh,'cnktdtvt'=>$cnktdtvt,'luat'=>$luat,'ktruc'=>$ktruc,'luatkt'=>$luatkt,'nnt'=>$nnt,'ktoan'=>$ktoan,'cntp'=>$cntp,'luatqt'=>$luatqt]);
    }
    public function getchitiettintuyendung($id){
        $chitiettin = tbltintd::where('id',$id)->get();
        $idntd = tbltintd::select('id_ntd')->where('id',$id)->pluck('id_ntd')->first();
        $tinntddadang = tbltintd::where('id_ntd',$idntd)->orderBy('hannophoso','DESC')->get();
        return view('chitiettintuyendung',['chitiettin'=>$chitiettin,'tinntddadang'=>$tinntddadang]);
    }
    public function back()
    {
        return redirect('nhatuyendung/trangchu');
    }

}	
