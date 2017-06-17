@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-8">
                @if(session('thongbao'))
                <div class="alert alert-dismissable alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{session('thongbao')}}
                </div>
                @endif
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên slide</th>
                        <th>Hình</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slide as $sl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sl->id}}</td>
                        <td>{{$sl->tenslide}}</td>
                        <td>
                        <img src="upload/slide/{{$sl->hinh}}" class="img-responsive" style="max-width: 350px;">
                        </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/slide/sua/{{$sl->id}}"> Sửa</a></td>
                        <td class="center"> <i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa ?')" href="admin/slide/xoa/{{$sl->id}}">Xóa</a></td>
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