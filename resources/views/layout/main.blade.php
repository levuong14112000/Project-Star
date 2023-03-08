
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/anima.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/respon.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >

@include('layout.header')
<!--NAVBAR SECTION END-->

<!-- MAIN -->
<main>
    @yield('content')
</main>

<!-- END MAIN -->

<!-- CONTACT SECTION END-->
@include('layout.footer')
<script  href="{{ asset('js/bootstrap.js') }}"></script>
<script  href="{{ asset('js/custom.js') }}"></script>
<script  href="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script  href="{{ asset('js/jquery.easing.min.js') }}"></script>
<script  href="{{ asset('js/jquery.flexslider.js') }}"></script>
<script  href="{{ asset('js/scrollReveal.js') }}"></script>
<script href="{{asset('js/index.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
