@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món ăn:
                    <small>thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger alert-dismissable">
                        <a class="close" href="#" data-dismiss='alert'>&times;</a>
                        @foreach($errors->all() as $err)
                            {{$err}}<br />
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success alert-dismissable">
                        <a class="close" href="#" data-dismiss='alert'>&times;</a>
                        {{session('thongbao')}}
                    </div>
                @endif

                <form action="admin/monan/them" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên món ăn:</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên món ăn" />
                    </div>
                    <div class="form-group">
                        <label>Loại món ăn:</label>
                        <select class="form-control" name="loaimon">
                            <option value="">----- Chọn loại món ăn -----</option>

                            @foreach($loaimon as $lma)
                                <option value="{{$lma->id}}">{{$lma->tenloai}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mô tả:</label>
                        <textarea class="form-control" rows="5" name="mota" placeholder="Mô tả"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Giá:</label>
                        <input class="form-control" name="gia" placeholder="Giá món ăn" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="hinh" class="form-control">
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