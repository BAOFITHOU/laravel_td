<?php

Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home');
// ->middleware('verified')

Route::get('/Tuyendung',function(){
	return view('NTD.HomeNTD'); 
})->name('Tuyendung'); 
Route::get('','TrangChuController@gettrangchu')->name('home'); 
/// Chung ---------------------	
Route::get('tintuyendung','UVController@gettintd')->name('tintd');

Route::get('/danhsachcongty',function(){
	return view('listcompany');
})->name('dscongty');
// Ung vien --------------------------
// s

Route::get('/quenmatkhau',function(){
	return view('auth.passwords.email');
})->name('reset');

Route::get('/Dsungvien',function(){
	return view('NTD.dsungvien');
})->name('Dsuv');

Route::get('/registeruv',function(){
	$id_permission=2; 
	return view('auth.registerntd',compact('id_permission'));
})->name('dkuv');
Route::get('/registerntd',function(){ 
	$id_permission=1;
	return view('auth.registerntd',compact('id_permission'));
})->name('dkntd');
//// 
Route::get('ErrorNTD',function(){
	return view('ErrorNTD');
})->name('ErrorNTD');
Route::get('ErrorAdmin',function(){
	return view('ErrorAdmin');
})->name('ErrorAdmin');
Route::get('Error',function(){
	return view('Error');
})->name('Error'); 
Route::get('thuu/{id}','NTDController@test');
// Ứng Viên
Route::group(['prefix'=>'Ungvien','middleware'=>['verified','auth','permissionntd']],function(){
	Route::get('viecut',function(){
		return view('UV.viecdaungtuyen');
	})->name('viecdaungtuyen');	
	Route::get('/trangchu','UVController@getinfoUV')->name('trangchuuv'); 
	Route::get('nopcv','UVController@nopcv')->name('nopcv');
	Route::get('chitiettintuyendung/{id}','UVController@getchitiettintuyendung')->name('gettintuyendung'); 	 
	Route::post('chitiettintuyendung/{id}','UVController@postnopcv')->name('nopcv');
	Route::get('suathongtin/{id}','UVController@getsuathongtinungvien')->name('getsuathongtinungvien');
	Route::post('suathongtin/{id}','UVController@postsuathongtinungvien')->name('postsuathongtinungvien');	
	Route::get('themthongtinuv/{id}','UVController@getthemthongtinuv')->name('getthemthongtinuv');
	Route::post('themthongtinuv/{id}','UVController@postthemthongtinuv')->name('postthemthongtinuv');
	Route::get('dscv','UVController@getdanhsachcv')->name('getdanhsachcv');
	Route::get('themthongtincv','UVController@getthemthongtincv')->name('getthemthongtincv');
	Route::post('themthongtincv','UVController@postthemthongtincv')->name('postthemthongtincv');
	Route::get('thongtinntd/{id}','UVController@getthongtinntd')->name('xemthongtinntd');
	Route::get('dscv/{id}','UVController@dscv')->name('dscv');
	Route::get('imgcv','UVController@upimg')->name('upimg');
	Route::post('imgcv{id}','UVController@upx')->name('upx');
	Route::get('suacv/{id}','UVController@getsuacv')->name('getsuacv');
	Route::post('suacv/{id}','UVController@postsuacv')->name('postsuacv');
	Route::get('xoacv/{id}', 'UVController@getxoacv')->name('getxoacv');
	Route::get('danhmucvieclam','UVController@getdanhmucvieclam')->name('xemdanhmucvieclam');
	Route::get('danhmucvieclamnganh/{id}','UVController@getdanhmucvieclamnganh')->name('xemdanhmucvieclamnganh'); 
	Route::get('viecdaut','UVController@viecdaut')->name('viecdaungtuyen');
	Route::get('thongbaouv','UVController@thongbaouv')->name('thongbaouv');
	Route::get('huy', 'UVController@huy')->name('huy');
});

