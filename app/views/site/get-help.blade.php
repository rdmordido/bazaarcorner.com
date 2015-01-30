@extends('layout.site')

@section('meta-name')
<meta name="description" content="Bazaar Corner offical website">
@stop

@section('content')
<div class="container">
    <h1>Need Help? <small>Bazaar Corner Quick Tips</small></h1>
    <br>
    <p>
        <span class="text-success">
            <strong>Question:</strong>
        </span> 
        How to apply new item conditions?
        <br>
        <span class="text-info">
            <strong>Answer:</strong>
        </span> 
        When you list your item, you'll need to specify its condition. Watch 
        our video about specifying your item's condition. 
        <a             
        href="http://pages.ebay.com/sellerinformation/video/itemcondition.html"
        >
            Watch Now.
        </a>
    </p>
    
    <p>
        Condition descriptions differ by item category. Use the following tables
        to determine the condition you need to specify for your item. 
    </p>
    <div class="row">
        <table class="table table-condensed table-responsive">
            <thead>
                <tr>
                    <td><strong class="text-uppercase">Condition</strong></td>
                    <td><strong class="text-uppercase">Description</strong></td>
                </tr>
            </thead>
            <tbody>
                @foreach($tips as $tip)
                    <tr>
                        <td><strong>{{$tip['condition']}}</strong></td>
                        <td>{{$tip['description']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('inline-script')
@stop