<!DOCTYPE html>
<html lang="en">


<head>
  <!-- ================== Basics =================== -->
  <title>Interiorlife</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ================== Font =================== -->
  <link rel="stylesheet" type="text/css" href="{{asset('web/font/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/font/mdi-font/css/material-design-iconic-font.min.css')}}">
  <!-- ================== Vendor CSS =================== -->
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/bootstrap4/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/owl-carousel/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/revolution/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/revolution/navigation.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/revolution/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/vendor/lightbox2/src/css/lightbox.css')}}">
  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('web/css/font.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('web/css/custom.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Page Loader -->
  <div id="page-loader">
    <div class="page-loader__inner">
      <div class="page-loader__spin"></div>
    </div>
  </div>
  <!-- End Page Loader -->
  <!-- Page Wrap -->
  <div class="page-wrap">
    <!-- Header Stick -->
    <header class="header-stick header-stick--dark">
      <div class="container clearfix">
        <h1 class="logo pull-left">
          <a href="{{route('web.index')}}">
            <img alt="Logo" src="{{asset('web/img/logo-white.png')}}">
          </a>
        </h1>
        <nav class="menu-desktop pull-right">
          <ul class="ul--inline ul--no-style">
            <li>
              <a href="{{route('web.index')}}">
                Home
              </a>
            </li>
            <li>
              <a href="{{route('web.gallery')}}">
                Portfolio
              </a>
            </li>
            <li>
              <a href="{{route('web.room.room')}}">
                Room
              </a>
            </li>
            <li>
              <a href="{{route('web.about.about')}}">
                About Us
              </a>
            </li>
            <li>
              <a href="{{asset('uploads/'.$doc->file).''}}" target="_blank">
                Our Catalogue
              </a>
            </li>
            <li>
              <a href="{{route('web.contact.contact')}}">
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header Stick -->
    <!-- Header Mobile -->
    <header class="header-mobile">
      <div class="container clearfix">
        <h1 class="logo pull-left">
          <a href="{{route('web.index')}}">
            <img alt="Logo" src="{{asset('web/img/logo.png')}}">
          </a>
        </h1>
        <a class="menu-mobile__button">
          <i class="fa fa-bars"></i>
        </a>
        <nav class="menu-mobile hidden">
          <ul class="ul--no-style">
            <li>
              <a href="{{route('web.index')}}">
                Home
              </a>
            </li>
            <li>
              <a href="{{route('web.gallery')}}">
                Portfolio
              </a>
            </li>
            <li>
              <a href="{{route('web.room.room')}}">
                Room
              </a>
            </li>
            <li>
              <a href="{{route('web.about.about')}}">
                About Us
              </a>
            </li>
            <li>
              <a href="{{asset('uploads/'.$doc->file).''}}" target="_blank">
                Our Catalogue
              </a>
            </li>
            <li>
              <a href="{{route('web.contact.contact')}}">
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header Mobile -->
    <!-- Header Desktop -->
    <header class="header-desktop header2">
      <div class="container clearfix">
        <h1 class="logo pull-left">
          <a href="{{route('web.index')}}">
            <img alt="Logo" src="{{asset('web/img/logo.png')}}">
          </a>
        </h1>

        <nav class="menu-desktop menu-desktop--show pull-right">
          <ul class="ul--inline ul--no-style">
            <li>
              <a href="{{route('web.index')}}">
                Home
              </a>
            </li>
            <li>
              <a href="{{route('web.gallery')}}">
                Portfolio
              </a>
            </li>
            <li>
              <a href="{{route('web.room.room')}}">
                Room
              </a>
            </li>
            <li>
              <a href="{{route('web.about.about')}}">
                About Us
              </a>
            </li>
            <li>
              <a href="{{asset('uploads/'.$doc->file).''}}" target="_blank">
                Our Catalogue
              </a>
            </li>
            <li>
              <a href="{{route('web.contact.contact')}}">
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header Desktop -->