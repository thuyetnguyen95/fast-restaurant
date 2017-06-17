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
                    <a style="margin-left:10px;"" href="thanhtoan/{{$item->rowId}}"><input type="button" name="" class="btn btn-info" value="Thanh toán"></a>
                    <?php } ?>
                 
                    {{-- <a style="margin-left:10px;" href="#" onclick="return window.confirm('Bạn có muốn xóa toàn bộ giỏ hàng ?')"><input type="button" name="" class="btn btn-danger" value="Xóa giỏ hàng"></a> --}}
                <!-- </form> -->
               
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