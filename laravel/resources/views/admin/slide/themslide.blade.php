@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
            {{-- error alert --}}
            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{session('thongbao')}}
                </div>
            @endif
            
            @if(session('loi'))
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{session('loi')}}
                </div>
            @endif

            <!-- comment -->
                <form action="admin/slide/them" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="">Tên</label>
                        <input type="text" name="ten" class="form-control" placeholder="Nhập tên slide">
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="hinh" class="form-control">
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