Route::get('trangchu','TrangChuController@gettrangchu')->name('trangchu');
Route::get('xemtintuyendung/{id}','TrangChuController@gettintuyendung')->name('tintuyendung'); 
Route::get('suathongtincanhan/{id}','TrangChuController@getthongtincanhan')->name('suathongtincanhanungvien');
Route::post('suathongtincanhan/{id}','TrangChuController@postthongtincanhan')->name('thongtincanhanungvien');
Route::get('danhmucvieclamnganh/{id}','TrangChuController@getdanhmucvieclamnganh')->name('getdanhmucvieclamnganh'); 
Route::get('danhmucvieclam','TrangChuController@getdanhmucvieclam')->name('getdanhmucvieclam');
Route::get('thongtinntd/{id}','TrangChuController@getthongtinntd')->name('getthongtinntd');
// nhà tuyển dụng
Route::group(['prefix'=>'nhatuyendung','middleware'=>['verified','auth','permission']],function(){

	Route::get('trangchu','NTDController@gettrangchu')->name('trangchuntd');
	Route::get('dangnhap','TrangChuController@dangnhap')->name('dangnhap'); 
	Route::get('capnhapthongtin/{id}','NTDController@getcapnhapthogtin')->name('getcapnhapthogtin');
	Route::get('themthongtin/{id}','NTDController@getthemthongtin')->name('getthemthongtin');
	Route::post('themthongtin/{id}','NTDController@postthemthongtin')->name('postthemthongtin');
	Route::post('capnhapthongtin/{id}','NTDController@postcapnhapthogtin')->name('postcapnhapthogtin');

	Route::get('xemtin/{id}','NTDController@gettin' )->name('getxemtin');
	Route::get('suatintuyendung/{id}', 'NTDController@getsuatintuyendung')->name('getsuatintuyendung');
	Route::post('suatintuyendung/{id}','NTDController@postsuatintuyendung')->name('postsuatintuyendung'); 
	Route::post('dangtintuyendung','NTDController@postdangtintuyendung')->name('postdangtintuyendung');
	Route::get('xoatintuyendung/{id}','NTDController@getxoatintuyendung')->name('xoatintuyendung');
	Route::get('suathongtinntd/{id}', 'NTDController@getsuathongtinntd')->name('getsuathongtinntd');
	Route::post('suathongtinntd/{id}', 'NTDController@postsuathongtinntd')->name('postsuathongtinntd');
	Route::post('timkiemungvien','NTDController@posttimkiemungvien')->name('posttimkiemungvien'); 
	Route::get('imgntd','NTDController@upimg')->name('upimgntd');
	Route::post('imgntd{id}','NTDController@upx')->name('upntd');
	Route::get('thongbaotd','NTDController@thongbaontd')->name('thongbao'); 
	Route::get('xemungvien/{id}/{idtin}','NTDController@xemungvien')->name('xemungvien');
	Route::post('xemcv','NTDController@postxemcvthat')->name('postxemcvthat');
	Route::post('bocv','NTDController@postbocvthat')->name('postbocvthat');

	Route::get('xemuvphuhop/{id}','NTDController@xemuvphuhop')->name('xemuvphuhop');
	Route::get('xemcvungvienph/{id}','NTDController@xemcvungvienphuhop')->name('xemcvungvienphuhop');
	Route::get('baidang','NTDController@baidang')->name('baidang');
});
// trả về trangung  trước
Route::get('travetrangtruoc','TrangChuController@back')->name('backin');
Route::get('find','SearchController@find')->name('find');
Route::get('finduv','SearchController@finduv')->name('finduv');
Route::post('filter','SearchController@filter')->name('filter');
Route::get('/mvc',function(){
	return view('NTD.ttuv');
})->name('thongtinungvien');
Route::get('downfile/{id}','TrangChuController@down')->name('down');
//ADMIN
	Route::get('quantri','AdminController@getquantri')->name('quantri')->middleware('auth')->middleware('admin');
	Route::get('duyettin/{id}','AdminController@duyettin')->name('duyettin');
	Route::post('duyettin/{id}','AdminController@pduyettin')->name('pduyettin');
	Route::post('boduyettin/{id}','AdminController@pboduyettin')->name('pboduyettin');
//ADMIN