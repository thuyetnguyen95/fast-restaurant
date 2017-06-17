@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại món ăn
                    <small>thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissable">
                    <a class="close" href="#" data-dismiss='alert'>&times;</a>
                    @foreach($errors->all() as $err)
                        {{$err}}.<br />
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success alert-dismissable">
                    <a class="close" href="#" data-dismiss='alert'>&times;</a>
                    {{session('thongbao')}}
                </div>
            @endif

            

                <form action="admin/loaimonan/them" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên loại món ăn: </label>
                        <input class="form-control" name="Ten" placeholder="Nhập loại món ăn" />
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
                    <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Nhập lại</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection