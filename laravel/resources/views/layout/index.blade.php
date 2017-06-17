<!DOCTYPE html>
<html>

<head>
    <title>Xin chào quý khách</title>
    <link href="{{ asset('images/favicon.ico') }}" rel="icon" />
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="ptrangchu/font/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ptrangchu/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ptrangchu/css/style.css">
    <link rel="stylesheet" type="text/css" href="ptrangchu/css/font-awesome-animation.css">
    <script type="text/javascript" src="ptrangchu/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="ptrangchu/bootstrap/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
	h4.name-pr a:hover{
		color: red;
		transition-delay: 0.2s;
	}
	.cost{
		color: #b50202;
		font-size: 18px !important;
		text-align: right;
	}
</style>
<body>
    <div class="wrapper">
        <!-- header -->
        @include('layout.header')
        <!-- header -->
        <!-- content main here -->
        <div class="container">
            @include('layout.menu')
            <!-- Page Content -->
            @include('layout.slide')
            <!-- /.container -->
            <hr>
            @yield('content')
            <hr>
            @include('layout.footer')
        </div>
        <!-- end main -->
    </div>
<script type='text/javascript'>
$(function() {
 $(window).scroll(function() {
 if ($(this).scrollTop() != 0) {
 $('#bttop').fadeIn();
 } else {
 $('#bttop').fadeOut();
 }
 });
 $('#bttop').click(function() {
 $('body,html').animate({
 scrollTop: 0
 }, 800);
 });
});
</script>
<div id='bttop'><img src="ptrangchu/images/back-top.png"></div>
</body>

</html>