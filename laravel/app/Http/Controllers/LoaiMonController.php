<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiMon;

class LoaiMonController extends Controller
{
    //
    public function getDanhSach(){

    	$loaimon = LoaiMon::all();
    	return view('admin.loaimonan.danhsach', ['loaimon'=>$loaimon]);
    }
    
    public function getThem(){

    	return view('admin.loaimonan.themloaimon');
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    			'Ten' => 'required|min:3|max:100|unique:loaimonan,tenloai'
    		],[
    			'Ten.required' => 'Bạn chưa nhập tên loại món ăn',
    			'Ten.min' => 'Tên loại món ăn phải nhiều hơn 3 ký tự',
    			'Ten.max' => 'Tên món ăn quá dài (>100 ký tự)',
    			'Ten.unique' => 'Tên món ăn đã tồn tại',
    		]);

    	$loaimon = new LoaiMon;
    	$loaimon->tenloai = $request->Ten;
    	$loaimon->tenkhongdau = changeTitle($request->Ten);
    	
    	$loaimon->save();
    	return redirect('admin/loaimonan/them')->with('thongbao','Thêm thành công !');
    }
    

    public function getSua($id){

    	$loaimon = LoaiMon::find($id);

    	return view('admin.loaimonan.sualoaimon',['loaimon' => $loaimon]);
    }

    public function postSua(Request $request, $id){
		
		$loaimon = LoaiMon::find($id);
    	$this->validate($request,[
    			'Ten' => 'required|min:3|max:100|unique:loaimonan,tenloai'
    		],[
    			'Ten.required' => 'Bạn chưa nhập tên loại món ăn',
    			'Ten.min' => 'Tên loại món ăn phải nhiều hơn 3 ký tự',
    			'Ten.max' => 'Tên món ăn quá dài (>100 ký tự)',
    			'Ten.unique' => 'Tên món ăn đã tồn tại',
    		]);
    	$loaimon->tenloai = $request->Ten;
    	$loaimon->tenkhongdau = changeTitle($request->Ten);
    	
    	$loaimon->save();
    	return redirect('admin/loaimonan/sua/'.$id)->with('thongbao','Sửa thành công !');
    }

    public function getXoa($id){
    	
    	$loaimon = LoaiMon::find($id);
    	$loaimon->delete();

    	return redirect('admin/loaimonan/danhsach')->with('thongbao', 'Xóa thành công !');
    }

}
