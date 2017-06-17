@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại món ăn
                    <small>danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <div class="col-md-6">
                @if(session('thongbao'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{session('thongbao')}}
                    </div>
                @endif
            </div>
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên món ăn</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loaimon as $lma)
                    
                    <tr class="odd gradeX" align="center">
                        <td>{{$lma->id}}</td>
                        <td>{{$lma->tenloai}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaimonan/sua/{{$lma->id}}">Edit</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa loại món ăn này ?');" href="admin/loaimonan/xoa/{{$lma->id}}"> Delete</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection