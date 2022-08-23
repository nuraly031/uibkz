<!DOCTYPE html>
<html lang="en">

@include('index.layout.app')

<body>

<div class="body-inner">

    @include('index.layout.header')

    @yield('content')
    
    @include('index.layout.footer')


<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/contactme/bootstrap-datepicker.min.js"></script>
<script src="/js/contactme/bootstrap-datepicker-lang/en.js"></script>
<script src="/js/contactme/jquery.timepicker.min.js"></script>
<script src="/js/contactme/select2.full.min.js"></script>
<script src="/js/contactme/select2-lang/en.js"></script>
<!--[if lt IE 9]><script src="contactme/js/EQCSS-polyfills-1.7.0.min.js"></script><![endif]-->
<script src="/js/contactme/EQCSS-1.7.0.min.js"></script>
<script src="/js/contactme/contactme-config.js"></script>
<script src="/js/contactme/contactme-1.3.js"></script>

<script src="/js/custom.js"></script>
<script src="/custom/js/custom.js?v=3"></script>

@yield('js')

</div><!-- Body inner end -->
</body>
</html>