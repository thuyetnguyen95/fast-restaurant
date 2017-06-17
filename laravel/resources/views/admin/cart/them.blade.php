@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-8">
                @if(count($errors) > 0)
                    
                        @foreach($errors->all() as $err)
                        <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{$err}}
                        </div>
                        @endforeach
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{session('thongbao')}}
                    </div>
                @endif
            </div>
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/user/them" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" name="Name" class="form-control" placeholder="Nhập tên của bạn" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="Email" placeholder="Nhập email" />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="Password" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="pwAgain" placeholder="Nhập lại mật khẩu" />
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
                    <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> Nhập lại</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection