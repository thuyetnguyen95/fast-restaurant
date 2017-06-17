<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Cart;
use App\Order;

class CartController extends Controller
{
    public function getDanhSach(){

		$order = Order::all();
	
		return view('admin.cart.danhsach', ['order' => $order]);
	}

	// public function getThem(){

	// 	return view('admin.order.them');

	// }

	// public function postThem(Request $request){

	// 	$this->validate($request, [
	// 			'Name' => 'required|min:3|max:30|unique:orders,name',
	// 			'Email' => 'required|email|unique:orders,email',
	// 			'Password' => 'required|min:6|max:32',
	// 			'pwAgain' => 'required|same:Password'
	// 		],[
	// 			'Name.required' => 'Bạn chưa nhập tên người dùng ! ',
	// 			'Name.min' => 'Tên người dùng quá ngắn !',
	// 			'Name.max' => 'Tên người dùng quá dài !',
	// 			'Name.unique' => 'Tên người dùng đã tồn tại !',
	// 			'Email.required' => 'Bạn chưa nhập email !',
	// 			'Email.email' => 'Email không đúng định dạng !',
	// 			'Email.unique' => 'Email đã tồn tại !',
	// 			'Password.required' => 'Bạn chưa nhập mật khẩu !',
	// 			'Password.min' => 'Mật khẩu phải có ít nhất 6 ký tự !',
	// 			'Password.max' => 'Mật khẩu không quá 32 ký tự !',
	// 			'pwAgain.required' => 'Bạn chưa nhập lại mật khẩu !',
	// 			'pwAgain.same' => 'Hai mật khẩu không trùng nhau !',
	// 		]);

	// 	$order = new order;
	// 	$order->name = $request->Name;
	// 	$order->email = $request->Email;
	// 	$order->password = bcrypt($request->Password);

	// 	$order->save();

	// 	return redirect('admin/order/them')->with('thongbao', 'Thêm thành công !');
	// }

	public function getSua($id){

		$order = order::find($id);
		return view('admin.cart.sua', ['order' => $order]);
	}

	// public function postSua(Request $request, $id){

	// 	$this->validate($request, [
	// 			'Name' => 'required|unique:orders,name|min:3|max:30'
	// 		],[
	// 			'Name.required' => 'Bạn chưa nhập tên người dùng ! ',
	// 			'Name.unique' => ' Tên người dùng đã tồn tại! ',
	// 			'Name.min' => 'Tên người dùng quá ngắn !',
	// 			'Name.max' => 'Tên người dùng quá dài !',	
	// 		]);

	// 	$order = order::find($id);
	// 	$order->name = $request->Name;
	// 	if ($request-> changePassword == 'on') {
	// 		$this->validate($request,[
	// 			'Password' => 'required|min:6|max:32',
	// 			'pwAgain' => 'required|same:Password'
	// 		],[
	// 			'Password.required' => 'Bạn chưa nhập mật khẩu !',
	// 			'Password.min' => 'Mật khẩu phải có ít nhất 6 ký tự !',
	// 			'Password.max' => 'Mật khẩu không quá 32 ký tự !',
	// 			'pwAgain.required' => 'Bạn chưa nhập lại mật khẩu !',
	// 			'pwAgain.same' => 'Hai mật khẩu không trùng nhau !'
	// 		]);
	// 		$order->password = bcrypt($request->Password);
	// 	}

	// 	$order->save();
	// 	return redirect('admin/order/sua/'.$id)->with('thongbao', 'Bạn đã sửa thành công !');

	// }

	// public function getXoa($id){

	// 	$order = order::find($id);
	// 	$order->delete();

	// 	return redirect('admin/order/danhsach')->with('thongbao', 'Bạn đã xóa người dùng thành công !');
	// }
    
}
