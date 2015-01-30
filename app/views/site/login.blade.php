@extends('layout.site')

@section('meta-name')
    <meta name="description" 
          content="Your top-1 Social E-Commerce. 
          Revolutionize the way you shop">
@stop

@section('page-title')
    <title>Bazaar Corner | Login</title>
    <meta title="User Login">
@stop

@section('content')
<div class="container bazaarlogins">
    <div class="row">
        <!-- welcome splash -->
        <div class="col-sm-12 col-md-7 welcome">
            <h1 id="fittext1">Welcome back! Log here</h1>
            <h4>
                Have a Facebook or Twitter account linked to your account?
            </h4>

            <!-- secure social log in -->
            <section class="securelog">
                <h4>Secure Log in with one click:</h4>
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-primary"
                           href="#"
                           role="button">
                            <i class="fa fa-facebook fa-lg"></i>
                            Log in with Facebook
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-info"
                           href="#"
                           role="button">
                            <i class="fa fa-twitter fa-lg"></i>
                            Log in with Twitter
                        </a>
                    </li>
                </ul> 
            </section><!-- end -->
        </div><!-- end -->

        <!-- user login form -->
        <div class="col-sm-12 col-md-5 loginform">
            <h3>Do you have an Bazaar Corner account?</h3>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" 
                           class="form-control" 
                           id="exampleInputEmail1" 
                           placeholder="Enter email or user ID">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" 
                           class="form-control" id="password" 
                           placeholder="Password">
                </div><br>

                <div class="clearfix">
                    <div class="pull-left">
                        <input type="submit" 
                               class="btn btn-danger"
                               value="Log in with BazaarCorner">
                        &nbsp;&nbsp;&nbsp;
                    </div>
                    <a href="/register">
                        <strong>Don't have an account?</strong>
                    </a>
                    <br>
                    <a href="/forgot-password">
                        <strong>Forgot your password?</strong>
                    </a> 
                </div>
            </form><br/>
        </div><!-- end -->	 
    </div>
</div>


<div class="container bazaarevo">
    <div class="row">
        <!-- bazaar revolutionize -->
        <div class="col-sm-12 col-md-12"> 
            <div class="clearfix">
                <div class="pull-left">
                    <img class="bazaarlogorevo" 
                         src="img/logo-revo.png" alt="BazaarCorner logo">
                    <h1 id="fittext2">Revolutionize the way you shop!</h1>
                </div>

                <div class="pull-right">
                    <img class="revopic" 
                         src="img/stockphoto.jpg" alt="Stock image">
                </div>
            </div>
        </div><!-- end -->
    </div>
</div>
@stop

@section('inline-script')
@stop