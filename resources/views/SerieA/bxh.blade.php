@extends('home.index')
@section('content')
  <!-- Page Content -->
    <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="image/bongda1.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            @include('home.list')

            <div class="col-md-9">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">SerieA</h2>
                    </div>
                        <ul class="nav-bar list-inline" style="margin-top:5px; margin-left:5px">
                            <li><a href="page/SerieA/clb">Câu lạc bộ<a></li>
                            <li><a href="page/SerieA/bxh" style="color: #d0060c">Bảng xếp hạng</a></li>
                            <li><a href="page/SerieA/lich">Lịch thi đấu</a></li>
                        </ul>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        {{--@include('home.favorite')--}}
    </div>
    <!-- end Page Content -->
@endsection