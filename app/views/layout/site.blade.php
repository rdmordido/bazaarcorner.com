<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"><!--<![endif]-->
    <head>
        @include('layout.partial.head-meta')
        @include('layout.partial.head-script')
        @include('layout.partial.head-link')
    </head>
    <body id="page-top">
        <header>
            @include('layout.partial.header')
        </header>        
        <main role="main"> @yield('content') </main>
        <footer>
            @include('layout.partial.footer')
        </footer>
        @include('layout.partial.inline-script')
    </body>
</html>
