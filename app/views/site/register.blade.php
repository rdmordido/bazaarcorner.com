@extends('layout.site')

@section('meta-name')
    <meta name="description" 
          content="Your top-1 Social E-Commerce. 
          Revolutionize the way you shop">
@stop

@section('page-title')
    <title>Bazaar Corner | User Registration</title>
    <meta title="User Registration">
@stop

@section('content')
<div class="container bazaarlogins">
    <div class="row">
        <!-- welcome splash -->
        <div class="col-sm-12 col-md-7 welcome">
            <h1 id="fittext1">Create a BazaarCorner Account</h1>
            <h4>We need a tiny amount of information about you</h4>
            <br/>
            <form method="POST" action="" style="width: 70%;">
                <div class="form-group">
                    <input type="text" 
                           class="form-control" 
                           id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" 
                           class="form-control" 
                           id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" 
                           class="form-control" 
                           id="password2" placeholder="Re-enter Password">
                </div>	
                <div class="form-group">
                    <input type="email" 
                           class="form-control" 
                           id="email" 
                           placeholder="Email">
                </div>
                <div class="form-group">
                      <input type="checkbox" 
                             id="agree"> I agree to the Terms of use						
                </div><br/>						

                <div class="clearfix">
                    <div class="pull-left">
                        <input style="width: 150px;" type="submit" 
                               class="btn btn-danger" value="Join Bazaar!">
                    </div>
                </div>
            </form><br/>					
        </div><!-- end -->

        <!-- user login form -->
        <div class="col-sm-12 col-md-5 loginform">
        <br/><br/><br/><br/><br/><br/>
        <center>	
            <h1>Or</h1> 
            <h4>Login using your social account</h4>
            <br/>
            <!-- secure social log in -->
            <section class="securelog02">
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-primary" href="#" role="button">
                            <i class="fa fa-facebook fa-lg"></i>
                            Log in with Facebook
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-info" href="#" role="button">
                            <i class="fa fa-twitter fa-lg"></i>
                            Log in with Twitter
                        </a>
                    </li>
                </ul> 
            </section><!-- end -->					
        </center>
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
                         src="img/logo-revo.png" 
                         alt="BazaarCorner logo">
                    <h1 id="fittext2">Join & Shop on Bazaar Community<h1>
                </div>

                <div class="pull-right">
                    <img class="revopic" 
                         src="img/stockphoto02.jpg" alt="Stock image 02">
                </div>
            </div>
        </div><!-- end -->
    </div>
</div>
@stop

@section('inline-script')
@stop