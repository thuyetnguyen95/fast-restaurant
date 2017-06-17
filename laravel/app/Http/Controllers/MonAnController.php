<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiMon;
use App\MonAn;

class MonAnController extends Controller
{
	public function getDanhSach(){
		
		$monan = MonAn::all();
		$loaimon = LoaiMon::all();
		return view('admin.monan.danhsach', ['monan' => $monan, 'loaimon' => $loaimon]);
	}

    public function getThem(){

    	$loaimon = LoaiMon::all();
    	return view('admin.monan.themmonan', ['loaimon' => $loaimon]);
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    			'ten' => 'required|min:3|max:100|unique:monan,tenmonan',
                'gia' => 'required|min:4|max:10',
    			'mota' => 'required|min:4|max:800',
    			'loaimon' => 'required'
    		],[
    			'ten.required' => 'Bạn chưa nhập tên món ăn !',
    			'ten.min' => 'Tên món ăn phải nhiều hơn 3 ký tự',
    			'ten.max' => 'Tên món ăn quá dài (> 100 ký tự)',
    			'ten.unique' => 'Tên món đã tồn tại',
    			'gia.required' =>'Bạn chưa nhập giá ',
                'gia.min' => 'Giá từ 1 ngàn đồng trở lên',
                'gia.max' => 'Giá quá lớn',
                'mota.required' =>'Bạn chưa nhập mô tả ',
    			'mota.min' => 'Mô tả ít nhất 4 ký tự',
    			'mota.max' => 'Mô tả quá dài',
    			'loaimon.required' => 'Bạn chưa chọn loại món ăn'
    		]);

    	$monan = new MonAn;
    	$monan->tenmonan = $request->ten;
    	$monan->tenkhongdau = changeTitle($request->ten);
        $monan->gia = $request->gia;
    	$monan->mota = $request->mota;
    	$monan->idloaimonan = $request->loaimon;
    	
    	if($request->hasFile('hinh')){

            $file = $request->file('hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG' && $duoi != 'PNG' ){
                return redirect('admin/sanpham/them')->with('loi', 'Định dạng hình ảnh không đúng (jpg. png. jpeg...) !');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(5)."_".$name;
            while(file_exists("upload/sanpham/".$hinh)){
                $hinh = str_random(5)."_".$name;
            }
            $file->move("upload/sanpham",$hinh);
        
        $monan->hinh = $hinh;
        
        }else{
            $monan->hinh = "";
        }

    	$monan->save();
    	return redirect('admin/monan/them')->with('thongbao', 'Bạn đã thêm thành công !');
    }

    public function getSua($id){

    	$monan = MonAn::find($id);
    	$loaimon = LoaiMon::all();
    	return view('admin.monan.suamonan', ['monan' => $monan, 'loaimon' => $loaimon]);
    }

    public function postSua(Request $request, $id){

    	$suamonan = MonAn::find($id);

    	$this->validate($request,[
    			'ten' => 'required|min:3|max:100|unique:monan,tenmonan',
    			'gia' => 'required|min:4|max:10',
                'mota' => 'required|min:4|max:800',
    			'loaimon' => 'required'
    		],[
    			'ten.required' => 'Bạn chưa nhập tên món ăn !',
    			'ten.min' => 'Tên món ăn phải nhiều hơn 3 ký tự',
    			'ten.max' => 'Tên món ăn quá dài (> 100 ký tự)',
    			'ten.unique' => 'Tên món đã tồn tại',
    			'gia.required' =>'Bạn chưa nhập giá ',
    			'gia.min' => 'Giá từ 1 ngàn đồng trở lên',
    			'gia.max' => 'Giá quá lớn',
                'mota.required' =>'Bạn chưa nhập mô tả ',
                'mota.min' => 'Mô tả ít nhất 4 ký tự',
                'mota.max' => 'Mô tả quá dài',
    			'loaimon.required' => 'Bạn chưa chọn loại món ăn'
    		]);

    	// $monan = MonAn::all();
    	$suamonan->tenmonan = $request->ten;
    	$suamonan->tenkhongdau = changeTitle($request->ten);
        $suamonan->gia = $request->gia;
    	$suamonan->mota = $request->mota;
    	$suamonan->idloaimonan = $request->loaimon;
    	
    	if($request->hasFile('hinh')){

            $file = $request->file('hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG' && $duoi != 'PNG' ){
                return redirect('admin/sanpham/sua')->with('loi', 'Định dạng hình ảnh không đúng (jpg. png. jpeg...) !');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(5)."_".$name;
            while(file_exists("upload/sanpham/".$hinh)){
                $hinh = str_random(5)."_".$name;
            }
            
            $file->move("upload/sanpham",$hinh);
        	unlink("upload/sanpham/".$suamonan->hinh);
        	$suamonan->hinh = $hinh;
        }

    	$suamonan->save();
    	return redirect('admin/monan/sua/'.$id)->with('thongbao', 'Bạn đã sửa thành công !');
    }

    public function getXoa($id){

    	$xoamonan = MonAn::find($id);
    	$xoamonan->delete();

    	return redirect('admin/monan/danhsach')->with('thongbao', 'Xóa thành công món ăn');
    }

}
