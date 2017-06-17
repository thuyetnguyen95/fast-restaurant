<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getDanhSach(){

		$user = User::all();
	
		return view('admin.user.danhsach', ['user' => $user]);
	}

	public function getThem(){

		return view('admin.user.them');

	}

	public function postThem(Request $request){

		$this->validate($request, [
				'Name' => 'required|min:3|max:30|unique:users,name',
				'Email' => 'required|email|unique:users,email',
				'Password' => 'required|min:6|max:32',
				'pwAgain' => 'required|same:Password'
			],[
				'Name.required' => 'Bạn chưa nhập tên người dùng ! ',
				'Name.min' => 'Tên người dùng quá ngắn !',
				'Name.max' => 'Tên người dùng quá dài !',
				'Name.unique' => 'Tên người dùng đã tồn tại !',
				'Email.required' => 'Bạn chưa nhập email !',
				'Email.email' => 'Email không đúng định dạng !',
				'Email.unique' => 'Email đã tồn tại !',
				'Password.required' => 'Bạn chưa nhập mật khẩu !',
				'Password.min' => 'Mật khẩu phải có ít nhất 6 ký tự !',
				'Password.max' => 'Mật khẩu không quá 32 ký tự !',
				'pwAgain.required' => 'Bạn chưa nhập lại mật khẩu !',
				'pwAgain.same' => 'Hai mật khẩu không trùng nhau !',
			]);

		$user = new User;
		$user->name = $request->Name;
		$user->email = $request->Email;
		$user->password = bcrypt($request->Password);

		$user->save();

		return redirect('admin/user/them')->with('thongbao', 'Thêm thành công !');
	}

	public function getSua($id){

		$user = User::find($id);
		return view('admin.user.sua', ['user' => $user]);
	}

	public function postSua(Request $request, $id){

		$this->validate($request, [
				'Name' => 'required|unique:users,name|min:3|max:30'
			],[
				'Name.required' 	=> 'Bạn chưa nhập tên người dùng ! ',
				'Name.unique' 		=> ' Tên người dùng đã tồn tại! ',
				'Name.min' 			=> 'Tên người dùng quá ngắn !',
				'Name.max' 			=> 'Tên người dùng quá dài !',	
			]);

		$user = User::find($id);
		$user->name = $request->Name;
		if ($request-> changePassword == 'on') {
			$this->validate($request,[
				'Password' 		=> 'required|min:6|max:32',
				'pwAgain' 		=> 'required|same:Password'
			],[
				'Password.required' 	=> 'Bạn chưa nhập mật khẩu !',
				'Password.min' 			=> 'Mật khẩu phải có ít nhất 6 ký tự !',
				'Password.max' 			=> 'Mật khẩu không quá 32 ký tự !',
				'pwAgain.required' 		=> 'Bạn chưa nhập lại mật khẩu !',
				'pwAgain.same' 			=> 'Hai mật khẩu không trùng nhau !'
			]);
			$user->password = bcrypt($request->Password);
		}

		$user->save();
		return redirect('admin/user/sua/'.$id)->with('thongbao', 'Bạn đã sửa thành công !');

	}

	public function getXoa($id){

		$user = User::find($id);
		$user->delete();

		return redirect('admin/user/danhsach')->with('thongbao', 'Bạn đã xóa người dùng thành công !');
	}

	public function getAdmin(){

		return view('admin.login');
	}

	public function postAdmin(Request $request){

		$this->validate($request, [
			'email' 		=> 'required',
			'password' 		=> 'required|min:3|max:32'
		],[
			'email.required' 		=> 'Bạn chưa nhập tên người dùng',
			'password.required' 	=> 'Bạn chưa nhập password',
			'password.min' 			=> 'Mật khẩu phải nhiều hơn 6 ký tự',
			'password.max' 			=> 'Mật khẩu quá dài',
		]);

		if(Auth::attempt(['name' => $request->email, 'password' => $request->password])){
			return redirect('admin/home');
		}else{
			return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập không thành công !');
		}
	}

	public function getlogoutAdmin()
	{
		Auth::logout();
		return redirect('admin/dangnhap');
	}
}
