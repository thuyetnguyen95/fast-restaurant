<div class="col-md-3">
    <p class="lead bg-pink" style="margin-top: 20px; padding: 5px;"><i class="glyphicon glyphicon-cutlery" ></i> Danh sách món</p>
    <div class="list-group">
        @foreach($loaimon as $lma)

        <a href="loai/{{$lma->id}}/{{$lma->tenkhongdau}}.html" class="list-group-item"><i class="fa fa-snowflake-o cat-sp2  " aria-hidden="true"></i> {{$lma->tenloai}}</a>
        
        @endforeach
    </div>
</div>