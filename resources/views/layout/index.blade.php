<!DOCTYPE html>
<html>
@include('style.style')
<body  class="home"> 
<!-- Start PreLoader Section-->
<div class="pre-loader gradient-color">
    <div class="loader"></div>
</div> 
<!-- End PreLoader Section-->


<!-- END Cancel Loader -->
@yield('content')
{{-- @yield('footer') --}}
@include('script.script')

</body>

</html>