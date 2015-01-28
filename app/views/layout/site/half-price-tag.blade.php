<div class="col-sm-12 col-md-12">
    <div class="half-price">
        <img src="img/half_price_shop.png"><a class="pull-right view-more" href="/products/half-priced">SHOP NOW <span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
    </div>
    <div class="row items ">
        @foreach($items as $item)
            <div class="col-md-3 col-sm-6">
                <div class="item-wrap">
                    <div id="wrap">
                        <img src="{{$item['logo']}}" style="width: 100%; height: 100%;">
                        <div id="text-hover">
                            <a href="/product/{{$item['name']}}" class="item-name">
                                {{$item['name']}}
                            </a>
                            <span class="item-price">&#36; {{$item['current_price']}}</span>
                            <span class="add-to-cart"><a class="btn btn-default" href="#">Add to cart</a></span>
                            <span class="social-media">
                                <a href="#"><img src="img/fb.jpg"></a>
                                <a href="#"><img src="img/twitter.jpg"></a>
                                <a href="#"><img src="img/pin.jpg"></a>
                            </span>
                            <span class="category">Category: <a href="/category/{{$item['category']}}">{{$item['category']}}</a></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="item-description">
                    <h4>{{$item['name']}}</h4>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
</div>