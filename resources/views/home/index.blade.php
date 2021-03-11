<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('')}}">
    <title>Bóng đá</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <link href="../css/my.css" rel="stylesheet">
    <style>
    table, th, td {
        border: hidden;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
    }
    .navbar-inverse{
        background-color: #337ab7;
        color: #fff;
    }
    {{--.carousel-inner > .item > img{
        display: inline;
    }--}}
    .slide-image{
        width: 100%;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	@include('home.header')
    <span style=" position: fixed;left: 2px;"><img src="image/ro1.png" alt="" style="width: 43%;">
    </span>
    <span style=" position: fixed;right: -94px;"><img src="image/messi.png" alt="" style="width: 70%;">
    </span>
    @yield('content')


 	@include('home.footer')
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    @yield('script')
</body>

</html>
