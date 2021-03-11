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
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Trận đấu đáng chú ý</h2>
	            	</div>
            		{{--<ul class="list-group" margin-left="10px">
                        @foreach($hotgame as $hotgame)
                        <li class="list-group-item">
                            <div>{{$hotgame->CLB1}} &nbsp @php echo substr($hotgame->gio,0,5);@endphp &nbsp {{$hotgame->CLB2}}
                            </div>
                            <div>{{$hotgame->ngay}}</div>
                        </li>

                        @endforeach
            		</ul>--}}
                    <div class="panel-body">
	                    <table style=" border-bottom: ">
                            @foreach($hotgame as $hotgame)
                        <tr>
                            <td>{{$hotgame->CLB1}} &nbsp @php echo substr($hotgame->gio,0,5);@endphp &nbsp {{$hotgame->CLB2}}</td>
                            <td>{{substr($hotgame->ngay,8,2)}}{{substr($hotgame->ngay,4,3)}}</td>
                        </tr>
                        @endforeach
                        </table>   
                    </div>
 	            </div>
        	</div>
            {{--@include('home.favorite')--}}
        </div>
        <!-- /.row -->
    	    
        </div>
    </div>
    <!-- end Page Content -->
 @endsection

 @section('script')
 @if(Auth::check())
 <script>
    var favoritegame = <?php echo $favoritegameall;?> ;
    var today = new Date().getDate();
    var month = new Date().getMonth();
    var reminderon = 1;
    function reminder(){
        var hour = new Date().getHours();
        var minute = new Date().getMinutes();
        favoritegame.forEach(function(element){
            var gamehour = element.gio.substr(0,2);
            var gameminute = element.gio.substr(3,2);
            var gameday = element.ngay.substr(8,2);
            var gamemonth = element.ngay.substr(5,2);
            if( gameminute < 5 ) {
                var gameminute1 = 60 - ( 5 - gameminute );
                var gamehour1 = gamehour - 1;
            }
            else {
                var gameminute1 =gameminute - 5;
                var gamehour1 = gamehour;

            }
            if(gamehour1 == hour && gameminute1 == minute && gameday == today && gamemonth == (month+1) && reminderon == 1){
                alert('Trận đấu giữa '+element.CLB1+' - '+element.CLB2+'bắt đầu lúc '+gamehour+':'+gameminute);
            }
            // if(gameday == today && gamemonth == (month+1) ){
            //     alert('Trận đấu giữa '+gameminute+gamehour+element.CLB1+' - '+element.CLB2+' bắt đầu trong 3 phút nữa');
            // }
            
        });
    }
    var a = setInterval(reminder, 10000);
    function changereminder(){
        reminderon = reminderon?0:1;
        if( reminderon === 1){
            alert('Bạn sẽ nhận được thông báo về các trận đấu ưa thích trong ngày tại trang chủ');
            //var a = setInterval(reminder, 10000);
        }
        else{
        alert('Tắt thông báo các trận đấu ưa thích');
        }
    } 
 </script>
 @endif
 @endsection