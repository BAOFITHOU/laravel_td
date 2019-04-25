<?php

namespace App\Http\Controllers;
use App\tblcv;
use App\tbltintd;
use App\tblnganh;
use App\tblthongtinsv;
use App\tblthongtinntd;
use App\tblhtlamviec;
use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
class SearchController extends Controller
{
     public function find(Request $request){
        $search = $request->search;
        $viecphuhop= tbltintd::where('tieudetin','like',"%$search%")
        ->with('nganh') 
        ->orwhere('vitrituyendung','like',"%$search%")
        ->orwhere('motacongviec','like',"%$search%")
        ->orwhere('trinhdohocvan','like',"%$search%")
        ->orwhere('yeucauhoso','like',"%$search%")
        ->orwhere('mucluong','like',"%$search%")
        ->orwhere('hannophoso','like',"%$search%")
        ->orwhere('lienhe','like',"%$search%")
        ->orwhere('yeucaungoaingu','like',"%$search%")
        ->orwhere('quyenloi','like',"%$search%")
        // ->orwhere('tennganh','like',"%$search%")
        // ->orwhere('tenhinhthuc','like',"%$search%")
        // ->orwhere('website','like',"%$search%")
        //->orwhere('tencongty','like',"%$search%") 
        ->paginate(3);         
             //dd($viecphuhop);
            if(count($viecphuhop)==0)
            {
                 $x=1;  
            }
            else 
            {
                 $x=2;
               
            }
        return view('search',['viecphuhop'=>$viecphuhop,'search'=>$search,'x'=>$x]);
    }
    public function filter(Request $request)
    { 
        $search = $request->timkiem; 
        // dd($search);
        $uvphuhop = tblthongtinsv::join('tbl_cv', 'tbl_thongtinsv.id', '=', 'tbl_cv.id_masv')
        ->join('users', 'tbl_thongtinsv.id_account', '=', 'users.id')
        ->join('dm_nganh', 'tbl_cv.id_nganh', '=', 'dm_nganh.id')
        ->where('id_nganh','=',$search)
        ->get();
        $nganh = tblnganh::get();
        if(count($uvphuhop)==0)
            {
                 $x=1;  
            }
            else
            {
                 $x=2;
               
            } 

        return view('searchuv',['nganh'=>$nganh,'uvphuhop'=>$uvphuhop,'search'=>$search,'x'=>$x]);
    }
    public function finduv(Request $request)
    {   
        $search = $request->search;
        $uvphuhop = tblthongtinsv::join('tbl_cv', 'tbl_thongtinsv.id', '=', 'tbl_cv.id_masv')
        ->join('dm_nganh', 'tbl_cv.id_nganh', '=', 'dm_nganh.id')
        ->join('users', 'tbl_thongtinsv.id_account', '=', 'users.id')
        ->where('name','like',"%$search%")
        ->orwhere('gioitinh','like',"%$search%")
        ->orwhere('trinhdongoaingu','like',"%$search%")
        ->orwhere('tennganh','like',"%$search%")
        ->get();
        //dd($uvphuhop);
        $nganh = tblnganh::all();
        if(count($uvphuhop)==0)
            {
                 $x=1;  
            }
            else
            {
                 $x=2;
               
            }
        return view('searchuv',['uvphuhop'=>$uvphuhop,'search'=>$search,'x'=>$x,'nganh'=>$nganh]);
    }
}
