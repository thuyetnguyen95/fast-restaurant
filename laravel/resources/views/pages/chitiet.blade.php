@extends('layout.index')
@section('content')

<div class="">
    <div class="" style="color: #fff">
        <div class="bgt-orange bgt-cat">Chi tiết sản phẩm</div>
        <div class="line-bgt-1"></div>
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-5">
                    <img src="upload/sanpham/{{$chitietma->hinh}}" class="img-responsive">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-5"><p style="font-size: 20px;">Tên sản phẩm:</p></div>
                        <div class="col-md-6"><p style="font-size: 20px;">{{$chitietma->tenmonan}}</p></div>
                    </div>
                    <h3>Mô tả ngắn: </h3>
                     <p style="color: #fff">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo enim genera quae erant, fecit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac di contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac di contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac dit tria. Sed quod proximum fuit non vidit. Eam tum adesse, cum dolor omnis absit; Itaque contra est, ac di
                     </p>
                </div>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>
</div>

@endsection