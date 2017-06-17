<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Slide;
use App\LoaiMon;
use App\MonAn;
use App\User;
use App\Order;
use DB,Cart;

class PagesController extends Controller
{
    function __construct(){
		
		$loaimon = LoaiMon::all();
		$monan = MonAn::all();
		$slide = Slide::all();
		
		view()->share('loaimon', $loaimon);		
		view()->share('slide', $slide);		
		view()->share('monan', $monan);		

		if (Auth::check()) {
			view()->share('nguoidung', Auth::user());
		}
	}

	function trangchu(){
		// $loaimon = LoaiMon::all();
		return view('pages.trangchu');
	}
    
    function lienhe(){	return view('pages.lienhe');}
    
    function gioithieu(){	return view('pages.gioithieu');}
    
    function loaimon($id){
    	$loaimonan = LoaiMon::find($id);
    	$dsmonan = MonAn::where('idloaimonan', $id)->paginate(24);
    	return view('pages.category', ['loaimonan' => $loaimonan, 'dsmonan' => $dsmonan]);
    }
    function monan($id){
    	$chitietma = MonAn::find($id);
    	return view('pages.chitiet', ['chitietma' => $chitietma]);
    }

    function thucdon(){	return view('pages.404');}
    function trogiup(){	return view('pages.404');}
    function dichvu(){	return view('pages.404');}
// =======================================================================================================

    public function muahang($id){
    	
    	$product_buy = DB::table('monan')->where('id', $id)->first();
    	Cart::add(array('id' => $id, 'name'=> $product_buy->tenmonan,'qty' => 1, 'price' => $product_buy->gia, 'options' => ['img' => $product_buy->hinh]));
    	$content = Cart::content();
    	// var_dump($content);
    	return redirect()->route('giohang');
    }

    public function giohang(){
    	$content = Cart::content();
    	$total = Cart::total();
    	return view('pages.cart', compact('content', 'total'));
    }
    public function xoasanpham($id){
    	Cart::remove($id);
    	return redirect()->route('giohang');
    }
    
    public function thanhtoan($id){
    	$content = Cart::content();
    	$idd = $id;
    	// echo $idd;die();
    	return view('pages.thanhtoan',compact('content', 'idd'));
    }
    public function xulythanhtoan(Request $request, $id){
    	$content = Cart::content();
    	$idd = $id;
    	
    	$cart = new Order;
    	$cart->hoten = $request->hoten;
    	$cart->sodienthoai = $request->sodienthoai;
    	$cart->tongtien = $request->tongtien;
        $cart->diachi = $request->diachi;
    	$cart->ban = $request->soban;

    	$cart->save();
    	Cart::destroy();
    	return redirect()->route('giohang');
    }

}
