@extends('layout.index')
@section('content')

<div class="">
    <div class="" style="color: #fff">
        <div class="bgt-orange bgt-cat">Chi tiết đơn hàng</div>
        <div class="line-bgt-1"></div>
        <div id="feature_product" >
        <div class="block">
            <h3 class="title_about">Sản phẩm</h3>
            <div>
                <!-- <form method="post" action=""> -->
                    <div class="table-responsive">
                        <table border="1" cellpadding="5px" class="table table-bordered">
                        <tr style="background: #000; ">
                            <th style="text-align: center;width: 50px; ">ID</th>
                            <th style="text-align: center;width: 120px; "> Ảnh </th>
                            <th style="text-align: center; ">Tên mặt hàng</th>
                            <th style="text-align: center;width: 100px; ">Số lượng</th>
                            <th style="text-align: center;width: 150px ">Đơn giá</th>
                            <th style="text-align: center;width: 80px; ">Tác vụ</th>
                        </tr>
                      @foreach($content as $item)
                        <tr>
                            <td style="text-align: center;width: 50px; ">{{$item->id}}</td>
                            <td style="text-align: center; "><img width="150px" src="upload/sanpham/{{$item->options->img}}"></td>
                            <td style="text-align: center; ">{{$item->name}}</td>
                            <td style="text-align: center;">{{$item->qty}}</td>
                            <td style="text-align: center; ">{{$item->price}} đ</td>
                            <td style="text-align: center; "><a href="xoasanpham/{{$item->rowId}}">Xóa</a></td>
                        </tr>
                        
                    @endforeach
                    </table>      
                    </div>
                    <!-- ============= -->
                     <?php
                        if(Cart::count() == 0)
                            echo "<div style = 'margin-top:5px;margin-bottom:10px;color:red;'>Không có sản phẩm nào trong giỏ hàng</div>";
                        else
                        {
                    ?>
                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold">Số lượng sản phẩm&nbsp: <?php echo Cart::count();?> </span>&nbsp
                        <span style="color:red;"></span>
                    </div>
                    <div style="margin-bottom:10px;">
                        <span style="font-weight: bold">Tổng giá &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </span>&nbsp
                        <span style="color:red;"><?php echo Cart::subtotal(); ?></span>
                        
                    </div>
                    <?php } ?>
                    <!-- ============= -->

                    <script type="text/javascript">
                        function goBack(){
                            window.history.back();
                        }
                    </script>
                    <a><input type="button" name="" class="btn btn-warning" onclick="goBack()" value="Trở về"></a>
                    
                    <?php 
                        if(Cart::count() > 0){
                    ?>
                    <a style="margin-left:10px;"" href="{{asset('/thanhtoan')}}"><input type="button" name="" class="btn btn-info" value="Thanh toán"></a>
                    <?php } ?>
                 
                    {{-- <a style="margin-left:10px;" href="#" onclick="return window.confirm('Bạn có muốn xóa toàn bộ giỏ hàng ?')"><input type="button" name="" class="btn btn-danger" value="Xóa giỏ hàng"></a> --}}
                <!-- </form> -->
               <h3 class="title_bill" style="margin-bottom: 20px; ">Thông tin khách hàng:</h3>
                    <div class="">
                        <form method="post" action="xulythanhtoan/{{$item->rowId}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Tổng tiền: <span style="color:red"></span></div>
                                <div class="col-md-8"><?php echo Cart::subtotal();?>
                                    <select name="tongtien">
                                        <option value="<?php echo Cart::subtotal();?>"></span></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Họ và tên: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="text" name="hoten" class="form-control" placeholder="Tên của bạn" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Số điện thoại: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="number" name="sodienthoai" class="form-control" placeholder="Di động" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Địa chỉ: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Số bàn: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="number" name="soban" class="form-control" placeholder="Số bàn" required>
                                </div>
                            </div>

                            {{-- <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Ngày giao hàng: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="date" name="date" class="form-control" placeholder="Địa chỉ" required>
                                </div>
                            </div> --}}
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-8 col-xs-offset-3">
                                    <span style="color:red;font-weight:bold; ">(*)</span> 
                                    <span class="form-text text-muted">Mục bắt buộc nhập</span>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Gửi">
                                    <input type="reset" name="reset" class="btn btn-warning" value="Nhập lại">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="" style="margin-top: 50px; ">
                        {{-- <p>
                            Chân trọng cảm ơn quý khách hàng đã sử dụng sản phẩm của chúng tôi
                            . Chúng tôi cam kết đảm bảo chất lượng sản phẩm tới tay khách hàng,
                            mọi thắc mắc xin vui lòng liên hệ với chúng tôi
                            qua hòm thư điện tử: <a href="#" style="margin-left:10px;">restaurant@gmail.com</a>
                            .  Xin chân thành cảm ơn quý khách
                        </p> --}}
                    </div>
            <!-- </div>
                   
                    
            </div>
        </div> -->
    </div>
    <!--=======================  -->
    <style type="text/css">
        .cart_menu{margin-top: 10px;}
        .cart_menu ul{padding: 0px;margin: 0px;}
        .cart_menu ul li{display: inline;padding: 10px;}
        .cart_menu ul li a{font-weight: bold; text-decoration: none}
    </style>
    </div>
</div>

@endsection