<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\LoaiMon;

// Route::get('/', function () {
//     return view('welcome');
// });

// ======================================================================
Route::get('admin/', 'UserController@getAdmin');
Route::get('admin/dangnhap', 'UserController@getAdmin');
Route::post('admin/dangnhap', 'UserController@postAdmin');
Route::get('admin/logout', 'UserController@getlogoutAdmin');

Route::group(['prefix'=>'admin', 'middleware' => 'adminlogin'], function(){
	// Route loai mon an
	Route::group(['prefix'=>'loaimonan'], function(){
		Route::get('danhsach', 'LoaiMonController@getDanhSach');

		Route::get('sua/{id}', 'LoaiMonController@getSua');
		Route::post('sua/{id}', 'LoaiMonController@postSua');

		Route::get('them', 'LoaiMonController@getThem');
		Route::post('them', 'LoaiMonController@postThem');

		Route::get('xoa/{id}', 'LoaiMonController@getXoa');
	});
	
	// Route mon an
	Route::group(['prefix'=>'monan'], function(){
		Route::get('danhsach', 'MonAnController@getDanhSach');

		Route::get('sua/{id}', 'MonAnController@getSua');
		Route::post('sua/{id}', 'MonAnController@postSua');

		Route::get('them', 'MonAnController@getThem');
		Route::post('them', 'MonAnController@postThem');

		Route::get('xoa/{id}', 'MonAnController@getXoa');
	});

	// Route Slide
	Route::group(['prefix'=>'slide'], function(){
		Route::get('danhsach', 'SlideController@getDanhSach');

		Route::get('sua/{id}', 'SlideController@getSua');
		Route::post('sua/{id}', 'SlideController@postSua');

		Route::get('them', 'SlideController@getThem');
		Route::post('them', 'SlideController@postThem');

		Route::get('xoa/{id}', 'SlideController@getXoa');
	});

	// Route lien he
	// Route::group(['prefix'=>'lienhe'], function(){
	// 
	// 	// Route::get('danhsach', 'LienHeController@getDanhSach');
	// });

	//Route User
	Route::group(['prefix'=>'user'], function(){
		Route::get('danhsach', 'UserController@getDanhSach');

		Route::get('sua/{id}', 'UserController@getSua');
		Route::post('sua/{id}', 'UserController@postSua');

		Route::get('them', 'UserController@getThem');
		Route::post('them', 'UserController@postThem');

		Route::get('xoa/{id}', 'UserController@getXoa');
	});

	Route::group(['prefix'=>'donhang'], function(){
		Route::get('danhsach', 'CartController@getDanhSach');

		Route::get('sua/{id}', 'CartController@getSua');
		Route::post('sua/{id}', 'CartController@postSua');

		Route::get('them', 'CartController@getThem');
		Route::post('them', 'CartController@postThem');

		Route::get('xoa/{id}', 'CartController@getXoa');
	});

	Route::get('login', function(){
		return view('admin.login');
	});

	Route::get('home', function(){
		return view('admin.home');
	});

	Route::get('lienhe', function(){
		return view('admin.lienhe.danhsach');
	});

});

Route::get('/', 'PagesController@trangchu');
Route::get('lienhe', 'PagesController@lienhe');
Route::get('gioithieu', 'PagesController@gioithieu');
Route::get('thucdon', 'PagesController@thucdon');
Route::get('dichvu', 'PagesController@dichvu');
Route::get('trogiup', 'PagesController@trogiup');
Route::get('loai/{id}/{tenkhongdau}.html', 'PagesController@loaimon');
Route::get('chitiet/{id}/{tenkhongdau}.html', 'PagesController@monan');

Route::get('muahang/{id}/{tensanpham}', ['as' => 'muahang', 'uses' => 'PagesController@muahang']);
Route::get('giohang', ['as' => 'giohang', 'uses' => 'PagesController@giohang']);
Route::get('xoasanpham/{id}', ['as' => 'xoasanpham', 'uses' => 'PagesController@xoasanpham']);
Route::get('thanhtoan/{id}', ['as' => 'thanhtoan', 'uses' => 'PagesController@thanhtoan']);
Route::post('xulythanhtoan/{id}', ['as' => 'xulythanhtoan', 'uses' => 'PagesController@xulythanhtoan']);
    

// Route::get('dangxuat', 'PagesController@getDangXuat');
// Route::get('dangky' , 'PagesController@getDangKy');
// Route::post('dangky' , 'PagesController@postDangKy');
// Route::post('timkiem', 'PagesController@timkiem');