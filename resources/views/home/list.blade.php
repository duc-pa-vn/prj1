<div class="col-md-3 " style="font-weight: bold;">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            GIẢI ĐẤU
        </li>

        <li class="list-group-item menu1">
            <a href="page/PremierLeague/clb">Premier League</a>
        </li>
        <li class="list-group-item menu1">
            <a href="page/LaLiga/clb">La Liga</a>
        </li>
        <li class="list-group-item menu1">
            <a href="page/BundesLiga/clb">Bundes Liga</a>
        </li>
        <li class="list-group-item menu1">
            <a href="page/League1/clb">League 1</a>
        </li>
        <li class="list-group-item menu1">
            <a href="page/SerieA/clb">Serie A</a>
        </li>
        <!-- <li class="list-group-item menu1">
            <a href="#">Champion League</a>
        </li>
        <li class="list-group-item menu1">
            <a href="#">V League</a>
        </li> -->
        <li href="#" class="list-group-item menu1 active">
            YÊU THÍCH
        </li>
        @if(isset($favorite))
            @foreach($favorite as $favorite)
                <li class="list-group-item menu1">
                    {{$favorite->CLB}}
                </li>
            @endforeach
        @else
            <li class="list-group-item menu1">
                
            </li>

        @endif
        @if(Auth::check())
        <li class="list-group-item menu1">
            <button onclick="changereminder()">THÔNG BÁO</button>
        </li>
        @endif
    </ul>
</div>