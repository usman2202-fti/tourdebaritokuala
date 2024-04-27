<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{ asset('asset/assets/images/logo.png')}}">
    <!--  
    Document Title
    =============================================
  -->
  <title>Tour de Barito Kuala 2023</title>
    <!--  
    Favicons
    =============================================
  -->
  <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
  -->
  <!-- Default stylesheets-->
  <link href="{{ asset('asset')}}/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template specific stylesheets-->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/animate.css/animate.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/flexslider/flexslider.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
  <!-- Main stylesheet and color file-->
  <link href="{{ asset('asset')}}/assets/css/style.css" rel="stylesheet">
  <link id="color-scheme" href="{{ asset('asset')}}/assets/css/colors/default.css" rel="stylesheet">
  <script src="{{ asset('asset')}}/assets2/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('asset')}}/assets2/js/jquery.dataTables.min.js"></script>
  <link href="{{ asset('asset')}}/assets2/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home')}}/">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Register</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('register_rb')}}">Road Bike</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Rute</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('rute/rb')}}">Road Bike</a></li>
                <li><a href="{{ route('rute/mtb')}}">Fun Bike</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Peserta</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('peserta/rb')}}">Road Bike</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Info</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('info')}}">Contact Person</a></li> 
                <li><a href="{{ route('handbook','Technical_Handbook_Tour_de_Batola_2023')}}">Handbook</a></li>  
              </ul>
            </li>
             
          </ul>
        </div>
      </div>
    </nav>

  @yield('body')

    <div class="module-small bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="widget">
              <h5 class="widget-title font-alt">Didukung Oleh:</h5>
              <p>Pemerintah Kab. Barito Kuala</p>
              <p>ISSI Prov. Kalimantan Selatan</p>
              <p>Disporbudpar Kab. Barito Kuala</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="widget">
              <h5 class="widget-title font-alt">&nbsp;</h5>
              <p>Lantas Polres Kab. Barito Kuala</p>
              <p>Dishub Kab. Barito Kuala</p>
              <p>Pol-PP Kab. Barito Kuala</p>
            </div>
          </div>
          <!--<div class="col-sm-3">-->
          <!--  <div class="widget">-->
          <!--    <h5 class="widget-title font-alt">&nbsp;</h5>-->
          <!--    <p>Bank Kalsel</p>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <hr class="divider-d">
    <footer class="footer bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright font-alt">&copy; Tour de Barito Kuala 2023&nbsp;</p>
          </div>
          <div class="col-sm-6">
            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
    <!--  
    JavaScripts
    =============================================
  -->
  <script src="{{ asset('asset')}}/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/wow/dist/wow.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/isotope/dist/isotope.pkgd.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/flexslider/jquery.flexslider.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/smoothscroll.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
  <script src="{{ asset('asset')}}/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
  <script src="{{ asset('asset')}}/assets/js/plugins.js"></script>
  <script src="{{ asset('asset')}}/assets/js/main.js"></script>
</body>
</html>
@include('sweetalert::alert')