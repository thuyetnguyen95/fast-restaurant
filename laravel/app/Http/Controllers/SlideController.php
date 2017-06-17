<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    public function getDanhSach(){
    	$slide = Slide::all();
    	return view('admin.slide.danhsach', ['slide' => $slide]);
    }

    public function getThem(){
    	return view('admin.slide.themslide');
    }

    public function postThem(Request $request){
    	 $this->validate($request,[
	        'ten' => 'required|min:3|max:200',
	      ],[
	        'ten.required' => 'Bạn chưa nhập tên slide !',
	        'ten.min' => 'Tên slide quá ngắn !',
	        'ten.max' => 'Tên silde quá dài !',
	      ]);

	      $slide = new Slide;
	      $slide->tenslide = $request->ten;
	      if($request->has('Link'))
	        $slide->link = $request->Link;
	      if($request->hasFile('hinh')){

	            $file = $request->file('hinh');
	            $duoi = $file->getClientOriginalExtension();
	            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG' && $duoi != 'PNG' ){
	                return redirect('admin/slide/them')->with('loi', 'Định dạng hình ảnh không đúng (jpg. png. jpeg...) !');
	            }
	            $name = $file->getClientOriginalName();
	            $hinh = str_random(5)."_".$name;
	            while(file_exists("upload/slide/".$hinh)){
	                $hinh = str_random(5)."_".$name;
	            }
	            $file->move("upload/slide",$hinh);
	        	$slide->hinh = $hinh;
	        }else{
	        	$slide->hinh = "";
	        }

	        $slide->save();
	        return redirect('admin/slide/them')->with('thongbao', 'Thêm thành công !');
    }

    public function getSua($id){
    	$slide = Slide::find($id);
    	return view('admin/slide/suaslide', ['slide' => $slide]);
    }
    public function postSua(Request $request, $id){

    	$this->validate($request,[
	        'ten' => 'required|min:3|max:200',
	      ],[
	        'ten.required' => 'Bạn chưa nhập tên slide !',
	        'ten.min' => 'Tên slide quá ngắn !',
	        'ten.max' => 'Tên silde quá dài !',
	      ]);

    		$slide = Slide::find($id);
	      	$slide->tenslide = $request->ten;
	      if($request->has('Link'))
	        $slide->link = $request->Link;
	      if($request->hasFile('hinh')){

	            $file = $request->file('hinh');
	            $duoi = $file->getClientOriginalExtension();
	            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG' && $duoi != 'PNG' ){
	                return redirect('admin/slide/them')->with('loi', 'Định dạng hình ảnh không đúng (jpg. png. jpeg...) !');
	            }
	            $name = $file->getClientOriginalName();
	            $hinh = str_random(5)."_".$name;
	            while(file_exists("upload/slide/".$hinh)){
	                $hinh = str_random(5)."_".$name;
	            }
	            unlink("upload/slide/".$slide->hinh);
	            $file->move("upload/slide",$hinh);
	        	$slide->hinh = $hinh;
	        }

	        $slide->save();
	        return redirect('admin/slide/sua/'.$id)->with('thongbao', 'Sửa thành công !');
    }
    public function getXoa($id){

    	$slide = Slide::find($id);
       	$slide->delete();
       
       	return redirect('admin/slide/danhsach')->with('thongbao', 'Xóa thành công !');
    }
}
