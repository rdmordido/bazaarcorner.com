@extends('layout.site')

@section('meta-name')
<meta name="description" content="Bazaar Corner offical website">
@stop

@section('content')
<div class="container">
    <div class="row">
        <h1>About Us</h1>
        <p>
            Bazaar Corner is an virtual market place where people and merchants can share and sell products online. A platform where it connects merchants, individual botiques, brands and consumers with an amazing taste on the coolest products.
        </p>
    </div>
    <div class="row">
        <h1>We love to connect merchants and consumers…</h1>
        <p>
            Our main mission is to revolutionize they way people shop online, unlocking individuals' potential in selling. Making it as the safest e-commerce in world and making it more socialize and easy to use. 
        </p>
        
        <h1>Our Team</h1>
        <hr>
        <div class="container" style="padding-bottom: 20px;">
            <div class="row" style="padding-bottom: 30px;">
                @foreach($executives as $executive)
                    <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                        <img class="img-circle img-responsive img-center" src="{{$executive['photo']}}" alt="{{$executive['name']}}">
                        <h3>
                            {{$executive['name']}}
                            <br>
                            <small>{{$executive['position']}}</small>
                        </h3>
                        <p>
                            <a href="{{$executive['facebook']}}"><i class="fa fa-facebook-square fa-2x"></i></a>
                            <a href="{{$executive['twitter']}}"><i class="fa fa-twitter-square fa-2x"></i></a>
                            <a href="{{$executive['linkedin']}}"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            <a href="{{$executive['pinterest']}}"><i class="fa fa-pinterest-square fa-2x"></i></a>
                            <a href="{{$executive['google-plus']}}"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach($developers as $developer)
                    <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                        <img class="img-circle img-responsive img-center" src="{{$developer['photo']}}" alt="{{$developer['name']}}">
                        <h3>
                            {{$developer['name']}}
                            <br>
                            <small>{{$developer['position']}}</small>
                        </h3>
                        <p>
                            <a href="{{$developer['facebook']}}"><i class="fa fa-facebook-square fa-2x"></i></a>
                            <a href="{{$developer['twitter']}}"><i class="fa fa-twitter-square fa-2x"></i></a>
                            <a href="{{$developer['linkedin']}}"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            <a href="{{$developer['pinterest']}}"><i class="fa fa-pinterest-square fa-2x"></i></a>
                            <a href="{{$developer['google-plus']}}"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
</div>
@stop

@section('inline-script')
<script type="text/javascript" src="//cdn.jsdelivr.net/fastclick/1.0.3/fastclick.min.js"></script>
<script type="text/javascript" src="/js/jquery.fittext.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
@stop