<!-- Footer -->
<footer>
    <div class="overlay overlay--dark">
    </div>
    <div class="parallax parallax--footer">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-9 col-12">
            <h1>
              <a href="index-2.html">
                <img class="footer-logo" alt="Logo" src="{{asset('web/img/logo-white.png')}}">
              </a>
            </h1>
            <ul class="ul--inline ul--footer">
              <li>
                <a href="service-list.html">Service</a>
              </li>
              <li>
                <a href="product.html">Product</a>
              </li>
              <li>
                <a href="{{route('web.gallery')}}">Gallery</a>
              </li>
              <li>
                <a href="blog-list.html">Blog</a>
              </li>
              <li>
                <a href="contact.html">Contact</a>
              </li>
            </ul>
            <div class="social">
              <a href="#" class="social__item social__item--circle">
                <i class="zmdi zmdi-facebook"></i>
              </a>
              <a href="#" class="social__item social__item--circle">
                <i class="zmdi zmdi-dribbble"></i>

              </a>
              <a href="#" class="social__item social__item--circle">
                <i class="zmdi zmdi-google"></i>

              </a>
              <a href="#" class="social__item social__item--circle">
                <i class="zmdi zmdi-twitter"></i>
              </a>
              <a href="#" class="social__item social__item--circle">
                <i class="zmdi zmdi-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- Copyright -->
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          Copyright ©Interiorlife 2020 Designer by
          <span>Webinfotech</span> . All rights reserved
        </div>
      </div>
    </div>
  </section>
  <!-- End Copyright -->
  <!-- Back to top -->
  <a href="#" id="btn-to-top">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- End Back to top -->
</div>
<!-- End Page Wrap -->

<!-- =================== PLUGIN JS ==================== -->
<script src="{{asset('web/vendor/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/wow/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/bootstrap4/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/bootstrap4/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/lightbox2/src/js/lightbox.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/revolution/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('web/vendor/revolution/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
<!-- Local Revolution -->
<!-- <script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.migration.min.js')}}"></script> -->
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/vendor/revolution/local/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function () {
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': false,
      'alwaysShowNavOnTouchDevices': true,
    });
  });
</script>


<!-- =================== CUSTOM JS ==================== -->
<script type="text/javascript" src="{{asset('web/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/revo-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/wow-custom.js')}}"></script>
</body>

</html>