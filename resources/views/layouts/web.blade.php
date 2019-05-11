<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('partials._head')
</head>

<body>

    <!-- ====== Go to top ====== -->
    <a id="toTop" title="Go to top" href="javascript:void(0)">
        <span id="toTopHover"></span>TOP
    </a>

    <!-- Preloader start-->
    <div class="preloader">
        <div class="loader-inner">
            <div class="dash one">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash two">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash three">
                <i class="fa fa-map-marker-alt"></i>
            </div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Header start-->
    @include('partials._header')
    <!-- Header end -->

    @yield('content')
    

    <!--footer -->
    @include('partials._footer')

    @include('partials._scripts')
</body>

</html>