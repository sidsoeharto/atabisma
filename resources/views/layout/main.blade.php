<html lang="en" class="skrollr skrollr-desktop">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{url('assets/images/logo-bos-black.jpg')}}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!--theme1-->
	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/style.css" type="text/css" />
	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="https://cdn.dyandra.net/theme1/css/custom.css" type="text/css" />
	<!--end theme1-->

    <link rel="stylesheet" href="https://cdn.dyandra.net/virtual-kit/responsive.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/styles.scss')}}">

    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>

    @yield('add-css')

    <title>ATA BISMA LOGISTIK</title>
</head>

<body class="stretched device-xl has-plugin-easing has-plugin-bootstrap has-plugin-fitvids has-plugin-animations has-plugin-counter has-plugin-linkscroll has-plugin-form has-plugin-subscribeform has-plugin-parallax gototop-active">
    <div id="wrapper" class="clearfix">
        @include('include.navbar')
        @yield('content')
        @include('include.footer')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.dyandra.net/theme1/js/jquery.js"></script>
    <script src="https://cdn.dyandra.net/theme1/js/plugins.min.js"></script>

    <!-- DatePicker JS -->
    <script src="https://cdn.dyandra.net/theme1/js/components/moment.js"></script>
    <script src="https://cdn.dyandra.net/theme1/js/components/daterangepicker.js"></script>

    <!-- Range Slider Plugin -->
    <script src="https://cdn.dyandra.net/theme1/js/components/rangeslider.min.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="https://cdn.dyandra.net/theme1/js/functions.js"></script>

  @yield('add-js')
</body>

</html>
