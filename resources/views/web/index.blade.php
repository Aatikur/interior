@extends('web.templete.master')

@section('seo')
<meta name="description" content="InteriorLife">
@endsection

@section('content')

    <!-- Slider -->
    <section class="slide2">
        <!-- revolution slider begin -->
        <div class="rev_slider_wrapper">
            <div id="revolution-slider2" class="rev_slider" data-version="5.4.4" style="display: none;">
                <ul>
                    @foreach($slider as $data)
                    <li data-transition="crossfade" data-slotamount="7" data-masterspeed="2000" data-delay="10000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('images/slider/'.$data->image)}}" alt="Slide 1">
                        <div class="tp-caption slide-content-2 text-center" data-x="center" data-y="center"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1> {!! $data->content !!}</h1>
                        </div>
                    </li>
                        
                    @endforeach
                    
        
                    {{-- <li data-transition="scaledownfromtop" data-slotamount="7" data-masterspeed="1500" data-delay="10000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('web/img/slide-05.jpg')}}" alt="Slide 2">
                        <div class="tp-caption slide-content-2 text-center" data-x="center" data-y="center"
                        data-frames='[{"delay":1500,"speed":2000,"frame":"0"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1> It's comfort first,
                            comfort last,
                            comfort always.</h1>
                        </div>
                    </li> --}}
    
                    {{-- <li data-transition="crossfade" data-slotamount="7" data-masterspeed="1500" data-delay="10000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('web/img/slide-03.jpg')}}" alt="Slide 3">
                        <div class="tp-caption slide-content-2 text-center" data-x="center" data-y="center"
                        data-frames='[{"delay":1500,"speed":2000,"frame":"0"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1> It's comfort first,
                            comfort last,
                            comfort always.</h1>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </section>
    <!-- End Slider -->

    <section class="our-team2">
        <div class="container-fluid">
            <div class="owl-carousel owl-theme" id="owl-our-team-2">
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room1.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            TEMPLE
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room2.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            LIVING ROOM
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room3.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            BEDROOM
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room4.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            KIDS ROOM
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room5.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            STUDY ROOM
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room6.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            KITCHEN
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room1.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            FURNITURE
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room2.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            FALSE CEILING
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room7.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            CLADDING
                        </h4>
                    </div>
                </div>
                <div class="our-team2__item item  wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                    <div class="our-team2__img">
                        <img alt="Our Team 1" src="{{asset('web/img/room/room10.jpg')}}" class="img-responsive">
                    </div>
                    <div class="our-team2__detail">
                        <h4>
                            WALL SELVES
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team 2 -->

    <!-- Service 2 -->
    <section class="service-2 pt-xs-0">
        <div class="container clearfix">
            <div class="row service-2-wrap clearfix">
                <div class="col-md-6">
                    <div class="service-2__right">
                        <div class="service-2__inner-head wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                            <h3>
                               About InteriorLife 
                            </h3>
                            <p>
                                InteriorLife provides customize services that helps you to bring creative and stylish designs for your humble abode with all the modern facilities within best and affordable price.
                            </p>
                        </div>
                        <div class="service-2__inner-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="box-item body__item clearfix">
                                <div class="box-head box-head--border">
                                    <img alt="Icon 3" src="{{asset('web/img/icon/icon-service-06.png')}}">
                                </div>
                                <div class="box-body">
                                    <h5>
                                        <a href="service-list.html">residential interior</a>
                                    </h5>
                                    <p>
                                        InteriorLife specialize in home interior to customize furniture. We aim to provide the best according to your requirement with our team of professionals. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <a href="{{route('web.about.about')}}" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white m-t-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Red More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-2__other bottom-shadow wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="text-center"><h4 class="sblodjh m-b-25">Price Calculator</h4></div>
                        <form class="m-t-20">
                            <div class="row">
                                <div class="col-md-12">                                    
                                    <div class="text-center">
                                        <h4 class="price-calculated" id="calc" style="display:none">Your estimate price is <span id="cont" style="color: #ee3535">₹1599</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="au-input-group">
                                        <label>
                                            Catagory<span>*</span>
                                        </label>
                                        <select id="category" name="category" class="au-form-control">
                                            <option value="" selected disabled>Select Catagory</option>
                                            @foreach($category as  $value)
                                                <option value="{{ $value->id }}">{{$value->name }}</option>
                                            @endforeach
                                           
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="au-input-group">
                                        <label>
                                            Material<span>*</span>
                                        </label>
                                            <select name="sub_category" id="sub_category" class="au-form-control">
                                            <option value="" disabled>Select Material</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="au-input-group">
                                        <label>Length</label>
                                        <input type="text" id="length" class="au-form-control" placeholder="Company Name">
                                        <span class="end-type">inch</span>
                                    </div>
                                    <div class="au-input-group">
                                        <label>Breath</label>
                                        <input type="text" id="breadth" class="au-form-control" placeholder="Company Name">
                                        <span class="end-type">inch</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="au-input-group text-center" id="sub_img">
                                        <img src="{{asset('web/img/calculator-preview.png')}}" id="material-preview" class="preview text-center">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a  id="calculate" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white m-t-20">Calculate Price</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- End Service 2 -->
      <!-- Lastest Project -->
      <section class="latest-project latest-project-4">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title title-3">
                Service
              </h2>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="latest__item">
                <img alt="Lastest Project 1" src="{{asset('web/img/latest-project-01.jpg')}}">
                <a href="{{asset('web/img/latest-project-01.jpg')}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
                  <i class="zmdi zmdi-plus-circle-o"></i>
                </a>
              </div>
              <div class="latest__item">
                <img alt="Lastest Project 2" src="{{asset('web/img/latest-project-02.jpg')}}">
                <a href="{{asset('web/img/latest-project-02.jpg')}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
                  <i class="zmdi zmdi-plus-circle-o"></i>
  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="latest__item">
                <img alt="Lastest Project 3" src="{{asset('web/img/latest-project-04.jpg')}}">
                <a href="{{asset('web/img/latest-project-07.jpg')}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
                  <i class="zmdi zmdi-plus-circle-o"></i>
                </a>
              </div>
              <div class="latest__item">
                <img alt="Lastest Project 3" src="{{asset('web/img/latest-project-03.jpg')}}">
                <a href="{{asset('web/img/latest-project-07.jpg')}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
                  <i class="zmdi zmdi-plus-circle-o"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="latest__item">
                <img alt="Lastest Project 5" src="{{asset('web/img/latest-project-05.jpg')}}">
                <a href="{{asset('web/img/latest-project-05.jpg')}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
  
                  <i class="zmdi zmdi-plus-circle-o"></i>
  
                </a>
              </div>
              <div class="latest__item">
                <img alt="Lastest Project 6" src="{{asset('web/img/latest-project-06.jpg')}}">
                <a href="{{asset('web/img/latest-project-06.jpg')}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
  
                  <i class="zmdi zmdi-plus-circle-o"></i>
  
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Lastest Project -->
      <!-- Our process -->
      <section class="our-process">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-12">
                        <h2 class="title">
                            our
                            <span>
                            process
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="our-process__item our-process__item--l-b wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <h3>
                                <i class="zmdi zmdi-accounts-alt"></i>
                                Seal The Deal
                            </h3>
                            <p>After finalizing with selection of design, material to be used and price of the service, a 50% advance payment is made which seals the order.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="our-process__item our-process__item--l-t wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <h3>
                                <i class="zmdi zmdi-library"></i>
                                Hafeway there
                            </h3>
                            <p>A part that is 30% of the payment is required to pay after completion of 50% of the work.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="our-process__item our-process__item--l-b wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                            <h3>
                                <i class="zmdi zmdi-puzzle-piece"></i>
                                Finishing Touch
                            </h3>
                            <p>Remaining 20% payment after completing the work, after that the order would no longer be active</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="our-process__item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                            <h3>
                                <i class="zmdi zmdi-city-alt"></i>
                                construct
                            </h3>
                            <p>Free Maintenance service for the warranty term.</p>
                        </div>
                    </div>
                </div>
            </div>
      </section>
      <!-- End our process -->
      <!-- Testi-Partner -->
      <section class="testi-partner">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
              <div class="testi-partner__left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <h2 class="title title-3 title-3--left">
                  testimonial
                </h2>
                <div class="testi-slide-wrap owl-carousel owl-theme" id="owl-testi-1">
                  <div class="testi__item item clearfix">
                    <div class="testi__speech">
                      <blockquote>
                        <i class="fa fa-quote-left big-qoute"></i>
                        Interiorlife is one of its kind which provides customize services with its team of professionals within a reasonable price range. We, together with Interiorlife , will provide you best in your requirement.
                      </blockquote>
                      <h6>Look India</h6>
                    </div>
                  </div>
                  <!-- end item -->
                  <div class="testi__item item clearfix">
                    <div class="testi__speech">
                      <blockquote>
                        <i class="fa fa-quote-left big-qoute"></i>
                        Let us help you in fulfilling your dream of living in a comfortable and beautiful home space. Here, I am Experienced in Office Management and Experienced Supervisor for Interior Designs to help you live your dream in affordable price.
                      </blockquote>
                      <h6>Upasana Choudhury</h6>
                    </div>
                  </div>
                  <!-- end item -->
                  <div class="testi__item item clearfix">
                    <div class="testi__speech">
                      <blockquote>
                        <i class="fa fa-quote-left big-qoute"></i>
                        Marketing Executive for Interior Designs and also diploma in Interior Designing, here, to help you live in a peaceful and comfortable environment within a very reasonable price.
                      </blockquote>
                      <h6>Bandana Sharma</h6>
                    </div>
                  </div>
                  <!-- end item -->
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
              <div class="testi-partner__right wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                <h2 class="title title-3 title-3--right">
                  our partners
                </h2>
                <div class="partner-wrap1 owl-carousel owl-theme" id="owl-partner-1">
                  <a href="#" class="partner__item item">
                    <img alt="Partner 1" src="{{asset('web/img/partner-05.png')}}">
                  </a>
                  <a href="#" class="partner__item item">
                    <img alt="Partner 2" src="{{asset('web/img/partner-06.png')}}">
                  </a>
                  <a href="#" class="partner__item item">
                    <img alt="Partner 3" src="{{asset('web/img/partner-07.png')}}">
                  </a>
                  <a href="#" class="partner__item item">
                    <img alt="Partner 4" src="{{asset('web/img/partner-08.png')}}">
                  </a>
                  <a href="#" class="partner__item item">
                    <img alt="Partner 5" src="{{asset('web/img/partner-06.png')}}">
                  </a>
                  <a href="#" class="partner__item item">
                    <img alt="Partner 6" src="{{asset('web/img/partner-07.png')}}">
                  </a>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testi-Partner -->

@endsection

@section('script')
<script>
//     $(function () {
//         $("#material").on('change', function () {
//             var selection = $(this).find('option:selected');
//             //no problem accessing the attributes here:
//             var data = selection.data('url');
//             $("#material-preview").attr('src',data);
//         });
//  });

$(document).ready(function(){
            $("#category").change(function(){
                var category_id = $(this).val();
                

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url:"{{ url('/fetch/sub/category')}}"+"/"+category_id,
                    success:function(data){
                        if ($.isEmptyObject(data)) {
                            $("#sub_category").html("<option value=''>No Sub Category Found</option>");
                        } else {
                            $("#sub_category").html("<option value=''>Please Select First Category</option>");
                            $.each( data, function( key, value ) {
                                $("#sub_category").append("<option value='"+value.id+"'>"+value.name+"</option>");
                            });                          
                        }
                        

                    }
                });
            });
        });


$(document).ready(function(){
            $("#sub_category").change(function(){
                var sub_cat_id = $(this).val();
                

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url:"{{ url('/get/image')}}"+"/"+sub_cat_id,
                    success:function(data){
                        console.log(data);
                        if ($.isEmptyObject(data)) {
                           
                        } else {
                            console.log(data);
                           
                            $("#sub_img").html(data);
                                  
                        }
                        

                    }
                });
            });
        });
$(document).ready(function(){
            $("#calculate").click(function(){
                var sub_cat_id = $('#sub_category').val();
                var length = $('#length').val();
                var breadth = $('#breadth').val();
                

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url:"{{ url('/calculate/')}}"+"/"+sub_cat_id+"/"+length+"/"+breadth,
                    success:function(data){
                        console.log(data);
                        if ($.isEmptyObject(data)) {
                           
                        } else {
                            console.log(data);
                            $('#calc').show();
                            $("#cont").html('<span style="color: #ee3535">'+data+'</span>');
                                  
                        }
                        

                    }
                });
            });
        });
</script>
@endsection