<!DOCTYPE HTML>
<html lang="en">
    <head>
       @include('partials._head')
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            @include('partials._header')
            <!--  header end -->	
            <!-- wrapper -->	
            <div id="wrapper">
                <!-- Content-->
                <div class="content">   
                    @yield('content')
                <!-- Content end --> 
                </div>     
            </div>
            <!-- wrapper end -->
            <!--footer -->
            @include('partials._footer')
            <!--footer end  -->
            <!--register form -->
            @include('partials._modal')
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        @include('partials._scripts')
    </body>
</html>