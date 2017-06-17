@extends('layout.index')
@section('content')

<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="bgt-orange bgt-cat">
                    {{$loaimonan->tenloai}}
            </div>
            <div class="line-bgt-1"></div>
        </div>
    </div>
    <div class="row">

    @foreach($dsmonan as $ma)

        <div class="col-sm-4 col-lg-2 col-md-4">
            <div class="thumbnail">
                <a href=""> <a href=""><img src="upload/sanpham/{{$ma->hinh}}" alt="" style="width: 100%; height: 145px;" {{-- class="img-responsive" --}}></a></a>
                <div class="caption" style="max-height: 80px">
                    <h4 class="name-pr"><a href="chitiet/{{$ma->id}}/{{$ma->tenkhongdau}}.html">{{$ma->tenmonan}}</a></h4>
                    <h4 class="cost">{{$ma->gia}} <sup>đ</sup></h4>
                </div>
                <div class="ratings">
                    <p class="pull-right"><a href="chitiet/{{$ma->id}}/{{$ma->tenkhongdau}}.html">Chi tiết <i class="fa fa-angle-double-right"></i></a></p>
                    <p>
                        <i class="fa fa-shopping-cart" style="color: #A0E25E; font-size: 18px"></i> &nbsp<a href="muahang/{{$ma->id}}/{{$ma->tenkhongdau}}">Đặt ngay</a>
                    </p>
                </div>
            </div>
        </div>

    @endforeach

    </div>
    <div class="row text-center">
        <div class="col-lg-12">
            {{$dsmonan->links()}}                            
        </div>
    </div>
</div>

@endsection