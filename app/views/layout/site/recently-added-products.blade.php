<div class="col-sm-12 col-md-12">
    <h4 class="pull-left"><strong>Recently Added Stuff</strong></h4>
    <a class="pull-right view-more" href="/products">view more <span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
</div>

<div class="col-sm-12 col-md-4 ">
    <div class="item-wrap-recent">
        <img class="img-responsive" src="img/recent_stuff/roku_headset.jpg">
        <div class="item-price" >
            <span class="item-name">Roku Headphones Headset</span>
            <span class="current-price">&#36;22080</span>
            <span class="last-price">&#36;35 tag price</span>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-8 r-padding">
    <div id="added-item" class="carousel-ind carousel slide" data-ride="carousel">                
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($pages as $products => $items)
                <div class="item @if($products == 0) active @endif">
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="item-wrap">
                                    <a href="/product/{{$item['name']}}">
                                        <div class="item-price">
                                            <span class="item-name">{{$item['name']}}</span>
                                            <span class="item-name">&#36; {{$item['current_price']}}</span>
                                            <span class="item-name">&#36; {{$item['last_price']}} tag price</span>
                                        </div>
                                        <img class="img-responsive" src="{{$item['logo']}}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php $keys = array_keys($pages); ?>
            @foreach($keys as $key)
                <li data-target="#added-item" 
                    data-slide-to="<?php echo $key;?>"
                    @if($key == 0)
                        class ="active"
                    @endif
                    >
                </li>            
            @endforeach
        </ol>
    </div>
</div>