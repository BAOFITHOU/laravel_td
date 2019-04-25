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
class NTDController extends Controller
{
	 
	public function baidang()
	{
		$tin1 = tblthongtinntd::select('id')->where('id_account',Auth::id())->pluck('id')->first();
		$tin = tbltintd::where('id_ntd',$tin1)->orderBy('created_at','DESC')->get();
		// $idntd = tblthongtinntd::select('id')->where('id_ntd',Auth::id())->pluck('id')->first();
		// $ungvienxn= tblketquatuyendung::where('idtrangthai',1)->get();
		return view('NTD.baidang',['tin'=>$tin]);
	}
	public function upimg()
   {
    return view('NTD.upimg');
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
     
        // dd($request->input('quymo'));
    
    return redirect('nhatuyendung/imgntd')->with('thongbao','Cập nhật ảnh đại diện thành công');
    }
   }
   public function test($id)
   {
   	$thongtin = tblthongtinsv::where('id',$id)->get();
    	$cv= tblcv::where('id_masv',$id)->get();
    	$x =count($cv);
    	$dscv = tblcv::where('id_masv',$id)->get();
    	return view('NTD.test',['thongtin'=>$thongtin,'cv'=>$cv,'x'=>$x]);
   	
   }
	public function gettrangchu(){
		$nhatuyendung = User::with('thongtinntd')->where('id',Auth::id())->get();
		$thongtinntd = tblthongtinntd::with('tintd')->where('id_account',Auth::id())->get()->toArray();
		$data = tblthongtinntd::with('tintd')->where('id_account',Auth::id())->get();
		if(count($thongtinntd)==0)
		{
			$k=1;
		}
		$check = tblthongtinntd::select('id')->where('id_account',Auth::id())->pluck('id')->first();
		if(empty($check)){
			$checker= 0;
		}
		else{
			$checker =1;
		}
		$nganh = tblnganh::all();
		$trinhdo = tbltrinhdo::all();
		$hinhthuclamviec = tblhtlamviec::all();
		//Auth id của thg Baonguyen091099@gmail.com
		//để dữ liệu kiểu đéo gì 2 email giống nhau. xog 1 thg Hn, 1 thg BG
		//giờ ngon r đấy
		$diachintd = tblthongtinntd::select('diadiem')->where('id',Auth::id())->pluck('diadiem')->first();
//Linh tinh vl
		//giờ ném db của t vào test 
	//tài khoản anbanhuongsua là ntd
		//Baonguyen091099 là tài khoảng UV.
	//t chỉ dùng 2 cái này. k đổi id_permision cho đỡ đau đầu.
	// còn lỗi gì nữa k ?

		$sv = tblthongtinsv::where('diachi','like',"%".$diachintd."%")->get();
		// dd($sv);
		//đm, biết sao k  ?K??HOng
		$tt = tblcv::get();
		return view('NTD.HomeNTD',['tt'=>$tt,'sv'=>$sv,'nhatuyendung' => $nhatuyendung,'thongtinntd'=>$thongtinntd,'nganh'=>$nganh,'hinhthuclamviec'=>$hinhthuclamviec,'trinhdo'=>$trinhdo,'data'=>$data,'checker'=>$checker]);
	}
	public function postdangtintuyendung(Request $request){
		$this->validate($request,
			[
				'tieudetin'=>'required',
				'nganh'=>'required',
				'vitrituyendung'=>'required',
				'diadiem'=>'required',
				'soluongtuyen'=>'required',
				'lienhe'=>'required',
				'hinhthuclamviec'=>'required',
				'mucluong'=>'required',
				'hannophoso'=>'required',
				'motacongviec'=>'required',
				'yeucaungoaingu'=>'required',
				'yeucauhoso'=>'required',
				'quyenloi'=>'required'
			],
			[
				'tieudetin.required'=>'Vui lòng nhập tiêu đề tin tuyển dụng',
				'vitrituyendung.required'=>'Vui lòng nhập vị trí muốn tuyển dụng',
				'diadiem.required'=>'Vui lòng nhập địa điểm làm việc',
				'soluongtuyen.required'=>'Vui lòng nhập số lượng cần tuyển',
				'lienhe.required'=>'Vui lòng nhập liên hệ',
				'hinhthuclamviec.required'=>'Vui lòng nhập hình thứ làm việc',
				'mucluong.required'=>'Vui lòng nhập mức lương',
				'hannophoso.required'=>'Vui lòng nhập hạn nộp hồ sơ',
				'motacongviec.required'=>'Vui lòng nhập mô tả cụ thể công việc',
				'yeucauhoso.required'=>'Vui lòng nhập yêu cầu hồ sơ'
			]);
		$tintd = new tbltintd; 
		$tintd->tieudetin = $request->tieudetin;
		$tintd->id_nganh = $request->nganh;
		$tintd->vitrituyendung = $request->vitrituyendung;
		$tintd->diadiem = $request->diadiem;
		$tintd->soluongtuyen = $request->soluongtuyen;
		$tintd->lienhe = $request->lienhe;
		$tintd->id_hinhthuc = $request->hinhthuclamviec; 
		$tintd->mucluong = $request->mucluong; 
		$tintd->id_ntd = $request->ntd;
		$tintd->trinhdohocvan = $request->trinhdohocvan;
		$tintd->hannophoso = $request->hannophoso;
		$tintd->motacongviec = $request->motacongviec;
		$tintd->yeucaungoaingu = $request->yeucaungoaingu;
		$tintd->yeucauhoso = $request->yeucauhoso;
		$tintd->quyenloi = $request->quyenloi; 
		$tintd->save();
		return redirect('nhatuyendung/trangchu')->with('thanhcong','Đăng tin thành công ');
	}	
	// public function gettin($id){ 
	// 	$chitiettin = tbltintd::where('id',$id)->get();
	// 	$idntd = tbltintd::select('id_ntd')->where('id',$id)->pluck('id_ntd')->first();
	// 	$date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
	// 	$tinntddadang = tbltintd::with('nganh','hinhthuclamviec')->whereDate('hannophoso', '>=', $date)->orderBy('hannophoso','ASC')->take(4)->get();
	// 	$cvs = tblketquatuyendung::with('cvs')->where('id_tin',$id)->get();
	// 	return view('NTD.tintuyendung',['chitiettin'=>$chitiettin,'tinntddadang'=>$tinntddadang,'cvs'=>$cvs]);
	// }


	public function gettin($id){ 
		$chitiettin = tbltintd::where('id',$id)->get();
		$idntd = tbltintd::select('id_ntd')->where('id',$id)->pluck('id_ntd')->first();
		$date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
		$tinntddadang = tbltintd::with('nganh','hinhthuclamviec')->whereDate('hannophoso', '>=', $date)->orderBy('hannophoso','ASC')->take(4)->get();
		$cvs = tblketquatuyendung::with('cvs')->where('id_tin',$id)->get();
		$dem1 = count($cvs);
		// dd($dem1);
		$cvsdaduyet = tblketquatuyendung::with('cvs')->where('id_tin',$id)->where('id_trangthai',1)->get();
		// dd($cvsdaduyet);
		$dem2 = count($cvsdaduyet);
		return view('NTD.tintuyendung',['chitiettin'=>$chitiettin,'tinntddadang'=>$tinntddadang,'cvs'=>$cvs,'cvsdaduyet'=>$cvsdaduyet,'dem1'=>$dem1,'dem2'=>$dem2]);
	}




	public function getsuatintuyendung($id){
		$data = tbltintd::where('id',$id)->get();
		$nganh = tblnganh::all();
		$trinhdo = tbltrinhdo::all();
		$hinhthuclamviec = tblhtlamviec::all();
		return view('NTD.suatintd',['data'=>$data,'nganh'=>$nganh,'trinhdo'=>$trinhdo,'hinhthuclamviec'=>$hinhthuclamviec]);
	}
	public function postsuatintuyendung(Request $request, $id){
		$tintd = tbltintd::find($id);
		$this->validate($request,
			[
				'tieudetin'=>'required',
				'nganh'=>'required',
				'vitrituyendung'=>'required',
				'diadiem'=>'required',
				'soluongtuyen'=>'required',
				'lienhe'=>'required',
				'hinhthuclamviec'=>'required',
				'mucluong'=>'required',
				'motacongviec'=>'required',
				'yeucaungoaingu'=>'required',
				'yeucauhoso'=>'required'
			],
			[
				'tieudetin.required'=>'Vui lòng nhập tiêu đề tin tuyển dụng',
				'vitrituyendung.required'=>'Vui lòng nhập vị trí muốn tuyển dụng',
				'diadiem.required'=>'Vui lòng nhập địa điểm làm việc',
				'soluongtuyen.required'=>'Vui lòng nhập số lượng cần tuyển',
				'lienhe.required'=>'Vui lòng nhập liên hệ',
				'hinhthuclamviec.required'=>'Vui lòng nhập hình thứ làm việc',
				'mucluong.required'=>'Vui lòng nhập mức lương',
				'hannophoso.required'=>'Vui lòng nhập hạn nộp hồ sơ',
				'motacongviec.required'=>'Vui lòng nhập mô tả cụ thể công việc',
				'yeucauhoso.required'=>'Vui lòng nhập yêu cầu hồ sơ'
			]);
		$tintd->tieudetin = $request->tieudetin;
		$tintd->id_nganh = $request->nganh;
		$tintd->vitrituyendung = $request->vitrituyendung;
		$tintd->diadiem = $request->diadiem;
		$tintd->soluongtuyen = $request->soluongtuyen;
		$tintd->lienhe = $request->lienhe;
		$tintd->id_hinhthuc = $request->hinhthuclamviec;
		$tintd->mucluong = $request->mucluong;
		$tintd->id_ntd = $request->ntd;
		$tintd->trinhdohocvan = $request->trinhdohocvan;
		$tintd->motacongviec = $request->motacongviec;
		$tintd->yeucaungoaingu = $request->yeucaungoaingu;
		$tintd->yeucauhoso = $request->yeucauhoso;
		$tintd->quyenloi = $request->quyenloi;
		$tintd->save();
		return redirect('nhatuyendung/suatintuyendung/'.$id)->with('thongbao','Sửa tin thành công');
	}
	public function getxoatintuyendung($id){
		$tintd = tbltintd::find($id);
		$tintd->delete();
		return redirect('nhatuyendung/trangchu')->with('thongbao','Xóa tin thành công');
	}
	public function getthemthongtin($id){
			return view('NTD.themthongtinntd');
	} 
	public function postthemthongtin(Request $request,$id){
		$user = DB::table('users')->where('id',$id)->update([
				'name' =>$request->input('name')
		]);
		$ttntd = DB::table('tbl_thongtinntd')->insert([
				'tencongty'  =>$request->input('tencongty'),
				'namthanhlap'=>$request->input('namthanhlap'),
				'website'    =>$request->input('website'),
				'diadiem'    =>$request->input('diadiem'),
				'quymo'      =>$request->input('quymo'),
				'id_account' =>Auth::id(),
				'sdt'        =>$request->input('sdt'),
				'motacongty' =>$request->input('motacongty')
		]);
		return redirect('nhatuyendung/themthongtin/'.Auth::id())->with('thongbao','Thêm thông tin cá nhân thành công');
	}
	public function getsuathongtinntd($id){
		$data = User::with('thongtinntd')->where('id',$id)->get();
		return view('NTD.suainfontd',['data'=>$data]);
	}
	public function postsuathongtinntd(Request $request,$id){
		$user = DB::table('users')->where('id',$id)->update([
				'name' =>$request->input('name')
		]);
		$ttntd = DB::table('tbl_thongtinntd')->where('id_account',$id)->update([
				'tencongty'  =>$request->input('tencongty'),
				'namthanhlap'=>$request->input('namthanhlap'),
				'website'    =>$request->input('website'),
				'diadiem'    =>$request->input('diadiem'),
				'quymo'      =>$request->input('quymo'),
				'sdt'        =>$request->input('sdt'), 
				'motacongty' =>$request->input('motacongty') 
		]); 
		return redirect('nhatuyendung/suathongtinntd/'.$id)->with('thongbao','Sửa thông tin cá nhân thành công');
	}

	public function posttimkiemungvien(Request $request){
		$search = $request->timkiem;
		// $kq=tblcv::where('id_nganh',$search)->get();
		
		return view('nhatuyendung/trangchu/'.Auth::id());
	}
	public function getcapnhapthogtin(){
    }
    public function xemuvphuhop($id)
    {
    	$thongtin = tblthongtinsv::where('id',$id)->get();
    	$cv= tblcv::where('id_masv',$id)->get();
    	$x =count($cv);
    	$dscv = tblcv::where('id_masv',$id)->get();
    	return view('NTD.ttuv',['thongtin'=>$thongtin,'cv'=>$cv,'x'=>$x]);
    } 
    public function xemcvungvienphuhop($id){
    	$thongtin = tblcv::where('id',$id)->get();
    	return view('NTD.xemcvungvienphuhop',['thongtin'=>$thongtin]);
    }
    public function xemungvien($id,$idtin){
		$thongtin = tblcv::where('id',$id)->get();
		$layid = tblketquatuyendung::where('id_cv',$id)->where('id_tin',$idtin)->get();
		// $check = tblcv::select('id')->where('id',$id)->pluck('id')->first();
		$checker = tblketquatuyendung::where('id_cv',$id)->where('id_tin',$idtin)->where('id_trangthai',0)->get()->toArray();
		//Mảng rỗng(tức là cv chưa được duyệt) =>> h = 1 
		if(!empty($checker)){
			$h = 1;
		}
		//Mảng không rỗng(tức là cv đã được duyệt) =>> h = 0 
		else{
			$h = 0;
		}
		return view('NTD.thongtinungvien',['thongtin'=>$thongtin,'layid'=>$layid,'h'=>$h]);
	}
	public function postxemcvthat(Request $request){
    	$check = (int)$request->idid;
		$active = tblketquatuyendung::find($check);
		$active->id_trangthai = 1;
		$active->save();
		return redirect()->back()->with('thongbao','Ok');
	}
	public function postbocvthat(Request $request){
    	$check = (int)$request->idid;
		$active = tblketquatuyendung::find($check);
		$active->id_trangthai = 0;
		$active->save();
		return redirect()->back()->with('thongbao','Ok');
	}
	public function thongbaontd(){
		$layidntd = tblthongtinntd::select('id')->where('id_account',Auth::id())->pluck('id')->first();
		$idkq = tblketquatuyendung::select('id_tin')->get()->toArray();
		$layidtintd = tbltintd::select('id')->whereIn('id',$idkq)->where('id_ntd',$layidntd)->get()->toArray();
		$data = tblketquatuyendung::whereIn('id_tin',$layidtintd)->paginate(6);
		 // dd($data);
		return view('NTD.thongbaontd',['data'=>$data]); 
	} 
} 
 

// 
