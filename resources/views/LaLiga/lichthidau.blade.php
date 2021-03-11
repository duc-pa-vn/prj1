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
                        <h2 style="margin-top:0px; margin-bottom:0px;">La Liga</h2>
                    </div>
                        <ul class="nav-bar list-inline" style="margin-top:5px; margin-left:5px">
                            <li><a href="page/LaLiga/clb">Câu lạc bộ<a></li>
                            <li><a href="page/LaLiga/bxh">Bảng xếp hạng</a></li>
                            <li><a href="page/LaLiga/lich" style="color: #d0060c">Lịch thi đấu</a></li>
                        </ul>
                        {{--<ul class="list-group" margin-left="10px">
                            @foreach($trandau as $trandau)
                            <li class="list-group-item">
                                <div>{{$trandau->CLB1}}&nbsp{{$trandau->gio}}&nbsp{{$trandau->CLB2}}
                                </div>
                                <div>{{$trandau->ngay}}</div>
                            </li>
                            @endforeach
                        </ul>--}}
                        <div class="panel-body">
                        <table style=" border-bottom: ">
                            @foreach($trandau as $trandau)
                        <tr>
                            <td>{{$trandau->CLB1}} &nbsp @php echo substr($trandau->gio,0,5);@endphp &nbsp {{$trandau->CLB2}}</td>
                            <td>{{substr($trandau->ngay,8,2)}}{{substr($trandau->ngay,4,3)}}</td>
                        </tr>
                        @endforeach
                        </table>   
                    </div>
                  <!--   <div class="panel-body">

                    </div>
                </div> -->
            </div>
        </div>
        <!-- /.row -->

        {{--@include('home.favorite')--}}
    </div>
    <!-- end Page Content -->
@endsection