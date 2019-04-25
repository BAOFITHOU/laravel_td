<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbltintd;
use App\tblcv;
use App\tblchitiettintuyendung;
use App\tblnganh;
use App\tblthongtinsv;
use App\tblthongtinntd;
use App\User;
use App\tblhtlamviec;
use App\tbltrinhdo;
use App\tblketquatuyendung; 
use DB; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    public function getquantri(){
    	$alltintd = tbltintd::orderBy('created_at','DESC')->get();
    	$tindaduyet = tbltintd::orderBy('created_at','DESC')->where('id_trangthai',1)->get();
    	$tinchuaduyet = tbltintd::orderBy('created_at','DESC')->where('id_trangthai',0)->get();
    	$cvduocduyet = tblketquatuyendung::where('id_trangthai',1)->orderBy('created_at','DESC')->paginate(10);
    	$dem = count($cvduocduyet);
    	$taikhoanntd = User::with('thongtinntd')->where('id_permission',1)->get();
    	$taikhoanuv = User::with('thongtinsv')->where('id_permission',2)->get();
    	return view('admin.admin',['alltintd'=>$alltintd,'tindaduyet'=>$tindaduyet,'tinchuaduyet'=>$tinchuaduyet,'cvduocduyet'=>$cvduocduyet,'dem'=>$dem,'taikhoanntd'=>$taikhoanntd,'taikhoanuv'=>$taikhoanuv]);
    }
    public function duyettin($id){
    	$tintd = tbltintd::where('id',$id)->get();
    	$check = tbltintd::select('id_trangthai')->where('id',$id)->pluck('id_trangthai')->first();
    	return view('admin.xemtin',['tintd'=>$tintd,'check'=>$check]);
    }
    public function pduyettin($id){
    	$table = DB::table('tbl_tintd')->where('id',$id)->update([
        'id_trangthai' => 1
      ]); 
    	return redirect('quantri');
    }
    public function pboduyettin($id){
    	$table = DB::table('tbl_tintd')->where('id',$id)->update([
        'id_trangthai' => 0
      ]); 
    	return redirect('quantri');
    }
}
