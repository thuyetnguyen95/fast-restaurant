@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đơn hàng
                    <small>sửa</small>
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
                <form action="admin/order/sua/{{$order->id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="Name" class="form-control" value="{{$order->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="Email" value="{{$order->email}}" readonly />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="checkbox" id="changepass" name="changePassword"> <i class="text-muted">Check nếu bạn muốn đổi mật khẩu</i>
                        <input type="password" id="check" class="form-control pw" name="Password" placeholder="Nhập mật khẩu" disabled />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" id="check" class="form-control pw" name="pwAgain" placeholder="Nhập lại mật khẩu" disabled />
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

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#changepass").change(function(){
                if($(this).is(":checked")){
                    $(".pw").removeAttr('disabled');
                }else{
                    $(".pw").attr('disabled', '');
                }
            });
        });
    </script>
@endsection