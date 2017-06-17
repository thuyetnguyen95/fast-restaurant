@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đơn hàng
                    <small>danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-8">
                @if(session('thongbao'))
                    <div class="alert alert-success alert-dismissable">
                        <a class="close" data-dismiss="alert">&times;</a>
                        {{session('thongbao')}}
                    </div>
                @endif
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên khách đặt</th>
                        <th>Số điện thoại</th>
                        <th>Số bàn</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        {{-- <th>Sửa</th> --}}
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($order as $u)

                    <tr class="odd gradeX" align="center">
                        <td>{{$u->id}}</td>
                        <td>{{$u->hoten}}</td>
                        <td>{{$u->sodienthoai}}</td>
                        <td>{{$u->ban}}</td>
                        <td>{{$u->tongtien}}</td>
                        <td>
                            @if($u->trangthai == 1)
                                {{'Đã thanh toán'}}
                            @else {{'Chưa thanh toán'}}
                            @endif
                        </td>
                        {{-- <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/donhang/sua/{{$u->id}}">Sửa</a></td> --}}
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa ? ' " href="admin/donhang/xoa/{{$u->id}}"> Xóa</a></td>
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