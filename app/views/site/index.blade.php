@extends('layout.site')

@section('meta-name')
    <meta name="description" content="Your top-1 Social E-Commerce. Revolutionize the way you shop">
@stop

@section('page-title')
    <title>Bazaar Corner</title>
    <meta title="BazaarCorner. Your top-1 Social E-Commerce. Revolutionize the way you shop">
@stop

@section('content')
<div class="container">
    <div class="row" style="padding-bottom: 50px;">
        <div class="col-md-9 col-sm-9">
            <div class="container-fluid"  style="padding-bottom: 30px;">
                <div class="row"> @include('layout.site.banner') </div>
            </div>
            <div class="row"> @include('layout.site.recently-added-products') </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="container-fluid">                
                <div class="row"> @include('layout.site.widget.featured-merchants') </div>
<!--                <div class="row"> @include('layout.site.widget.most-bought-items') </div>-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('layout.site.half-price-tag')
        </div>
    </div>
</div>
@stop

@section('inline-script')
<script type="text/javascript" src="//cdn.jsdelivr.net/fastclick/1.0.3/fastclick.min.js"></script>
<script type="text/javascript" src="/js/jquery.fittext.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
@stop