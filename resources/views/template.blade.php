<!doctype html>
<html lang="en">

  <head>

  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">

  	<title>SD Muhammadiyah 10 Medan</title>
  	<link rel="shortcut icon" href="assets/images/logo/favourite_icon_1.svg">

  	<!-- Framework - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('landingpage/Template/assets/css/bootstrap.min.css')}}">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/fontawesome.css")}}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/animate.css")}}">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/cursor.css")}}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/slick.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/slick-theme.css")}}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/magnific-popup.css")}}">

    <!-- Vanilla Calendar - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/vanilla-calendar.min.css")}}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset("landingpage/Template/assets/css/style.css")}}">

  </head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="far fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->

      <!-- Site Header - Start
      ================================================== -->

      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      @yield('content')
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
   @include('landing.footer')
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Framework - Jquery Include -->
    <script src="{{asset("landingpage/Template/assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/popper.min.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/bootstrap-dropdown-ml-hack.js")}}"></script>

    <!-- animation - jquery include -->
    <script src="{{asset("landingpage/Template/assets/js/cursor.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/wow.min.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/tilt.min.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/parallax.min.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/parallax-scroll.js")}}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{asset("landingpage/Template/assets/js/slick.min.js")}}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{asset("landingpage/Template/assets/js/magnific-popup.min.js")}}"></script>

    <!-- Counter Up - Jquery Include -->
    <script src="{{asset("landingpage/Template/assets/js/waypoint.js")}}"></script>
    <script src="{{asset("landingpage/Template/assets/js/counterup.min.js")}}"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="{{asset("landingpage/Template/assets/js/countdown.js")}}"></script>

    <!-- Vanilla Calendar - Jquery Include -->
    <script src="{{asset("landingpage/Template/assets/js/vanilla-calendar.min.js")}}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{asset("landingpage/Template/assets/js/main.js")}}"></script>

  </body>
</html>
