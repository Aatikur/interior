@extends('web.templete.master')

@section('seo')
<meta name="description" content="InteriorLife">
@endsection

@section('content')

    <!-- Navigation -->
    <section class="navigation">
        <div class="parallax parallax--nav-2">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-item">
                            <h2>About</h2>
                            <ul class="breadcrumbs ul--inline ul--no-style">
                                <li>
                                    <a href="{{route('web.index')}}">Home</a>
                                </li>
                                <span>|</span>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Navigation -->
    <!-- We Are -->
    <section class="we-are">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="we-are__left">
                        <div class="top">
                            <div class="we-are__item">
                                <img alt="We Are 1" src="{{asset('web/img/we-are-01.jpg')}}">
                            </div>
                            <div class="we-are__item">
                                <img alt="We Are 2" src="{{asset('web/img/we-are-02.jpg')}}">
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="we-are__item">
                                <img alt="We Are 3" src="{{asset('web/img/we-are-03.jpg')}}">
                            </div>
                            <div class="we-are__item">
                                <img alt="We Are 4" src="{{asset('web/img/we-are-06.jpg')}}">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="we-are__right">
                        <h2>InteriorLife</h2>
                        <h2 class="title--small" style="color: #ee3535;">professional interior design Agency</h2>
                        <p class="m-b-10">
                          InteriorLife is an interior designing firmwhich helps you to bring creative and stylishdesigns for your  humble abode. We with our teams of consultants,  designers, wholesale distributors, supervisors,  workers and labour,  provides you an one stop solution in making your dream house a reality. We not only help you in maximum utilization of  your space but also beautification of your home with customize, stylish and new designed furniturewith a large options of laminates that will enhance the beauty of your home.  Because love is where home is and here we are to help you make your dream home a reality with all the modern facilities within best and affordable price. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End we are -->
    <!-- Our Process -->
    <section class="process-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title title-3">
                        Service
                    </h2>
                </div>
            </div>
          <div class="process-item">
            <div class="process__left wow fadeInLeft" data-wow-delay="1s">
              <div class="pro__img">
                <img alt="Process 1" src="{{asset('web/img/process-05.jpg')}}">
              </div>
            </div>
            <div class="process__right pro__text-wrap bg-f8 wow fadeInRight" data-wow-delay="1s">
              <div class="pro__text">
                <h2>
                  <span>01</span>
                  Interior Design
                </h2>
                <p>
                    Our team of interior designers provide clients with designs from home interior to customize furniture. They work to provide beautiful designs considering the needs and budget of the clients.  Thus, aiming at maximum and beautifully utilization of the space and also to provide peace and comfort to the their home.
                </p>
              </div>
            </div>
          </div>
          <div class="process-item">
            <div class="process__left pro__text-wrap bg-f8 wow fadeInLeft" data-wow-delay="1s">
              <div class="pro__text">
                <h2>
                  <span>02</span>
                  Vastu Shastra Consultant
                </h2>
                <p class="mb-0">
                    Here we provide a unique consultant service of Vastu Shastra.  Vastu Shastra as known is the broader knowledge of architecture and design theories of ancient India.  Although it was ignored in the past but now people are again considering it to find balance in their home, offices, etc especially in large metropolitan cities. This service will be different from interior designing or customize furniture service.  Clients may or may not choose to include it.  So, we provide this unique service to restore peace and happiness in lives of people.
                </p>
              </div>
            </div>
            <div class="process__right wow fadeInRight" data-wow-delay="1s">
              <div class="pro__img">
                <img alt="Process 2" src="{{asset('web/img/process-06.jpg')}}">
              </div>
            </div>
          </div>
          <div class="process-item">
            <div class="process__left wow fadeInLeft">
              <div class="pro__img">
                <img alt="Process 3" src="{{asset('web/img/process-07.jpg')}}">
              </div>
            </div>
            <div class="process__right pro__text-wrap bg-f8 wow fadeInRight">
              <div class="pro__text">
                <h2>
                  <span>03</span>
                  Customize and Modular furniture
                </h2>
                <p class="m-b-30">
                    InteriorLife provides a number of customize and modular furniture and products. Some pre made designs are here and also if required our teams of interior designers are always ready to provide something new. We not only provide services for our designs but for also the designs that the client may provides us. At the end, we just want happy and satisfied clients.
                </p>
              </div>
            </div>
          </div>
          <div class="process-item">
            <div class="process__left pro__text-wrap bg-f8 wow fadeInLeft">
              <div class="pro__text">
                <h2 class="m-b-20">
                  <span>04</span>
                    Supervisor
                </h2>
                <p class="m-b-0">
                    During the execution of the process, our supervisor will supervise the work of the workers and labours as finalize by the clients.  This is to ensure proper and timely completion of the work.
                </p>
              </div>
            </div>
            <div class="process__right wow fadeInRight">
              <div class="pro__img">
                <img alt="Process 4" src="{{asset('web/img/process-08.jpg')}}">
              </div>
            </div>
          </div>
          <div class="process-item">
            <div class="process__left wow fadeInLeft">
              <div class="pro__img">
                <img alt="Process 3" src="{{asset('web/img/process-07.jpg')}}">
              </div>
            </div>
            <div class="process__right pro__text-wrap bg-f8 wow fadeInRight">
              <div class="pro__text">
                <h2>
                  <span>05</span>
                  Free Consultant Services
                </h2>
                <p class="m-b-30">
                  We provide one free consultant serviceto the clients who reaches to us via website or telephone or walk in,  we then fixed an appointment with the client be it 
                </p>
                <ul>
                  <li style="margin-left: 20px;">At Office</li>
                  <li style="margin-left: 20px;">Home Visit (for Guwahati resident) </li>
                  <li style="margin-left: 20px;">Telephonic</li>
                  <li style="margin-left: 20px;">Through Whasapp/ website chat</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="process-item">
            <div class="process__left pro__text-wrap bg-f8 wow fadeInLeft">
              <div class="pro__text">
                <h2 class="m-b-20">
                  <span>06</span>
                  Maintenance and Guarantee of the products
                </h2>
                <p class="m-b-0">
                  After the execution of the project we provide guarantee for the furniture/productfor a certain period of time depending upon the furniture/ product during which we provide free maintenance services. 
                </p>
              </div>
            </div>
            <div class="process__right wow fadeInRight">
              <div class="pro__img">
                <img alt="Process 4" src="{{asset('web/img/process-08.jpg')}}">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Process -->

@endsection

@section('script')
@endsection