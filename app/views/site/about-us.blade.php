@extends('layout.site')

@section('meta-name')
<meta name="description" content="Bazaar Corner offical website">
@stop

@section('content')
<div class="container">
    <!-- First Layer -->
    <div class="row">
        <!-- Banner -->
        <div class="col-sm-12 col-md-9">
            <div id="banner" class="carousel carousel-shadow slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <a href="#"><img src="img/banner/fashion.jpg" alt="Fashion"></a>
                </div>
                <div class="item">
                  <a href="#"><img src="img/banner/homewares.jpg" alt="Home Wares"></a>
                </div>
                <div class="item">
                  <a href="#"><img src="img/banner/DIY.jpg" alt="DIY"></a>
                </div>
                <div class="item">
                  <a href="#"><img src="img/banner/gadgets.jpg" alt="Gadgets"></a>
                </div>
              </div>

            </div>
        </div><!-- end -->

        <!-- Merchant of the week -->
        <div class="col-sm-12 col-md-3">
            <div class="box">
                <p>Featured Merchant of the week</p>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" alt="" src="img/featured_merchant/hearstrings.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading">Hearstrings</h5>
                    <small>
                    Discount: 60&#37; off<br>PH Nationwide
                    </small>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" alt="" src="img/featured_merchant/jet-setter.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading">JetSetter</h5>
                    <small>
                    Discount: 50&#37; off<br>PH Nationwide
                    </small>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" alt="" src="img/featured_merchant/zico.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading">Zico</h5>
                    <small>
                    Discount: 7000&#37; off<br>PH Nationwide
                    </small>
                  </div>
                </div>
                <a href="#">see all</a>
            </div>
        </div><!-- end -->

        <!-- Banner -->
        <div class="col-sm-12 col-md-9 r-margin">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h4 class="pull-left"><strong>Recently Added Stuff</strong></h4>
                <a class="pull-right view-more" href="#">view more <span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
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
                    <div class="item active">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item-wrap">
                            <a href="#">
                            <div class="item-price" >
                                <span class="item-name">Striped Appeal</span>
                                <span class="current-price">&#36;10</span>
                                <span class="last-price">&#36;35 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/1st_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Striped Appeal</span>
                                <span class="current-price">&#36;10</span>
                                <span class="last-price">&#36;35 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/2nd_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">	
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Sala set</span>
                                <span class="current-price">&#36;500</span>
                                <span class="last-price">&#36;650 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/3rd_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Province Art Canvas</span>
                                <span class="current-price">&#36;180</span>
                                <span class="last-price">&#36;240 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/4th_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Water Based Adhesive</span>
                                <span class="current-price">&#36;20</span>
                                <span class="last-price">&#36;55 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/5th_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">3 days Boracay Escapade</span>
                                <span class="current-price">&#36;280</span>
                                <span class="last-price">&#36;550 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/6th_item.jpg"></div></a></div>				
                      </div>
                    </div>
                    <div class="item">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Striped Appeal</span>
                                <span class="current-price">&#36;10</span>
                                <span class="last-price">&#36;35 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/1st_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Striped Appeal</span>
                                <span class="current-price">&#36;10</span>
                                <span class="last-price">&#36;35 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/2nd_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Sala set</span>
                                <span class="current-price">&#36;500</span>
                                <span class="last-price">&#36;650 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/3rd_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Province Art Canvas</span>
                                <span class="current-price">&#36;180</span>
                                <span class="last-price">&#36;240 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/4th_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Water Based Adhesive</span>
                                <span class="current-price">&#36;20</span>
                                <span class="last-price">&#36;55 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/5th_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">3 days Boracay Escapade</span>
                                <span class="current-price">&#36;280</span>
                                <span class="last-price">&#36;550 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/6th_item.jpg"></div></a></div>				
                      </div>
                    </div>							
                    <div class="item">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Striped Appeal</span>
                                <span class="current-price">&#36;10</span>
                                <span class="last-price">&#36;35 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/1st_item.jpg"></div></a></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Striped Appeal</span>
                                <span class="current-price">&#36;10</span>
                                <span class="last-price">&#36;35 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/2nd_item.jpg"></div></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Sala set</span>
                                <span class="current-price">&#36;500</span>
                                <span class="last-price">&#36;650 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/3rd_item.jpg"></div></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Province Art Canvas</span>
                                <span class="current-price">&#36;180</span>
                                <span class="last-price">&#36;240 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/4th_item.jpg"></div></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">Water Based Adhesive</span>
                                <span class="current-price">&#36;20</span>
                                <span class="last-price">&#36;55 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/5th_item.jpg"></div></div>				
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item-wrap">
                            <div class="item-price" >
                                <span class="item-name">3 days Boracay Escapade</span>
                                <span class="current-price">&#36;280</span>
                                <span class="last-price">&#36;550 tag price</span>
                            </div>
                            <img class="img-responsive" src="img/recent_stuff/6th_item.jpg"></div></div>				
                      </div>
                    </div>
                  </div>
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#added-item" data-slide-to="0" class="active"></li>
                    <li data-target="#added-item" data-slide-to="1"></li>
                    <li data-target="#added-item" data-slide-to="2"></li>
                  </ol>

                </div>
            </div>
        </div>
        </div><!-- end -->

        <!-- Most Bought -->
        <div class="col-sm-12 col-md-3">
            <img class="img-responsive" src="img/most_bought.png">
        </div><!-- end -->

        <div class="col-md-12 r-margin">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="half-price">
                    <img src="img/half_price_shop.png"><a class="pull-right view-more" href="#">SHOP NOW <span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
                  </div>
                  <div class="row items ">
                      <div class="col-md-3 col-sm-6">
                        <div class="item-wrap">
                        <div id="wrap">
                            <img src="img/half_price/fujitsu_laptop.jpg" style="width: 100%; height: 100%;">
                            <div id="text-hover">
                                <a href="#" class="item-name">Fujitsu Laptop Tablet</a><span class="item-price">&#36;300</span>
                                <span class="add-to-cart"><a class="btn btn-default" href="#">Add to cart</a></span>
                                <span class="social-media">

                                    <a href="#"><img src="img/fb.jpg"></a>
                                    <a href="#"><img src="img/twitter.jpg"></a>
                                    <a href="#"><img src="img/pin.jpg"></a>
                                </span>
                                <span class="category">Category: <a href="#">Gadgets</a></span>
                            </div>
                        </div>
                        <hr>
                        <div class="item-description">
                            <h4>Fujitsu Laptop Tablet</h4>					
                            <p>Lifebook T4220 Computer PC C2D Slate<br>Touchscreen Windows</p>					
                        </div>
                        </div>
                     </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="item-wrap">
                        <div id="wrap">
                            <img src="img/half_price/vans.jpg" style="width: 100%; height: 100%;">
                            <div id="text-hover">
                                <a href="#" class="item-name">Vans Casual Men</a><span class="item-price">&#36;35</span>
                                <span class="add-to-cart"><a class="btn btn-default" href="#">Add to cart</a></span>
                                <span class="social-media">

                                    <a href="#"><img src="img/fb.jpg"></a>
                                    <a href="#"><img src="img/twitter.jpg"></a>
                                    <a href="#"><img src="img/pin.jpg"></a>
                                </span>
                                <span class="category">Category: <a href="#">Fashion</a></span>
                            </div>
                        </div>
                        <hr>
                        <div class="item-description">
                            <h4>Vans Casual Shoes Men</h4>					
                            <p>Era VN-0QFK7OT Pop Charcoal Red Canvas<br>Casual Shoes Men</p>					
                        </div>
                        </div>
                     </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="item-wrap">
                        <div id="wrap">
                        <img src="img/half_price/chandeliers.jpg" style="width: 100%; height: 100%;">
                            <div id="text-hover">
                                <a href="#" class="item-name">All Crystal Chandeliers</a><span class="item-price">&#36;100</span>
                                <span class="add-to-cart"><a class="btn btn-default" href="#">Add to cart</a></span>
                                <span class="social-media">

                                    <a href="#"><img src="img/fb.jpg"></a>
                                    <a href="#"><img src="img/twitter.jpg"></a>
                                    <a href="#"><img src="img/pin.jpg"></a>
                                </span>
                                <span class="category">Category: <a href="#">Homewares</a></span>
                            </div>								</div>
                        <hr>
                        <div class="item-description">
                            <h4>All Crystal Chandeliers</h4>					
                            <p>Fashion All Crystal Venetian Style Chandeliers<br>6 Lights Fixture Hallway 110V ER9</p>
                        </div>
                        </div>
                     </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="item-wrap">
                        <div id="wrap">
                            <img src="img/half_price/g-shock.jpg" style="width: 100%; height: 100%;">
                            <div id="text-hover">
                                <a href="#" class="item-name">Vans Casio G-Shock</a><span class="item-price">&#36;45</span>
                                <span class="add-to-cart"><a class="btn btn-default" href="#">Add to cart</a></span>
                                <span class="social-media">

                                    <a href="#"><img src="img/fb.jpg"></a>
                                    <a href="#"><img src="img/twitter.jpg"></a>
                                    <a href="#"><img src="img/pin.jpg"></a>
                                </span>
                                <span class="category">Category: <a href="#">Fashion</a></span>
                            </div>								</div>
                        <hr>
                        <div class="item-description">
                            <h4>Casio G-Shock</h4>					
                            <p>G Shock 1289 Classic Series DW-6900MS</p>
                        </div>
                     </div>
                     </div>
                 </div>
                </div>
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