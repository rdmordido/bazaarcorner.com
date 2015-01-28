<div class="box">
    <p class="text-uppercase"><strong>Featured Merchant of the week</strong></p>
    
    @if(!empty($merchants))     
        @foreach($merchants as $merchant)
            <div class="media">
                <div class="media-left">
                    <a href="/merchant/{{$merchant['name']}}">
                        <img class="media-object" alt="{{$merchant['name']}}" 
                             src="{{$merchant['logo']}}"
                        >
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">
                        <a href="/merchant/{{$merchant['name']}}" >{{$merchant['name']}}</a>
                    </h5>
                    <small>
                        Discount {{$merchant['discount']}} &#37; off
                        <br> {{$merchant['shipping']}}
                    </small>
                </div>
            </div>
        @endforeach

        <br>
        <a href="/merchant">View All</a>
    
    @else 
        <p>Currently no featured merchants</p>
    @endif
</div>