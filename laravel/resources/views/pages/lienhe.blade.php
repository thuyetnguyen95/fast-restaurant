@extends('layout.index')
@section('content')

<div class="">
    <div class="bgt-green bgt-cat">Liên hệ</div>
    <div class="line-bgt-2"></div>
    <div  class="col-md-8" style="width: 100%; height: 390px; border:2px dashed #ddd;text-align: center; padding-top: 20px;margin-bottom: 50px; ">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7446.956367348766!2d105.72935217122894!3d21.05355528395121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1491238774911" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="title_contact">
        <p class="col-xs-offset-3" style="color:#3ab6e6;font-size: 20px;font-weight: bold; ">GỬI THƯ CHO CHÚNG TÔI</p>
    </div>
    <div class="contact_us" style="margin:50px 0px; color: #fff ">
        <form method="post" action="">
            <div class="row" style="margin-top: 5px; ">
                <div class="col-md-2" style="font-weight:bold;padding-top: 3px;  ">Họ và tên: <span style="color:red">(*)</span></div>
                <div class="col-md-6">
                    <input type="text" name="fullname" class="form-control" placeholder="Tên của bạn" required>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; ">
                <div class="col-md-2" style="font-weight:bold;padding-top: 3px;  ">Số điện thoại: <span style="color:red">(*)</span></div>
                <div class="col-md-6">
                    <input type="number" name="phone" class="form-control" placeholder="Di động" required>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; ">
                <div class="col-md-2" style="font-weight:bold;padding-top: 3px;  ">Địa chỉ: <span style="color:red">(*)</span></div>
                <div class="col-md-6">
                    <input type="text" name="address" class="form-control" placeholder="Địa chỉ" required>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; ">
                <div class="col-md-2" style="font-weight:bold;padding-top: 3px;  ">Nội dung:</div>
                <div class="col-md-6">
                    <textarea class="form-control" rows="5" placeholder="Nội dung"></textarea>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; ">
                <div class="col-md-6 col-xs-offset-2">
                    <span style="color:red;font-weight:bold; ">(*)</span> 
                    <span class="form-text text-muted" style="color:#fff">Mục bắt buộc nhập</span>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; ">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-primary" value="Gửi">
                    <input type="reset" name="reset" class="btn btn-warning" value="Nhập lại">
                </div>
            </div>
        </form>
    </div>

</div>

@endsection