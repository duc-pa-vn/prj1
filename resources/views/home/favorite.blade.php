         <div class="row ">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        CLB ưa thích
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

                </ul>
            </div>
        </div>