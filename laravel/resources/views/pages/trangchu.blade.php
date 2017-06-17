@extends('layout.index')
@section('content')

@foreach($loaimon as $lma)
<div class="s">
    <!-- list product conform category -->
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="bgt-orange bgt-cat">Các {{$lma->tenloai}}</div>
                <div class="line-bgt-1"></div>
            </div>
        </div>
        <div class="row">
        <?php
            $data = $lma->monan->where('id','>',0)->sortByDesc('id')->take(6);
            // $mon = $data->shift();
        ?>
        @foreach($data as $ma)
            <div class="col-sm-4 col-lg-2 col-md-4">
                <div class="thumbnail">
                     <a href=""><img class="img-responsive" style="width: 100%;height: 140px;" src="upload/sanpham/{{$ma->hinh}}" alt=""></a>
                    <div class="caption">
                        <h4 class="name-pr"><a href="chitiet/{{$ma->id}}/{{$ma->tenkhongdau}}.html">{{$ma->tenmonan}}</a></h4>
                        <h4 class="cost">{{$ma->gia}} <sup>đ</sup></h4>
                </h4>
                        
                    </div>
                    <div class="ratings">
                        <p class="pull-right"><a href="chitiet/{{$ma->id}}/{{$ma->tenkhongdau}}.html">Chi tiết <i class="fa fa-angle-double-right"></i></a></p>
                        <p>
                            <i class="fa fa-shopping-cart " style="color: #A0E25E; font-size: 18px"></i> &nbsp
                            <a href="muahang/{{$ma->id}}/{{$ma->tenkhongdau}}">Đặt ngay</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
    {{--  xem them --}}
    <div class="row">
        <div class="div-detail col-md-12">
            <p class="detail"><a href="loai/{{$lma->id}}/{{$lma->tenkhongdau}}.html">Xem thêm &nbsp<i class="fa fa-angle-double-right faa-horizontal animated"></i></a> </p>
        </div>
    </div>
    <!-- end list -->
</div>
@endforeach

@endsection